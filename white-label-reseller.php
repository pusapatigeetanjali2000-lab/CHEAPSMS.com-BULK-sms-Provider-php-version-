<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>White-Label Reseller Program</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46;
            --black: #000000;
            --white: #FFFFFF;
            --bg-light: #F8F9FA;
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

        /* --- NEW HERO LAYOUT - PARTNERSHIP THEME --- */
        .hero {
            position: relative;
            height: 75vh;
            min-height: 550px;
            max-height: 750px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #fff8f9 0%, #f0f9ff 50%, #f8fafc 100%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(242,47,70,0.1) 0%, transparent 40%),
                radial-gradient(circle at 70% 70%, rgba(6,182,212,0.08) 0%, transparent 40%);
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
            gap: 60px;
            align-items: center;
            height: 100%;
        }

        /* PARTNERSHIP TEXT PANEL */
        .hero-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 24px;
        }

        .hero-badge {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-size: 14px;
            padding: 10px 24px;
            background: rgba(242,47,70,0.12);
            border-radius: 50px;
            width: fit-content;
            border: 2px solid rgba(242,47,70,0.25);
            box-shadow: 0 4px 15px rgba(242,47,70,0.15);
        }

        .hero-text h1 {
            font-size: clamp(2.4rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -1.2px;
            background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 70%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
        }

        .hero-text p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #4a5568;
            max-width: 550px;
            margin: 0;
            font-weight: 400;
        }

        .btn-group {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
            padding: 16px 40px;
            text-decoration: none;
            font-weight: 700;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(242, 47, 70, 0.35);
            font-size: 1rem;
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
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.35), transparent);
            transition: left 0.6s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 20px 40px rgba(242, 47, 70, 0.45);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary);
            padding: 16px 40px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            border: 2px solid rgba(242,47,70,0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.4s ease;
            font-size: 1rem;
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(242, 47, 70, 0.3);
        }

        /* RESSELLER IMAGE - PARTNERSHIP RING DESIGN */
        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1.1;
            max-width: 520px;
            margin: 0 auto;
        }

        .hero-image::before {
            content: '';
            position: absolute;
            inset: -25px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, #F22F46, #06b6d4, #10b981, #F22F46);
            padding: 6px;
            mask: radial-gradient(farthest-side, transparent calc(45px + 6px), black 0);
            -webkit-mask: radial-gradient(farthest-side, transparent calc(45px + 6px), black 0);
            z-index: -1;
            animation: rotate 25s linear infinite reverse;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 
                0 50px 100px rgba(0,0,0,0.2),
                0 0 0 6px rgba(255,255,255,0.8),
                inset 0 4px 20px rgba(255,255,255,0.9);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            clip-path: circle(48%);
        }

        .hero-image:hover img {
            transform: scale(1.08) rotate(2deg);
            box-shadow: 
                0 60px 120px rgba(0,0,0,0.3),
                0 0 0 8px rgba(242,47,70,0.2);
            clip-path: circle(50%);
        }

        /* FEATURES SECTION - RESSELLER CARDS */
        .features {
            padding: 120px 10%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 35px;
            margin-top: 70px;
        }

        .feature-card {
            padding: 50px 40px;
            background: linear-gradient(145deg, #ffffff 0%, #fafbfc 100%);
            border: 2px solid #f8fafc;
            border-radius: 28px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), #06b6d4, var(--primary));
            border-radius: 28px 28px 0 0;
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 40px 80px rgba(0,0,0,0.15);
            background: linear-gradient(145deg, #ffffff 0%, #fdfdfd 100%);
        }

        .feature-card h3 {
            font-size: 1.45rem;
            margin-bottom: 20px;
            color: var(--black);
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-card h3::before {
            content: '→';
            color: var(--primary);
            font-size: 1.8rem;
            font-weight: bold;
            flex-shrink: 0;
        }

        .feature-card p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.75;
            margin: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 50px;
                text-align: center;
                padding: 0 8%;
            }
            
            .hero-image {
                max-width: 420px;
                order: -1;
            }
            
            .features {
                padding: 100px 8%;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 600px) {
            .hero {
                height: 90vh;
            }
            
            .hero-content {
                padding: 0 6%;
                gap: 35px;
            }
            
            .btn-group {
                justify-content: center;
            }
            
            .features-grid {
                gap: 25px;
            }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">Partner Program</div>
                <h1>Start Your Own<br>Reseller Business Today</h1>
                <p>Launch your brand with our White-Label Reseller program. We provide the infrastructure, and the global routes—you provide the brand.</p>
                <div class="btn-group">
                    <a href="demo" class="btn-primary">Become our Reseller</a>
                    <a href="pricing.php" class="btn-secondary">View Pricing</a>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1000" 
                     alt="White-Label Business Partnership" />
            </div>
        </div>
    </section>

    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <h3>White-Label Platform</h3>
                <p>Completely rebrand our portal with your logo and domain. Your clients never see our name.</p>
            </div>

            <div class="feature-card">
                <h3>Infrastructure Access</h3>
                <p>Leverage our high-density voice and SMS infrastructure without investing in heavy hardware.</p>
            </div>

            <div class="feature-card">
                <h3>Global Voice Routes</h3>
                <p>Access premium Tier-1 global routes at wholesale rates to maximize your profit margins.</p>
            </div>

            <div class="feature-card">
                <h3>Integrated Billing</h3>
                <p>Automated billing system for your customers with real-time credit management and reporting.</p>
            </div>

            <div class="feature-card">
                <h3>24/7 Tech Support</h3>
                <p>Our expert team works behind the scenes to ensure your reseller business runs smoothly around the clock.</p>
            </div>

            <div class="feature-card">
                <h3>Instant Scalability</h3>
                <p>Grow your business from ten users to ten thousand without worrying about capacity limits.</p>
            </div>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "White-Label Telecom & SMS Reseller Program",
  "image": "https://cheapsms.com/assets/images/whitelabel-reseller.png",
  "url": "https://cheapsms.com/whitelabel-reseller",
  "description": "Start your own communication business with our fully branded white-label reselling panels. Set your own pricing models for SMS, voice, and API gateways.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "680"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>