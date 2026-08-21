<?php
require_once 'config.php';

header('Content-Type: application/json');

$conn = getDBConnection();

// Check if email already exists
// $stmt->bind_param("s", $data['email']);
$stmt = $conn->prepare("SELECT id FROM ind_users WHERE email = ? ORDER BY id DESC LIMIT 1
");
$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'] ?? '';
$razorpay_id = $data['razorpay_payment_id'] ?? '';

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    // 👉 Now update razorpay_id
    //$razorpay_id = "rzp_123456"; // example

    $updateStmt = $conn->prepare("UPDATE ind_users SET razorpay_payment_id = ? WHERE id = ?");
    $updateStmt->bind_param("si", $razorpay_id, $user_id);

    // $updateStmt->execute();

    if ($updateStmt->execute()) {

            header('Content-Type: application/json');
            echo json_encode([
                "status" => "success"
            ]);
            exit;

        } else {

            header('Content-Type: application/json');
            echo json_encode([
                "status" => "error",
                "message" => $stmt->error
            ]);
            exit;
        }

        // Close (optional but good)
        $stmt->close();
        $conn->close();
}
?>