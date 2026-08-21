 <?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendJsonResponse(false, 'Invalid request method');
}

// Validate required fields
$required = [
    'full_name',
    'email',
    'mobile',
    'state'
];
$data = json_decode(file_get_contents("php://input"), true);
foreach ($required as $field) {
    if (empty($data[$field])) {
        sendJsonResponse(false, "Field {$field} is required");
    }
}
$conn = getDBConnection();
$hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

$website="cheapsms.com";


// {"full_name":"","email":"","phone_code":"+1","phone_number":"","country":"","city":""}
// Check if email already exists

$stmt = $conn->prepare("SELECT id FROM ind_users WHERE email = ?");
$stmt->bind_param("s", $data['email']);
$stmt->execute();
$result = $stmt->get_result();
//if ($result->num_rows > 0) {
  //  sendJsonResponse(false, 'Email already registered');
//}

$stmt = $conn->prepare("INSERT INTO ind_users 
(full_name, email, password, phone_code, mobile, state, city, selected,WebSite) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssssssss", 
    $data['full_name'], 
    $data['email'], 
    $hashedPassword, 
    $data['phone_code'], 
    $data['mobile'], 
    $data['state'], 
    $data['city'],
    $data['selected'],
    $website
);

// $stmt->execute();

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

?>