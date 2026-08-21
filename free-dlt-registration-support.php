<?php include('includes/header.php'); ?>

<style>
    .support-section { padding: 60px 0; font-family: 'Inter', sans-serif; }
    .step-card { 
        background: #fff; 
        padding: 30px; 
        border-radius: 12px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        margin-bottom: 25px; 
        border-left: 5px solid var(--twilio-red); 
    }
    .step-number { 
        background: var(--twilio-red); 
        color: white; 
        width: 40px; 
        height: 40px; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        border-radius: 50%; 
        font-weight: bold; 
        margin-bottom: 15px; 
    }
    h3 { margin-bottom: 15px; color: var(--black); }
    ul { margin-left: 20px; line-height: 1.8; }
    .highlight { color: var(--twilio-red); font-weight: bold; }
    .btn-demo { 
        display: inline-block; 
        background: var(--twilio-red); 
        color: white; 
        padding: 12px 25px; 
        text-decoration: none; 
        border-radius: 6px; 
        font-weight: 600; 
        margin-top: 20px; 
    }
    .btn-signup { 
        display: inline-block; 
        background: #F22F46; /* Explicitly setting Twilio red */
        color: white; 
        padding: 12px 25px; 
        text-decoration: none; 
        border-radius: 6px; 
        font-weight: 600; 
        margin-top: 20px; 
        border: none;
        cursor: pointer;
    }
    .btn-signup:hover {
        background: #d12036; /* Darker shade for hover effect */
        color: white;
    }
</style>

<section class="container support-section">
    <h2 class="section-title">DLT Registration <span style="color: #F22F46;">Guide</span></h2>
    <p style="margin-bottom: 40px;">Follow these 4 steps to complete your DLT registration and start sending SMS.</p>

    <div class="step-card">
        <div class="step-number">1</div>
        <h3>Principal Entity (PE) Registration</h3>
        <p>Register as a "Principal Entity" on any one operator portal (e.g., <a href="https://trueconnect.jio.com" target="_blank">Jio</a> or <a href="https://dltconnect.airtel.in/" target="_blank">Airtel</a>). Upload your PAN, GST/Business License, and Authorization letter.</p>
    </div>

    <div class="step-card">
        <div class="step-number">2</div>
        <h3>Header (Sender ID) Registration</h3>
        <p>Your Header is the name that appears on your customer's phone. Once your Entity is approved, log in and request your 6-digit or 6-character Header.</p>
    </div>

    <div class="step-card">
        <div class="step-number">3</div>
        <h3>Template Registration</h3>
        <p>Create templates for your messages. You <span class="highlight">must</span> use <code style="background:#eee; padding:2px 4px;">{#var#}</code> for any dynamic content like names, dates, or OTPs.</p>
    </div>

    <div class="step-card">
        <div class="step-number">4</div>
        <h3>PE-TM Chain Binding</h3>
        <p>Link your account to your SMS Service Provider. Log in to your DLT portal, search for your provider by their <span class="highlight">Telemarketer ID</span>, and click "Bind."</p>
        
        <p>Once you have completed your registration and have your Template IDs ready, you can test your implementation.</p>
        <a href="signup" class="btn-demo">For DLT Support Signup</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>