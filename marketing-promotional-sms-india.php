<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Bulk SMS | Cheapsms.com</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
    @media (max-width: 768px) {

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px 4px;
        font-size: 11px;
        text-align: center;
    }

    td strong {
        font-size: 11px;
    }

    .btn-primary {
        padding: 5px 8px !important;
        font-size: 10px !important;
        white-space: nowrap;
    }
}
   
        :root {
            --twilio-red: #F22F46;
            --black: #060606;
            --gray-dark: #1F1F1F;
            --gray-light: #F4F4F4;
            --white: #FFFFFF;
            --border: #EAEAEA;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--black);
            background-color: var(--white);
            line-height: 1.6;
        }

        /* Utility Classes */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .text-red { color: var(--twilio-red); }
        .btn-primary {
            background-color: var(--twilio-red);
            color: white;
            padding: 14px 28px;
            border-radius: 6px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s ease;
            border: none;
            cursor: pointer;
        }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-1px); }

        /* Hero Section */
        .hero { padding: 80px 0; display: flex; align-items: center; gap: 50px; }
        .hero-content { flex: 1.2; }
        .hero-visual { flex: 1; background: var(--gray-light); padding: 40px; border-radius: 24px; }
        
        .badge {
            background: #ffebee;
            color: var(--twilio-red);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        h1 { font-size: 56px; font-weight: 800; line-height: 1.1; margin: 20px 0; letter-spacing: -0.03em; }
        .hero p { font-size: 18px; color: var(--gray-dark); margin-bottom: 30px; }

        /* Stats Bar */
        .stats-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px; margin-top: 40px; border-top: 1px solid var(--border); padding-top: 30px; }
        .stat-item strong { display: block; font-size: 24px; font-weight: 800; }
        .stat-item span { font-size: 13px; color: #666; }

        /* Feature Section */
        .features { padding: 80px 0; background: var(--gray-light); }
        .section-title { text-align: center; font-size: 40px; font-weight: 800; margin-bottom: 50px; }
        .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
        .card { background: white; padding: 32px; border-radius: 12px; border: 1px solid var(--border); height: 100%; }
        .card:hover { border-color: var(--twilio-red); }
        .card-icon { font-size: 32px; margin-bottom: 20px; }
        .card h3 { font-size: 20px; margin-bottom: 12px; }
        .card p { font-size: 14px; color: #555; }

        /* Steps Section */
        .steps { padding: 80px 0; }
        .step-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; }
        .step-num { font-size: 48px; font-weight: 800; color: #eee; line-height: 1; margin-bottom: 10px; }

        /* Pricing Table */
        .pricing { padding: 80px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 30px; }
        th { text-align: left; padding: 20px; border-bottom: 2px solid var(--black); text-transform: uppercase; font-size: 12px; letter-spacing: 1px; }
        td { padding: 20px; border-bottom: 1px solid var(--border); font-size: 15px; }

        /* Visual Elements */
        .mockup-sms { background: white; border-radius: 12px; padding: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-bottom: 15px; border-left: 4px solid var(--twilio-red); }
    </style>
</head>
<body>

    <section class="container hero">
        <div class="hero-content">
            <span class="badge">Trusted Since 2002</span>
            <h1>Blast Your Campaign to<br><span class="text-red">Millions in Minutes</span></h1>
            <p>World's most trusted Promotional SMS platform — reach your entire customer base in under 60 seconds with guaranteed delivery and real-time analytics.</p>
            
            <div style="display: flex; gap: 15px;">
                <div style="display: flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 600;">
                    <span class="text-red">●</span> 1M+ Active Clients
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-item"><strong>99.9%</strong><span>Success Rate</span></div>
                <div class="stat-item"><strong>Billions</strong><span>Messages Delivered</span></div>
                <div class="stat-item"><strong>3sec</strong><span>Avg Delivery</span></div>
                <div class="stat-item"><strong>10K+</strong><span>Resellers</span></div>
            </div>
        </div>
        
        <div class="hero-visual">
    <div class="mb-10 relative transform hover:scale-[1.02] transition-all duration-500">
        <div class="rounded-[2.5rem] overflow-hidden border-[10px] border-white shadow-2xl bg-white">
            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800&q=80" alt="Engagement Tracking">
        </div>
    </div>
    </div>
</div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="section-title">Everything You Need to <span class="text-red">Run Winning Campaigns</span></h2>
            <div class="feature-grid">
                <div class="card">
                    <div class="card-icon">🌐</div>
                    <h3>Unicode & All Languages</h3>
                    <p>Send in Hindi, Japanese, Chinese,German, French, and 1000+ other languages. Full Unicode ensures correct rendering on every device.</p>
                </div>
                <div class="card">
                    <div class="card-icon">⏰</div>
                    <h3>Campaign Scheduling</h3>
                    <p>Schedule campaigns weeks in advance. Set time zones, throttle speed, and auto-pause based on thresholds.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🔗</div>
                    <h3>Powerful API & Webhooks</h3>
                    <p>REST API with SDKs for PHP, Python, Node.js. Real-time delivery webhooks and sandbox testing environment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container pricing">
        <h2 class="section-title" style="text-align: left;">Marketing Bulk SMS(India) <span class="text-red">Pricing</span></h2>
        <p style="margin-bottom:20px;">Lowest rates for bulk marketing campaigns- DLT Registration Mandatory</p>
       <div >
        <table>
            <thead>
                <tr>
                    <th>Quantity</th>
                    <th>Paisa</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><strong>3,00,000</strong></td><td>3.3p</td><td><strong>₹9,900</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=3,00,000&Paisa=3.3p&Total=₹9,900';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>10,00,000</strong></td><td>2.7p</td><td><strong>₹27,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=10,00,000&Paisa=2.7p&Total=₹27,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>50,00,000</strong></td><td>2.5p</td><td><strong>₹1,25,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=50,00,000&Paisa=2.5p&Total=₹125,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>100,00,000</strong></td><td>2p</td><td><strong>₹2,00,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=100,00,000&Paisa=2p&Total=₹200,000';">
            Buy Now
        </button>
    </td>
</tr>
            </tbody>
        </table>
        </div>
    </section>
<section class="steps container">
        <h2 class="section-title">Launch Your Campaign in <span class="text-red">3 Easy Steps</span></h2>
        <div class="step-grid">
            <div>
                <div class="step-num">01</div>
                <h3 style="margin-bottom:10px;">Create Your Account</h3>
                <p style="font-size:14px; color:#555;">First You need to start a demo account to explore the dashboard.</p>
            </div>
            <div>
                <div class="step-num">02</div>
                <h3 style="margin-bottom:10px;">Upload Your Contacts</h3>
                <p style="font-size:14px; color:#555;">Import via CSV/Excel or sync via API. Smart deduplication removes duplicates automatically.</p>
            </div>
            <div>
                <div class="step-num">03</div>
                <h3 style="margin-bottom:10px;">Send & Track Live</h3>
                <p style="font-size:14px; color:#555;">Write your message and hit Send. Watch live delivery reports pour in as you reach millions.</p>
            </div>
        </div>
    </section>
</body>
</html>
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
    "ratingCount": "800"
  }
}
</script>
<?php include('includes/footer.php'); ?>