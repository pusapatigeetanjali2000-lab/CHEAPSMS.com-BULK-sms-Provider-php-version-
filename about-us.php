<?php
$page_title = "About Us";
$page_desc  = "We are a team of developers, thinkers, and innovators based in Hyderabad, building the world's most trusted customer engagement platform.";
include 'includes/header.php';
?>

<style>
    /* ── PAGE BASE ── */
    .about-page {
        background: #f4f6f9;
        min-height: 100vh;
    }

    /* ── HERO ── */
    .about-hero {
        background: #001433;
        padding: 90px 2rem 80px;
        position: relative;
        overflow: hidden;
    }
    .about-hero::before {
        content: '';
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(77,157,224,0.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(77,157,224,0.06) 1px, transparent 1px);
        background-size: 50px 50px;
        pointer-events: none;
    }
    .about-hero-inner {
        position: relative;
        max-width: 1160px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }
    @media (max-width: 860px) {
        .about-hero-inner { grid-template-columns: 1fr; gap: 2.5rem; }
        .hero-img-wrap    { display: none; }
    }
    .about-hero h1 {
        font-size: clamp(2.8rem, 6vw, 5rem);
        font-weight: 800;
        line-height: 1.05;
        letter-spacing: -0.03em;
        color: #ffffff;
        margin-bottom: 1.25rem;
    }
    .about-hero h1 span { color: #4d9de0; }
    .about-hero p {
        font-size: 1.05rem;
        color: #8fa3bf;
        line-height: 1.75;
        max-width: 480px;
    }
    .hero-img-wrap {
        position: relative;
    }
    .hero-img-glow {
        position: absolute;
        inset: -40px;
        background: rgba(77,157,224,0.08);
        filter: blur(40px);
        border-radius: 50%;
        pointer-events: none;
    }
    .hero-img-wrap img {
        position: relative;
        width: 100%;
        border-radius: 14px;
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 24px 60px rgba(0,0,0,0.4);
        transform: rotate(1.5deg);
        display: block;
    }

    /* ── MISSION ── */
    .mission-section {
        background: #ffffff;
        padding: 5rem 2rem;
        text-align: center;
        border-bottom: 1px solid #e8edf3;
    }
    .section-eyebrow {
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #F22F46;
        margin-bottom: 1.25rem;
    }
    .mission-section h2 {
        font-size: clamp(1.6rem, 3.5vw, 2.5rem);
        font-weight: 800;
        color: #001433;
        line-height: 1.3;
        max-width: 780px;
        margin: 0 auto 1.75rem;
        letter-spacing: -0.02em;
    }
    .red-rule {
        width: 56px; height: 3px;
        background: #F22F46;
        border-radius: 2px;
        margin: 0 auto;
    }

    /* ── STATS ── */
    .stats-section {
        background: #ffffff;
        padding: 0 2rem 5rem;
    }
    .stats-grid {
        max-width: 1160px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.25rem;
    }
    @media (max-width: 760px) { .stats-grid { grid-template-columns: repeat(2,1fr); } }

    .stat-card {
        background: #f4f6f9;
        border-top: 4px solid transparent;
        border-radius: 0 0 10px 10px;
        padding: 2rem 1.75rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .stat-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,20,51,0.08); }
    .stat-card.blue   { border-color: #4d9de0; }
    .stat-card.green  { border-color: #22c55e; }
    .stat-card.red    { border-color: #F22F46; }
    .stat-card.yellow { border-color: #f59e0b; }

    .stat-card h3 {
        font-size: 2.4rem;
        font-weight: 800;
        color: #001433;
        letter-spacing: -0.02em;
        margin-bottom: 0.4rem;
    }
    .stat-card p {
        font-size: 0.68rem;
        font-weight: 700;
        color: #8fa3bf;
        letter-spacing: 0.12em;
        text-transform: uppercase;
    }

    /* ── STORY SECTION ── */
    .story-section {
        background: #f4f6f9;
        padding: 5rem 2rem;
        border-top: 1px solid #e8edf3;
        border-bottom: 1px solid #e8edf3;
    }
    .story-inner {
        max-width: 1160px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 5rem;
        align-items: center;
    }
    @media (max-width: 860px) { .story-inner { grid-template-columns: 1fr; gap: 2.5rem; } }

    .story-img {
        width: 100%;
        height: 460px;
        object-fit: cover;
        border-radius: 14px;
        box-shadow: 0 16px 48px rgba(0,20,51,0.12);
        display: block;
    }

    .story-content h2 {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 800;
        color: #001433;
        line-height: 1.25;
        letter-spacing: -0.02em;
        margin-bottom: 1.25rem;
    }
    .story-content p {
        font-size: 0.97rem;
        color: #5a6a7e;
        line-height: 1.8;
        margin-bottom: 2rem;
    }
    .story-content p strong { color: #001433; font-weight: 700; }

    .feature-list { display: flex; flex-direction: column; gap: 1.25rem; }
    .feature-item { display: flex; align-items: flex-start; gap: 0.9rem; }
    .feature-icon {
        width: 24px; height: 24px;
        flex-shrink: 0;
        margin-top: 1px;
        color: #F22F46;
    }
    .feature-item h4 {
        font-size: 0.92rem;
        font-weight: 700;
        color: #001433;
        margin-bottom: 0.2rem;
    }
    .feature-item p { font-size: 0.85rem; color: #8fa3bf; margin: 0; line-height: 1.6; }

    /* ── CONTACT + MAP ── */
    .contact-section {
        background: #ffffff;
        padding: 5rem 2rem;
        border-top: 1px solid #e8edf3;
    }
    .contact-inner {
        max-width: 1160px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2.5rem;
        align-items: stretch;
    }
    @media (max-width: 860px) { .contact-inner { grid-template-columns: 1fr; } }

    .contact-info-card {
        background: #001433;
        border-radius: 14px;
        padding: 2.75rem;
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .contact-info-card::before {
        content: '';
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(77,157,224,0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(77,157,224,0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        pointer-events: none;
    }
    .contact-info-card h3 {
        font-size: 1.6rem;
        font-weight: 800;
        margin-bottom: 2rem;
        position: relative;
        letter-spacing: -0.01em;
    }
    .contact-info-card h3::after {
        content: '';
        display: block;
        width: 40px; height: 3px;
        background: #F22F46;
        border-radius: 2px;
        margin-top: 0.6rem;
    }

    .contact-detail {
        display: flex;
        align-items: flex-start;
        gap: 1.1rem;
        padding: 1.25rem 0;
        border-bottom: 1px solid rgba(255,255,255,0.07);
        position: relative;
    }
    .contact-detail:last-child { border-bottom: none; padding-bottom: 0; }

    .detail-icon {
        width: 40px; height: 40px;
        background: rgba(77,157,224,0.12);
        border: 1px solid rgba(77,157,224,0.2);
        border-radius: 9px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        color: #4d9de0;
        font-size: 1.1rem;
    }
    .detail-icon svg { width: 18px; height: 18px; }

    .detail-body { flex: 1; }
    .detail-label {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #8fa3bf;
        margin-bottom: 0.35rem;
    }
    .detail-text {
        font-size: 0.88rem;
        color: rgba(255,255,255,0.75);
        line-height: 1.65;
    }
    .detail-text a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.97rem;
        transition: color 0.2s;
    }
    .detail-text a:hover { color: #F22F46; }

    .map-wrap {
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0,20,51,0.1);
        min-height: 420px;
        border: 1.5px solid #e2e8f0;
    }
    .map-wrap iframe { width: 100%; height: 100%; min-height: 420px; display: block; border: 0; }
</style>

<div class="about-page">

    <!-- ── HERO ── -->
    <section class="about-hero">
        <div class="about-hero-inner">
            <div>
                <h1>We are <br><span>CHEAPSMS.com</span></h1>
                <p>A team of developers, thinkers, and innovators building the world's most trusted customer engagement CpaaS platform.</p>
            </div>
            <div class="hero-img-wrap">
                <div class="hero-img-glow"></div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" alt="Our Team">
            </div>
        </div>
    </section>

    <!-- ── MISSION ── -->
    <section class="mission-section">
        <div class="section-eyebrow">Our Mission</div>
        <h2>To eliminate the noise in digital communication and deliver intelligent interactions that move businesses forward.</h2>
        <div class="red-rule"></div>
    </section>

    <!-- ── STATS ── -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-card blue">
                <h3>10B+</h3>
                <p>Messages Yearly</p>
            </div>
            <div class="stat-card green">
                <h3>99.9%</h3>
                <p>Global Delivery</p>
            </div>
            <div class="stat-card red">
                <h3>180+</h3>
                <p>Countries</p>
            </div>
            <div class="stat-card yellow">
                <h3>2ms</h3>
                <p>API Latency</p>
            </div>
        </div>
    </section>

    <!-- ── STORY ── -->
    <section class="story-section">
        <div class="story-inner">
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop"
                     alt="Collaboration" class="story-img">
            </div>
            <div class="story-content">
                <h2>Built for the next generation of autonomous business.</h2>
                <p>Founded in Hyderabad, CHEAPSMS.com leverages <strong>Agentic Reasoning</strong> to ensure every character sent serves a strategic purpose. We are building the nervous system for businesses that need to scale without losing the human touch.</p>

                <div class="feature-list">
                    <div class="feature-item">
                        <svg class="feature-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4>Developer First</h4>
                            <p>Robust APIs designed by engineers for engineers.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <svg class="feature-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4>AI Driven</h4>
                            <p>Real-time sentiment analysis and automated routing.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <svg class="feature-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4>Enterprise Grade</h4>
                            <p>99.9% uptime SLA with dedicated support across 180+ countries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CONTACT + MAP ── -->
    <section class="contact-section">
        <div class="contact-inner">

            <div class="contact-info-card">
                <h3>Get in touch</h3>

                <div class="contact-detail">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="detail-body">
                        <div class="detail-label">Reach Us Physically</div>
                        <div class="detail-text">
                           HYDERABAD-500073<br>
                           INDIA<br>
                        </div>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="detail-body">
                        <div class="detail-label">Reach Us Digitally</div>
                        <div class="detail-text">
                            info@cheapsms.com</a>
                        </div>
                    </div>
                </div>

                <div class="contact-detail">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div class="detail-body">
                        <div class="detail-label">Call Us</div>
                        <div class="detail-text">
                            <a href="tel:+91-9000937601">+91-9000937601</a>
                        </div>
                        <div class="detail-body">
                        <div class="detail-label">WhatsApp Us</div>
                        <div class="detail-text">
                            <a href="tel:+91-9000937601">+91-9000937601</a>
                        </div>
                    </div>
                </div>

            </div><!-- /.contact-info-card -->

        </div>
    </section>

</div><!-- /.about-page -->

<?php
include 'includes/footer.php';
?>