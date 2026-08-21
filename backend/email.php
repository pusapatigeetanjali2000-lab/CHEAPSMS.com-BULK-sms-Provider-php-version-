<?php 
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// echo '--test0';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    echo '--test';
    try {
        // echo '--test1';
        



        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
        $role = isset($_POST['role']) ? trim($_POST['role']) : '';

     

   

        // Prepare email to admin
        $smtpHost = getenv('SMTP_HOST') ?: 'smtp.hostinger.com';
        $smtpUser = getenv('SMTP_USER') ?: 'info@cheapsms.com';
        $smtpPass = getenv('SMTP_PASS') ?: 'ramkumar30';
        $smtpPort = getenv('SMTP_PORT') ?: 465;
        $adminEmail = getenv('ADMIN_EMAIL') ?: 'muthyala19@gmail.com'; //indiastudent.com@gmail.com

        // If SMTP credentials are provided, use PHPMailer. Otherwise fall back to mail()
        $subject = "New Payment: {$name}";
        $body = "<h3>New Payment Received</h3>";
        $body .= "<p><b>Name:</b> " . htmlspecialchars($name) . "</p>";
        $body .= "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";
        $body .= "<p><b>Phone:</b> " . htmlspecialchars($phone) . "</p>";
        $body .= "<p><b>Role:</b> " . htmlspecialchars($role) . "</p>";
        //$body .= "<p><b>Amount (paise):</b> " . htmlspecialchars($amount) . "</p>";
        // $body .= "<p><b>Razorpay Order ID:</b> " . htmlspecialchars($order_id) . "</p>";

        if (!empty($smtpUser) && !empty($smtpPass)) {
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $smtpHost;
                $mail->SMTPAuth = true;
                $mail->Username = $smtpUser;
                $mail->Password = $smtpPass;
                if (intval($smtpPort) === 465) {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                } else {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                }
                $mail->Port = intval($smtpPort);

                $mail->setFrom($smtpUser, 'Anthropic AI');
                $mail->addAddress($adminEmail);
                $mail->addReplyTo($email, $name ?: 'Student');

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;

                $mail->send();
                echo json_encode(['status' => true]);
                exit;
            } catch (\Exception $e) {
                error_log('PHPMailer send failed: ' . $e->getMessage());
                // fall through and try mail()
            }
        }

        // Fall back to PHP mail()
        $headers = "MIME-Version: 1.0\r\n" .
                   "Content-type: text/html; charset=UTF-8\r\n" .
                   "From: " . $smtpUser . "\r\n" .
                   "Reply-To: " . $email . "\r\n";

        $sent = mail($adminEmail, $subject, $body, $headers);
        if ($sent) {
            echo json_encode(['status' => true]);
            exit;
        } else {
            error_log('Fallback mail() failed for adminEmail: ' . $adminEmail);
            echo json_encode(['status' => false, 'message' => 'Unable to send email']);
            exit;
        }
    } catch (\Throwable $t) {
        // return error as JSON instead of exposing a 500
        error_log('payment_success error: ' . $t->getMessage());
        echo json_encode(['status' => false, 'message' => 'Server error: ' . $t->getMessage()]);
        exit;
    }
}
?>