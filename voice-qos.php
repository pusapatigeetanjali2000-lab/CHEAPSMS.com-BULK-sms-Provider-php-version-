<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Voice QoS Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    //fonts.googleapis.com">
    //fonts.gstatic.com" crossorigin>
    //fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46; 
            --black: #000000;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--black);
            overflow-x: hidden;
        }

        .feature-card {
            transition: 0.3s ease;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            border-color: #06b6d4; 
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-bounce-slow {
            animation: bounce-slow 4s infinite ease-in-out;
        }
    </style>
</head>
<body>

    <section class="max-w-7xl mx-auto px-6 lg:px-12 py-16 lg:py-24 flex flex-col lg:flex-row items-center justify-between gap-16 overflow-visible">
        
        <div class="flex-1 text-center lg:text-left z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-black leading-tight mb-6 tracking-tight">
                Premium Voice <br><span class="text-[#F22F46]">QoS Management</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Ensure superior call clarity by prioritizing voice packets over data traffic. Our QoS monitoring eliminates jitter, latency, and packet loss for enterprise-grade communication.
            </p>
            <a href="demo" class="inline-block bg-[#F22F46] hover:bg-[#d42035] text-white px-10 py-4 rounded-lg font-bold transition-all shadow-lg hover:shadow-red-500/30">
                Optimize Your Network
            </a>
        </div>

        <div class="flex-1 w-full relative group">
    <div class="relative z-10 transform transition-all duration-500 group-hover:scale-[1.01] aspect-video w-full">
        <img src="https://pplx-res.cloudinary.com/image/upload/pplx_search_images/a223a9c67484ceb8debfd2b3c42c8f449cebdc5a.jpg" 
             alt="VoIP QoS Bandwidth Prioritization Diagram" 
             class="w-full h-full object-cover rounded-[2rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] border-[8px] md:border-[12px] border-white block">
        
        <div class="absolute -top-6 -right-4 md:-right-6 bg-white p-4 rounded-xl shadow-2xl border border-gray-100 min-w-[190px] animate-bounce-slow hidden md:block">
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Live Optimization</span>
            </div>
            <p class="text-xs font-black text-slate-800">Jitter: &lt; 15ms</p>
            <p class="text-[10px] text-cyan-600 font-bold mt-1">Priority 1 Tagging ✓</p>
        </div>

        <div class="absolute -bottom-8 -left-4 md:-left-8 z-20 bg-slate-900 text-white p-6 rounded-2xl shadow-2xl border border-white/10 hidden md:block">
            <p class="text-3xl font-black text-cyan-400">4.8</p>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Mean Opinion Score</p>
        </div>
    </div>

    <div class="absolute -inset-10 bg-gradient-to-tr from-cyan-500/20 to-red-500/10 rounded-[4rem] -z-0 blur-3xl"></div>
</div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Low Latency Routing</h3>
                <p class="text-sm text-gray-600 leading-relaxed">We minimize the "mouth-to-ear" delay by routing traffic through the shortest path across Tier-1 carrier backbones.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Jitter Buffer Management</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Advanced buffering techniques ensure that voice packets are processed in the correct order, even on unstable connections.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Packet Loss Concealment</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Our algorithms reconstruct missing audio data to prevent "robotic" sounding voices and call drops during spikes.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Bandwidth Reservation</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Dynamically reserve dedicated bandwidth for voice traffic to prevent interference from high-volume data downloads.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Real-time MOS Scoring</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Continuous monitoring of Mean Opinion Score (MOS) to provide proactive alerts before quality degradation occurs.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Global Edge Nodes</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Direct interconnects at global exchange points reduce hops and improve regional call quality for international traffic.</p>
            </div>

        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Voice QoS (Quality of Service) Optimization",
  "image": "https://cheapsms.com/assets/images/voice-qos.png",
  "url": "https://cheapsms.com/voice-qos",
  "description": "Ensure crystal-clear calling experiences with advanced voice Quality of Service parameters. Minimize latency, jitter, and packet loss across voice call routing networks.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "190"
  }
}
</script>
<?php include('includes/footer.php'); ?>
</body>
</html>