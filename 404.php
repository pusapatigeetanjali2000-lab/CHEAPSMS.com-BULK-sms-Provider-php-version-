<?php
http_response_code(404);
include('includes/header.php');
?>

<style>
.error-page {
    text-align: center;
    padding: 100px 20px;
    font-family: 'Inter', sans-serif;
}
.error-code {
    font-size: 120px;
    font-weight: 800;
    color: #E63946;
    line-height: 1;
}
.error-title {
    font-size: 36px;
    font-weight: 700;
    margin: 20px 0;
    color: #000;
}
.error-desc {
    font-size: 18px;
    color: #4B5563;
    margin-bottom: 40px;
}
.error-links {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    margin-top: 40px;
}
.error-links a {
    padding: 12px 25px;
    background: #fff;
    border: 2px solid #E63946;
    color: #E63946;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}
.error-links a:hover {
    background: #E63946;
    color: #fff;
}
.btn-home {
    display: inline-block;
    padding: 16px 40px;
    background: #E63946;
    color: #fff !important;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 20px;
    border: 2px solid #E63946 !important;
}
</style>

<section class="error-page">
    <div class="error-code">404</div>
    <h1 class="error-title">Page Not Found</h1>
    <p class="error-desc">
        Sorry, the page you are looking for does not exist.<br>
        It may have been moved or deleted.
    </p>

    <!-- ✅ CTA Button -->
    <a href="https://bulksms.ai/" class="btn-home">
        ⚡ Go Back to Home
    </a>

    <!-- ✅ Internal Links to All Pages -->
    <h2 style="margin-top:50px; font-size:22px;">
        Browse Our Services
    </h2>
    <div class="error-links">
        <a href="promotional-bulksms.php">Promotional Bulk SMS</a>
        <a href="transactional-bulksms.php">Transactional SMS</a>
        <a href="gaming-casino-bulksms.php">Gaming Casino SMS</a>
        <a href="twoway-bulksms-services.php">Two Way SMS</a>
        <a href="bulk-whatsapp.php">Bulk WhatsApp</a>
        <a href="whatsapp-business-api-meta.php">WhatsApp Business API</a>
        <a href="rcs-rich-communication-sms-services.php">RCS Messaging</a>
        <a href="voicebroadcasting.php">Voice Broadcasting</a>
        <a href="voip.php">VoIP Service</a>
        <a href="siptrunk.php">SIP Trunk</a>
        <a href="didnumbers.php">DID Numbers</a>
        <a href="voiceqos.php">Voice QoS</a>
        <a href="ivr.php">IVR Service</a>
        <a href="cloudpbx.php">Cloud PBX</a>
        <a href="ms-teams-routing.php">MS Teams Direct Routing</a>
        <a href="white-label-reseller.php">White Label Reseller</a>
        <a href="custom-api-integration.php">Custom API Integration</a>
        <a href="ai-agents.php">AI Agents</a>
        <a href="ai-chatbots.php">AI Chatbots</a>
        <a href="ai-tools.php">AI Tools</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>