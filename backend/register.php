<?php
require_once 'config.php';

header('Content-Type: application/json');

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     sendJsonResponse(false, 'Invalid request method');
//     }
    // echo 'hi---';
// Validate required fields
$required = [
    'full_name',
    'email',
    'mobile',
    'country',
    'primary_service'
    
];
$data = json_decode(file_get_contents("php://input"), true);
// echo json_encode($data);
foreach ($required as $field) {
    if (empty($data[$field])) {
        sendJsonResponse(false, "Field {$field} is required");
    }
}

// Validate email
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    sendJsonResponse(false, 'Invalid email address');
}

// Validate password
if ($data['password'] !== $data['confirm_password']) {
    sendJsonResponse(false, 'Passwords do not match');
}

if (strlen($data['password']) < 8) {
    sendJsonResponse(false, 'Password must be at least 8 characters');
}

$conn = getDBConnection();

// Check if email already exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $data['email']);
$stmt->execute();
$result = $stmt->get_result();

//if ($result->num_rows > 0) {
   // sendJsonResponse(false, 'Email already registered');
//}



// Hash password
$hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
$website="cheapsms.com";
// Prepare data
$countryCode = $data['country_code'] ?? '+91';
$companyName = $data['company_name'] ?? '';
$companyLocation = $data['company_location'] ?? '';
// $interestedServices = $data['interested_services'] ?? '';
$interestedServices = isset($data['interested_services']) 
    ? implode(', ', $data['interested_services']) 
    : '';
$volumeEstimate = $data['volume_estimate'] ?? '';

// Insert user
$stmt = $conn->prepare("INSERT INTO users 
(full_name, email, password, country_code, mobile, country, company_name, company_location, primary_service, interested_services, volume_estimate, sending_country, receiving_country,WebSite) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("ssssssssssssss", 
    $data['full_name'], 
    $data['email'], 
    $hashedPassword, 
    $countryCode, 
    $data['mobile'], 
    $data['country'], 
    $companyName, 
    $companyLocation, 
    $data['primary_service'], 
    $interestedServices, 
    $volumeEstimate, 
    $data['sending_country'], 
    $data['receiving_country'],
    $website
);

// Execute
if ($stmt->execute()) {

    header('Content-Type: application/json');
    $_SESSION['full_name'] = $data['full_name'];
    $_SESSION['user_email'] = $data['email'];
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

// $userId = $conn->insert_id;

// // Create Razorpay Order
// require_once 'razorpay/Razorpay.php'; // You need to download Razorpay PHP SDK

// use Razorpay\Api\Api;

// $api = new Api(RAZORPAY_KEY_ID, RAZORPAY_KEY_SECRET);
// $orderData = [
//     'receipt' => 'user_' . $userId,
//     'amount' => 500, // 5 INR in paise
//     'currency' => 'INR',
//     'payment_capture' => 1
// ];

// try {
//     $razorpayOrder = $api->order->create($orderData);
    
//     // Store order ID in database
//     $stmt = $conn->prepare("UPDATE users SET razorpay_order_id = ? WHERE id = ?");
//     $stmt->bind_param("si", $razorpayOrder['id'], $userId);
//     $stmt->execute();
    
//     sendJsonResponse(true, 'Registration successful', [
//         'user_id' => $userId,
//         'order_id' => $razorpayOrder['id'],
//         'amount' => 5
//     ]);
// } catch (Exception $e) {
//     sendJsonResponse(false, 'Payment initialization failed: ' . $e->getMessage());
// }
?>