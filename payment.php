<?php include('includes/header.php'); ?>

<?php
$country_codes = [
    "US" => "+1", "GB" => "+44", "IN" => "+91", "AU" => "+61", "CA" => "+1",
    "DE" => "+49", "FR" => "+33", "AE" => "+971", "SG" => "+65", "ZA" => "+27"
];

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone_code = $_POST['phone_code'];
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $city = htmlspecialchars($_POST['city']);
    $country = htmlspecialchars($_POST['country']);
    $message = "Redirecting to Payment Gateway...";
}

$quantity = $_GET['Quantity'] ?? '';
$paisa    = $_GET['Paisa'] ?? '';
$total    = $_GET['Total'] ?? '';


?>
<?php

// api key rzp_test_SjA8mc5cYhxoO5
// secret key WT0rqgXu8m97rY9Kalc8Tq58


    //$keyId = "rzp_test_Sq3k6chKK9dghZ"; 
    //$keySecret = "EzaLA95PJSsZ7LjWwz8jkJG3";
     $keyId = "rzp_live_Sq3h6AVUV56IAq";
     $keySecret = "2ZMvxRgpYVepGFg8Bkvd0EI7";


    $amount = 1499000;

    $data = [
        "amount" => $amount,
        "currency" => "INR",
        "receipt" => "rcpt1"
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/orders");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json"
    ]);

    if(curl_errno($ch)){
        echo json_encode(["error" => curl_error($ch)]);
        exit;
    }

    curl_close($ch);

    $order = json_decode($response, true);
    $orderId = $order["id"];


    // echo json_encode([
    //     "order_id" => $order["id"],
    //     "amount" => $amount
    // ]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | CheapSMS</title>
    <meta name="robots" content="noindex,nofollow">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-red: #F22F46;
            --border-color: #E1E4E8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 140vh;
            padding: 20px;
            margin-top:-30px ;
        }

        .payment-card {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        /* Fixed the top input spacing */
        .first-group {
            margin-top: 10px;
        }

        label {
            display: block;
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #1a1a1a;
        }

        input, select {
            width: 100%;
            padding: 14px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 15px;
            color: #333;
            box-sizing: border-box;
            background-color: #fff;
            display: block; /* Ensures it takes full width properly */
        }

        input:focus {
            outline: none;
            border-color: var(--brand-red);
            box-shadow: 0 0 0 3px rgba(242, 47, 70, 0.1);
        }

        .phone-row {
            display: flex;
            gap: 10px;
        }

        

        .location-row {
            display: flex;
            gap: 15px;
        }

        .btn-submit {
            width: 100%;
            background-color: var(--brand-red);
            color: white;
            padding: 16px;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 10px;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-submit:hover {
            background-color: #d62237;
            transform: translateY(-1px);
        }

        .success-banner {
            background: #e7f9ee;
            color: #1e7e34;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
        }

        @media (max-width: 480px) {
            .payment-card {
                margin-top:-250px ;
                padding: 40px;
                border: none;
                box-shadow: none;
                background: transparent;
            }
            body { background: #fff; padding: 10px; }
        }
        
        .top-bar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.billing-title{
    font-size: 24px;
    font-weight: 800;
    margin: 0;
    color: #111;
}

.back-btn{
    background: transparent;
    border: none;
    color: #F22F46;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    padding: 0;
}

.back-btn:hover{
    opacity: 0.8;
}
    </style>
</head>
<body>

<div class="payment-card">
    <div class="top-bar">
        <h2 class="billing-title">Billing Information</h2>

        <button type="button" class="back-btn" onclick="history.back()">
            ← Back
        </button>
    </div>
    <h4 id="selected">
    <?php 
    echo "Quantity: " . $quantity . ", Paisa: " . $paisa . ", Total: " . $total . "<br>";
    ?></h4>
    <?php if ($message): ?>
        <div class="success-banner"><?php echo $message; ?></div>
    <?php endif; ?>

    <form id="paymentForm">
        <div class="form-group first-group">
            <label>Full Name</label>
            <input type="text" name="full_name" placeholder="John Doe" required>
        </div>

        <div class="form-group">
            <label>Email ID</label>
            <input type="email" name="email" placeholder="name@company.com" required>
        </div>

        <div class="form-group">
            <label>Mobile Number</label>
            <div class="phone-row">
                <input type="tel" name="mobile" placeholder="9876543210" required>
            </div>
        </div>

        <div class="location-row">
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" placeholder="Karnataka" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" placeholder="Bengaluru" required>
            </div>
        </div>

    </form>
    <button type="submit" class="btn-submit" >Buy Now →</button>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function razorpayUpdate(id){
        $.ajax({
                url: "backend/razorpay_update_ind",
                type: "POST",
                // data:  data,
                data: JSON.stringify({email:$('input[type="email"]').val(),razorpay_payment_id:id}),
                contentType: "application/json",
                success: function(res){
                    console.log(res);
                    if(res?.success == false){
                        alert(res?.message);
                    }else{
                        
                        }
                    window.location = "dashboard.php?india=india";
                },
                error: function(err){
                    console.log(err);
                    alert("Error!");
                }
            });
    }
    function pay() {
        // alert('payment');
     //   alert($('#selected').text());
     //   alert($('#selected').text().split('Total: ₹')[1].replace(',','')+'00');
         var orderId = "<?php echo $orderId; ?>";
         //Total: ₹
         var options = {
            "key": "rzp_live_Sq3h6AVUV56IAq", // Enter the Key ID generated from the Dashboard
            "amount": $('#selected').text().split('Total: ₹')[1].replace(',','')+'00', // Amount is in currency subunits.
            "currency": "INR",
            
            "image": "https://example.com/your_logo",
             order_id: orderId, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                razorpayUpdate(response.razorpay_payment_id);

            },
            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                "name": $('input[name="full_name"]').val(),//"Gaurav Kumar", //your customer's name
                "email":  $('input[type="email"]').val(),//"gaurav.kumar@example.com", 
                "contact": $('input[type="tel"]').val()//"+919876543210"  //Provide the customer's phone number for better conversion rates 
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
            // console.log(response, '---------------rzp1');
        });
        rzp1.open();
    }



    function handleSubmit() {
        
        
let isValid = true;

    let fullName = $('input[name="full_name"]').val().trim();
    let email = $('input[name="email"]').val().trim();
    let mobile = $('input[name="mobile"]').val().trim();
    let state = $('input[name="state"]').val().trim();
    let city = $('input[name="city"]').val().trim();

    // Remove old error messages
    $('.error-msg').remove();

    function showError(input, message) {
        input.after('<div class="error-msg" style="color:red;font-size:12px;margin-top:5px;">' + message + '</div>');
        isValid = false;
    }

    // ✅ Full Name Validation
    if (fullName === "") {
        showError($('input[name="full_name"]'), "Full Name is required");
    }

    // ✅ Email Validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        showError($('input[name="email"]'), "Email is required");
    } else if (!emailPattern.test(email)) {
        showError($('input[name="email"]'), "Invalid email format");
    }

    // ✅ Mobile Validation
    let mobilePattern = /^[0-9]{10}$/;
    if (mobile === "") {
        showError($('input[name="mobile"]'), "Mobile number is required");
    } else if (!mobilePattern.test(mobile)) {
        showError($('input[name="mobile"]'), "Enter valid 10-digit number");
    }

    // ✅ State Validation
    if (state === "") {
        showError($('input[name="state"]'), "State is required");
    }

    // ✅ City Validation
    if (city === "") {
        showError($('input[name="city"]'), "City is required");
    }

    // ❌ If validation fails → STOP
    if (!isValid) {
        return;
    }

            // Step 1: Get form data as array
            let formArray = $("#paymentForm").serializeArray();

            // Step 2: Convert to JSON object
            let data = {};
            formArray.forEach(function(item){
                data[item.name] = item.value;
            });
            data.password = "12345678";
            data.selected = $("#selected").text(); //encodeURIComponent($("#selected").text().trim());

          
            console.log("Form Data to be sent:", data);

            //  const form = $("#demoForm");
            // const formData = new FormData(form[0]);

            // Step 4: Send as JSON
            $.ajax({
                url: "backend/save_user",
                type: "POST",
                // data:  data,
                data: JSON.stringify(data),
                contentType: "application/json",
                success: function(res){
                    console.log(res);
                    if(res?.success == false){
                        //alert(res?.message);
                        pay();
                    }else{
                        pay();
                    }
                },
                error: function(err){
                    console.log(err);
                    alert("Error!");
                }
            });
    }
    // $(document).ready({
        $('.btn-submit').click(()=>{
            handleSubmit();
        });
    // });

</script>
</body>
</html>
