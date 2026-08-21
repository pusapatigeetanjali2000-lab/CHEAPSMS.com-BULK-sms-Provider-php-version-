<?php include('includes/header.php'); ?>

<style>
    .demo-page { padding: 80px 0; font-family: 'Inter', sans-serif; }
    .hero-box { 
        background: linear-gradient(135deg, var(--black), #333); 
        color: white; 
        padding: 50px; 
        border-radius: 16px; 
        text-align: center; 
        margin-bottom: 40px; 
    }
    .credit-badge { 
        background: var(--twilio-red); 
        padding: 10px 20px; 
        border-radius: 50px; 
        font-weight: bold; 
        font-size: 1.2rem;
        display: inline-block;
        margin-bottom: 20px;
    }
    .steps-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
    .step-box { border: 1px solid var(--border); padding: 30px; border-radius: 12px; text-align: center; }
    .btn-claim { 
        display: inline-block; background: var(--twilio-red); color: white; 
        padding: 15px 30px; border-radius: 8px; text-decoration: none; font-weight: bold; margin-top: 20px;
    }
    .btn-claim {
    display: inline-block !important; /* Forces it to be visible */
    background: #F22F46 !important;
    color: white !important;
    padding: 15px 30px !important;
    text-decoration: none !important;
    border-radius: 8px;
    font-weight: bold;
}
</style>

<section class="container demo-page">
    <div class="hero-box">
        <div class="credit-badge">50 TEST CREDITS</div>
        <h1>Test Cheapsms.com Before You Buy</h1>
        <p>Experience lightning-fast delivery and DLT-compliant messaging at zero cost.</p>
    </div>

    <div class="steps-container">
        <div class="step-box">
            <h3>1. Sign Up</h3>
            <p>Create your free account on cheapsms.com in less than 2 minutes.</p>
        </div>
        <div class="step-box">
            <h3>2. Verify</h3>
            <p>Confirm your mobile number to keep our network secure and spam-free.</p>
        </div>
        <div class="step-box">
            <h3>3. Get Credits</h3>
            <p>50 complimentary credits will be instantly credited to your dashboard.</p>
        </div>
    </div>

    <div style="text-align: center; margin-top: 50px;">
        <h3>Ready to test?</h3>
        <a href="demo" class="btn-claim">Check Demo Credits</a>
        <p style="margin-top: 15px; font-size: 0.9rem; color: #666;">No credit card required. Purely for testing purposes.</p>
    </div>

    <div style="margin-top: 60px; padding: 30px; background: #f4f4f4; border-radius: 12px;">
        <h4>Why test with Cheapsms.com?</h4>
        <ul style="margin-left: 20px; line-height: 1.8;">
            <li><strong>DLT Support:</strong> We guide you through the registration process to ensure 100% compliance.</li>
            <li><strong>Real-Time Reports:</strong> See your delivery status instantly in your dashboard.</li>
            <li><strong>High-Speed API:</strong> Integrate our gateway with your app, website, or CRM.</li>
            <li><strong>Unmatched Pricing:</strong> Experience premium service at the most affordable rates in India.</li>
        </ul>
    </div>
</section>

<?php include('includes/footer.php'); ?>