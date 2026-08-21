<?php
// Database connection
$host = "localhost";
$db_user = "u257304074_bulkai"; 
$db_pass = "SMSai@1234";      
$db_name = "u257304074_bulkai";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";
$status_type = "";

if (isset($_GET['code'])) {
    $code = $conn->real_escape_string($_GET['code']);

    // Check if a user exists with this code
    $query = "SELECT * FROM users WHERE verification_code = '$code' LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if ($user['is_verified'] == 1) {
            $message = "Your account is already verified. You can log in.";
            $status_type = "info";
        } else {
            // Update the user to verified
            $update = "UPDATE users SET is_verified = 1 WHERE verification_code = '$code'";
            if ($conn->query($update)) {
                $message = "Email Verified Successfully! Welcome to Bulk SMS AI.";
                $status_type = "success";
            } else {
                $message = "Error updating record: " . $conn->error;
                $status_type = "error";
            }
        }
    } else {
        $message = "Invalid verification code. Please check your email link.";
        $status_type = "error";
    }
} else {
    $message = "No verification code provided.";
    $status_type = "error";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Verification - Bulk SMS AI</title>
    <meta name="robots" content="noindex,nofollow">
    <style>
        body { font-family: sans-serif; background: #f0f4f8; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: center; max-width: 400px; }
        .success { color: #2f855a; }
        .error { color: #c53030; }
        .info { color: #2b6cb0; }
        .btn { display: inline-block; margin-top: 20px; padding: 12px 25px; background: #4A90E2; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h2 class="<?php echo $status_type; ?>">Verification Status</h2>
        <p><?php echo $message; ?></p>
        <a href="login.php" class="btn">Go to Login</a>
    </div>
</body>
</html>