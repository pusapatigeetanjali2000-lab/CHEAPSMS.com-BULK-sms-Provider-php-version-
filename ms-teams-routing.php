<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft Teams Direct Routing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #F22F46;
            --teams-purple: #5059C9;
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

        /* --- HERO SECTION --- */
        .teams-hero-wrapper {
            display: flex;
            align-items: center; 
            justify-content: space-between;
            min-height: 550px; 
            width: 100%;
            padding: 0; 
            background: var(--white);
            overflow: hidden;
        }

        .teams-content {
            flex: 1;
            padding: 100px 5% 100px 10%; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            z-index: 2;
        }

        .kicker {
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .teams-content h1 {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            letter-spacing: -1px;
        }

        .teams-content h1 span {
            color: var(--primary);
        }

        .teams-content p {
            font-size: 1.15rem;
            line-height: 1.6;
            margin-bottom: 35px;
            color: #333;
        }

        .btn-teams {
            background: var(--primary);
            color: var(--white);
            padding: 16px 40px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 4px;
            display: inline-block;
            transition: 0.3s ease;
            width: fit-content;
        }

        .btn-teams:hover {
            opacity: 0.9;
        }

        /* --- IMAGE & SVG CONTAINER --- */
        .teams-image-container {
            flex: 1;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background: #f8fafc; /* Matches the SVG background */
            height: 100%;
            min-height: 550px;
        }

        .teams-image-container svg {
            max-width: 480px;
            width: 100%;
            height: auto;
            z-index: 1;
        }

        /* Floating Badge */
        .certified-badge {
            position: absolute;
            top: 40px;
            right: 40px;
            background: #fff;
            padding: 12px 20px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 10;
        }

        .certified-badge .dot {
            width: 8px;
            height: 8px;
            background: #6264A7;
            border-radius: 50%;
        }

        .certified-badge span {
            font-weight: 800;
            font-size: 12px;
            color: #000;
        }

        /* --- FEATURE GRID --- */
        .features {
            padding: 80px 10%;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .feature-card {
            flex: 1 1 calc(33.333% - 20px);
            min-width: 280px;
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .feature-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .feature-card h3 {
            color: var(--primary);
            margin-bottom: 12px;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .teams-hero-wrapper {
                flex-direction: column;
            }
            .teams-content {
                padding: 80px 10%;
                text-align: center;
                align-items: center;
            }
            .teams-image-container {
                width: 100%;
                min-height: 400px;
                padding: 60px 20px;
            }
            .certified-badge {
                top: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>

<section class="teams-hero-wrapper">
    <div class="teams-content">
        <div class="kicker">Unified Communications</div>
        <h1>Microsoft Teams <br><span>Direct Routing</span></h1>
        <p>Unlock the full power of Microsoft Teams as your business phone system. Connect to the PSTN worldwide with 40-60% cost savings compared to native Microsoft calling plans.</p>
        <a href="demo" class="btn-teams">Enable Teams Calling ⚡</a>
    </div>

    <div class="teams-image-container">
        
        <div class="certified-badge">
            <div class="dot"></div>
            <span>Teams Certified</span>
        </div>

        <svg viewBox="0 0 500 350" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="500" height="350" rx="30" fill="#f8fafc"/>

            <rect x="80" y="60" width="340" height="230" rx="20" fill="white" filter="url(#shadow)"/>
            <defs>
                <filter id="shadow" x="-10%" y="-10%" width="120%" height="130%">
                    <feDropShadow dx="0" dy="4" stdDeviation="8" flood-color="#5059C9" flood-opacity="0.12"/>
                </filter>
            </defs>

            <ellipse cx="250" cy="155" rx="130" ry="90" fill="#5059C9" fill-opacity="0.08"/>

            <rect x="178" y="82" width="96" height="96" rx="18" fill="#5059C9"/>
            <rect x="198" y="99" width="56" height="12" rx="4" fill="white"/>
            <rect x="218" y="111" width="16" height="54" rx="4" fill="white"/>

            <circle cx="298" cy="118" r="22" fill="#7B83EB"/>
            <circle cx="298" cy="110" r="9" fill="white" fill-opacity="0.9"/>
            <path d="M281 136 Q298 126 315 136" stroke="white" stroke-width="3" stroke-linecap="round" fill="none" opacity="0.9"/>

            <text x="250" y="208" text-anchor="middle" fill="#5059C9" style="font: bold 18px sans-serif; letter-spacing:0.5px">Microsoft Teams</text>

            <text x="250" y="228" text-anchor="middle" fill="#888" style="font: 13px sans-serif;">Chat · Meet · Collaborate</text>

            <rect x="160" y="255" width="180" height="38" rx="10" fill="#5059C9"/>
            <text x="250" y="279" text-anchor="middle" fill="white" style="font: bold 14px sans-serif;">MS TEAMS</text>

            <circle cx="110" cy="300" r="6" fill="#5059C9" fill-opacity="0.3"/>
            <circle cx="130" cy="300" r="4" fill="#7B83EB" fill-opacity="0.3"/>
            <circle cx="390" cy="300" r="6" fill="#5059C9" fill-opacity="0.3"/>
            <circle cx="370" cy="300" r="4" fill="#7B83EB" fill-opacity="0.3"/>
        </svg>
    </div>
</section>

<section class="features">
    <div class="feature-card">
        <h3>Direct PSTN Calling</h3>
        <p>Make and receive external calls directly from your Microsoft Teams interface with global reach.</p>
    </div>
    <div class="feature-card">
        <h3>Major Cost Savings</h3>
        <p>Reduce telephony overhead by 40-60% compared to native Microsoft calling subscriptions.</p>
    </div>
    <div class="feature-card">
        <h3>Managed SBC Service</h3>
        <p>Hosted Session Border Controller (SBC) infrastructure, fully managed by our technical experts.</p>
    </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Microsoft Teams Direct Routing Integration",
  "image": "https://cheapsms.com/assets/images/ms-teams-routing.png",
  "url": "https://cheapsms.com/ms-teams-routing",
  "description": "Unlock external call functionalities inside Microsoft Teams. Use direct voice routing setups to make and receive global business calls natively within the Teams UI.",
  "brand": {
    "@type": "Brand",
    "name": "CHEAPSMS.COM"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "220"
  }
}
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>