<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    :root {
        --whatsapp-green: #25D366;
        --whatsapp-dark: #128C7E;
    }

    .support-section { padding: 60px 0; font-family: 'Inter', sans-serif; }
    
    .whatsapp-card { 
        background: #fff; 
        padding: 30px; 
        border-radius: 12px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        margin-bottom: 25px; 
        border-left: 5px solid var(--whatsapp-green); 
    }

    .wa-banner {
        background: var(--whatsapp-green);
        color: white;
        padding: 40px;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 40px;
    }

    .wa-icon { font-size: 3rem; margin-bottom: 15px; }

    .btn-wa {
        background-color: var(--whatsapp-dark);
        color: white;
        padding: 12px 25px;
        border-radius: 50px;
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
        margin-top: 20px;
    }
    
    .btn-signup { 
        display: inline-block; 
        background: #F22F46; 
        color: white; 
        padding: 12px 25px; 
        text-decoration: none; 
        border-radius: 6px; 
        font-weight: 600; 
        margin-top: 20px;
        margin-left: 10px;
    }
</style>

<section class="container support-section">
    <div class="wa-banner">
        <div class="wa-icon"><i class="fa fa-whatsapp"></i></div>
        <h2 style="color: white;">WhatsApp API Test Credits</h2>
        <p>Experience the power of WhatsApp Business API with complimentary test credits.</p>
    </div>

    <div class="whatsapp-card">
        <h3>Why Test WhatsApp Marketing?</h3>
        <p>WhatsApp boasts industry-leading open rates. Use your test credits to:</p>
        <ul>
            <li><strong>Validate Templates:</strong> Ensure your message formats meet WhatsApp Business policy.</li>
            <li><strong>Test Automation:</strong> See how your CRM triggers messages to your test number.</li>
            <li><strong>Evaluate Speed:</strong> Measure the delivery time from API trigger to handset.</li>
        </ul>
    </div>

    <div class="whatsapp-card">
        <h3>How to Claim Your Credits</h3>
        <ol style="line-height: 2.2;">
            <li><strong>Register/Login:</strong> Access your user dashboard.</li>
            <li><strong>Complete Business Profile:</strong> Ensure your Facebook Business Manager is linked.</li>
            <li><strong>Request Trial:</strong> Navigate to the "WhatsApp" tab and click "Claim Test Credits."</li>
            <li><strong>Start Messaging:</strong> Use your assigned test number to send up to 50 messages.</li>
        </ol>
        
        <a href="https://wa.me/919000937601?text=Hi, I would like to claim my free WhatsApp test credits" class="btn-wa" target="_blank">
            <i class="fa fa-whatsapp"></i> Chat with Support
        </a>
        <a href="signup" class="btn-signup">Create Your Account</a>
    </div>

    <div class="whatsapp-card" style="border-left-color: var(--whatsapp-dark);">
        <h3>Compliance Requirements</h3>
        <p>Unlike standard SMS, WhatsApp requires:</p>
        <ul>
            <li>An approved <strong>WhatsApp Business Account (WABA)</strong>.</li>
            <li>Templates pre-approved by Meta for marketing or utility.</li>
            <li>Explicit opt-in from end-users to receive messages.</li>
        </ul>
    </div>
</section>

<?php include('includes/footer.php'); ?>