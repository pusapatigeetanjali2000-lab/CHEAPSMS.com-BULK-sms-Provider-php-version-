<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Productivity Tools | CheapSMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        :root {
            --wa-green: #25D366;
            --brand-red: #F22F46;
        }
        body { font-family: 'Inter', sans-serif; }
        .text-brand-red { color: var(--brand-red); }
        .bg-brand-red { background-color: var(--brand-red); }
        .feature-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .feature-card:hover { transform: translateY(-8px); }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">

    <section class="max-w-7xl mx-auto px-6 pt-24 pb-16">
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between gap-8 mb-20">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-slate-100 px-3 py-1 rounded-full mb-6">
                    <span class="text-[10px] font-black tracking-[0.2em] uppercase text-slate-500">Infrastructure V2.0</span>
                </div>
                <h1 class="text-6xl lg:text-8xl font-black tracking-tighter leading-[0.85] uppercase">
                    Advanced <br>
                    <span class="text-brand-red">AI Productivity</span> <br>
                    Tools
                </h1>
            </div>
            <div class="max-w-sm border-l-4 border-black pl-8 pb-2">
                <p class="text-slate-500 text-lg font-medium leading-relaxed">
                    Supercharge your communication workflow with AI-driven content generation, predictive analytics, and smart routing infrastructure.
                </p>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <?php
            $tools = [
                [
                    'icon' => '✍️',
                    'title' => 'AI Message Generator',
                    'desc' => 'Generate high-converting SMS and WhatsApp campaign copy instantly using AI trained on millions of successful messaging campaigns.',
                    'features' => [
                        'One-click generation for any industry',
                        'Tone selector: formal, urgent, friendly',
                        'A/B variant generator for split testing',
                        'Emoji & CTA optimizer built-in',
                        'Translation to 20+ global languages'
                    ]
                ],
                [
                    'icon' => '📊',
                    'title' => 'AI Analytics & Insights',
                    'desc' => 'AI-powered analytics that surface actionable insights from your campaign data — no data science degree required.',
                    'features' => [
                        'Predict best send times per segment',
                        'Churn prediction & re-engagement triggers',
                        'Campaign performance forecasting',
                        'Anomaly detection for delivery dips',
                        'Natural language query support'
                    ]
                ],
                [
                    'icon' => '🛡️',
                    'title' => 'AI Smart Routing & Filter',
                    'desc' => 'Intelligent route optimization and content filtering powered by AI — maximize delivery rates while staying fully compliant.',
                    'features' => [
                        'Real-time route scoring for best delivery',
                        'Auto-switch routes on delivery failure',
                        'Content compliance checker before send',
                        'Spam score prediction before launch',
                        'Operator-specific optimization'
                    ]
                ]
            ];

            foreach ($tools as $tool): ?>
                <div class="feature-card bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 flex flex-col h-full hover:bg-white hover:shadow-2xl">
                    <div class="text-5xl mb-8"><?php echo $tool['icon']; ?></div>
                    
                    <h3 class="text-2xl font-black tracking-tighter uppercase italic mb-4">
                        <?php echo $tool['title']; ?>
                    </h3>
                    
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">
                        <?php echo $tool['desc']; ?>
                    </p>

                    <ul class="space-y-4 mb-10">
                        <?php foreach ($tool['features'] as $feat): ?>
                            <li class="flex items-start gap-3">
                                <span class="text-brand-red font-black text-lg leading-none">+</span>
                                <span class="text-[11px] font-extrabold uppercase tracking-wider text-slate-700 leading-snug">
                                    <?php echo $feat; ?>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="demo" class="block w-full bg-black text-white py-5 rounded-2xl text-center font-black uppercase text-xs tracking-widest hover:bg-brand-red transition-colors shadow-lg shadow-slate-200">
                        ⚡ Get Demo →
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 pb-24">
        <div class="bg-black rounded-[3rem] p-12 lg:p-20 text-white flex flex-col lg:flex-row items-center justify-between gap-12">
            <div class="max-w-lg text-center lg:text-left">
                <h2 class="text-4xl lg:text-5xl font-black tracking-tighter uppercase leading-none mb-6">
                    Built for <span class="text-brand-red">High-Scale</span> Enterprise Delivery
                </h2>
                <p class="text-slate-400 font-medium">Our AI models process billions of data points to ensure your messages hit the inbox every single time.</p>
            </div>
            <div class="grid grid-cols-2 gap-8 lg:gap-16">
                <div>
                    <p class="text-5xl font-black text-brand-red">100ms</p>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mt-2">API Latency</p>
                </div>
                <div>
                    <p class="text-5xl font-black">99.9%</p>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mt-2">Route Uptime</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "AI-Powered Text Optimization Tool",
  "image": "https://cheapsms.com/assets/images/ai-tool.png",
  "url": "https://cheapsms.com/ai-tools",
  "description": "An advanced AI-powered text generation and generation optimization toolkit designed to format marketing copy, draft bulk notifications, and maximize SMS open rates.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "510"
  }
}
</script>
<?php include('includes/footer.php'); ?>