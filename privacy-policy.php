<?php 
// Include the global header (Navigation & Styles)
include 'includes/header.php'; 
?>

<style>
    /* Twilio-style Policy Section */
    .policy-section { 
        border-left: 3px solid #F22F46; /* Twilio Red Accent */
        padding-left: 2rem; 
        margin-bottom: 4rem; 
    }
    .policy-content {
        line-height: 1.8;
        color: #4A5568;
    }
</style>

<section class="pt-32 pb-16 px-6 text-center bg-[#001433]">
    <div class="max-w-3xl mx-auto">
        <span class="text-blue-400 text-xs font-bold tracking-[0.3em] uppercase mb-4 block">Compliance & Trust</span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight text-white">Privacy Protocol.</h1>
        <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
            Last Updated: January 2026. This document outlines how we secure your data within our neural infrastructure.
        </p>
    </div>
</section>

<main class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-3 gap-16">
    
    <div class="lg:col-span-2">
        <div class="bg-white">
            
            <div class="policy-section">
                <h3 class="text-2xl font-bold mb-4 text-[#001433]">01. Data Sovereignty</h3>
                <p class="policy-content">
                    At Cheapsms.com, we treat your data as a sovereign asset. We collect primary identifiers (Email, Contact Numbers) and technical metadata strictly to facilitate Agentic AI messaging routing. We do not sell, trade, or leak your data to third-party advertisers.
                </p>
            </div>

            <div class="policy-section">
                <h3 class="text-2xl font-bold mb-4 text-[#001433]">02. Neural Security Layers</h3>
                <p class="policy-content">
                    All SMS content processed through our Neural API is encrypted at rest using AES-256 and in transit via TLS 1.3. Our AI models analyze intent for compliance but do not store long-term conversational memory once the delivery handshake is complete.
                </p>
            </div>

            <div class="policy-section">
                <h3 class="text-2xl font-bold mb-4 text-[#001433]">03. Global Compliance</h3>
                <p class="policy-content">
                    Our systems are engineered to comply with GDPR, CCPA, and India’s Digital Personal Data Protection (DPDP) Act. We ensure that localized traffic remains within its respective jurisdictional boundaries where required by law.
                </p>
            </div>

            <div class="policy-section">
                <h3 class="text-2xl font-bold mb-4 text-[#001433]">04. Cookie & Intelligence Tracking</h3>
                <p class="policy-content">
                    We use minimal functional cookies to maintain your session and optimize API performance. No tracking pixels are utilized for invasive behavioral monitoring. Our "Intelligence" is focused on message delivery, not user surveillance.
                </p>
            </div>

            <div class="policy-section">
                <h3 class="text-2xl font-bold mb-4 text-[#001433]">05. Contact Data Protection Officer</h3>
                <p class="policy-content">
                    If you have concerns regarding your data footprint, contact our DPO at: <br>
                    <a href="mailto:info@Cheapsms.com" class="text-[#F22F46] font-bold hover:underline">info@Cheapsms.com</a><br>
                    Or visit our Hyderabad HQ for formal inquiries.
                </p>
            </div>
            
        </div>
    </div>

    
</main>

<?php 
// Include the global chatbot and footer

include 'includes/footer.php'; 
?>