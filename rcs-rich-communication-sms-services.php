<?php include('includes/header.php'); ?>
<?php
// Content Data
$title = "RCS Messaging";
$subtitle = "The Future of SMS";
$description = "Upgrade your SMS campaigns to interactive, branded RCS messages with rich media, carousels, and verified sender profiles — no app download needed.";

$features = [
    ["Rich Media", "Images, videos, GIFs, and carousels directly in the native SMS app."],
    ["Verified Profiles", "Branded sender profile with your logo and a verified checkmark."],
    ["Interactive Buttons", "One-tap buttons for Calls, Directions, URLs, and Quick Replies."],
    ["Two-Way Chat", "Conversational messaging with 24/7 chatbot support."],
    ["Smart Fallback", "Works on Android via Google Messages; falls back to SMS for others."],
    ["Analytics", "Track impressions, clicks, read receipts, and conversion rates."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCS Messaging | Modern SMS Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #ffffff; }
        .text-rcs-blue { color: #4285F4; }
        .bg-rcs-blue { background-color: #4285F4; }
        .feature-card { transition: all 0.3s ease; border-left: 4px solid #4285F4; }
        .feature-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
        .hero-gradient { background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); }
    </style>
</head>
<body class="antialiased text-slate-900">

    <section class="relative hero-gradient text-white pt-24 pb-20 px-6 overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="z-10">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 border border-blue-500/20 px-3 py-1 rounded-full mb-6">
                    <span class="text-[10px] font-black tracking-widest uppercase text-blue-400"><?php echo $title; ?></span>
                </div>
                <h1 class="text-6xl lg:text-7xl font-black tracking-tighter leading-[0.9] mb-8">
                    <?php echo $subtitle; ?>
                </h1>
                <p class="text-slate-400 text-lg md:text-xl max-w-xl mb-10 leading-relaxed font-medium">
                    <?php echo $description; ?>
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <a href="demo" class="bg-blue-600 text-white px-10 py-5 rounded-2xl font-black text-xl flex items-center gap-3 hover:bg-blue-500 transition shadow-2xl shadow-blue-500/20">
                        ⚡ Instant Demo →
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center lg:justify-end">
                <div class="text-center lg:text-right">
                    <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" 
                         alt="Google" class="w-48 lg:w-64 mb-4 filter brightness-110">
                    <p class="text-xl font-bold text-slate-400 tracking-tight uppercase">Verified RCS Provider</p>
                </div>
                <div class="absolute inset-0 bg-blue-500/20 blur-[120px] rounded-full -z-10"></div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($features as $f): ?>
                <div class="feature-card bg-slate-50 p-8 rounded-2xl">
                    <h3 class="text-xl font-black mb-3 text-slate-900"><?php echo $f[0]; ?></h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-medium">
                        <?php echo $f[1]; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-12 border-t border-slate-100 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-center items-center gap-12 grayscale opacity-50">
            <div class="font-black text-xl tracking-tighter">Android Messages</div>
            <div class="font-black text-xl tracking-tighter">Verified Senders</div>
            <div class="font-black text-xl tracking-tighter">Rich Communication</div>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "RCS Business Messaging Services",
  "image": "https://cheapsms.com/assets/images/rcs-messaging.png",
  "url": "https://cheapsms.com/rcs-messaging",
  "description": "Upgrade your text marketing with interactive RCS Business Messaging. Send high-resolution images, video carousels, action buttons, and verified sender profiles directly to native smartphone messaging apps.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "460"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>