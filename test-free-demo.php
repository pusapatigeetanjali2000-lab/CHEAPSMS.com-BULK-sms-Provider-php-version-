<?php include('includes/header.php'); ?>

<style>
    .demo-section { padding: 60px 0; font-family: 'Inter', sans-serif; }
    .demo-container { 
        display: flex; 
        flex-wrap: wrap; 
        gap: 40px; 
        align-items: center; 
        justify-content: center;
        text-align: center;
    }
    .demo-content { 
        max-width: 800px; 
        padding: 40px; 
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .btn-demo { 
        display: inline-block; 
        background: var(--twilio-red); 
        color: var(--twilio-red); 
        padding: 15px 30px; 
        border-radius: 6px; 
        text-decoration: none; 
        font-weight: bold; 
        margin-top: 25px;
        font-size: 1.1rem;
    }
    .btn-demo:hover { background: #d12036; color: #fff; }
</style>

<section class="container demo-section">
    <div class="demo-container">
        <div class="demo-content">
            <h2 class="section-title">See Our Platform <span style="color: #F22F46;">In Action</span></h2>
            <p>Don't just take our word for it. Explore our personalized walkthrough of our Bulk SMS, WhatsApp, and communication suite.</p>
            
            <ul style="margin: 30px 0; line-height: 2; text-align: left; display: inline-block;">
                <li><strong>Customized Walkthrough:</strong> Tailored to your specific business use case.</li>
                <li><strong>Feature Showcase:</strong> See how our API, campaign manager, and DLT tools simplify your workflow.</li>
                <li><strong>Live Q&A:</strong> Get all your technical and compliance questions answered by our experts.</li>
                <li><strong>No Commitment:</strong> A free, no-pressure session to help you decide if we are the right fit.</li>
            </ul>

            <br>
            <a href="demo" class="btn-demo">View Demo</a>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>