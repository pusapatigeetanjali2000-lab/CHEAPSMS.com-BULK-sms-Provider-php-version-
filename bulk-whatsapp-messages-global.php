<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk WhatsApp Marketing | High Capacity Cloud Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-red: #E63946;
            --deep-black: #000000;
            --pure-white: #FFFFFF;
            --soft-gray: #F9F9F9;
            --border-color: #EEEEEE;
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--deep-black);
            background-color: var(--pure-white);
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* HERO SECTION */
        .hero { padding: 100px 0 60px; text-align: center; border-bottom: 1px solid var(--border-color); }
        .badge { background: var(--brand-red); color: white; padding: 6px 15px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; }
        h1 { font-size: 4rem; font-weight: 900; margin: 20px 0; line-height: 1.1; letter-spacing: -2px; }
        h1 span { color: var(--brand-red); }
        .hero p { font-size: 1.25rem; color: #444; max-width: 800px; margin: 0 auto 40px; }

        .btn { padding: 18px 40px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; transition: 0.2s; font-size: 1.1rem; }
        .btn-black { background: var(--deep-black); color: white; }
        .btn-black:hover { background: var(--brand-red); }

        /* STATS BAR */
        .stats-bar { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 60px; text-align: center; }
        .stat-item h2 { font-size: 2.8rem; margin: 0; font-weight: 900; color: var(--deep-black); }
        .stat-item p { color: var(--brand-red); font-weight: 700; margin-top: 5px; text-transform: uppercase; font-size: 0.8rem; }

        /* CAPABILITIES SECTION */
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2.5rem; font-weight: 800; }
        
        .capabilities-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .cap-item { padding: 20px; border: 1px solid var(--border-color); border-radius: 10px; display: flex; align-items: flex-start; gap: 15px; transition: 0.3s; }
        .cap-item:hover { border-color: var(--brand-red); background: var(--soft-gray); }
        .check-icon { color: var(--brand-red); font-weight: bold; font-size: 1.2rem; }

        /* IMAGE COMPOSITION */
        .image-showcase { margin-top: 80px; text-align: center; }
        .main-ui-img { width: 100%; border-radius: 20px; box-shadow: 0 30px 60px rgba(0,0,0,0.12); border: 1px solid var(--border-color); }
        .grid-images { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px; }
        .grid-images img { width: 100%; border-radius: 12px; height: 350px; object-fit: cover; border: 1px solid var(--border-color); }

        /* CTA SECTION */
        .cta-footer { background: var(--deep-black); color: white; padding: 80px 0; text-align: center; margin-top: 80px; }
        .cta-footer h2 { font-size: 3rem; margin-bottom: 30px; }
        .btn-red { background: var(--brand-red); color: white; }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .stats-bar { grid-template-columns: 1fr 1fr; }
            .grid-images { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <section class="whatsapp-hero">
    <div class="hero-container">
        <span class="promo-badge">ENTERPRISE SOLUTION</span>
        
        <h1 class="main-title">
            Send Bulk WhatsApp <br>
            <span class="text-red">in a Single Click</span>
        </h1>
        
        <p class="sub-text">
            Scale your outreach from 1,000 to 1 Million messages instantly. 
            Access our high-capacity Cloud Webpanel with zero hardware setup.
        </p>
        
        <div class="hero-actions">
            <a href="demo" class="btn-primary">Check Demo</a>
        </div>

        <div class="stats-wrapper">
            <div class="stat-box">
                <span class="stat-number">99%</span>
                <span class="stat-label">OPEN RATE</span>
            </div>
            <div class="stat-box">
                <span class="stat-number">24/7</span>
                <span class="stat-label">ENGAGEMENT</span>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS FIXES */
.whatsapp-hero {
    background: #ffffff;
    padding: 100px 0;
    position: relative;
    overflow: hidden; /* This prevents elements from bleeding out */
    text-align: center;
    width: 100%;
}

.hero-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 10; /* Ensures text is always on top */
}

.promo-badge {
    background: #E63946;
    color: white;
    padding: 6px 15px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.8rem;
}

.main-title {
    font-family: 'Inter', sans-serif;
    font-size: 4rem;
    font-weight: 900;
    line-height: 1.1;
    margin: 20px 0;
    color: #000;
}

.text-red { color: #E63946; }

.sub-text {
    font-size: 1.2rem;
    color: #555;
    max-width: 750px;
    margin: 0 auto 40px;
}

.btn-primary {
    background: #000;
    color: #fff;
    padding: 15px 35px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    display: inline-block;
}

.stats-wrapper {
    display: flex;
    justify-content: center;
    gap: 80px;
    margin-top: 60px;
    border-top: 1px solid #eee;
    padding-top: 40px;
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: 800;
    color: #000;
}

.stat-label {
    color: #E63946;
    font-weight: 700;
    font-size: 0.8rem;
}

/* Fix for mobile */
@media (max-width: 768px) {
    .main-title { font-size: 2.5rem; }
    .stats-wrapper { flex-direction: column; gap: 30px; }
}
</style>

    <section class="container" style="padding: 80px 0;">
        <div class="section-title">
            <h2>WhatsApp Capabilities</h2>
        </div>
        
        <div class="capabilities-grid">
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>Virtual Number Delivery</strong><p>Send without using your personal SIM.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>Rich Media Support</strong><p>Send 4 images, 1 PDF, and 1 Video in one blast.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>1600 Characters</strong><p>Long-form message support for detailed campaigns.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>CSV / Excel Import</strong><p>Manage thousands of contacts effortlessly.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>Real-Time Tracking</strong><p>Monitor delivery status and read receipts live.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>Interactive Buttons</strong><p>Boost engagement with Quick Reply buttons.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>No Spam Filters</strong><p>Direct-to-inbox delivery with 99.9% uptime.</p></div></div>
            <div class="cap-item"><span class="check-icon">✔</span><div><strong>Smart Scheduling</strong><p>Automate sends for peak engagement hours.</p></div></div>
        </div>

        <div class="image-showcase">
            <img src="https://images.unsplash.com/photo-1611746872915-64382b5c76da?w=1200&q=80" alt="Cloud Dashboard UI" class="main-ui-img">
            <div class="grid-images">
                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=800&q=80" alt="Engagement Tracking">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&q=80" alt="Bulk Communication">
            </div>
        </div>
    </section>

    <section class="cta-footer">
        <div class="container">
            <h2>Build the Future of Communication</h2>
            <p style="margin-bottom: 40px; opacity: 0.8;">Join 5,000+ businesses using our high-throughput WhatsApp Cloud Panel.</p>
            <a href="demo" class="btn btn-red">Get Your Demo Today</a>
        </div>
    </section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Bulk WhatsApp Marketing Services",
  "image": "https://cheapsms.com/assets/images/bulk-whatsapp.png",
  "url": "https://cheapsms.com/bulk-whatsapp",
  "description": "Send high-volume WhatsApp marketing campaigns, promotional offers, and customer engagement messages globally using our reliable and cost-effective broadcast panels.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "640"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>