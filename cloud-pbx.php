<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Cloud PBX for Remote Teams</title>
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

        /* --- NEW HERO LAYOUT - FULL OVERLAY STYLE --- */
        .hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            max-height: 700px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #f8f9ff 0%, #fff5f8 100%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(242,47,70,0.08) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(6,182,212,0.06) 0%, transparent 50%);
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

        /* NEW TEXT PANEL */
        .hero-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
        }

        .hero-badge {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
            padding: 8px 20px;
            background: rgba(242,47,70,0.1);
            border-radius: 50px;
            width: fit-content;
            border: 2px solid rgba(242,47,70,0.2);
        }

        .hero-text h1 {
            font-size: clamp(2.2rem, 4.5vw, 3.2rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1px;
            background: linear-gradient(135deg, var(--black) 0%, #333 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
        }

        .hero-text p {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #555;
            max-width: 520px;
            margin: 0;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .btn-red {
            background: var(--primary);
            color: var(--white);
            padding: 15px 35px;
            text-decoration: none;
            font-weight: 700;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 25px rgba(242, 47, 70, 0.3);
            font-size: 0.95rem;
            border: 2px solid var(--primary);
            position: relative;
            overflow: hidden;
        }

        .btn-red::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .btn-red:hover::before {
            left: 100%;
        }

        .btn-red:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(242, 47, 70, 0.4);
            scale: 1.05;
        }

        /* NEW IMAGE PANEL - CIRCULAR FRAME */
        .hero-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1;
            max-width: 500px;
            margin: 0 auto;
        }

        .hero-image::before {
            content: '';
            position: absolute;
            inset: -20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #F22F46 0%, #06b6d4 50%, #F22F46 100%);
            padding: 4px;
            mask: radial-gradient(farthest-side, transparent calc(40px + 4px), black 0);
            -webkit-mask: radial-gradient(farthest-side, transparent calc(40px + 4px), black 0);
            z-index: -1;
            animation: rotate 20s linear infinite;
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
                0 40px 80px rgba(0,0,0,0.15),
                0 0 0 4px rgba(242,47,70,0.2),
                inset 0 2px 0 rgba(255,255,255,0.8);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-image:hover img {
            transform: scale(1.05) rotateY(5deg);
            box-shadow: 
                0 50px 100px rgba(0,0,0,0.25),
                0 0 0 6px rgba(242,47,70,0.3);
        }

        /* FEATURES SECTION */
        .features {
            padding: 100px 10%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .feature-card {
            padding: 45px 35px;
            background: var(--white);
            border: 2px solid #f1f5f9;
            border-radius: 24px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #06b6d4);
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 18px;
            color: var(--black);
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feature-card h3::before {
            content: '';
            width: 6px;
            height: 24px;
            background: var(--primary);
            border-radius: 3px;
            flex-shrink: 0;
        }

        .feature-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
                padding: 0 8%;
            }
            
            .hero-image {
                max-width: 500px;
                order: -1;
            }
            
            .features {
                padding: 80px 8%;
            }
        }

        @media (max-width: 600px) {
            .hero {
                height: 85vh;
            }
            
            .hero-content {
                padding: 0 5%;
                gap: 30px;
            }
            
            .btn-group {
                justify-content: center;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">Next-Gen Telephony</div>
                <h1>Global Cloud PBX<br>for Remote Teams</h1>
                <p>Move your office phone system to the cloud. Zero hardware, unlimited extensions, and integrated Voice QoS to ensure every call is high-definition.</p>
                <div class="btn-group">
                    <a href="demo" class="btn-red">Get Started Now</a>
                    <a href="pricing" class="btn-red" style="background: transparent; color: var(--primary); border-color: var(--primary);">Watch Pricing</a>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="https://pplx-res.cloudinary.com/image/upload/pplx_search_images/50e83cc968c1fcbe1c7db6c8b14ace8dd8c86ff5.jpg" 
                     alt="Cloud PBX Architecture" />
            </div>
        </div>
    </section>

    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <h3>Fully Hosted PBX</h3>
                <p>Plug-and-play setup. No physical hardware or complex on-premise wiring required for your business.</p>
            </div>

            <div class="feature-card">
                <h3>Auto-Attendant & IVR</h3>
                <p>Build custom menu flows (Press 1 for Sales) to professionalize your brand presence instantly.</p>
            </div>

            <div class="feature-card">
                <h3>Voice QoS Optimized</h3>
                <p>Our infrastructure prioritizes voice traffic over data, ensuring 0% packet loss and HD audio quality.</p>
            </div>

            <div class="feature-card">
                <h3>CRM Integration</h3>
                <p>Sync your call logs and recordings directly with Salesforce, HubSpot, Zoho, and other major platforms.</p>
            </div>

            <div class="feature-card">
                <h3>Conference for 200+</h3>
                <p>Host massive conference calls with clear audio and intuitive participant management tools.</p>
            </div>

            <div class="feature-card">
                <h3>Mobile Softphone</h3>
                <p>Take your office extension anywhere with our dedicated iOS and Android applications.</p>
            </div>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Hosted Cloud PBX System",
  "image": "https://cheapsms.com/assets/images/cloudpbx.png",
  "url": "https://cheapsms.com/cloud-pbx",
  "description": "Replace expensive hardware with a reliable, fully managed Cloud PBX phone system. Access features like extensions, digital receptionists, and remote operations anywhere.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "830"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>