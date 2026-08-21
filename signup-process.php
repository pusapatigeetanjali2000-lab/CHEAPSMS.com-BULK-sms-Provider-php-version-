<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database Credentials
$host = "localhost";
$db_user = "u257304074_bulkai"; 
$db_pass = "SMSai@1234";      
$db_name = "u257304074_bulkai";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signup_submit'])) {
    
    // 1. CAPTCHA VALIDATION
    $user_captcha = $_POST['captcha_input'] ?? '';
    if ($user_captcha !== $_SESSION['captcha']) {
        die("Neural Handshake failed. Invalid Captcha. <a href='demo'>Go Back</a>");
    }

    // 2. DATA COLLECTION & SANITIZATION
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email    = $conn->real_escape_string($_POST['email']);
    // Combine country code and phone
    $phone    = $conn->real_escape_string(($_POST['country_code'] ?? '') . $_POST['phone_number']);
    $state    = $conn->real_escape_string($_POST['state']);
    $city     = $conn->real_escape_string($_POST['city']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $verification_code = bin2hex(random_bytes(16));

    // 3. PREPARED STATEMENT
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone_number, state, city, password, verification_code, is_verified) VALUES (?, ?, ?, ?, ?, ?, ?, 0)");
    $stmt->bind_param("sssssss", $fullname, $email, $phone, $state, $city, $password, $verification_code);

    if ($stmt->execute()) {
        
        // EMAIL LOGIC
        $subject = "Verify Your Account - Bulk SMS AI";
        $verify_link = "https://bulksms.ai/verify.php?code=$verification_code";
        $message = "Hello $fullname,\n\nThank you for signing up at Bulk SMS AI. Please click the link below to verify your account:\n$verify_link";
        $headers = "From: noreply@bulksms.ai";

        mail($email, $subject, $message, $headers);

        // Clear Captcha
        unset($_SESSION['captcha']);

        // SUCCESS DISPLAY
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="robots" content="noindex,nofollow">
            <style>
                body { background: #020617; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; font-family: sans-serif; }
                .success-container { max-width: 500px; text-align: center; padding: 40px; border-radius: 20px; background: rgba(255,255,255,0.02); border: 1px solid #38a169; box-shadow: 0 10px 25px rgba(0,0,0,0.5); color: white; }
                .btn { display: inline-block; margin-top: 20px; padding: 12px 30px; background: linear-gradient(135deg, #8b5cf6 0%, #06b6d4 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class="success-container">
                <h1 style="color: #48bb78; margin: 0;">Hooray Success!!!</h1>
                <p style="color: #cbd5e0; font-size: 18px; margin-top: 10px;">Signup Successful! Check your email for the verification link.</p>
                <a href="login.php" class="btn">Click here to Login</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    header("Location: demo");
    exit();
}
$conn->close();
?>