<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom API Integration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46;
            --black: #000000;
            --white: #FFFFFF;
            --code-bg: #0f0f23;
            --code-text: #e0e6ed;
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

        /* --- NEW API HERO - CODE FOCUS --- */
        .hero {
            position: relative;
            height: 75vh;
            min-height: 580px;
            max-height: 780px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 25% 25%, rgba(242,47,70,0.2) 0%, transparent 35%),
                radial-gradient(circle at 75% 75%, rgba(99,102,241,0.15) 0%, transparent 35%),
                radial-gradient(circle at 50% 90%, rgba(16,185,129,0.1) 0%, transparent 35%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
            height: 100%;
        }

        /* API TEXT PANEL */
        .hero-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 28px;
        }

        .hero-badge {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 15px;
            padding: 12px 28px;
            background: rgba(242,47,70,0.15);
            border-radius: 50px;
            width: fit-content;
            border: 2px solid rgba(242,47,70,0.3);
            box-shadow: 0 6px 20px rgba(242,47,70,0.2);
            backdrop-filter: blur(10px);
        }

        .hero-text h1 {
            font-size: clamp(2.5rem, 5.5vw, 3.8rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1.5px;
            background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 70%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-text p {
            font-size: 1.2rem;
            line-height: 1.75;
            color: #cbd5e1;
            max-width: 580px;
            margin: 0;
            font-weight: 400;
        }

        .btn-group {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 16px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, #dc2626 100%);
            color: var(--white);
            padding: 18px 45px;
            text-decoration: none;
            font-weight: 700;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 12px 35px rgba(242, 47, 70, 0.4);
            font-size: 1.05rem;
            border: 2px solid var(--primary);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.7s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-5px) scale(1.06);
            box-shadow: 0 25px 50px rgba(242, 47, 70, 0.5);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.15);
            color: #e2e8f0;
            padding: 18px 45px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            border: 2px solid rgba(255,255,255,0.3);
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s ease;
            font-size: 1.05rem;
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.25);
            color: #ffffff;
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* ENHANCED CODE DISPLAY PANEL */
        .hero-code {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1.2;
            max-width: 550px;
            margin: 0 auto;
        }

        .hero-code::before {
            content: '';
            position: absolute;
            inset: -30px;
            border-radius: 24px;
            background: conic-gradient(from 0deg at 50% 50%, #F22F46, #6366f1, #10b981, #f59e0b, #F22F46);
            padding: 8px;
            mask: radial-gradient(farthest-side at 50% 50%, transparent calc(50px + 8px), black 0);
            -webkit-mask: radial-gradient(farthest-side at 50% 50%, transparent calc(50px + 8px), black 0);
            z-index: -1;
            animation: rotateCode 30s linear infinite;
        }

        @keyframes rotateCode {
            from { transform: rotate(0deg) scale(1); }
            to { transform: rotate(360deg) scale(1); }
        }

        .api-code {
            background: var(--code-bg);
            color: var(--code-text);
            padding: 45px;
            border-radius: 24px;
            font-family: 'JetBrains Mono', 'Courier New', monospace;
            font-size: 1rem;
            line-height: 1.6;
            box-shadow: 
                0 50px 100px rgba(0,0,0,0.6),
                inset 0 2px 10px rgba(255,255,255,0.05);
            width: 100%;
            max-width: 480px;
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
        }

        .api-code::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #6366f1);
        }

        .api-code .method { color: #66d9ef; font-weight: 700; }
        .api-code .string { color: #a6e22e; }
        .api-code .key { color: #f92672; }
        .api-code .comment { color: #75715e; font-style: italic; }

        .api-code .status {
            position: absolute;
            top: 15px;
            right: 20px;
            background: #10b981;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* FEATURES SECTION */
        .features {
            padding: 130px 10%;
            max-width: 1400px;
            margin: 0 auto;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin-top: 80px;
        }

        .feature-card {
            padding: 55px 45px;
            background: var(--white);
            border: 2px solid #f1f5f9;
            border-radius: 32px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--primary), #6366f1, #10b981);
            border-radius: 32px 32px 0 0;
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-20px) scale(1.03);
            box-shadow: 0 50px 100px rgba(0,0,0,0.2);
            background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 22px;
            color: var(--black);
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .feature-card h3::before {
            content: '⚡';
            font-size: 1.6rem;
            flex-shrink: 0;
        }

        .feature-card p {
            font-size: 1.1rem;
            color: #475569;
            line-height: 1.8;
            margin: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 60px;
                text-align: center;
                padding: 0 8%;
            }
            
            .hero-code {
                max-width: 450px;
                order: -1;
            }
            
            .features {
                padding: 110px 8%;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }
        }

        @media (max-width: 600px) {
            .hero {
                height: 95vh;
            }
            
            .hero-content {
                padding: 0 6%;
                gap: 40px;
            }
            
            .btn-group {
                justify-content: center;
            }
            
            .api-code {
                padding: 35px 25px;
                font-size: 0.9rem;
            }
            
            .features-grid {
                gap: 30px;
            }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">Developer Ready</div>
                <h1>Seamless Custom<br>API Integration</h1>
                <p>Bridge the gap between your applications and our global communication gateway. Use our RESTful APIs to automate calls, SMS, and WhatsApp messaging within your own software environment.</p>
                <div class="btn-group">
                    <a href="demo" class="btn-secondary">Live Demo</a>
                </div>
            </div>
            
            <div class="hero-code">
                <div class="api-code">
                    <div class="status">200 OK</div>
                    <p class="comment">// Initialize Call API</p>
                    <p><span class="method">POST</span> <span class="string">/v1/voice/call</span></p>
                    <p>{</p>
                    <p>&nbsp;&nbsp;<span class="key">"to"</span>: <span class="string">"+123456789"</span>,</p>
                    <p>&nbsp;&nbsp;<span class="key">"from"</span>: <span class="string">"DID_NUMBER"</span>,</p>
                    <p>&nbsp;&nbsp;<span class="key">"action"</span>: <span class="string">"play_audio"</span></p>
                    <p>}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <h3>RESTful Voice API</h3>
                <p>Trigger automated voice calls, IVR flows, and recordings using simple HTTP requests from any programming language.</p>
            </div>

            <div class="feature-card">
                <h3>Real-time Webhooks</h3>
                <p>Receive instant notifications about call status changes and delivery receipts directly to your server.</p>
            </div>

            <div class="feature-card">
                <h3>Voice QoS & Latency</h3>
                <p>Our API routes media through low-latency edges, ensuring that integrated calls maintain enterprise QoS standards.</p>
            </div>

            <div class="feature-card">
                <h3>CRM & ERP Ready</h3>
                <p>Native connectors for Salesforce, Zoho, and HubSpot, plus custom hooks for proprietary business software.</p>
            </div>

            <div class="feature-card">
                <h3>Secure Authentication</h3>
                <p>Industry-standard API Key and OAuth2.0 security protocols to protect your communication data and billing.</p>
            </div>

            <div class="feature-card">
                <h3>Scalable Concurrency</h3>
                <p>Handle thousands of API requests per second with our load-balanced cloud infrastructure.</p>
            </div>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Custom API Integration Services",
  "image": "https://cheapsms.com/assets/images/custom-api.png",
  "url": "https://cheapsms.com/custom-api-integration",
  "description": "Seamlessly connect your CRM, ERP, or proprietary software with our robust communication gateways. Build custom API integrations for automated SMS notifications, voice triggers, and multi-channel synchronization.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "370"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>