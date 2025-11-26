<?php
$__ENV = require __DIR__ . '/env.php';
define('SITE_NAME', $__ENV['site_name']);
define('BASE_URL', rtrim($__ENV['base_url'], '/') . '/');
define('CONTACT_EMAIL', $__ENV['contact_email']);
define('UPLOAD_DIR', $__ENV['upload_dir']);
define('MAX_UPLOAD', $__ENV['max_upload']);
define('DEBUG', $__ENV['debug']);

$dbcfg = $__ENV['db'];
define('DB_HOST', $dbcfg['host']);
define('DB_NAME', $dbcfg['name']);
define('DB_USER', $dbcfg['user']);
define('DB_PASS', $dbcfg['pass']);
define('DB_CHAR', $dbcfg['charset']);

$GLOBALS['ENV'] = $__ENV;
unset($__ENV);
