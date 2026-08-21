# payment.php

```php
<?php

session_start();

// =========================
// RAZORPAY CONFIG
// =========================

$keyId = "rzp_live_Sq3h6AVUV56IAq";
$keySecret = "2ZMvxRgpYVepGFg8Bkvd0EI7";

// =========================
// PACKAGE DETAILS
// =========================

$quantity = $_GET['Quantity'] ?? '0';
$paisa = $_GET['Paisa'] ?? '0';
$total = $_GET['Total'] ?? '₹0';

$cleanTotal = preg_replace('/[^\d]/', '', $total);

if(!$cleanTotal){
    die("Invalid Amount");
}

$amount = (int)$cleanTotal * 100;

// =========================
// CREATE RAZORPAY ORDER
// =========================

$data = [
    "amount" => $amount,
    "currency" => "INR",
    "receipt" => "receipt_" . time()
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.razorpay.com/v1/orders",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $keyId . ":" . $keySecret,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec($ch);

if(curl_errno($ch)){
    die(curl_error($ch));
}

curl_close($ch);

$order = json_decode($response, true);

if(!isset($order['id'])){
    echo "Order Creation Failed";
    exit;
}

$orderId = $order['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CheapSMS Payment</title>
<meta name="robots" content="noindex,nofollow">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter',sans-serif;
    background:#fff5f5;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.payment-card{
    width:100%;
    max-width:520px;
    background:#ffffff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(242,47,70,0.15);
}

.header{
    background:#F22F46;
    padding:35px;
    color:white;
}

.header h1{
    font-size:28px;
    font-weight:800;
    margin-bottom:10px;
}

.header p{
    opacity:0.9;
    font-size:14px;
}

.content{
    padding:30px;
}

.package-box{
    background:#fff0f2;
    border:1px solid #ffd5dc;
    border-radius:14px;
    padding:18px;
    margin-bottom:25px;
}

.package-row{
    display:flex;
    justify-content:space-between;
    margin-bottom:12px;
}

.package-row:last-child{
    margin-bottom:0;
}

.label{
    color:#555;
    font-size:14px;
}

.value{
    font-weight:700;
    color:#111;
}

.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:8px;
    font-size:13px;
    font-weight:700;
    color:#111;
}

input{
    width:100%;
    padding:15px;
    border:1px solid #ddd;
    border-radius:12px;
    font-size:15px;
    transition:0.2s;
}

input:focus{
    outline:none;
    border-color:#F22F46;
    box-shadow:0 0 0 4px rgba(242,47,70,0.12);
}

.row{
    display:flex;
    gap:15px;
}

.row .form-group{
    flex:1;
}

.pay-btn{
    width:100%;
    background:#F22F46;
    color:white;
    border:none;
    padding:18px;
    border-radius:14px;
    font-size:16px;
    font-weight:700;
    cursor:pointer;
    transition:0.2s;
}

.pay-btn:hover{
    background:#d91f36;
}

.error{
    color:red;
    font-size:12px;
    margin-top:6px;
}

@media(max-width:600px){

    .row{
        flex-direction:column;
        gap:0;
    }

}

</style>

</head>
<body>

<div class="payment-card">

    <div class="header">
        <h1>Billing Information</h1>
        <p>Secure Payments Powered by Razorpay</p>
    </div>

    <div class="content">

        <div class="package-box">

            <div class="package-row">
                <div class="label">Quantity</div>
                <div class="value"><?php echo htmlspecialchars($quantity); ?></div>
            </div>

            <div class="package-row">
                <div class="label">Price</div>
                <div class="value"><?php echo htmlspecialchars($paisa); ?></div>
            </div>

            <div class="package-row">
                <div class="label">Total</div>
                <div class="value"><?php echo htmlspecialchars($total); ?></div>
            </div>

        </div>

        <form id="paymentForm">

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" placeholder="Enter full name">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address">
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" placeholder="9876543210">
            </div>

            <div class="row">

                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" placeholder="State">
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" placeholder="City">
                </div>

            </div>

            <button type="button" class="pay-btn" id="payBtn">
                Proceed To Payment →
            </button>

        </form>

    </div>

</div>

<script>

function validateForm(){

    let valid = true;

    $('.error').remove();

    function showError(input, message){

        input.after('<div class="error">'+message+'</div>');

        valid = false;
    }

    const full_name = $('input[name="full_name"]').val().trim();
    const email = $('input[name="email"]').val().trim();
    const mobile = $('input[name="mobile"]').val().trim();
    const state = $('input[name="state"]').val().trim();
    const city = $('input[name="city"]').val().trim();

    if(full_name === ''){
        showError($('input[name="full_name"]'), 'Full name required');
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(email === ''){
        showError($('input[name="email"]'), 'Email required');
    }else if(!emailPattern.test(email)){
        showError($('input[name="email"]'), 'Invalid email');
    }

    if(mobile.length != 10){
        showError($('input[name="mobile"]'), 'Enter valid 10 digit mobile');
    }

    if(state === ''){
        showError($('input[name="state"]'), 'State required');
    }

    if(city === ''){
        showError($('input[name="city"]'), 'City required');
    }

    return valid;
}

$('#payBtn').click(function(){

    if(!validateForm()){
        return;
    }

    let formData = {};

    $('#paymentForm').serializeArray().forEach(function(item){

        formData[item.name] = item.value;

    });

    formData.selected = 'Quantity: <?php echo $quantity; ?>, Paisa: <?php echo $paisa; ?>, Total: <?php echo $total; ?>';

    $.ajax({

        url:'https://cheapsms.com/adminindia/backend/save_user.php',

        type:'POST',

        data:JSON.stringify(formData),

        contentType:'application/json',

        success:function(res){

            openRazorpay();

        },

        error:function(err){

            console.log(err);

            alert('Unable to save user');

        }

    });

});

function openRazorpay(){

    var options = {

        key: '<?php echo $keyId; ?>',

        amount: <?php echo $amount; ?>,

        currency: 'INR',

        name: 'CheapSMS',

        description: 'SMS Package Purchase',

        order_id: '<?php echo $orderId; ?>',

        handler: function (response){

            $.ajax({

                url:'https://cheapsms.com/adminindia/backend/update_payment.php',

                type:'POST',

                data:JSON.stringify({

                    email:$('input[name="email"]').val(),

                    razorpay_payment_id:response.razorpay_payment_id,

                    razorpay_order_id:response.razorpay_order_id,

                    razorpay_signature:response.razorpay_signature

                }),

                contentType:'application/json',

                success:function(res){

                    alert('Payment Successful');

                    window.location.href='https://cheapsms.com/dashboard.php';

                }

            });

        },

        prefill:{

            name:$('input[name="full_name"]').val(),

            email:$('input[name="email"]').val(),

            contact:'91'+$('input[name="mobile"]').val()

        },

        theme:{

            color:'#F22F46'

        }

    };

    var rzp = new Razorpay(options);

    rzp.open();

}

</script>

</body>
</html>
```

