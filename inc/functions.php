<?php
// inc/functions.php
// Core helpers for the site. Assumes config.php defines DB_HOST, DB_NAME, DB_USER, DB_PASS, DB_CHAR, BASE_URL, UPLOAD_DIR, MAX_UPLOAD, DEBUG, etc.

require_once __DIR__ . '/../config.php';

/* ---------------------------
   Session initialization
   --------------------------- */
if (session_status() === PHP_SESSION_NONE) {
    // detect secure transport
    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['SERVER_PORT'] ?? 0) == 443;

    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'] ?? '',
        'secure' => $isSecure,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    session_start();
}

/* ---------------------------
   Database connection
   --------------------------- */
function db_connect(){
    static $pdo = null;
    if ($pdo) return $pdo;

    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHAR;
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        if (defined('DEBUG') && DEBUG) {
            error_log("DB Connect Error: " . $e->getMessage());
            echo "Database connection error.";
        }
        return null;
    }
}

/* ---------------------------
   Output escaping & URL helpers
   --------------------------- */
function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

/**
 * url($path) - produce a proper absolute URL based on BASE_URL.
 *   - Accepts an empty string (returns BASE_URL)
 *   - Trims leading slashes from $path
 */
function url($path = ''){
    $base = rtrim(BASE_URL, '/');
    $path = ltrim((string)$path, '/');
    return $base . ($path === '' ? '/' : '/' . $path);
}

/* ---------------------------
   CSRF helpers
   --------------------------- */
function csrf_token(){
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['csrf_token_time'] = time();
    }
    return $_SESSION['csrf_token'];
}
function csrf_field(){
    $t = csrf_token();
    return '<input type="hidden" name="csrf_token" value="'.e($t).'">';
}
function csrf_check($token){
    if (empty($_SESSION['csrf_token']) || !$token) return false;
    if (hash_equals($_SESSION['csrf_token'], $token) && (time() - ($_SESSION['csrf_token_time'] ?? 0) < 3600)) return true;
    return false;
}

/* ---------------------------
   Sanitizers
   --------------------------- */
/**
 * sanitize_text - safe text sanitizer
 * Avoid deprecated FILTER_SANITIZE_STRING; strip tags and trim.
 */
function sanitize_text($s){
    if ($s === null) return null;
    // preserve basic punctuation but remove tags
    return trim(strip_tags((string)$s));
}

function sanitize_email($s){
    return filter_var($s, FILTER_SANITIZE_EMAIL);
}

/* ---------------------------
   Simple rate-limiter (per-session)
   --------------------------- */
function rate_limit_check($key, $limit = 5, $period = 60){
    $now = time();
    if (!isset($_SESSION['rl'])) $_SESSION['rl'] = [];
    if (!isset($_SESSION['rl'][$key])) $_SESSION['rl'][$key] = [];
    // keep only recent timestamps
    $_SESSION['rl'][$key] = array_filter($_SESSION['rl'][$key], function($t) use ($now, $period){
        return ($now - $t) < $period;
    });
    if (count($_SESSION['rl'][$key]) >= $limit) return false;
    $_SESSION['rl'][$key][] = $now;
    return true;
}

/* ---------------------------
   File upload helper
   - returns stored filename or null on failure
   --------------------------- */
function handle_upload($file){
    if (!isset($file) || $file['error'] === UPLOAD_ERR_NO_FILE) return null;
    if ($file['error'] !== UPLOAD_ERR_OK) return null;
    if ($file['size'] > (defined('MAX_UPLOAD') ? MAX_UPLOAD : 5*1024*1024)) return null; // default 5MB

    // Validate MIME using finfo
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($file['tmp_name']);
    $allowed = [
        'application/pdf' => 'pdf',
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'application/zip' => 'zip'
    ];
    if (!array_key_exists($mime, $allowed)) return null;

    $ext = $allowed[$mime];
    $name = bin2hex(random_bytes(12)) . '.' . $ext;

    // ensure upload dir exists and is outside web-executable context if possible
    $uploadDir = rtrim(defined('UPLOAD_DIR') ? UPLOAD_DIR : (__DIR__ . '/../uploads'), '/');
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) return null;
    }

    $dest = $uploadDir . '/' . $name;
    if (!move_uploaded_file($file['tmp_name'], $dest)) return null;

    // consider storing with restricted permissions
    @chmod($dest, 0644);

    return $name;
}

/* ---------------------------
   Contacts persistence
   --------------------------- */
function save_contact(array $data){
    $pdo = db_connect();
    if (!$pdo) return false;

    $sql = "INSERT INTO contacts (name, org, email, phone, project_type, message, filename, created_at)
            VALUES (:name, :org, :email, :phone, :project_type, :message, :filename, NOW())";
    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        ':name' => $data['name'] ?? null,
        ':org' => $data['org'] ?? null,
        ':email' => $data['email'] ?? null,
        ':phone' => $data['phone'] ?? null,
        ':project_type' => $data['project_type'] ?? null,
        ':message' => $data['message'] ?? null,
        ':filename' => $data['filename'] ?? null
    ]);
}

/* ---------------------------
   Mailer - PHPMailer when SMTP configured, fallback to mail()
   --------------------------- */
function send_contact_email($subject, $body, $replyTo = null, $attachmentPath = null)
{
    $smtp = $GLOBALS['ENV']['smtp'] ?? [];
    $mailTo = $GLOBALS['ENV']['mail_to'] ?? 'info@geomardy.com';
    $from = $smtp['user'] ?? ('no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'geomardy.com'));

    if (!empty($smtp['host'])) {
        // Use PHPMailer when available
        if (!file_exists(__DIR__ . '/../vendor/phpmailer/autoload.php')) {
            if (defined('DEBUG') && DEBUG) error_log("PHPMailer not found at vendor/phpmailer/autoload.php");
            // fallback to mail()
        } else {
            require_once __DIR__ . '/../vendor/phpmailer/autoload.php';
            $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = $smtp['host'];
                $mail->SMTPAuth   = true;
                $mail->Username   = $smtp['user'];
                $mail->Password   = $smtp['pass'];
                $mail->SMTPSecure = $smtp['secure'] ?? 'tls';
                $mail->Port       = $smtp['port'] ?? 587;

                $mail->setFrom($from, 'Geomardy Website');
                $mail->addAddress($mailTo);
                if ($replyTo) $mail->addReplyTo($replyTo);

                if ($attachmentPath && file_exists($attachmentPath)) {
                    $mail->addAttachment($attachmentPath);
                }

                $mail->isHTML(false);
                $mail->Subject = $subject;
                $mail->Body    = $body;

                $mail->send();
                return true;
            } catch (Exception $e) {
                if (defined('DEBUG') && DEBUG) error_log("Mailer Error: " . $mail->ErrorInfo);
                return false;
            }
        }
    }

    // Fallback: simple mail() with headers. Log outcome.
    $headers = "From: $from\r\n";
    if ($replyTo) $headers .= "Reply-To: $replyTo\r\n";
    $ok = mail($mailTo, $subject, $body, $headers);
    if (!$ok && defined('DEBUG') && DEBUG) error_log("mail() failed to send contact email to {$mailTo}");
    return $ok;
}
