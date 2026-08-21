<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions | CHEAPSMS.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .term-card {
            margin-bottom: 2.5rem;
            text-align: center;
        }
        .term-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #001433;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .term-body {
            color: #4a5568;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <section class="pt-32 pb-20 px-6 text-center bg-[#001433] text-white">
        <div class="max-w-3xl mx-auto">
            <span class="text-[#F22F46] text-xs font-bold tracking-[0.3em] uppercase mb-4 block">
                Service Agreement
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 tracking-tight">
                Terms & Conditions.
            </h1>
            <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                By accessing the cheapsms.com neural grid, you agree to the following protocols.
            </p>
        </div>
    </section>

    <main class="max-w-4xl mx-auto px-6 py-20">
        <div class="bg-white p-10 md:p-16 rounded-2xl shadow-xl border border-gray-100">
            
            <?php
            // Defining the terms in an array for easy management
            $terms = [
                [
                    "title" => "1. Account Provisioning",
                    "content" => "Access to BULKSMS.ai services requires a valid account. You are responsible for maintaining the confidentiality of your API keys and neural agent configurations. Any activity performed under your credentials is your sole responsibility."
                ],
                [
                    "title" => "2. Acceptable Use Policy (AUP)",
                    "content" => "Our Agentic AI must not be used for phishing, scamming, or sending unsolicited marketing 'spam.' We enforce a zero-tolerance policy for content that violates global telecommunication laws or local TRAI regulations in India."
                ],
                [
                    "title" => "3. Credit Expiration & Billing",
                    "content" => "SMS credits purchased on the platform are valid for the duration specified at the time of purchase. Credits are non-transferable and non-refundable once neural processing has commenced for a campaign."
                ],
                [
                    "title" => "4. Intellectual Property",
                    "content" => "The software, neural models, and proprietary routing logic used by BULKSMS.ai are protected by international copyright laws. Users are granted a limited, revocable license to access the API for messaging purposes only."
                ],
                [
                    "title" => "5. Governing Law",
                    "content" => "These terms are governed by the laws of India. Any disputes arising from the use of this service shall be subject to the exclusive jurisdiction of the courts located in **Hyderabad, Telangana**."
                ]
            ];

            // Loop through the terms and render them
            foreach ($terms as $term) {
                echo '<div class="term-card">';
                echo '    <h3 class="term-title">' . htmlspecialchars($term['title']) . '</h3>';
                echo '    <p class="term-body">' . $term['content'] . '</p>';
                echo '</div>';
                
                // Add a subtle divider between items, except the last one
                if ($term !== end($terms)) {
                    echo '<hr class="w-16 mx-auto my-8 border-gray-200">';
                }
            }
            ?>

            <div class="mt-16 text-center text-gray-400 text-sm">
                Last Updated: <?php echo date("F d, Y"); ?>
            </div>
        </div>
    </main>

</body>
</html>

<?php include 'includes/footer.php'; ?>