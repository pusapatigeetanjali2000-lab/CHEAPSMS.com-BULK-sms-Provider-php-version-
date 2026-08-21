<?php
$page_title = "Contact Us";
$page_desc  = "Get in touch with the Cheapsms.com team for Enterprise SMS, WhatsApp API, and Agentic AI solutions.";
include 'includes/header.php';
?>

<style>
    /* ── PAGE BASE (light theme to match real site) ── */
    .contact-page {
        background: #f4f6f9;
        min-height: 100vh;
    }

    /* ── HERO BANNER ── */
    .contact-hero {
        background: #001433;
        padding: 60px 2rem 60px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .contact-hero::before {
        content: '';
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(77,157,224,0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(77,157,224,0.06) 1px, transparent 1px);
        background-size: 50px 50px;
    }
    .contact-hero-inner {
        position: relative;
        max-width: 700px;
        margin: 0 auto;
    }
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(242,47,70,0.12);
        border: 1px solid rgba(242,47,70,0.3);
        border-radius: 100px;
        padding: 0.3rem 1rem;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #F22F46;
        margin-bottom: 1.25rem;
    }
    .hero-badge::before {
        content: '';
        width: 10px; height: 10px;
        background: #F22F46;
        border-radius: 70%;
        animation: blink 2s infinite;
    }
    @keyframes blink {
        0%,100% { opacity:1; transform:scale(1); }
        50%      { opacity:0.4; transform:scale(1.5); }
    }
    .contact-hero h1 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        line-height: 1.1;
        letter-spacing: -0.02em;
        color: #ffffff;
        margin-bottom: 1rem;
    }
    .contact-hero h1 span { color: #4d9de0; }
    .contact-hero p {
        font-size: 1rem;
        color: #8fa3bf;
        line-height: 1.7;
        max-width: 520px;
        margin: 0 auto;
    }

    /* ── CONTENT WRAPPER ── */
    .contact-content {
        max-width: 1160px;
        margin: 0 auto;
        padding: 3rem 2rem 5rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        align-items: start;
    }
    @media (max-width: 900px) {
        .contact-content { grid-template-columns: 1fr; gap: 2rem; }
    }

    /* ── FLASH MESSAGES ── */
    .flash-wrap {
        max-width: 1160px;
        margin: 1.5rem auto 0;
        padding: 0 2rem;
    }
    .alert-success, .alert-error {
        padding: 0.85rem 1.25rem;
        border-radius: 8px;
        font-size: 0.88rem;
        font-weight: 500;
    }
    .alert-success { background: #e6faf0; border: 1px solid #a3e6c0; color: #1a7a45; }
    .alert-error   { background: #fef0f2; border: 1px solid #f5b8c0; color: #b91c2c; }

    /* ── FORM CARD ── */
    .form-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 2.25rem 2.25rem 2.5rem;
        box-shadow: 0 4px 24px rgba(0,20,51,0.07);
        position: relative;
        overflow: hidden;
    }
    .form-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, #F22F46 0%, #ff7080 60%, transparent 100%);
    }
    .form-card h3 {
        font-size: 1.35rem;
        font-weight: 800;
        color: #001433;
        margin-bottom: 1.75rem;
        letter-spacing: -0.01em;
    }

    /* Form layout */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.25rem;
        margin-bottom: 1.25rem;
    }
    @media (max-width: 560px) { .form-row { grid-template-columns: 1fr; } }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
        margin-bottom: 1.25rem;
    }

    .form-group label {
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #001433;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        font-family: inherit;
        font-size: 0.9rem;
        background: #ffffff;
        border: 1.5px solid #d1d9e1;
        border-radius: 7px;
        padding: 0.8rem 1rem;
        color: #001433;
        outline: none;
        width: 100%;
        transition: border-color 0.2s, box-shadow 0.2s;
        appearance: none;
        -webkit-appearance: none;
    }
    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #aab4c0;
        font-size: 0.88rem;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: #F22F46;
        box-shadow: 0 0 0 3px rgba(242,47,70,0.1);
    }
    .form-group select {
        cursor: pointer;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23001433' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        padding-right: 2.5rem;
        color: #001433;
    }
    .form-group select option { color: #001433; }
    .form-group textarea { resize: vertical; min-height: 130px; }

    .submit-btn {
        width: 100%;
        margin-top: 0.25rem;
        padding: 0.95rem 1rem;
        background: #F22F46;
        color: #ffffff;
        font-family: inherit;
        font-size: 0.85rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
    }
    .submit-btn:hover {
        background: #c9243a;
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(242,47,70,0.3);
    }
    .submit-btn:active { transform: scale(0.98); }

    /* ── INFO SIDE ── */
    .info-side { display: flex; flex-direction: column; gap: 1.25rem; }

    .info-header { margin-bottom: 0.25rem; }
    .info-header h2 {
        font-size: 1.75rem;
        font-weight: 800;
        color: #001433;
        line-height: 1.2;
        margin-bottom: 0.6rem;
        letter-spacing: -0.02em;
    }
    .info-header p { color: #5a6a7e; line-height: 1.7; font-size: 0.92rem; }

    /* Stats strip */
    .stat-strip {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        background: #001433;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #001e4a;
    }
    .stat-item {
        padding: 1.1rem 0.75rem;
        text-align: center;
        border-right: 1px solid rgba(255,255,255,0.08);
    }
    .stat-item:last-child { border-right: none; }
    .stat-num {
        font-size: 1.5rem;
        font-weight: 800;
        color: #F22F46;
        display: block;
        letter-spacing: -0.01em;
    }
    .stat-label {
        font-size: 0.65rem;
        color: #8fa3bf;
        text-transform: uppercase;
        letter-spacing: 0.07em;
        margin-top: 0.2rem;
        display: block;
    }

    /* Contact cards */
    .contact-cards { display: flex; flex-direction: column; gap: 0.85rem; }

    .contact-card {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        border-radius: 12px;
        padding: 1.1rem 1.35rem;
        text-decoration: none;
        color: inherit;
        position: relative;
        overflow: hidden;
        transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
    }
    .contact-card::before {
        content: '';
        position: absolute;
        left: 0; top: 0; bottom: 0;
        width: 3px;
        background: #F22F46;
        opacity: 0;
        transition: opacity 0.2s;
    }
    .contact-card:hover {
        border-color: #F22F46;
        box-shadow: 0 4px 16px rgba(242,47,70,0.1);
        transform: translateX(3px);
    }
    .contact-card:hover::before { opacity: 1; }

    .card-icon {
        width: 42px; height: 42px;
        background: #eef4fb;
        border: 1px solid #d0e4f5;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        color: #001433;
    }
    .card-icon svg { width: 19px; height: 19px; }

    .card-body { flex: 1; min-width: 0; }
    .card-label {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #8fa3bf;
        margin-bottom: 0.2rem;
    }
    .card-sub  { font-size: 0.75rem; color: #8fa3bf; margin-bottom: 0.25rem; }
    .card-value { font-size: 0.97rem; font-weight: 700; color: #001433; }

    /* Address (no link hover) */
    .address-card {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        border-radius: 12px;
        padding: 1.1rem 1.35rem;
    }
    .addr-icon {
        width: 42px; height: 42px;
        background: #eef4fb;
        border: 1px solid #d0e4f5;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        color: #001433;
    }
    .addr-label {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #8fa3bf;
        margin-bottom: 0.4rem;
    }
    .addr-text { font-size: 0.88rem; color: #4a5a6a; line-height: 1.7; }

    /* WhatsApp CTA */
    .whatsapp-cta {
        display: flex; align-items: center; justify-content: space-between;
        background: #001433;
        border: 1.5px solid rgba(37,211,102,0.25);
        border-radius: 12px;
        padding: 1.1rem 1.35rem;
        text-decoration: none;
        color: #ffffff;
        transition: border-color 0.2s, transform 0.2s, box-shadow 0.2s;
    }
    .whatsapp-cta:hover {
        border-color: rgba(37,211,102,0.55);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .wa-left { display: flex; align-items: center; gap: 0.85rem; }
    .wa-icon {
        width: 42px; height: 42px;
        background: #25D366;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .wa-icon svg { width: 22px; height: 22px; fill: #fff; }
    .wa-text { font-size: 0.88rem; font-weight: 700; color: #fff; }
    .wa-text span { display: block; font-size: 0.72rem; font-weight: 400; color: #8fa3bf; margin-top: 0.12rem; }
    .wa-arrow { color: #25D366; font-size: 1.3rem; font-weight: 700; }

    /* Business hours */
    .hours-row {
        display: flex; align-items: center; justify-content: space-between;
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        border-radius: 10px;
        padding: 0.9rem 1.35rem;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .hours-left { font-size: 0.78rem; color: #5a6a7e; }
    .hours-left strong {
        display: block;
        font-size: 0.88rem;
        font-weight: 700;
        color: #001433;
        margin-bottom: 0.15rem;
    }
    .hours-badge {
        display: flex; align-items: center; gap: 0.4rem;
        background: #eef4fb;
        border: 1px solid #d0e4f5;
        border-radius: 100px;
        padding: 0.3rem 0.9rem;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        color: #001433;
        white-space: nowrap;
    }
    .hours-badge::before {
        content: '';
        width: 6px; height: 6px;
        background: #25D366;
        border-radius: 50%;
        animation: blink 2s infinite;
    }
</style>

<div class="contact-page">

    <!-- HERO -->
    <section class="contact-hero">
        <div class="contact-hero-inner">
            <div class="hero-badge">Talk to our team</div>
            <h1>Talk to an <span>Expert.</span></h1>
            <p>Whether you're looking to scale your SMS infrastructure or integrate Agentic AI, our team is here to help you build.</p>
        </div>
    </section>

    <!-- Flash messages -->
    <?php if (!empty($_GET['success'])): ?>
        <div class="flash-wrap"><div class="alert-success">✓ Message sent! We'll get back to you within 2 business hours.</div></div>
    <?php elseif (!empty($_GET['error'])): ?>
        <div class="flash-wrap"><div class="alert-error">✗ Something went wrong. Please try again or email us at <strong>info@cheapsms.com</strong></div></div>
    <?php endif; ?>

    <!-- MAIN GRID -->
    <div class="contact-content">

        <!-- RIGHT: INFO -->
        <div class="info-side">

            <div class="info-header">
                <h2>Global Support,<br>Local Expertise.</h2>
                <p>Join over 1M+ companies using cheapsms.com to build better customer relationships — from instant SMS campaigns to intelligent AI agents.</p>
            </div>

            <!-- Stats -->
            <div class="stat-strip">
                <div class="stat-item">
                    <span class="stat-num">1M+</span>
                    <span class="stat-label">Companies</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">99.9%</span>
                    <span class="stat-label">Uptime SLA</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">&lt;2hrs</span>
                    <span class="stat-label">Avg Response</span>
                </div>
            </div>

            <div class="contact-cards">

                <!-- Phone -->
                <a href="tel:+919000937601" class="contact-card">
                    <div class="card-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div class="card-body">
                        <div class="card-label">Direct Support Line</div>
                        <div class="card-sub">Mon – Sat, 9am – 7pm IST</div>
                        <div class="card-value">Call Us | +91-9000937601</div>
                         <div class="card-value">WhatsApp Us | +91-9000937601</div>
                    </div>
                </a>

                <!-- Email -->
                <a href="mailto:info@cheapsms.com" class="contact-card">
                    <div class="card-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="card-body">
                        <div class="card-label">Email Enquiries</div>
                        <div class="card-sub">General &amp; Sales</div>
                        <div class="card-value">info@cheapsms.com</div>
                    </div>
                </a>

                <!-- Address -->
                <div class="address-card">
                    <div class="addr-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:19px;height:19px">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="addr-label">Corporate Headquarters</div>
                        <div class="addr-text">
                            HYDERABAD-500073<br>
                            INDIA<br>
                        </div>
                    </div>
                </div>

            </div><!-- /.contact-cards -->

            <!-- WhatsApp -->
            <a href="https://wa.me/919000937601" class="whatsapp-cta" target="_blank" rel="noopener">
                <div class="wa-left">
                    <div class="wa-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="wa-text">Chat on WhatsApp
                            <span>Get instant support from our team</span>
                        </div>
                    </div>
                </div>
                <div class="wa-arrow">&#8594;</div>
            </a>
            </div>

        </div><!-- /.info-side -->

    </div><!-- /.contact-content -->
</div><!-- /.contact-page -->

<?php
include 'includes/footer.php';
?>