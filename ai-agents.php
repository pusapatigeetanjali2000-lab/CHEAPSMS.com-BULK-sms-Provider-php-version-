<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autonomous AI Agents | Cheapsms.com Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom Twilio Red */
        .text-twilio-red { color: #F22F46; }
        .bg-twilio-red { background-color: #F22F46; }
        .border-twilio-red { border-color: #F22F46; }
        .hover-bg-twilio-dark:hover { background-color: #D61F35; }
    </style>
</head>
<body class="bg-white font-sans text-gray-900">

<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Autonomous <span class="text-twilio-red">AI Agents</span> for Business
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Deploy intelligent digital workers that qualify leads, support customers, and run outreach 24/7. 
            Integrated with enterprise Voice QoS for flawless communication.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 mb-16">
        
        <?php
        $agents = [
            [
                'title' => 'AI Sales Agent',
                'icon' => 'fa-briefcase',
                'desc' => 'Autonomous agents that qualify leads, follow up, and close deals 24/7.',
                'features' => [
                    'Automated lead qualification & scoring',
                    'Personalized follow-up via SMS & WhatsApp',
                    'CRM sync (Salesforce, HubSpot, Zoho)',
                    'Human handoff when sales-ready',
                    'Multilingual — 20+ languages'
                ]
            ],
            [
                'title' => 'AI Support Agent',
                'icon' => 'fa-headphones',
                'desc' => 'Resolve 80% of queries instantly by learning from your knowledge base.',
                'features' => [
                    'Instant 24/7 response to queries',
                    'Learns from FAQs and past tickets',
                    'Escalates complex issues to humans',
                    'Zendesk, Freshdesk, Intercom sync',
                    'Sentiment analysis for priority routing'
                ]
            ],
            [
                'title' => 'AI Outreach Agent',
                'icon' => 'fa-bullhorn',
                'desc' => 'Multi-channel agent running campaigns across SMS, Email, and Voice.',
                'features' => [
                    'Multi-channel outreach in one workflow',
                    'Dynamic personalization from data',
                    'A/B test message variants automatically',
                    'Smart send-time optimization',
                    'Auto-stop on reply or conversion'
                ]
            ]
        ];

        foreach ($agents as $agent): ?>
        <div class="border-2 border-gray-100 rounded-2xl p-8 shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col h-full">
            <div class="text-twilio-red text-4xl mb-6">
                <i class="fas <?php echo $agent['icon']; ?>"></i>
            </div>
            <h3 class="text-2xl font-bold mb-4"><?php echo $agent['title']; ?></h3>
            <p class="text-gray-500 mb-6 flex-grow"><?php echo $agent['desc']; ?></p>
            
            <ul class="space-y-3 mb-8">
                <?php foreach ($agent['features'] as $feature): ?>
                <li class="flex items-start text-sm">
                    <i class="fas fa-check text-twilio-red mt-1 mr-3"></i>
                    <span><?php echo $feature; ?></span>
                </li>
                <?php endforeach; ?>
            </ul>

            <a href="demo" class="inline-block text-center bg-black text-white py-3 px-6 rounded-lg font-bold hover:bg-twilio-red transition-colors duration-200">
                ⚡ Get Demo →
            </a>
        </div>
        <?php endforeach; ?>

    </div>

    <div class="bg-gray-50 rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-4">AI Agent <span class="text-twilio-red">Deploy Today</span></h2>
            <p class="text-lg text-gray-600 mb-6">Select a digital worker to join your team today. Scale your operations without increasing headcount.</p>
            <div class="flex gap-4">
                <div class="h-2 w-16 bg-twilio-red rounded-full"></div>
                <div class="h-2 w-16 bg-black rounded-full"></div>
                <div class="h-2 w-16 bg-gray-300 rounded-full"></div>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=800" 
                 alt="AI Digital Workers" 
                 class="rounded-xl shadow-2xl border-4 border-white">
        </div>
    </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Autonomous AI Agents for Business",
  "image": "https://cheapsms.com/assets/images/ai-agents.png",
  "url": "https://cheapsms.com/ai-agents",
  "description": "Deploy autonomous AI agents to automate your complex customer communication, business logic workflows, and intelligent text-based operations seamlessly.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "340"
  }
}
const PROXY_URL = "store/chat-proxy.php";
</script>
<?php include('includes/footer.php'); ?>
<?php include('includes/chat-widget.php'); ?>
</body>
</html>