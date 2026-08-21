<?php
require_once 'config.php';

$conn = getDBConnection();

// Get POST data
$email            = $_POST['email'];
$current_password = $_POST['current_password'];
$new_password     = $_POST['new_password'];

// Basic validation
if (empty($email) || empty($current_password) || empty($new_password)) {
    echo json_encode(["status" => false, "message" => "All fields are required"]);
    exit;
}

// Get user from DB
$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(["status" => false, "message" => "User not found"]);
    exit;
}

$user = $result->fetch_assoc();

// Verify current password
if (!password_verify($current_password, $user['password'])) {
    echo json_encode(["status" => false, "message" => "Current password is incorrect"]);
    exit;
}

// Hash new password
$new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

// Update password
$update = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
$update->bind_param("ss", $new_hashed_password, $email);

if ($update->execute()) {
    echo json_encode(["status" => true, "message" => "Password updated successfully"]);
} else {
    echo json_encode(["status" => false, "message" => "Error updating password"]);
}
?>
