<?php
// 1. Database connection
// $conn = new mysqli("localhost", "u257304074_bulkai", "SMSai@1234", "u257304074_bulkai");
require_once 'backend/config.php';

$conn = getDBConnection();

$message_display = "";

// 2. Handle the form submission
if (isset($_POST['reset_request_submit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    
    // Check if email exists
    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    
    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(32)); 
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); 
        
        // Store token
        $conn->query("UPDATE users SET reset_token='$token', token_expiry='$expiry' WHERE email='$email'");
        
        // Send Email
        $reset_link = "https://bulksms.ai/reset-password.php?token=$token";
        $subject = "Password Reset - Bulk SMS AI";
        $msg = "Click the link below to reset your password. This link expires in 1 hour:\n\n" . $reset_link;
        $headers = "From: info@cheapsms.com";
        
        mail($email, $subject, $msg, $headers);
        $message_display = "<p style='color: green;'>Success! Check your email for the reset link.</p>";
    } else {
        $message_display = "<p style='color: red;'>No account found with that email address.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - Cheapsms.com</title>
    <meta name="robots" content="noindex,nofollow">
    <style>
        body { font-family: sans-serif; background: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .forgot-box { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: 100%; max-width: 400px; text-align: center; }
        input[type="email"] { width: 100%; padding: 12px; margin: 15px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        button { background: #4A90E2; color: white; border: none; padding: 12px 20px; border-radius: 6px; cursor: pointer; width: 100%; font-weight: bold; }
        button:hover { background: #357ABD; }
        .back-link { display: block; margin-top: 15px; color: #666; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>

<div class="forgot-box">
    <h2>Forgot Password?</h2>
    <p>Enter your email and we'll send you a reset link.</p>
    
    <?php echo $message_display; ?>

    <form method="POST" action="">
        <input type="email" name="email" placeholder="Your Email Address" required>
        <button type="submit" name="reset_request_submit">Send Reset Link</button>
    </form>

    <a href="login.php" class="back-link">← Back to Login</a>
</div>

</body>
</html>