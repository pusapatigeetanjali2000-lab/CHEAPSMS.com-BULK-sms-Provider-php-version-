<?php
include("backend/config.php");
$conn = getDBConnection();
header("X-Robots-Tag: noindex, nofollow", true);
if(!isset($_GET['token'])){
    die("Invalid request");
}

$token = $_GET['token'];

// $res = mysqli_query($conn, "SELECT * FROM users 
//     WHERE reset_token='$token' 
//     AND token_expiry > NOW()
// ");
$sql = "SELECT * FROM users 
    WHERE reset_token='$token'";
// $sql = "SELECT * FROM users 
//     WHERE reset_token='$token' 
//     AND token_expiry > NOW()";

$result = $conn->query($sql);

// echo $token;
// echo $result->num_rows;

if($result->num_rows == 0){
    die("Invalid or expired link");
}

$user = $result->fetch_assoc();

if(isset($_POST['password'])){

    $newPass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE users SET 
        password='$newPass',
        reset_token=NULL,
        token_expiry=NULL
        WHERE id=".$user['id']
    );

    echo "Password updated successfully";
}
?>

<form method="POST">
    <input type="password" name="password" placeholder="New Password" required>
    <button type="submit">Update Password</button>
</form>