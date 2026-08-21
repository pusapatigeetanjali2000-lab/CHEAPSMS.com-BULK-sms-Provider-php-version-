
<?php
include "backend/config.php";
include "includes/header_user.php";
header("X-Robots-Tag: noindex, nofollow", true);

    if(!isset($_SESSION['full_name'])){
        // header("Location: index.php");
        echo '<script>window.location.replace("index.php");</script>';
        exit;
    }
    if(isset($_GET['logout']))
    {
        session_destroy();
        // header("Location: index.php");
        echo '<script>window.location.replace("index.php");</script>';
        exit;
    }

    // if (isset($_GET['logout'])) {
    //     session_destroy();
    //     header("Location: index.php");
    //     exit;
    // }
    // if (session_status() === PHP_SESSION_NONE) {
    //     session_start();
    // }

    // if (!isset($_SESSION['full_name'])) {
    //     header("Location: index.php");
    //     exit;
    // }
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <a href="?logout=1" style="color: black;
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 9999;">Logout</a> -->
    <!-- <a href="?logout=1" style="color: black;
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 9999;" class="btn btn-danger mb-2">Logout</a> -->


<!-- Name : -->
<?php //echo $_SESSION['full_name']; 
 ?>

<br>

<!-- Email : -->
<?php //echo $_SESSION['user_email']; 
?>

<br><br>

<!-- <div class="user-menu">
    <div class="user-icon">
        <?php //echo substr($_SESSION['full_name'], 0, 2); ?>
    </div>

    <div class="dropdown">
        <h4><?php //echo $_SESSION['full_name']; ?></h4>
        <p><?php //echo $_SESSION['user_email']; ?></p>
    </div>
</div> -->
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    /* Container */
    .user-menu {
        position: absolute;
        display: inline-block;
        right: 20px;
        /* top: 44px; */
    }

    /* Round Icon */
    .user-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #4CAF50;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-weight: bold;
    }

    /* Dropdown box */
    .dropdown {
        position: absolute;
        top: 55px;
        right: 0;
        width: 220px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        padding: 15px;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
    }

    /* Show dropdown on hover */
    .user-menu:hover .dropdown {
        opacity: 1;
        visibility: visible;
    }

    /* User details */
    .dropdown h4 {
        margin: 0;
        font-size: 16px;
    }

    .dropdown p {
        margin: 5px 0 0;
        font-size: 14px;
        color: gray;
    }
</style>

<script>
    $(document).ready(function(){
        $('#hamburger').hide();
    });
</script>