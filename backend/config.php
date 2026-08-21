
<?php
// config.php
session_start();

// Database configuration
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'sms');
define('DB_HOST', 'localhost');
define('DB_USER', 'u257304074_sms_user');
define('DB_PASS', 'SMS_User19');
define('DB_NAME', 'u257304074_sms_db');

// Razorpay Configuration
define('RAZORPAY_KEY_ID', 'YOUR_RAZORPAY_KEY_ID');
define('RAZORPAY_KEY_SECRET', 'YOUR_RAZORPAY_KEY_SECRET');

// Site Configuration
define('SITE_URL', 'http://cheapsms.com');
define('DEMO_ACCOUNT_EXPIRY_DAYS', 30);

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection function
function getDBConnection() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    } catch (Exception $e) {
        die("Database connection error: " . $e->getMessage());
    }
}

// Helper function to send JSON response
function sendJsonResponse($success, $message, $data = null) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}
?>