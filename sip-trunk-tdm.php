<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reliable SIP Trunking</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46;
            --black: #000000;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        
        body { background-color: #fff; color: var(--black); overflow-x: hidden; }

        /* HERO - FIXED LAYOUT */
        .hero {
            display: flex;
            align-items: center;
            min-height: 550px;
            width: 100%;
            overflow: hidden; /* Prevents children from leaking out */
        }

        .hero-text {
            width: 50%; /* Strictly half the screen */
            padding: 60px 5% 60px 10%;
            flex-shrink: 0; /* Prevents the image from squeezing the text */
        }

        .hero-text h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #444;
            max-width: 480px;
            line-height: 1.6;
        }

        .btn-red {
            background: var(--primary);
            color: #fff;
            padding: 16px 35px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 4px;
            display: inline-block;
        }

        /* IMAGE - FIXED TO REMOVE OVERLAP */
        .svc {
            width: 50%; /* Strictly the other half */
            height: 550px; /* Matches hero min-height */
            flex-shrink: 0;
        }

        .svc-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Features Section */
        .features {
            padding: 80px 10%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            background: #f9f9f9;
        }
        .feature-card {
            padding: 40px;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
        }

        /* Tablet/Mobile Fix */
        @media (max-width: 992px) {
            .hero { flex-direction: column; }
            .hero-text, .svc { width: 100%; height: auto; }
            .hero-text { text-align: center; padding: 60px 5%; }
            .hero-text p { margin: 0 auto 30px; }
            .svc { height: 350px; }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-text">
            <h1>Reliable SIP Trunking <br><span style="color: var(--primary)">Integrated QoS</span></h1>
            <p>Connect your on-premise PBX to our global Tier-1 network. Experience crystal-clear calls with built-in Voice Quality of Service (QoS).</p>
            <a href="demo" class="btn-red">Deploy SIP Trunk</a>
        </div>
        
        <div class="svc">
            <img class="svc-img"
                 src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80&w=800"
                 alt="Infrastructure"/>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <h3 style="color:var(--primary); margin-bottom:15px;">High Density Trunking</h3>
            <p>Support for thousands of concurrent calls with zero congestion.</p>
        </div>
        <div class="feature-card">
            <h3 style="color:var(--primary); margin-bottom:15px;">Built-in Voice QoS</h3>
            <p>Priority voice packets prioritized at every hop.</p>
        </div>
        <div class="feature-card">
            <h3 style="color:var(--primary); margin-bottom:15px;">Global SIP PoPs</h3>
            <p>Localized media routing for minimum latency.</p>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "High-Availability SIP Trunking Services",
  "image": "https://cheapsms.com/assets/images/sip-trunk.png",
  "url": "https://cheapsms.com/sip-trunking",
  "description": "Connect your on-premise PBX systems directly to our global PSTN gateways using flexible SIP Trunks. Experience high concurrent call capacity, low operational costs, and crystal-clear voice clarity.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "540"
  }
}
</script>
<?php include('includes/footer.php'); ?>
</body>
</html>