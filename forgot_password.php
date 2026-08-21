<?php
include("backend/config.php");
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
header("X-Robots-Tag: noindex, nofollow", true);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$conn = getDBConnection();
if(isset($_POST['email'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($res) > 0){

        // 🔐 Generate secure token
        $token = bin2hex(random_bytes(32));
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        mysqli_query($conn, "UPDATE users SET 
            reset_token='$token',
            token_expiry='$expiry'
            WHERE email='$email'
        ");

        // 🔗 Reset link
        $link = "http://localhost/resetpassword.php?token=$token";
        // echo "Reset link: $link"; // For testing, remove in production

        // 📧 Send Email
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@cheapsms.com';
        $mail->Password = 'ramkumar30';
        $mail->SMTPSecure = 'tls';   // change this
        $mail->Port = 587;           // change this

        $mail->setFrom('info@cheapsms.com', 'Support');
        $mail->addAddress($email);

        $mail->Subject = 'Reset Password';
        $mail->Body = "Click here to reset password: $link";

        if($mail->send()){
            echo "Reset link sent to your email";
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }

    } else {
        echo "Email not found";
    }
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <button type="submit">Send Reset Link</button>
</form>