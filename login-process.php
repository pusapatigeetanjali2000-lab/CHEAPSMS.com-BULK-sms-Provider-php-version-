<?php
// After checking if the username and password are correct:
if ($login_success) {
    header("Location: index.html");
    exit();
} else {
    echo "Invalid credentials!";
}
?>