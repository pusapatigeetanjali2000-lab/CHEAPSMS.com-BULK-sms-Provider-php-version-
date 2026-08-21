<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global DID & Toll-Free Numbers</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46;
            --black: #000000;
            --white: #FFFFFF;
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

        /* Hero Section */
        .hero {
            padding: 80px 10%; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 550px;
            gap: 40px;
            background: linear-gradient(135deg, #fff 70%, #fff5f6 100%);
        }

        /* Increased flex for text to prevent awkward wrapping */
        .hero-text {
            flex: 1.4;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: -1.5px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #333;
            line-height: 1.6;
        }

        .btn-red {
            background: var(--primary);
            color: var(--white);
            padding: 16px 35px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 4px;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(242, 47, 70, 0.2);
        }

        .btn-red:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(242, 47, 70, 0.3);
            opacity: 0.95;
        }

        /* Reduced flex for image container */
        .hero-image {
            flex: 0.8; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-image svg {
            width: 100%;
            height: auto;
            max-width: 420px; /* Constraints the size */
            filter: drop-shadow(0 15px 30px rgba(0,0,0,0.08));
        }

        /* Feature Grid */
        .features {
            padding: 40px 10% 80px;
            display: flex;
            flex-wrap: wrap; 
            gap: 20px;
            justify-content: flex-start;
        }

        .feature-card {
            flex: 1 1 calc(25% - 20px);
            min-width: 250px;
            padding: 30px;
            background: var(--white);
            border: 1px solid #eee;
            border-radius: 12px;
            transition: 0.3s ease;
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .feature-card h3 {
            font-size: 1.15rem;
            margin-bottom: 12px;
            color: var(--primary);
            font-weight: 700;
        }

        .feature-card p {
            font-size: 0.9rem;
            color: #555;
            line-height: 1.5;
        }

        @media (max-width: 1200px) {
            .feature-card { flex: 1 1 calc(33.33% - 20px); }
        }

        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
                padding: 100px 5% 60px;
                min-height: auto;
            }
            .hero-text h1 { font-size: 2.5rem; }
            .hero-image { margin-top: 40px; }
            .feature-card { flex: 1 1 calc(50% - 20px); }
        }

        @media (max-width: 600px) {
            .feature-card { flex: 1 1 100%; }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-text">
            <div style="color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 11px; margin-bottom: 10px;">Virtual Telephony</div>
            <h1>Global DID & <br>Toll-Free Numbers</h1>
            <p>Establish a local presence anywhere in the world. Our virtual numbers come with integrated Voice QoS to ensure incoming customer calls are always crystal clear.</p>
            <a href="demo" class="btn-red">Browse Numbers</a>
        </div>
        
        <div class="hero-image">
            <svg viewBox="0 0 500 450" xmlns="http://www.w3.org/2000/svg">
                <circle cx="250" cy="225" r="180" fill="#F22F46" fill-opacity="0.04"/>
                
                <circle cx="250" cy="200" r="120" fill="white" stroke="#eee" stroke-width="2"/>
                <ellipse cx="250" cy="200" rx="50" ry="120" fill="none" stroke="#f0f0f0" stroke-width="2"/>
                <line x1="130" y1="200" x2="370" y2="200" stroke="#f0f0f0" stroke-width="2"/>
                
                <circle cx="200" cy="140" r="6" fill="#F22F46"/>
                <circle cx="310" cy="170" r="6" fill="#F22F46"/>
                <circle cx="230" cy="260" r="6" fill="#F22F46"/>
                
                <g>
                    <rect x="280" y="80" width="140" height="45" rx="22.5" fill="white" filter="drop-shadow(0 4px 6px rgba(0,0,0,0.1))"/>
                    <text x="350" y="108" font-family="Inter" font-size="14" font-weight="600" text-anchor="middle" fill="#333">+1 (800) TOLL-FREE</text>
                </g>
                <g>
                    <rect x="60" y="240" width="130" height="45" rx="22.5" fill="white" filter="drop-shadow(0 4px 6px rgba(0,0,0,0.1))"/>
                    <text x="125" y="268" font-family="Inter" font-size="14" font-weight="600" text-anchor="middle" fill="#333">+91 (22) LOCAL</text>
                </g>
                <g>
                    <rect x="300" y="280" width="120" height="45" rx="22.5" fill="#F22F46" />
                    <text x="360" y="308" font-family="Inter" font-size="14" font-weight="600" text-anchor="middle" fill="white">Global DID</text>
                </g>

                <rect x="230" y="160" width="40" height="70" rx="8" fill="white" stroke="#333" stroke-width="3"/>
                <circle cx="250" cy="215" r="4" fill="#333"/>
            </svg>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <h3>1800 & 1860 Numbers</h3>
            <p>Toll-free numbers for professional customer support in India.</p>
        </div>
        <div class="feature-card">
            <h3>Global Reach</h3>
            <p>Provision DID numbers instantly across 100+ countries worldwide.</p>
        </div>
        <div class="feature-card">
            <h3>Indian Local Presence</h3>
            <p>Get virtual phone numbers for any major Indian city for remote teams.</p>
        </div>
        <div class="feature-card">
            <h3>Flexible Routing</h3>
            <p>Route incoming calls seamlessly to any mobile, landline, or SIP endpoint.</p>
        </div>
        <div class="feature-card">
            <h3>Built-in Voice QoS</h3>
            <p>We prioritize inbound media traffic to eliminate lag and jitter on every call.</p>
        </div>
        <div class="feature-card">
            <h3>Zero Downtime Porting</h3>
            <p>Port your existing numbers to our network with guaranteed service continuity.</p>
        </div>
        <div class="feature-card">
            <h3>SMS Enabled</h3>
            <p>Receive SMS on your virtual numbers for 2FA and customer communication.</p>
        </div>
        <div class="feature-card">
            <h3>Call Analytics</h3>
            <p>Call recording, voicemail, and real-time dashboard analytics included.</p>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Global DID Numbers & Virtual Lines",
  "image": "https://cheapsms.com/assets/images/did-numbers.png",
  "url": "https://cheapsms.com/did-numbers",
  "description": "Establish a localized business identity worldwide with virtual DID numbers. Instantly deploy local, national, and toll-free inbound phone numbers across 100+ countries.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "410"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>