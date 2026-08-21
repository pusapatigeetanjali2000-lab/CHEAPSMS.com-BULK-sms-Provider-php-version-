<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing | CheapSMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --twilio-red: #F22F46;
            --black: #000000;
            --white: #FFFFFF;
            --gray-bg: #F8F9FA;
            --text-dim: #666666;
        }

        body {
            background-color: var(--white);
            color: var(--black);
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }

        .pricing-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 100px 20px;
            text-align: center;
        }

        /* Typography */
        h1 {
            font-size: clamp(48px, 8vw, 72px);
            font-weight: 900;
            letter-spacing: -3px;
            margin: 0;
            line-height: 0.95;
        }

        .hero-sub {
            font-size: 20px;
            color: var(--text-dim);
            max-width: 650px;
            margin: 30px auto;
            line-height: 1.6;
        }

        /* Feature Pills - Rounded style from Image 2 */
        .pill-container {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 80px;
        }

        .pill {
            background: var(--gray-bg);
            border: 1px solid #E5E7EB;
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .pill span {
            color: var(--twilio-red);
            font-weight: 800;
        }

        /* Central Enterprise Box */
        .enterprise-card {
            background: var(--black);
            color: var(--white);
            border-radius: 32px;
            padding: 80px 40px;
            margin-top: 20px;
        }

        .enterprise-card h2 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 800;
            letter-spacing: -1px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .enterprise-card p {
            font-size: 18px;
            color: #A0A0A0;
            max-width: 680px;
            margin: 25px auto 45px;
            line-height: 1.6;
        }

        /* Twilio Red Button */
        .btn-red {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--twilio-red);
            color: var(--white);
            text-decoration: none;
            padding: 18px 45px;
            border-radius: 100px;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 25px rgba(242, 47, 70, 0.25);
        }

        .btn-red:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(242, 47, 70, 0.4);
            background-color: #d12439;
        }

        .btn-red i {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            h1 { letter-spacing: -1px; }
            .enterprise-card { padding: 50px 25px; }
        }
    </style>
</head>
<body>

    <main class="pricing-wrapper">
        <h1>For Every Business</h1>
        <p class="hero-sub">
            No hidden fees. No lock-in contracts. Pay only for what you use — with volume discounts that grow with you.
        </p>

        <div class="pill-container">
            <div class="pill"><span>✓</span> No Setup Fee</div>
            <div class="pill"><span>✓</span> No Monthly Minimums</div>
            <div class="pill"><span>✓</span> Volume Discounts Available</div>
            <div class="pill"><span>✓</span> 24/7 Support Included</div>
        </div>

        <section class="enterprise-card">
            <h2>
                <span style="font-size: 1.2em;">💼</span> 
                Enterprise & High-Volume Pricing
            </h2>
            <p>
                To get Best Pricing You Need to Check Instant Demo after Checking Demo we will Place Best quote for based on your Volumes and required Services and countries
            </p>
            
            <a href="demo.php" class="btn-red">
                <span style="margin-right: 8px;">⚡</span> Book Instant Demo — Get Custom Quote
            </a>
        </section>
    </main>
<?php include('includes/footer.php'); ?>

</body>
</html>