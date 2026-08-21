<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voice Broadcasting Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #FF0000;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
        }
        /* Custom feature card styling */
        .feature-card {
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
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
        
        <div class="flex-1 text-center lg:text-left">
            <h1 class="text-4xl md:text-6xl font-extrabold text-black leading-tight mb-6 tracking-tight">
                Automated Voice <br><span class="text-red-600">Broadcasting</span>
            </h1>
            <p class="text-lg text-gray-600 mb-10 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Reach thousands of customers instantly with personalized automated voice calls. Ideal for alerts, reminders, political campaigns, and promotions.
            </p>
            <a href="demo" class="inline-block bg-red-600 hover:bg-red-700 text-white px-10 py-4 rounded-lg font-bold transition-all shadow-lg hover:shadow-red-500/30">
                Get Started Now
            </a>
        </div>

        <div class="flex-1 w-full relative group">
            <div class="relative z-10 transform transition-all duration-500 group-hover:scale-[1.01] aspect-video w-full">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200" 
                     alt="Voice Broadcasting Analytics" 
                     class="w-full h-full object-cover rounded-[2rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] border-[8px] md:border-[12px] border-white block">
                
                <div class="absolute -top-6 -right-4 md:-right-8 bg-white p-4 rounded-xl shadow-2xl border border-gray-100 min-w-[180px] animate-bounce-slow hidden md:block">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Live Broadcast</span>
                    </div>
                    <p class="text-xs font-black text-slate-800">1,240 Calls Active</p>
                    <p class="text-[10px] text-emerald-500 font-bold mt-1">Global Delivery ✓</p>
                </div>

                <div class="absolute -bottom-8 -left-4 md:-left-8 z-20 bg-slate-900 text-white p-6 rounded-2xl shadow-2xl border border-white/10 hidden md:block">
                    <p class="text-3xl font-black text-emerald-400">87.4%</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Answer Rate</p>
                </div>
            </div>

            <div class="absolute -inset-10 bg-gradient-to-tr from-red-500/10 to-blue-500/5 rounded-[4rem] -z-0 blur-3xl"></div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="feature-card bg-white p-8 rounded-2xl">
                <h3 class="text-red-600 font-bold text-xl mb-4">Text-to-Speech</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Convert your written scripts into high-quality natural sounding voice messages in multiple languages.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-2xl">
                <h3 class="text-red-600 font-bold text-xl mb-4">Call Scheduling</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Plan your campaigns in advance and set them to broadcast at the exact time your audience is most active.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-2xl">
                <h3 class="text-red-600 font-bold text-xl mb-4">Real-time Analytics</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Track answered calls, failed attempts, and duration of listenership with detailed campaign reports.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-2xl">
                <h3 class="text-red-600 font-bold text-xl mb-4">DTMF Integration</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Gather feedback using keypad inputs (e.g., "Press 1 to speak with an agent") for interactive campaigns.</p>
            </div>

        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Bulk Voice Broadcasting Solutions",
  "image": "https://cheapsms.com/assets/images/voice-broadcasting.png",
  "url": "https://cheapsms.com/voice-broadcasting",
  "description": "Send pre-recorded voice alerts, phone campaigns, and dynamic audio messages to thousands of customers simultaneously with automated retry mechanisms.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "720"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>