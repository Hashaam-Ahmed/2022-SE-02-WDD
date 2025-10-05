<?php
// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_NAME', 'cliffside_db');
define('DB_USER', 'username');
define('DB_PASS', 'password');

// Site configuration
define('SITE_URL', 'http://yourdomain.com');
define('SITE_NAME', 'Cliffside Cybersecurity');

// Start session (if needed)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>