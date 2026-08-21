<?php include('includes/header.php'); ?>

<style>
    .support-section { padding: 60px 0; font-family: 'Inter', sans-serif; }
    .credit-card { 
        background: #fff; 
        padding: 30px; 
        border-radius: 12px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        margin-bottom: 25px; 
        border-left: 5px solid #F22F46; 
    }
    .hero-banner {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 40px;
    }
    .highlight-box {
        background: #fff3f4;
        border: 1px solid #F22F46;
        padding: 20px;
        border-radius: 8px;
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
    }
    .btn-signup:hover { background: #d12036; color: white; }
</style>

<section class="container support-section">
    <div class="hero-banner">
        <h2 class="section-title">Get <span style="color: #F22F46;">SMS Test Credits</span></h2>
        <p>Test the speed, reliability, and features of our platform before you commit.</p>
        <a href="signup" class="btn-signup">Get Started</a>
    </div>

    <div class="credit-card">
        <h3>Why Test Our Platform?</h3>
        <p>We believe in the quality of our service. Our trial credits allow you to:</p>
        <ul>
            <li><strong>Verify Delivery:</strong> See how quickly your messages reach the destination.</li>
            <li><strong>Test Features:</strong> Explore our API, panel, and scheduling tools.</li>
            <li><strong>Check Compliance:</strong> Ensure your templates work correctly with DLT guidelines.</li>
        </ul>
    </div>

    <div class="credit-card">
        <h3>How to Claim Your Free Credits</h3>
        <ol style="line-height: 2.5;">
            <li><strong>Sign Up:</strong> Create your free account on our dashboard.</li>
            <li><strong>Verify Your Account:</strong> Complete the email and mobile verification steps.</li>
            <li><strong>Navigate to "Add Money":</strong> Visit the billing section in your dashboard.</li>
            <li><strong>Redeem/Auto-Credit:</strong> Your test credits will be applied automatically or via your provided coupon code.</li>
        </ol>

        <div class="highlight-box">
            <strong>Important Note:</strong> Test credits are strictly for evaluation purposes. To send live campaigns to your customers, please ensure your DLT registration and template approvals are completed as per TRAI regulations.
        </div>
    </div>

    <div class="credit-card">
        <h3>Frequently Asked Questions</h3>
        <p><strong>Q: Can I use test credits for live marketing?</strong><br>
        A: No. Test credits are limited and intended only for checking system functionality.</p>
        <p><strong>Q: Do these credits expire?</strong><br>
        A: Yes, test credits are valid for 7 days from the date of account activation.</p>
    </div>
</section>

<?php include('includes/footer.php'); ?>