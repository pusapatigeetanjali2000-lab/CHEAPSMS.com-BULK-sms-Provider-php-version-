<?php
require_once 'config.php';

$conn = getDBConnection();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'"; 

$result = $conn->query($sql);

$sql1 = "SELECT * FROM ind_users WHERE email='$email'";

$result1 = $conn->query($sql1);

if($result->num_rows > 0){

  $row = $result->fetch_assoc();

  if(password_verify($password, $row['password'])){

      $_SESSION['full_name'] = $row['full_name'];
      $_SESSION['user_email'] = $row['email'];
        header('Content-Type: application/json');
        echo json_encode([
        "status" => "global"
        ]);
    }
  }else if($result1->num_rows > 0){
    $row = $result1->fetch_assoc();
     if(password_verify($password, $row['password'])){
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['user_email'] = $row['email'];
          header('Content-Type: application/json');
          echo json_encode([
          "status" => "india"
          ]);

     }
  }else{
    header('Content-Type: application/json');
        echo json_encode([
        "status" => "wrong"
        ]);
    //   echo "wrong";
  }

?>