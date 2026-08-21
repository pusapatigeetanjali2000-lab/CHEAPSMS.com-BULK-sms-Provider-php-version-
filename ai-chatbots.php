<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelligent AI Chatbots | CheapSMS.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Signature Palette */
        :root {
            --bulk-red: #F22F46; /* Twilio/BulkSMS Red */
            --bulk-black: #000000;
        }
        .text-red-brand { color: var(--bulk-red); }
        .bg-red-brand { background-color: var(--bulk-red); }
        .border-red-brand { border-color: var(--bulk-red); }
        .btn-hover:hover { background-color: var(--bulk-red); border-color: var(--bulk-red); }
    </style>
</head>
<body class="bg-white text-black font-sans antialiased">

<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="mb-16">
        <span class="text-red-brand font-bold uppercase tracking-widest text-sm">Next-Gen Automation</span>
        <h1 class="text-4xl md:text-6xl font-black mt-4 mb-6 leading-tight">
            Intelligent <span class="text-red-brand">AI Chatbots</span><br>for Every Channel
        </h1>
        <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
            Automate interactions on WhatsApp, SMS, and Voice. Our conversational bots integrate with your backend systems to provide 24/7 support with zero latency and enterprise Voice QoS.
        </p>
    </div>

    <div class="grid lg:grid-cols-3 gap-10">
        <?php
        $bots = [
            [
                'title' => 'WhatsApp AI Chatbot',
                'icon' => 'fa-comments',
                'desc' => 'Deploy a fully automated WhatsApp chatbot that handles orders, bookings, and support.',
                'features' => [
                    'NLP conversation flows',
                    'Order tracking & automated booking',
                    'Payment collection (WhatsApp Pay)',
                    'Product catalog browsing',
                    'Live agent takeover context'
                ]
            ],
            [
                'title' => 'SMS AI Chatbot',
                'icon' => 'fa-mobile-screen-button',
                'desc' => 'Two-way SMS powered by AI — collect data, answer queries, and qualify leads.',
                'features' => [
                    'Keyword-triggered replies',
                    'Lead capture forms via SMS',
                    'Appointment confirmations',
                    'Survey & feedback collection',
                    'API webhooks for integration'
                ]
            ],
            [
                'title' => 'Voice AI (IVR 2.0)',
                'icon' => 'fa-microphone-lines',
                'desc' => 'Replace traditional IVR with voice bots that understand natural language.',
                'features' => [
                    'NLU (Natural Language Understanding)',
                    'No more "Press 1" menus',
                    'Billing & bookings via voice',
                    'Live agent transfer + transcript',
                    'Call recording & analytics'
                ]
            ]
        ];

        foreach ($bots as $bot): ?>
        <div class="group border-t-4 border-black bg-white p-8 shadow-[0_10px_40px_rgba(0,0,0,0.04)] hover:shadow-[0_10px_40px_rgba(242,47,70,0.1)] transition-all duration-300">
            <div class="text-red-brand text-3xl mb-6">
                <i class="fas <?php echo $bot['icon']; ?>"></i>
            </div>
            <h3 class="text-2xl font-black mb-4 uppercase tracking-tight"><?php echo $bot['title']; ?></h3>
            <p class="text-gray-600 mb-8 min-h-[60px]"><?php echo $bot['desc']; ?></p>
            
            <ul class="space-y-4 mb-10">
                <?php foreach ($bot['features'] as $feature): ?>
                <li class="flex items-center text-sm font-medium">
                    <span class="w-1.5 h-1.5 bg-red-brand rounded-full mr-3"></span>
                    <?php echo $feature; ?>
                </li>
                <?php endforeach; ?>
            </ul>

            <a href="demo" class="flex items-center justify-center w-full border-2 border-black py-4 font-bold uppercase tracking-widest text-xs btn-hover transition-all duration-200 hover:text-white">
                ⚡ Get Demo →
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-20 flex flex-col md:flex-row items-center gap-12 border-t border-gray-100 pt-20">
        <div class="md:w-1/2">
            <h2 class="text-4xl font-black mb-6 uppercase leading-none">
                Scale Your <br><span class="text-red-brand">Conversations</span>
            </h2>
            <p class="text-gray-600 text-lg mb-8">
                Join thousands of businesses using CheapSMS to drive engagement through automated, intelligent messaging.
            </p>
            <div class="flex items-center space-x-4">
                <div class="px-6 py-2 bg-black text-white text-xs font-bold uppercase">Enterprise Ready</div>
                <div class="px-6 py-2 border border-black text-xs font-bold uppercase italic">99.9% Uptime</div>
            </div>
        </div>
        <div class="md:w-1/2 overflow-hidden group">
    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=1000" 
         alt="AI Neural Network Intelligence" 
         class="rounded-none shadow-2xl border-[12px] border-white ring-1 ring-gray-200 transition-all duration-700 grayscale group-hover:grayscale-0 scale-105 group-hover:scale-100">
</div>
    </div>
</section>

</body>
</html>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Intelligent AI Chatbot Solutions",
  "image": "https://cheapsms.com/assets/images/ai-chatbots.png",
  "url": "https://cheapsms.com/ai-chatbots",
  "description": "Integrate intelligent conversational AI chatbots into your customer service channels. Resolve queries instantly, trigger OTPs, and capture leads automatically 24/7.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "920"
  }
}
</script>
<?php include('includes/footer.php'); ?>