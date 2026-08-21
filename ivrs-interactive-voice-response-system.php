<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart IVR Systems</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
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

        /* Feature Section Styling */
        .feature-card {
            transition: 0.3s ease;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            border-color: var(--primary);
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
                Smart IVR Systems for <br><span class="text-[#F22F46]">Professional Support</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                Automate your customer calls with an intelligent virtual receptionist. Route calls to the right department, provide 24/7 information, and never miss a lead.
            </p>
            <a href="demo" class="inline-block bg-[#F22F46] hover:bg-[#d42035] text-white px-10 py-4 rounded-lg font-bold transition-all shadow-lg hover:shadow-red-500/30">
                Get Your IVR Number
            </a>
        </div>

        <div class="flex-1 w-full relative group">
            <div class="relative z-10 transform transition-all duration-500 group-hover:scale-[1.01] aspect-video w-full">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=1200" 
                     alt="IVR Routing Workflow" 
                     class="w-full h-full object-cover rounded-[2rem] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] border-[8px] md:border-[12px] border-white block">
                
                <div class="absolute -top-6 -right-4 md:-right-6 bg-white p-4 rounded-xl shadow-2xl border border-gray-100 min-w-[190px] animate-bounce-slow hidden md:block">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                        <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Logic Flow</span>
                    </div>
                    <p class="text-xs font-black text-slate-800">Smart Routing Active</p>
                    <p class="text-[10px] text-blue-500 font-bold mt-1">Multi-Level Enabled ✓</p>
                </div>

                <div class="absolute -bottom-8 -left-4 md:-left-8 z-20 bg-slate-900 text-white p-6 rounded-2xl shadow-2xl border border-white/10 hidden md:block">
                    <p class="text-3xl font-black text-blue-400">94%</p>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Self-Service Rate</p>
                </div>
            </div>

            <div class="absolute -inset-10 bg-gradient-to-tr from-blue-500/15 to-red-500/5 rounded-[4rem] -z-0 blur-3xl"></div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Multi-Level Menu</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Create deep menus (Press 1 for Sales, 2 for Support, then 1 for Billing) to organize complex high-volume traffic.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Voice Mail to Email</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Receive customer voice recordings directly in your inbox as MP3 files when your team is offline.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Custom Greetings</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Upload professional studio-recorded greetings or use our AI Text-to-Speech to welcome callers in your brand voice.</p>
            </div>

            <div class="feature-card bg-white p-8 rounded-xl">
                <h3 class="text-[#F22F46] font-extrabold text-lg mb-3">Call Recording</h3>
                <p class="text-sm text-gray-600 leading-relaxed">Automatically record every conversation for quality assurance, training, and compliance purposes.</p>
            </div>

        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Interactive Voice Response (IVR) with SMS Integration",
  "image": "https://cheapsms.com/assets/images/ivr-sms.png",
  "url": "https://cheapsms.com/ivr-sms",
  "description": "Combine smart IVR calling systems with automated SMS confirmations. Route customer calls efficiently and trigger immediate text follow-ups based on caller inputs.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "310"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>