<?php 
// Ensure the path to your includes is correct based on your server structure
include('includes/header.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official WhatsApp Business API | CheapSMS</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --wa-green: #25D366;
            --wa-dark: #075E54;
            --wa-light: #DCF8C6;
            --wa-bg: #F0FDF4;
        }

        /* Prevent Tailwind from shrinking your existing header fonts */
        header nav a { font-size: inherit; }

        .wa-green-text { color: var(--wa-green) !important; }
        .bg-wa-green { background-color: var(--wa-green) !important; }
        .hero-gradient { 
            background: linear-gradient(135deg, var(--wa-bg) 0%, #ffffff 100%) !important; 
        }

        /* Phone Mockup Styling */
        .phone-container {
            width: 280px;
            height: 560px;
            background: var(--wa-dark);
            border: 8px solid #1f2937;
            border-radius: 3rem;
            overflow: hidden;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Ensure smooth spacing under fixed headers */
        .page-wrapper {
            padding-top: 80px; /* Adjust this value if your header is taller */
        }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">

<div class="page-wrapper">
    <section class="relative py-16 lg:py-24 px-6 hero-gradient overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            
            <div class="z-10">
                <div class="inline-flex items-center gap-2 bg-white border border-green-200 px-4 py-1.5 rounded-full mb-6 shadow-sm">
                    <span class="text-[11px] font-bold tracking-wider uppercase text-green-600">💬 Official WhatsApp Business API</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-black tracking-tight text-slate-900 leading-[1.1] mb-6">
                    Scale Your Business on <br>
                    <span class="wa-green-text">The World's #1 App</span>
                </h1>
                
                <p class="text-slate-600 text-lg md:text-xl max-w-lg mb-10 leading-relaxed">
                    Leverage the power of WhatsApp Marketing with a 99% open rate. Send rich media, interactive buttons, and automated replies.
                </p>
                
                <div class="flex flex-wrap items-center gap-6 mb-10">
                    <a href="demo" class="bg-red-600 hover:bg-red-700 text-white px-10 py-4 rounded-xl font-bold transition-all transform hover:-translate-y-1 shadow-xl">
                        Get Started Now
                    </a>
                    <div class="flex gap-6">
                        <div class="text-center">
                            <p class="text-2xl font-black wa-green-text">99%</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Open Rate</p>
                        </div>
                        <div class="text-center border-l border-slate-200 pl-6">
                            <p class="text-2xl font-black wa-green-text">10X</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Engagement</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3">
                    <?php 
                    $pills = ['Meta Partner', 'Instant Activation', 'Encrypted', 'AI Ready'];
                    foreach($pills as $p) echo "<span class='text-[10px] font-bold bg-white border border-slate-200 px-3 py-1 rounded-lg text-slate-600'>✅ $p</span>";
                    ?>
                </div>
            </div>

            <div class="relative flex justify-center lg:justify-end">
                <div class="phone-container">
                    <div class="bg-[#075E54] p-4 pt-10 text-white flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-slate-400"></div>
                        <div>
                            <p class="text-xs font-bold">Your Brand <span class="text-green-400 text-[10px]">✔</span></p>
                            <p class="text-[8px] opacity-80">Online</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-4 bg-[#e5ddd5] h-full">
                        <div class="bg-[#DCF8C6] p-3 rounded-lg rounded-tl-none shadow-sm max-w-[90%]">
                            <p class="text-[11px] font-bold mb-1 text-slate-800">New Collection Alert! 👗</p>
                            <p class="text-[10px] text-slate-700 mb-3">Check out our latest summer wear. Exclusive 20% discount for you!</p>
                            <div class="space-y-2">
                                <div class="bg-white text-green-600 text-[10px] py-2 text-center rounded font-bold border border-slate-100">Shop Now 🛍️</div>
                                <div class="bg-white text-green-600 text-[10px] py-2 text-center rounded font-bold border border-slate-100">View Catalog</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-10 -left-4 bg-white p-4 rounded-2xl shadow-2xl border border-slate-100 hidden md:block">
                    <p class="text-2xl font-black text-green-500">3x</p>
                    <p class="text-[9px] font-bold text-slate-400 uppercase">Conversions</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-black mb-6 leading-tight">Modern Engagement for <br>Modern Businesses</h2>
                <p class="text-slate-500 text-lg mb-8">
                    Stop sending SMS that get ignored. Reach your customers where they are most active.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 mb-10">
                    <?php 
                    $features = ["Verified BlueTick", "Quick Reply Buttons", "99% Open Rates", "Rich Media Support", "AI Chatbot", "API Integration"];
                    foreach($features as $f) echo "<div class='flex items-center gap-2 text-sm font-bold text-slate-700'><span class='text-green-500 text-lg'>✓</span> $f</div>";
                    ?>
                </div>
                <a href="demo.php" class="inline-block border-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white px-8 py-3 rounded-xl font-bold transition-all">Explore Features</a>
            </div>
            
            <div class="bg-slate-50 p-8 lg:p-12 rounded-[2.5rem] border border-slate-100">
                <h3 class="text-2xl font-bold mb-4 text-slate-800">Enterprise Ready</h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed italic">"The most reliable WhatsApp API infrastructure to scale your notifications and marketing."</p>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-xl flex items-center gap-4 shadow-sm">
                        <div class="bg-green-100 p-2 rounded-lg text-xl">📊</div>
                        <div><p class="font-bold text-sm">Real-time Analytics</p><p class="text-[10px] text-slate-400">Track delivered and read status.</p></div>
                    </div>
                    <div class="bg-white p-4 rounded-xl flex items-center gap-4 shadow-sm">
                        <div class="bg-blue-100 p-2 rounded-lg text-xl">🔒</div>
                        <div><p class="font-bold text-sm">Official Meta API</p><p class="text-[10px] text-slate-400">100% Secure & Compliant.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Official WhatsApp Business API Gateway",
  "image": "https://cheapsms.com/assets/images/whatsapp-api.png",
  "url": "https://cheapsms.com/whatsapp-business-api",
  "description": "Integrate official WhatsApp Business API endpoints for automated transactional updates, real-time customer support messaging, green tick verification, and dynamic chatbots.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "2",
    "ratingCount": "1120"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>