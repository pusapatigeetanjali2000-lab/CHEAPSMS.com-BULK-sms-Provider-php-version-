<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise VoIP & SIP Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #F22F46; /* Twilio Red */
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }
        /* Custom styles for components not covered by utility classes */
        .feature-card {
            transition: all 0.3s ease;
            border: 1px solid #f3f4f6;
        }
        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05);
        }
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }
        .animate-bounce-slow {
            animation: bounce-slow 4s infinite ease-in-out;
        }
    </style>
</head>
<body>

    <section class="relative bg-white py-16 lg:py-24 px-6 md:px-12 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-16">
        
        <div class="flex-1 text-center lg:text-left z-10">
            <h1 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight mb-6 tracking-tight">
                Enterprise VoIP & <br><span class="text-[#F22F46]">SIP Solutions</span>
            </h1>
            <p class="text-lg text-slate-600 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Scale your business communications with high-density VoIP infrastructure. Connect your PBX to the world with crystal clear voice quality and Tier-1 carrier reliability.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="demo" class="bg-[#F22F46] hover:bg-[#d42035] text-white px-10 py-4 rounded-lg font-bold transition-all shadow-lg hover:shadow-red-500/30 text-center">
                    Get SIP Trunk Now
                </a>
            </div>
        </div>

        <div class="flex-1 w-full relative group">
            <div class="relative z-10 transform transition-all duration-500 group-hover:scale-[1.01] aspect-[16/10] w-full">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1200" 
                     alt="VoIP Analytics" 
                     class="w-full h-full object-cover rounded-[2rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] border-[8px] md:border-[12px] border-white">
                
                <div class="absolute -top-6 -right-4 md:-right-6 bg-white p-4 rounded-xl shadow-2xl border border-gray-100 min-w-[190px] animate-bounce-slow hidden md:block">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Live Status</span>
                    </div>
                    <p class="text-xs font-black text-slate-800">Uptime: 99.99% Verified</p>
                    <p class="text-[10px] text-emerald-500 font-bold mt-1">Network Optimal ✓</p>
                </div>

                <div class="absolute -bottom-8 -left-4 md:-left-8 z-20 bg-slate-900 text-white p-6 rounded-2xl shadow-2xl border border-white/10 hidden md:block">
                    <p class="text-3xl font-black text-emerald-400">87.4%</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Efficiency Rate</p>
                </div>
            </div>
            <div class="absolute -inset-10 bg-gradient-to-tr from-red-500/10 to-blue-500/5 rounded-[4rem] -z-0 blur-3xl"></div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">HD Voice Quality</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Crystal clear audio delivered over optimized internet infrastructure.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">SIP Trunking</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Instant provisioning for business PBX and call center environments.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Unlimited Channels</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Concurrent call channels to handle massive traffic without busy signals.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Global Termination</h3>
                <p class="text-sm text-gray-600 leading-relaxed">International call termination at the lowest industry rates.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">100% Continuity</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Failover routing ensuring your business never misses a call.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Universal Compatibility</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Works with Asterisk, FreeSWITCH, 3CX, and more.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Advanced Dashboard</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Real-time CDR and call analytics for deep business insights.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Built-in Security</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Fraud detection and call screening to protect your billing.</p>
            </div>

        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Enterprise VoIP Service Provider",
  "image": "https://cheapsms.com/assets/images/voip.png",
  "url": "https://cheapsms.com/voip",
  "description": "Transition to scalable, cost-efficient Voice over IP calling networks. Scale company communications instantly with secure, carrier-grade infrastructure.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "950"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>