---

# adminindia/backend/save_user.php

```php
<?php

header('Content-Type: application/json');

$conn = new mysqli(
    'localhost',
    'YOUR_DB_USER',
    'YOUR_DB_PASSWORD',
    'YOUR_DB_NAME'
);

if($conn->connect_error){

    echo json_encode([
        'success' => false,
        'message' => 'Database Failed'
    ]);

    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

$full_name = $conn->real_escape_string($data['full_name']);
$email = $conn->real_escape_string($data['email']);
$mobile = $conn->real_escape_string($data['mobile']);
$state = $conn->real_escape_string($data['state']);
$city = $conn->real_escape_string($data['city']);
$selected = $conn->real_escape_string($data['selected']);

$sql = "INSERT INTO ind_users(

    full_name,
    email,
    mobile,
    state,
    city,
    selected

) VALUES (

    '$full_name',
    '$email',
    '$mobile',
    '$state',
    '$city',
    '$selected'

)";

if($conn->query($sql)){

    echo json_encode([
        'success' => true
    ]);

}else{

    echo json_encode([
        'success' => false,
        'message' => $conn->error
    ]);

}

?>
```

---

# adminindia/backend/update_payment.php

```php
<?php

header('Content-Type: application/json');

$conn = new mysqli(
    'localhost',
    'YOUR_DB_USER',
    'YOUR_DB_PASSWORD',
    'YOUR_DB_NAME'
);

$data = json_decode(file_get_contents('php://input'), true);

$email = $conn->real_escape_string($data['email']);
$payment_id = $conn->real_escape_string($data['razorpay_payment_id']);
$order_id = $conn->real_escape_string($data['razorpay_order_id']);
$signature = $conn->real_escape_string($data['razorpay_signature']);

$sql = "UPDATE ind_users SET

    razorpay_payment_id = '$payment_id',
    razorpay_order_id = '$order_id',
    razorpay_signature = '$signature'

WHERE email = '$email'";

if($conn->query($sql)){

    echo json_encode([
        'success' => true
    ]);

}else{

    echo json_encode([
        'success' => false,
        'message' => $conn->error
    ]);

}

?>
```

---

# SQL TABLE

```sql
CREATE TABLE ind_users (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(255),

    email VARCHAR(255),

    mobile VARCHAR(20),

    state VARCHAR(255),

    city VARCHAR(255),

    selected TEXT,

    razorpay_payment_id VARCHAR(255),

    razorpay_order_id VARCHAR(255),

    razorpay_signature TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
```
