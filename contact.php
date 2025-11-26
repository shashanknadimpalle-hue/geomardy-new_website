<?php 
require_once __DIR__ . '/inc/functions.php'; 
$pageTitle = 'Contact - ' . SITE_NAME; 

$errors = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simple rate limit: 10 submissions/minute
    if (!rate_limit_check('contact_form', 10, 60)) {
        $errors[] = 'Too many submissions. Please wait a minute and try again.';
    } else {
        $token = $_POST['csrf_token'] ?? '';
        if (!csrf_check($token)) {
            $errors[] = 'Invalid form token. Please refresh and try again.';
        }

        $name = sanitize_text($_POST['name'] ?? '');
        $org = sanitize_text($_POST['org'] ?? '');
        $email = sanitize_email($_POST['email'] ?? '');
        $phone = sanitize_text($_POST['phone'] ?? '');
        $project_type = sanitize_text($_POST['project_type'] ?? '');
        $message = trim($_POST['message'] ?? '');

        if ($name === '' || $email === '') $errors[] = 'Name and email are required.';
        if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email address.';

        $filename = null;
        if (!empty($_FILES['attachment']) && $_FILES['attachment']['error'] !== UPLOAD_ERR_NO_FILE) {
            $uploaded = handle_upload($_FILES['attachment']);
            if ($uploaded === null) {
                $errors[] = 'File upload failed or unsupported format.';
            } else {
                $filename = $uploaded;
            }
        }

        if (empty($errors)) {
            try {
                save_contact([
                    'name' => $name,
                    'org' => $org,
                    'email' => $email,
                    'phone' => $phone,
                    'project_type' => $project_type,
                    'message' => $message,
                    'filename' => $filename
                ]);
            } catch (Exception $e) {
                if (DEBUG) $errors[] = 'Database error: ' . $e->getMessage();
            }

            $subject = "New enquiry from $name";
            $body = "Name: $name\nOrganization: $org\nEmail: $email\nPhone: $phone\nProject Type: $project_type\n\nMessage:\n$message\n\nAttachment: " . ($filename ?: 'None');
            $attachPath = $filename ? rtrim(UPLOAD_DIR, '/') . '/' . $filename : null;

            send_contact_email($subject, $body, $email, $attachPath);

            $_SESSION['flash'] = 'Thank you — your enquiry has been received.';
            header('Location: ' . url('contact.php'));
            exit;
        }
    }
}

require_once __DIR__ . '/inc/header.php'; 
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="hero-viewport ecosystem-hero position-relative d-flex align-items-center justify-content-center text-center">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="<?php echo url('assets/videos/contact.mp4'); ?>" type="video/mp4">
  </video>
  <div class="hero-overlay"></div>

  <div class="container position-relative z-2 py-5">
    <h1 class="hero-title mb-3 fade-up">Contact Geomardy</h1>
    <p class="hero-sub fade-up">We welcome project enquiries, collaborations, and RFPs.</p>
  </div>
</section>
<!-- ===================== CONTACT FORM & INFO ===================== -->
<section class="section py-5 contact-section">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- ===== Left Column: Form ===== -->
      <div class="col-lg-7">
        <?php if (!empty($_SESSION['flash'])): ?>
          <div class="alert alert-success mt-3"><?php echo e($_SESSION['flash']); unset($_SESSION['flash']); ?></div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger mt-3">
            <?php echo implode('<br>', array_map('e', $errors)); ?>
          </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data" class="row g-3 mt-2 p-4 border rounded-3 shadow-sm bg-light">
          <?php echo csrf_field(); ?>

          <div class="col-md-6">
            <label class="form-label">Name *</label>
            <input class="form-control" name="name" placeholder="Your full name" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Organization</label>
            <input class="form-control" name="org" placeholder="Organization name">
          </div>
          <div class="col-md-6">
            <label class="form-label">Email *</label>
            <input class="form-control" name="email" placeholder="example@domain.com" type="email" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input class="form-control" name="phone" placeholder="+91 00000 00000">
          </div>
          <div class="col-12">
            <label class="form-label">Project Type</label>
            <select name="project_type" class="form-select">
              <option value="">Select Project Type</option>
              <option>Investigations</option>
              <option>Consultancy</option>
              <option>Solutions</option>
              <option>Project Proposal</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Brief Description</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Describe your project or enquiry"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label">Attach RFP / Project Brief (PDF, JPG, PNG, ZIP)</label>
            <input type="file" name="attachment" class="form-control">
          </div>
          <div class="col-12 text-end">
            <button class="btn btn-primary px-4 py-2">Submit Enquiry</button>
          </div>
        </form>
      </div>

      <!-- ===== Right Column: Contact Info ===== -->
      <div class="col-lg-5">
        <div class="contact-info p-4 border rounded-3 bg-white shadow-sm">
          <h4 class="mb-3">Office Address</h4>
          <p>
            <strong>Geomardy</strong><br>
            401, Level 4, Business Bay,<br>
            Near Four Points Sheraton,<br>
            Visakhapatnam, Andhra Pradesh, India<br>
            PIN: 530003
          </p>

          <h5 class="mt-4 mb-2">Contact</h5>
          <p>
            <i class="bi bi-envelope me-2"></i><a href="mailto:info@geomardy.com">info@geomardy.com</a><br>
            <i class="bi bi-telephone me-2"></i><a href="tel:+918913100086">+91 89131 00086</a>
          </p>

          <h5 class="mt-4 mb-2">Security Note</h5>
          <p class="small text-muted">
            For classified or sensitive project enquiries, please contact via secure communication channels.
          </p>

          <!-- Optional Map -->
          <div class="ratio ratio-16x9 mt-3 rounded overflow-hidden shadow-sm">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.4999568909243!2d83.31089261155337!3d17.72106688315416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395ccaf4fd8213%3A0x70f9026eaa859e72!2sGEOMARDY!5e0!3m2!1sen!2sin!4v1764132725839!5m2!1sen!2sin" 
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
  </div>
</section>

<?php 
require_once __DIR__ . '/inc/footer.php'; 
?>
