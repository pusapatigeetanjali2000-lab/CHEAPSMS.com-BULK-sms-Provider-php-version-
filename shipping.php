<?php 
// include the global header
include 'includes/header.php'; 
?>

<style>
    /* Twilio-style Vertical Steps */
    .step-card { 
        border-left: 2px solid #e1e8ed; 
        padding-left: 2.5rem; 
        position: relative;
        padding-bottom: 3rem;
    }
    .step-card:last-child { border-left: transparent; }
    
    /* Circle Indicators */
    .step-number {
        position: absolute;
        left: -13px;
        top: 0;
        width: 24px;
        height: 24px;
        background-color: #F22F46;
        border-radius: 50%;
        color: white;
        font-size: 10px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 4px solid white;
    }
    .policy-title { color: #001433; font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem; }
    .policy-text { color: #4A5568; line-height: 1.8; font-size: 1rem; }
</style>

<section class="pt-32 pb-16 px-6 text-center bg-[#001433]">
    <div class="max-w-3xl mx-auto">
        <span class="text-blue-400 text-xs font-bold tracking-[0.4em] uppercase mb-4 block">Digital Fulfillment</span>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight text-white">Delivery Policy.</h1>
        <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
            Understanding how credits, API access, and neural resources are provisioned to your account.
        </p>
    </div>
</section>

<main class="max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-3 gap-16">
    
    <div class="lg:col-span-2">
        <div class="bg-white">
            
            <div class="step-card">
                <div class="step-number">1</div>
                <h3 class="policy-title uppercase tracking-tight">Instant Provisioning</h3>
                <p class="policy-text">
                    As a digital SaaS provider, "shipping" at BULKSMS.ai refers to the digital delivery of SMS credits and API access. Upon successful payment verification, credits are provisioned to your account dashboard **instantly** (typically within < 60 seconds).
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <h3 class="policy-title uppercase tracking-tight">Neural API Activation</h3>
                <p class="policy-text">
                    API keys for our Neural and Agentic AI modules are generated immediately upon account creation. High-volume enterprise throughput limits may require a secondary manual review (24-48 hours) to ensure compliance with global anti-spam regulations.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <h3 class="policy-title uppercase tracking-tight">Global Routing Speed</h3>
                <p class="policy-text">
                    Message "shipping" speed (Delivery Time) is determined by our Agentic AI which selects the lowest-latency route. While our system dispatches messages in milliseconds, final delivery is subject to recipient carrier network conditions.
                </p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <h3 class="policy-title uppercase tracking-tight">No Physical Shipping</h3>
                <p class="policy-text">
                    Please note that BULKSMS.ai does not ship physical products (SIM cards, hardware, etc.). All services are delivered via our cloud-based infrastructure. No physical shipping charges or duties apply to our digital services.
                </p>
            </div>
            
        </div>
    </div>

    <div class="lg:col-span-1">
        <div class="sticky top-32 space-y-8">
            <div class="rounded-xl overflow-hidden shadow-2xl border border-gray-100">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=800&auto=format&fit=crop" 
                     alt="Digital Delivery" 
                     class="w-full h-64 object-cover">
            </div>

            <div class="bg-gray-50 p-8 rounded-lg border border-gray-100 text-center">
                <div class="w-12 h-12 bg-blue-100 text-[#001433] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="text-[#001433] font-bold mb-2">Delivery Failure?</h4>
                <p class="text-sm text-gray-500 mb-6">If your credits have not appeared within 10 minutes of purchase, please contact our Neural Support Grid.</p>
                
                <a href="mailto:support@bulksms.ai" 
                   class="inline-block text-[#F22F46] font-bold hover:underline">
                    support@bulksms.ai
                </a>
            </div>
        </div>
    </div>

</main>

<?php 
// include the global chatbot and footer
include 'includes/chatbot.php';
include 'includes/footer.php'; 
?>