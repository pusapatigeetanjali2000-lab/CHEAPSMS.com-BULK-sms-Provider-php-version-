<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheapSMS | Transactional & OTP Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        .twilio-red { background-color: #F22F46; }
        .text-twilio-red { color: #F22F46; }
        .border-twilio-red { border-color: #F22F46; }
        .bg-code { background-color: #0d1117; }
    </style>
</head>
<body class="bg-white text-black antialiased">

    <section class="max-w-7xl mx-auto px-6 py-20 lg:py-32 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="flex items-center gap-2 mb-6">
                <span class="twilio-red text-white text-[10px] px-2 py-0.5 rounded font-bold uppercase">Priority Route</span>
                <span class="text-gray-400 text-xs font-semibold uppercase tracking-wider">Sub-3 Second Delivery</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tighter leading-none mb-6">
                Deliver OTPs in <br>
                <span class="text-twilio-red italic">Under 3 Seconds</span>
            </h1>
            <p class="text-gray-600 text-lg mb-10 max-w-lg leading-relaxed">
                No.1 fastest Transactional & OTP SMS platform. Guaranteed sub-3-second delivery and 99.99% uptime for banks, fintechs, and e-commerce.
            </p>
            <div class="flex flex-col sm:flex-row items-center gap-6">
                <a href="demo" class="inline-block bg-red-600 hover:bg-red-700 text-white px-10 py-4 rounded-lg font-bold transition-all shadow-lg hover:shadow-red-500/30">
                    Get Started Now
                </a>
            </div>
        </div>
  
  <div class="otp-content">
    <span class="delivery-time" style="color: #27ae60; font-weight: bold; float: right;">Delivered in 1.8s</span>
    <span class="card-title" style="color: #555;">MYBANK OTP</span>
    <p style="margin-top: 2rem;">Your OTP for login is: <strong style="font-size: 2rem; letter-spacing: 0.2rem;">6 3 4 8 9 2</strong></p>
    <p style="color: #888;">Valid for 10 minutes. Do not share.</p>
  </div>
</div>
    </section>

    <section class="bg-gray-50 py-24 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-extrabold mb-6 tracking-tight leading-tight">Integrate OTP SMS in <span class="text-twilio-red underline decoration-4">Minutes</span></h2>
                <div class="space-y-4 mb-8">
                    <?php 
                    $pros = ["RESTful API — works with any language", "SDKs for PHP, Python, Node.js, Java", "Webhook callbacks for real-time status", "Postman collection + OpenAPI spec"];
                    foreach($pros as $p) echo "<div class='flex items-center gap-3 font-semibold text-gray-700'><span class='text-twilio-red'>✓</span> $p</div>";
                    ?>
                </div>
                <div class="flex gap-4">
                    <span class="text-[10px] font-mono bg-white border border-gray-200 px-2 py-1 rounded">PHP</span>
                    <span class="text-[10px] font-mono bg-white border border-gray-200 px-2 py-1 rounded">Node.js</span>
                    <span class="text-[10px] font-mono bg-white border border-gray-200 px-2 py-1 rounded">Python</span>
                </div>
            </div>
            <div class="bg-code rounded-xl shadow-2xl p-6 font-mono text-sm text-gray-300">
                <div class="flex justify-between items-center mb-4 border-b border-gray-800 pb-2">
                    <span class="text-twilio-red font-bold">POST https://api.cheapsms.com/v2/send</span>
                    <span class="text-[10px] uppercase text-gray-500 cursor-pointer hover:text-white">📋 Copy</span>
                </div>
<pre class="overflow-x-auto">
{
  "apikey": "YOUR_API_KEY",
  "sender": "MYBANK",
  "to": "919876543210",
  "type": "OTP",
  "message": "Your OTP is {#var#}. -MYBANK",
  "var1": "742819"
}

<span class="text-green-500">// Response</span>
{
  "status": "success",
  "delivered": "true",
  "latency": "1.8s"
}
</pre>
            </div>
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-extrabold text-center mb-16">How OTP SMS Delivery Works</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <?php
            $stages = [
                ['01', 'API Call Received', 'Request queued in under 50ms.'],
                ['02', 'Route Optimization', 'AI selects the fastest carrier lane.'],
                ['03', 'Carrier Submission', 'Direct Tier-1 SMPP connection.'],
                ['04', 'Delivery Confirmed', 'Instant Webhook callback fired.']
            ];
            foreach($stages as $s) {
                echo "<div class='relative p-6 bg-white border border-gray-100 rounded-xl hover:border-twilio-red transition group'>
                        <span class='text-4xl font-black text-gray-100 absolute top-4 right-4 group-hover:text-red-50 transition'>$s[0]</span>
                        <h4 class='font-bold text-lg mb-2 relative z-10'>$s[1]</h4>
                        <p class='text-gray-500 text-xs leading-relaxed relative z-10'>$s[2]</p>
                      </div>";
            }
            ?>
        </div>
    </section>

    <section class="bg-black text-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold mb-12 text-center md:text-left">Trusted Across Industries</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <?php
                $industries = ['Banking', 'Fintech', 'E-commerce', 'Healthcare', 'Gaming', 'Logistics'];
                foreach($industries as $ind) {
                    echo "<div class='border border-zinc-800 p-6 rounded hover:border-twilio-red transition text-center'>
                            <p class='font-bold uppercase tracking-widest text-[10px]'>$ind</p>
                          </div>";
                }
                ?>
            </div>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Transactional Bulk SMS Gateway",
  "image": "https://cheapsms.com/assets/images/transactional-sms.png",
  "url": "https://cheapsms.com/transactional-sms",
  "description": "Deliver critical alerts, instant OTPs, order updates, and flight notifications with high-priority routing and 100% reliable delivery networks.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "1420"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>