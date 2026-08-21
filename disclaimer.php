<?php 
// Include the global header
include 'includes/header.php'; 
?>

<style>
    /* Twilio-style Caution Borders */
    .caution-border { 
        border-left: 4px solid #F22F46; 
        padding-left: 2rem; 
        margin-bottom: 4rem; 
    }
    .disclaimer-text {
        line-height: 1.8;
        color: #4A5568;
    }
</style>

<section class="pt-32 pb-16 px-6 text-center bg-[#001433]">
    <div class="max-w-3xl mx-auto">
        <span class="text-[#F22F46] text-xs font-bold tracking-[0.3em] uppercase mb-4 block">Legal Framework</span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight text-white">Site Disclaimer.</h1>
        <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
            Please review our limitations of liability regarding AI-driven communication services.
        </p>
    </div>
</section>

<main class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-3 gap-16">
    
    <div class="lg:col-span-2">
        <div class="bg-white p-2 md:p-6">
            
            <div class="caution-border">
                <h3 class="text-2xl font-bold mb-4 text-[#001433] tracking-tight">AI Generated Content</h3>
                <p class="disclaimer-text">
                    The AI-generated insights and automated message suggestions provided by BULKSMS.ai are for informational and operational purposes only. While our neural models are highly advanced, we do not warrant the absolute accuracy or "human-like" perfection of every automated response. Users are responsible for supervising their Agentic AI configurations.
                </p>
            </div>

            <div class="caution-border">
                <h3 class="text-2xl font-bold mb-4 text-[#001433] tracking-tight">Service Availability</h3>
                <p class="disclaimer-text">
                    BULKSMS.ai provides a gateway for message transmission. We do not guarantee 100% uptime of third-party global carrier networks. Service disruptions due to carrier maintenance, atmospheric conditions, or international telecommunication outages are beyond our direct control.
                </p>
            </div>

            <div class="caution-border">
                <h3 class="text-2xl font-bold mb-4 text-[#001433] tracking-tight">No Financial Advice</h3>
                <p class="disclaimer-text">
                    Any data analytics or market predictions provided through our enterprise dashboard should not be construed as financial or legal advice. BULKSMS.ai is not responsible for business decisions made based on AI-projected customer retention or churn data.
                </p>
            </div>

            <div class="caution-border">
                <h3 class="text-2xl font-bold mb-4 text-[#001433] tracking-tight">Spam & Usage Compliance</h3>
                <p class="disclaimer-text">
                    Users of the BULKSMS.ai platform agree to comply with all local and international anti-spam laws (TCPA, TRAI, GDPR). We are not liable for legal penalties incurred by users who utilize our AI tools to send non-compliant or unsolicited communications.
                </p>
            </div>
        </div>
    </div>
</main>

<?php 
// Include the global chatbot and footer
include 'includes/footer.php'; 
?>