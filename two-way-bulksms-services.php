<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Way SMS Platform | Conversational Messaging | CheapSMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --convo-blue: #0052FF;
            --convo-bg: #F0F7FF; /* Light blue tint matching the WhatsApp page's vibe */
        }
        body { font-family: 'Inter', sans-serif; background: white; color: #111827; }
        
        /* Fixed Header Spacing */
        .page-wrapper { padding-top: 80px; }

        /* The WhatsApp Page "Look" */
        .hero-gradient { 
            background: linear-gradient(135deg, var(--convo-bg) 0%, #ffffff 100%) !important; 
        }

        .text-convo-blue { color: var(--convo-blue) !important; }
        .bg-convo-blue { background-color: var(--convo-blue) !important; }

        .phone-container {
            width: 290px;
            height: 580px;
            background: #0f172a;
            border: 8px solid #1e293b;
            border-radius: 3rem;
            overflow: hidden;
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Marquee Styles */
        .marquee-container { overflow: hidden; display: flex; gap: 2rem; background: #f8fafc; padding: 1rem 0; border-top: 1px solid #f1f5f9; border-bottom: 1px solid #f1f5f9; }
        .marquee-content { display: flex; gap: 4rem; animation: scroll 30s linear infinite; white-space: nowrap; }
        @keyframes scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        
        .bg-code { background-color: #0d1117; }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">

<div class="page-wrapper">
    <section class="relative py-16 lg:py-24 px-6 hero-gradient overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            
            <div class="z-10">
                <div class="inline-flex items-center gap-2 bg-white border border-blue-200 px-4 py-1.5 rounded-full mb-6 shadow-sm">
                    <span class="text-[11px] font-bold tracking-wider uppercase text-convo-blue">↔️ No.1 Two-Way SMS Platform</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-black tracking-tight text-slate-900 leading-[1.0] mb-6">
                    Turn SMS Into a <br>
                    <span class="text-convo-blue">Real Conversation</span>
                </h1>
                
                <p class="text-slate-600 text-lg md:text-xl max-w-lg mb-10 leading-relaxed font-medium">
                    Go beyond one-way blasts. Engage your customers with keyword automation, virtual numbers, and a unified live inbox.
                </p>
                
                <div class="flex flex-wrap items-center gap-6 mb-10">
                    <a href="demo" class="bg-red-600 hover:bg-red-700 text-white px-10 py-4 rounded-xl font-bold transition-all transform hover:-translate-y-1 shadow-xl">
                        Get Started Now
                    </a>
                    <div class="flex gap-6">
                        <div class="text-center">
                            <p class="text-2xl font-black text-convo-blue">98%</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Read Rate</p>
                        </div>
                        <div class="text-center border-l border-slate-200 pl-6">
                            <p class="text-2xl font-black text-convo-blue">45%</p>
                            <p class="text-[10px] font-bold text-slate-400 uppercase">Response</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3">
                    <?php 
                    $pills = ['Keyword Triggers', 'Virtual Numbers', 'Webhook Ready', 'Live Inbox'];
                    foreach($pills as $p) echo "<span class='text-[10px] font-bold bg-white border border-slate-200 px-3 py-1 rounded-lg text-slate-600'>✅ $p</span>";
                    ?>
                </div>
            </div>

            <div class="relative flex justify-center lg:justify-end">
                <div class="phone-container">
                    <div class="bg-slate-800 p-4 pt-10 text-white flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-convo-blue flex items-center justify-center font-bold text-[10px]">CS</div>
                        <div>
                            <p class="text-xs font-bold">Live Inbox</p>
                            <p class="text-[8px] text-green-400 font-bold uppercase">● Online</p>
                        </div>
                    </div>
                    <div class="p-4 space-y-4 bg-slate-50 h-full">
                        <div class="flex flex-col items-end">
                            <div class="bg-white p-3 rounded-2xl rounded-tr-none text-[10px] font-medium shadow-sm border border-slate-100 max-w-[85%]">
                                Hi Rahul! 🎉 50% OFF Electronics. Reply STOP to opt out.
                            </div>
                            <span class="text-[7px] mt-1 text-slate-400 font-bold uppercase tracking-tighter">Sent ✓✓</span>
                        </div>
                        <div class="flex flex-col items-start">
                            <div class="bg-convo-blue text-white p-3 rounded-2xl rounded-tl-none text-[11px] font-bold shadow-md">
                                DEALS
                            </div>
                            <span class="text-[7px] mt-1 text-slate-400 font-bold tracking-tighter">+91 9000937601</span>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-10 left-0 bg-white p-5 rounded-2xl shadow-2xl border border-slate-100 hidden md:block">
                    <p class="text-3xl font-black text-convo-blue">3x</p>
                    <p class="text-[9px] font-bold text-slate-400 uppercase">Conversions</p>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee-container">
        <div class="marquee-content font-black text-[10px] tracking-widest text-slate-300 uppercase">
            <span>↔️ True Two-Way SMS</span> <span>🤖 Keyword Automation</span> <span>📞 Virtual Numbers</span> <span>🔗 Webhooks</span> <span>📥 Unified Inbox</span>
            <span>↔️ True Two-Way SMS</span> <span>🤖 Keyword Automation</span> <span>📞 Virtual Numbers</span> <span>🔗 Webhooks</span> <span>📥 Unified Inbox</span>
        </div>
    </div>

    <section class="py-24 max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">
        <div>
            <h2 class="text-4xl font-black mb-8">What is Two-Way SMS?</h2>
            <p class="text-slate-500 text-lg mb-10 leading-relaxed">
                Transform SMS from a broadcast channel into an interactive communication tool. It allows customers to reply using normal text messages, which your system can process automatically or route to your support team—all without needing an app or internet.
            </p>
            <div class="space-y-4 mb-10">
                <?php 
                $usp = ["Keyword triggers auto-respond < 2s", "Dedicated Virtual Long Numbers (VLN)", "Automatic STOP/UNSUBSCRIBE handling", "Route replies to CRM or Helpdesk"];
                foreach($usp as $u) echo "<div class='flex items-center gap-3 font-bold text-sm text-slate-700'><span class='text-convo-blue text-xl'>✓</span> $u</div>";
                ?>
            </div>
            <a href="demo.php" class="inline-block bg-slate-900 text-white px-10 py-4 rounded-xl font-bold hover:bg-black transition-all transform hover:-translate-y-1 shadow-lg text-center">
    ↔️ Start Conversing →
</a>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-blue-50 p-8 rounded-[2rem] border border-blue-100 shadow-sm">
                <p class="text-4xl font-black text-convo-blue">3x</p>
                <p class="text-xs font-bold text-slate-500 uppercase mt-2">Engagement Rate</p>
            </div>
            <div class="bg-slate-50 p-8 rounded-[2rem] border border-slate-200 shadow-sm">
                <p class="text-4xl font-black">100+</p>
                <p class="text-xs font-bold text-slate-500 uppercase mt-2">Keywords</p>
            </div>
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-6 overflow-x-auto">
        <h2 class="text-4xl font-black text-center mb-16">CheapSMS vs Others</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-slate-900">
                    <th class="py-4 font-black">Feature</th>
                    <th class="py-4 font-black text-convo-blue">CheapSMS</th>
                    <th class="py-4 font-black text-slate-400">Twilio</th>
                    <th class="py-4 font-black text-slate-400">Exotel</th>
                </tr>
            </thead>
            <tbody class="text-sm font-bold">
                <tr class="border-b border-slate-100"><td class="py-6">Keyword Automation</td><td class="text-convo-blue">✔ Unlimited</td><td>Complex Setup</td><td>Limited</td></tr>
                <tr class="border-b border-slate-100"><td class="py-6">Unified Inbox</td><td class="text-convo-blue">✔ Included</td><td>✘ Build Your Own</td><td>Basic Only</td></tr>
                <tr class="border-b border-slate-100"><td class="py-6">CRM Integration</td><td class="text-convo-blue">✔ 50+ Native</td><td>Custom API Only</td><td>10–15 Apps</td></tr>
                <tr class="border-b border-slate-100"><td class="py-6">Opt-Out Compliance</td><td class="text-convo-blue">✔ Automated</td><td>Manual Setup</td><td>Semi-Automated</td></tr>
            </tbody>
        </table>
    </section>
</div>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Two-Way SMS Messaging Services",
  "image": "https://cheapsms.com/assets/images/two-way-sms.png",
  "url": "https://cheapsms.com/two-way-sms",
  "description": "Enable interactive customer conversations using long codes, shortcodes, and keywords. Allow your users to reply, participate in polls, or opt-in automatically.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "290"
  }
}
</script>
<?php include('includes/footer.php'); ?>
</body>
</html>