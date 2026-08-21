<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheapSMS | World's #1 Promotional SMS Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .twilio-red { background-color: #F22F46; }
        .text-twilio-red { color: #F22F46; }
        .bg-gradient-red { background: linear-gradient(135deg, #F22F46 0%, #d12236 100%); }
    </style>
</head>
<body class="bg-white text-gray-900 overflow-x-hidden">

    <section class="relative pt-20 pb-16 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <p class="text-twilio-red font-bold tracking-widest uppercase text-xs mb-4 flex justify-center items-center gap-2">
                🚀 World's #1 Promotional SMS Platform
            </p>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-tight mb-6 text-black">
                Blast Your Campaign to <br>
                <span class="text-twilio-red">Millions in Minutes</span>
            </h1>
            <p class="text-gray-500 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
                World's most trusted Promotional SMS platform — reach your entire customer base in under 60 seconds with guaranteed delivery and real-time analytics.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <a href="demo" class="twilio-red text-white px-8 py-4 rounded-lg font-bold text-lg flex items-center gap-2 hover:opacity-90 transition transform hover:scale-105">
                    ⚡ Start Demo
                </a>
                <span class="text-gray-400 font-medium">Trusted by 1 Million+ Businesses</span>
            </div>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 mt-24 py-12 border-t border-gray-100">
            <div class="flex flex-col items-center">
                <span class="text-4xl font-extrabold text-black">1M+</span>
                <span class="text-gray-500 text-sm font-medium">Active Clients</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl font-extrabold text-black">99.9%</span>
                <span class="text-gray-500 text-sm font-medium">Success Rate</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl font-extrabold text-black">3sec</span>
                <span class="text-gray-500 text-sm font-medium">Avg Delivery</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl font-extrabold text-black">160+</span>
                <span class="text-gray-500 text-sm font-medium">Countries</span>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 border-y border-gray-100">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-extrabold mb-6">What is Promotional Bulk SMS?</h2>
                <p class="text-gray-600 mb-6 leading-relaxed italic">"Promotional Bulk SMS is bulk text messaging sent to customers for marketing purposes — offers, discounts, product launches, and event invitations."</p>
                <ul class="space-y-4">
                    <?php 
                    $checks = ["98% open rate — higher than email", "Read within 3 minutes of delivery", "No internet connection needed", "Full Unicode compatibility"];
                    foreach($checks as $item) {
                        echo "<li class='flex items-start gap-3 font-medium text-gray-700'>
                                <span class='text-twilio-red font-bold'>✓</span> $item
                              </li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white p-6 rounded-xl shadow-sm text-center border border-gray-100">
                    <p class="text-3xl font-bold text-twilio-red">98%</p>
                    <p class="text-xs font-bold uppercase text-gray-400 mt-1">Open Rate</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm text-center border border-gray-100">
                    <p class="text-3xl font-bold text-twilio-red">6x</p>
                    <p class="text-xs font-bold uppercase text-gray-400 mt-1">ROI vs Email</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold mb-4">Run Winning Campaigns</h2>
            <p class="text-gray-500">Enterprise-grade features built for scale.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $features = [
                ['⚡', 'Blazing Fast', 'Millions of messages delivered in under 10 seconds.'],
                ['🎯', 'Smart Targeting', 'Segment by location, history, or custom CRM tags.'],
                ['📊', 'Real-Time Stats', 'Track CTR, delivery, and failures live on your dash.'],
                ['🌐', 'Unicode Support', 'Send in Hindi, Tamil, Telugu, and 20+ languages.'],
                ['⏰', 'Scheduling', 'Schedule weeks in advance with throttle control.'],
                ['🔗', 'Powerful API', 'REST API with SDKs for PHP, Node.js, and Java.']
            ];
            foreach($features as $f) {
                echo "<div class='p-8 rounded-2xl border border-gray-100 bg-white hover:border-twilio-red transition group'>
                        <div class='text-3xl mb-4 group-hover:scale-110 transition'>$f[0]</div>
                        <h4 class='font-bold text-xl mb-2'>$f[1]</h4>
                        <p class='text-gray-500 text-sm leading-relaxed'>$f[2]</p>
                      </div>";
            }
            ?>
        </div>
    </section>

    <section class="bg-black text-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold mb-12 text-center md:text-left">Perfect for Every Industry</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <?php
                $industries = [
                    ['🛒', 'Retail'], ['🏦', 'Banking'], ['🏥', 'Healthcare'], ['🎓', 'Education'],
                    ['🍕', 'Food'], ['✈️', 'Travel'], ['🏠', 'Real Estate'], ['👗', 'Fashion']
                ];
                foreach($industries as $ind) {
                    echo "<div class='bg-zinc-900 p-6 rounded-xl hover:bg-zinc-800 transition flex items-center gap-4'>
                            <span class='text-2xl'>$ind[0]</span>
                            <span class='font-bold uppercase tracking-wider text-xs'>$ind[1]</span>
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
  "name": "Bulk SMS Service Provider",
  "image": "https://cheapsms.com/",
  "description": "Providing reliable and high-speed bulk SMS solutions since 2002. We are a leading provider of cheap SMS gateways, OTP services, and marketing alerts.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"  
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "700"
  }
}
</script>
<?php include('includes/footer.php'); ?>
</body>
</html>