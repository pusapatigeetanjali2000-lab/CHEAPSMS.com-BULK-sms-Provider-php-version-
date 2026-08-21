<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactional & OTP SMS | Cheapsms.com</title>
    
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
            overflow-x: hidden; /* Prevent horizontal scroll */
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
            text-align: center;
        }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-1px); }

        /* Hero Section */
        .hero { padding: 100px 0; display: flex; align-items: center; gap: 50px; flex-wrap: wrap; }
        .hero-content { flex: 1.2; min-width: 320px; }
        .hero-visual { flex: 1; background: var(--gray-light); padding: 40px; border-radius: 24px; min-width: 320px; width: 100%; }
        
        .badge {
            background: #ffebee;
            color: var(--twilio-red);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            display: inline-block;
        }

        h1 { font-size: 56px; font-weight: 800; line-height: 1.1; margin: 20px 0; letter-spacing: -0.03em; }
        .hero p { font-size: 18px; color: var(--gray-dark); margin-bottom: 30px; }

        /* Stats Bar */
        .stats-grid { display: flex; gap: 40px; margin-top: 40px; border-top: 1px solid var(--border); padding-top: 30px; }
        .stat-item strong { display: block; font-size: 24px; font-weight: 800; }
        .stat-item span { font-size: 13px; color: #666; }

        /* Feature Cards */
        .features { padding: 80px 0; background: var(--gray-light); }
        .section-title { text-align: center; font-size: 40px; font-weight: 800; margin-bottom: 50px; }
        .feature-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; }
        .card { background: white; padding: 32px; border-radius: 12px; border: 1px solid var(--border); transition: 0.3s; height: 100%; }
        .card:hover { border-color: var(--twilio-red); }
        .card-icon { font-size: 32px; margin-bottom: 20px; }
        .card h3 { font-size: 20px; margin-bottom: 12px; }
        .card p { font-size: 14px; color: #555; }

                /* Pricing Table */
        .pricing { padding: 80px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 30px; }
        th { text-align: left; padding: 20px; border-bottom: 2px solid var(--black); text-transform: uppercase; font-size: 12px; letter-spacing: 1px; }
        td { padding: 20px; border-bottom: 1px solid var(--border); font-size: 15px; }

        /* Visual Elements */
        .mockup-sms { background: white; border-radius: 12px; padding: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-bottom: 15px; border-left: 4px solid var(--twilio-red); }

        /* Phone Mockup Styling */
        .mockup-card { background: white; border-radius: 16px; padding: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); margin-bottom: 20px; }

        /* --- MOBILE RESPONSIVE QUERIES --- */
        @media (max-width: 992px) {
            .hero { padding: 60px 0; text-align: center; justify-content: center; }
            .hero-content { order: 1; margin-bottom: 40px; }
            .hero-visual { order: 2; padding: 20px; }
            .hero div[style*="display: flex"] { justify-content: center; flex-wrap: wrap; }
            .stats-grid { justify-content: center; gap: 20px; }
            h1 { font-size: 40px; }
        }

        @media (max-width: 600px) {
            h1 { font-size: 32px; }
            .section-title { font-size: 28px; }
            .stats-grid { flex-wrap: wrap; gap: 15px; }
            .stat-item { flex: 1 1 40%; }
            .mockup-card { margin-left: 0 !important; }
            .btn-primary { width: 100%; }
        }
    </style>
</head>
<body>

    <section class="container hero">
        <div class="hero-content">
            <span class="badge">Priority Route · Sub-3 Second Delivery</span>
            <h1>Deliver OTPs in<br><span class="text-red">Under 3 Seconds</span></h1>
            <p>No.1 fastest Transactional & OTP SMS platform — sub-3-second delivery, 99.99% uptime, 24/7 unrestricted sending, and dedicated priority routes.</p>
            
            <div style="display: flex; gap: 15px;">
                <div style="display: flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 600;">
                    <span class="text-red">●</span> 200+ Networks Connected
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-item"><strong>&lt;3sec</strong><span>OTP Delivery</span></div>
                <div class="stat-item"><strong>99.99%</strong><span>Delivery Rate</span></div>
                <div class="stat-item"><strong>24/7</strong><span>No Restrictions</span></div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="mockup-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <span style="font-size: 12px; font-weight: 700; color: #666;">📱 MYBANK OTP</span>
                    <span style="font-size: 11px; color: #27ae60; font-weight: 700;">Delivered in 1.8s</span>
                </div>
                <p style="font-size: 13px; color: #444; margin-bottom: 8px;">Your OTP for login is:</p>
                <div style="font-size: 32px; font-weight: 800; letter-spacing: 6px; margin: 10px 0;">7 4 2 8 1 9</div>
                <p style="font-size: 11px; color: #999;">Valid for 10 minutes. Do not share with anyone.</p>
            </div>

            <div class="mockup-card" style="margin-left: 30px; border-left: 4px solid var(--twilio-red);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <span style="font-size: 12px; font-weight: 700;">🛒 SHOPEZY ALERT</span>
                </div>
                <p style="font-size: 13px; color: #444;">Order #ORD9284 confirmed! $14 paid. Delivery by Tue 11 Mar. Track: bit.ly/xyz</p>
                <div style="text-align: right; font-size: 11px; color: #999; margin-top: 5px;">2:47 PM · Delivered ✓✓</div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="section-title">Built for <span class="text-red">Speed, Security & Scale</span></h2>
            <div class="feature-grid">
                <div class="card">
                    <div class="card-icon">⚡</div>
                    <h3>Sub-3 Second OTP Delivery</h3>
                    <p>Dedicated priority routes bypass standard queues. Our infrastructure processes 10,000+ OTPs per second with intelligent load balancing.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🔄</div>
                    <h3>Intelligent Failover</h3>
                    <p>Real-time delivery monitoring with automatic route switching in milliseconds to maintain 99.99% SLA.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🔒</div>
                    <h3>Bank-Grade Security</h3>
                    <p>256-bit SSL encryption. TLS 1.3 in transit, AES-256 at rest. ISO 27001 certified infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container pricing">
        <h2 class="section-title" style="text-align: left;">Transactional SMS/OTP Messagging(India)</h2>
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
                <tr><td><strong>10,000</strong></td><td>25p</td><td><strong>₹2,500</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=10,000&Paisa=25p&Total=₹2,500';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>25,000</strong></td><td>20p</td><td><strong>₹5,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=25,000&Paisa=20p&Total=₹5,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>50,000</strong></td><td>18p</td><td><strong>₹9,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=50,000&Paisa=18p&Total=9,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>1,00,000</strong></td><td>16p</td><td><strong>₹16,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=1,00,000&Paisa=16p&Total=₹16,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>2,00,000</strong></td><td>15p</td><td><strong>₹30,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=2,00,000&Paisa=15p&Total=₹30,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>5,00,000</strong></td><td>14p</td><td><strong>₹70,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=5,00,000&Paisa=14p&Total=₹70,000';">
            Buy Now
        </button>
    </td>
</tr>
                <tr><td><strong>10,00,000</strong></td><td>13p</td><td><strong>₹1,30,000</strong></td><td><button 
            type="button" 
            class="btn-primary" 
            style="padding: 8px 16px; font-size: 12px; background-color: #F22F46; color: white; border: none; border-radius: 4px; cursor: pointer; font-family: 'Inter', sans-serif; font-weight: 600;" 
            onclick="window.location.href='payment.php?Quantity=10,00,000&Paisa=13p&Total=₹130,000';">
            Buy Now
        </button>
    </td>
</tr>
            </tbody>
        </table>
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
    "ratingCount": "1520"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>