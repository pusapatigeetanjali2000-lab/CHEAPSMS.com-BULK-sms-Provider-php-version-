<?php include('includes/header.php'); ?>

<style>
    .support-section { padding: 60px 0; font-family: 'Inter', sans-serif; }
    .header-card { 
        background: #fff; 
        padding: 30px; 
        border-radius: 12px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        margin-bottom: 25px; 
        border-top: 5px solid var(--twilio-red); 
    }
    .img-container { text-align: center; margin-bottom: 40px; }
    .dlt-diagram {
        width: 100%;
        max-width: 700px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .step-list { margin-left: 20px; line-height: 2; }
    .highlight { color: var(--twilio-red); font-weight: bold; }
    .btn-signup { 
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
    <h2 class="section-title">Free Sender ID (Header) <span style="color: #F22F46;">Registration Support</span></h2>
    <p style="margin-bottom: 30px;">A Sender ID (Header) is the 6-character identity that represents your business on the customer's phone.</p>

    <div class="img-container"></div>

    <div class="header-card">
        <h3>How to Register Your Sender ID</h3>
        <p>Follow these steps within your DLT portal to get your brand name approved:</p>
        <ol class="step-list">
            <li><strong>Login</strong> to your DLT Operator Portal (Jio, Airtel, Vi, or BSNL).</li>
            <li>Navigate to <strong>"Header Registration"</strong> in the sidebar menu.</li>
            <li><strong>Select Header Type:</strong> 
                <ul>
                    <li><span class="highlight">Promotional:</span> Choose a 6-digit numeric ID.</li>
                    <li><span class="highlight">Transactional/Service:</span> Choose a 6-character alphabetic ID (e.g., MYBANK).</li>
                </ul>
            </li>
            <li><strong>Enter your preferred ID:</strong> Ensure it matches your brand name or business abbreviation.</li>
            <li><strong>Submit for Approval:</strong> Operators typically verify your ownership of the brand name within 24–48 hours.</li>
        </ol>
    </div>

    <div class="header-card">
        <h3>Pro-Tips for Approval</h3>
        <ul>
            <li><strong>Consistency:</strong> Your Header should closely resemble your company name.</li>
            <li><strong>Documentation:</strong> If the operator asks, be prepared to upload a small document or website link proving you own the brand name.</li>
            <li><strong>Avoid Generic Names:</strong> Generic names like "OFFERS" or "SALES" are often rejected. Use unique identifiers related to your business.</li>
        </ul>

        <div style="margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">
            <p>Ready to start sending messages? Create your account today.</p>
            <a href="signup" class="btn-signup">Create Your Account</a>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>