<?php
include "backend/config.php"; // your DB connection
// session_start();

// ===== LOGIN CHECK =====
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // simple static login (you can change later)
    if($username == "admin" && $password == "adminIndia@2026"){
        $_SESSION['admin'] = true;
    } else {
        $error = "Invalid Login";
    }
}

// ===== LOGOUT =====
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
<meta name="robots" content="noindex,nofollow">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function searchTable() {
            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll("#userTable tbody tr");

            rows.forEach(row => {
                let text = row.innerText.toLowerCase();
                row.style.display = text.includes(input) ? "" : "none";
            });
        }

        function toggleStatus(id){
            fetch("toggle_status.php?id="+id)
            .then(res => res.text())
            .then(data => {
                location.reload();
            });
        }
    </script>
</head>

<body class="container mt-5">

<?php if(!isset($_SESSION['admin'])) { ?>

    <!-- LOGIN FORM -->
    <h3>Admin Login</h3>

    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

    <form method="POST" class="w-25">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>

<?php } else { ?>

    <!-- USERS TABLE -->
    <div class="d-flex justify-content-between">
        <h3>Users List</h3>
        <a href="?logout=true" class="btn btn-danger">Logout</a>
    </div>

    <input type="text" id="search" onkeyup="searchTable()" class="form-control my-3" placeholder="Search users...">

    <table class="table table-bordered" id="userTable">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Website</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>State</th>
                <th>City</th>
                <th>Selected</th>
                <th>Razorpay Payment ID</th>
                <th>Date</th>
                <!-- <th>razorpay_order_id</th> -->
               <!--  <th>Status</th>-->
               <!--  <th>Action</th>-->
            </tr>
        </thead>

        <tbody>
        <?php
        $conn = getDBConnection();
        $sql = "SELECT * FROM ind_users ORDER BY id DESC";
        $result = $conn->query($sql);


        // $query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");

        // while($row = mysqli_fetch_assoc($query)) {
        while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                 <td><?= $row['WebSite'] ?></td>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['mobile'] ?></td>
                <td><?= $row['state'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['selected'] ?></td>
                <td><?= $row['razorpay_payment_id'] ?? '' ?></td>
                <td><?= $row['created_at'] ?></td>
                <!-- <td></td> 
                <td> <span class="badge bg-secondary ">Inactive</span></td>
                <td>
                    <button
                        class="btn btn-sm btn-warning">Activate
                    </button>
                </td>
           -->
            </tr>
        <?php } ?>
        </tbody>
    </table>

<?php } ?>

</body>
</html>