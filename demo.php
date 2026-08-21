<?php include('includes/header.php'); ?>

<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Exo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
        /* ===== Cheapsms.com — SIGNUP PAGE — WHITE THEME ===== */
        :root {
            --primary:    #F22F46;
            --secondary:  #1A3A6B;
            --accent:     #C0392B;
            --navy:       #0D1B2E;
            --green:      #00A65A;
            --text:       #111827;
            --text-muted: #4B5563;
            --bg:         #FFFFFF;
            --bg-soft:    #F8F9FC;
            --bg-card:    #FFFFFF;
            --border:     rgba(26,58,107,0.14);
            --border-red: rgba(242,47,70,0.25);
            --shadow-lg:  0 12px 48px rgba(26,58,107,0.10);
        }

        body, html { background: #fff !important; color: #111827 !important; }

        /* Force all text dark on white background */
        body *, .demo-wrap * { color: inherit; }
        p, li, label, span, h1, h2, h3, h4, div { color: #111827; }

        /* Let header.php control its own mobile nav */

        .demo-wrap {
            min-height: 100vh; padding-top: 80px;
            position: relative; overflow-x: hidden; z-index: 1;
            background: #fff; font-family: 'Exo 2', sans-serif;
        }
        .demo-bg-canvas { display: none; }
        .floating-orb    { display: none; }

        /* STICKY FOOTER */
        .sticky-footer-btn {
            position: fixed; bottom: 0; left: 0; right: 0; z-index: 9990;
            background: rgba(255,255,255,0.97);
            border-top: 1.5px solid var(--border-red);
            padding: 12px 20px; display: flex; align-items: center;
            justify-content: center; gap: 14px;
            backdrop-filter: blur(12px);
            box-shadow: 0 -4px 20px rgba(242,47,70,0.10);
        }
        .sticky-footer-btn .sfb-text { font-family:'Rajdhani',sans-serif; font-size:13px; color:var(--text-muted); white-space:nowrap; }
        .sfb-text span { color: var(--green); font-weight: 700; }
        .btn-sticky-submit {
            display: inline-flex; align-items: center; gap: 9px;
            padding: 13px 36px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 60%, var(--navy) 100%);
            color: #fff; border: none; border-radius: 50px; cursor: pointer;
            font-family: 'Rajdhani', sans-serif; font-weight: 700; font-size: 17px;
            letter-spacing: 0.5px; position: relative; overflow: hidden; white-space: nowrap;
            box-shadow: 0 6px 20px rgba(242,47,70,0.30);
            animation: stickyGlow 2.2s ease-in-out infinite;
        }
        @keyframes stickyGlow {
            0%,100% { box-shadow: 0 6px 20px rgba(242,47,70,0.30); }
            50%      { box-shadow: 0 10px 32px rgba(242,47,70,0.50); transform: translateY(-1px); }
        }
        .btn-sticky-submit::before {
            content:''; position:absolute; top:-50%; left:-60%;
            width:35%; height:200%; background:rgba(255,255,255,0.2);
            transform:skewX(-22deg); animation:shimmer 3s ease-in-out infinite;
        }
        @keyframes shimmer { 0%{left:-60%} 55%{left:120%} 100%{left:120%} }
        .btn-sticky-submit:hover { transform:translateY(-2px) scale(1.03); transition:all .2s; }
        .demo-wrap { padding-bottom: 90px !important; }

        @media(max-width:600px){
            .sticky-footer-btn .sfb-text { display:none; }
            .btn-sticky-submit { font-size:15px; padding:13px 24px; width:100%; justify-content:center; }
            .sticky-footer-btn { padding:10px 14px; }
        }

        /* HERO */
        .demo-hero {
            position:relative; z-index:1; text-align:center;
            padding: 44px 20px 28px;
            background: linear-gradient(180deg, #fff 0%, #F8F9FC 100%);
            border-bottom: 1px solid var(--border);
        }
        .hero-tags { display:flex; justify-content:center; gap:10px; flex-wrap:wrap; margin-bottom:22px; }
        .htag { padding:5px 16px; border-radius:20px; font-size:11px; font-weight:700; letter-spacing:1.2px; text-transform:uppercase; font-family:'Rajdhani',sans-serif; }
        .htag-o { background:rgba(242,47,70,0.08);  border:1px solid rgba(242,47,70,0.35);  color:#C0392B; }
        .htag-c { background:rgba(26,58,107,0.07);  border:1px solid rgba(26,58,107,0.28);  color:#1A3A6B; }
        .htag-g { background:rgba(0,166,90,0.08);   border:1px solid rgba(0,166,90,0.35);   color:#007A42; }

        .hero-stats { display:flex; gap:28px; margin-top:24px; flex-wrap:wrap; justify-content:center; align-items:center; }
        .stat-item  { text-align:center; }
        .stat-num {
            font-family:'Rajdhani',sans-serif; font-size:28px; font-weight:700;
            background:linear-gradient(90deg,var(--primary),var(--secondary));
            -webkit-background-clip:text; -webkit-text-fill-color:transparent;
        }
        .stat-label { font-size:11px; color:var(--text-muted); text-transform:uppercase; letter-spacing:1px; margin-top:2px; }
        .trust-row  { display:flex; justify-content:center; align-items:center; gap:22px; flex-wrap:wrap; margin-top:16px; }
        .trust-chip { display:flex; align-items:center; gap:6px; font-size:12px; color:var(--text-muted); }

        /* SERVING BAR */
        .serving-bar {
            position:relative; z-index:10; margin-top:24px; width:100%;
            text-align:center; padding:11px 20px;
            font-family:'Rajdhani',sans-serif; font-size:14px; font-weight:700;
            color:var(--text);
            background:linear-gradient(90deg,transparent,rgba(242,47,70,0.04) 30%,rgba(26,58,107,0.04) 70%,transparent);
            border-top:1px solid rgba(242,47,70,0.20);
            border-bottom:1px solid var(--border); overflow:hidden;
        }
        .serving-bar::after {
            content:''; position:absolute; bottom:0; left:0; right:0; height:2px;
            background:linear-gradient(90deg,var(--primary),var(--secondary),var(--accent),var(--primary));
            background-size:300% 100%; animation:rainbow 3s linear infinite;
        }
        @keyframes rainbow { 0%{background-position:0%} 100%{background-position:300%} }
        .sb-num { font-size:17px; font-weight:700; background:linear-gradient(90deg,var(--primary),var(--secondary)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; margin:0 2px; }
        .sb-flags { display:inline-block; margin:0 10px; font-size:15px; letter-spacing:3px; }
        .sb-dots  { display:inline-flex; align-items:center; gap:4px; margin:0 8px; vertical-align:middle; }
        .sb-dots span { width:5px; height:5px; border-radius:50%; display:inline-block; animation:dotPop 1.2s ease-in-out infinite; }
        .sb-dots span:nth-child(1){ background:var(--primary);   animation-delay:0s; }
        .sb-dots span:nth-child(2){ background:var(--secondary); animation-delay:0.2s; }
        .sb-dots span:nth-child(3){ background:var(--green);     animation-delay:0.4s; }
        @keyframes dotPop { 0%,100%{transform:scale(1)} 50%{transform:scale(1.7)} }

        /* STEP BAR */
        .step-bar { display:flex; align-items:flex-start; justify-content:center; margin-bottom:32px; position:relative; z-index:1; padding:0 20px; }
        .step { display:flex; flex-direction:column; align-items:center; }
        .step-dot { width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-family:'Rajdhani',sans-serif; font-weight:700; font-size:15px; border:2px solid #E5E7EB; color:#9CA3AF; background:#F9FAFB; z-index:1; }
        .step.active .step-dot { background:linear-gradient(135deg,var(--primary),var(--accent)); border-color:var(--primary); color:#fff; box-shadow:0 0 14px rgba(242,47,70,0.30); }
        .step.done   .step-dot { background:var(--green); border-color:var(--green); color:#fff; }
        .step-label { font-size:10px; color:var(--text-muted); margin-top:6px; text-align:center; white-space:nowrap; font-family:'Rajdhani',sans-serif; font-weight:600; }
        .step.active .step-label { color:var(--primary); }
        .step.done   .step-label { color:var(--green); }
        .step-line { width:55px; height:2px; background:#E5E7EB; margin-top:-15px; flex-shrink:0; }
        .step-line.done { background:linear-gradient(90deg,var(--green),var(--secondary)); }

        /* FORM WRAP */
        .demo-card-wrap { position:relative; z-index:1; max-width:980px; margin:0 auto; padding:32px 20px 70px; background:#F8F9FC; }

        /* FORM CARD */
        .demo-card {
            background:#fff; border:1px solid #DDE2EF;
            border-radius:20px; padding:44px 40px;
            box-shadow:var(--shadow-lg); position:relative; overflow:hidden;
        }
        .demo-card::before {
            content:''; position:absolute; top:0; left:0; right:0; height:4px;
            background:linear-gradient(90deg,var(--primary),var(--accent),var(--secondary),var(--primary));
            background-size:300% 100%; animation:rainbow 5s linear infinite;
        }

        /* SECTION TITLES */
        .fst { display:flex; align-items:center; gap:13px; margin:36px 0 18px; padding-bottom:12px; border-bottom:1.5px solid #EEF1F8; }
        .fst:first-of-type { margin-top:0; }
        .fst-ico { width:40px; height:40px; border-radius:11px; display:flex; align-items:center; justify-content:center; font-size:19px; flex-shrink:0; }
        .ico-o { background:rgba(242,47,70,0.08);  border:1px solid rgba(242,47,70,0.22); }
        .ico-g { background:rgba(0,166,90,0.08);   border:1px solid rgba(0,166,90,0.22); }
        .ico-p { background:rgba(26,58,107,0.07);  border:1px solid rgba(26,58,107,0.18); }
        .fst-txt h3 { font-family:'Rajdhani',sans-serif; font-size:18px; font-weight:700; color:var(--text); }
        .fst-txt p  { font-size:12px; color:var(--text-muted); margin-top:2px; }

        /* FIELDS */
        .fg2 { display:grid; grid-template-columns:1fr 1fr; gap:18px; }
        .col-full { grid-column:1/-1; }
        .fw { display:flex; flex-direction:column; gap:6px; }
        .fw label { font-size:11px; font-weight:700; color:var(--text-muted); text-transform:uppercase; letter-spacing:1.2px; font-family:'Rajdhani',sans-serif; display:flex; align-items:center; gap:5px; }
        .fw label .req { color:var(--primary); font-size:14px; line-height:1; }
        .fw input, .fw select {
            width:100%; padding:12px 15px; background:#FAFBFF;
            border:1.5px solid #DDE2EF; border-radius:10px;
            color:var(--text); font-family:'Exo 2',sans-serif; font-size:14px;
            outline:none; transition:all .22s; box-sizing:border-box;
        }
        .fw input::placeholder { color:#A0AEC0; }
        .fw input:focus, .fw select:focus { border-color:var(--primary); background:#fff; box-shadow:0 0 0 3px rgba(242,47,70,0.10); }
        .fw select {
            appearance:none; cursor:pointer;
            background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23F22F46' stroke-width='2' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
            background-repeat:no-repeat; background-position:right 14px center;
            padding-right:38px; background-color:#FAFBFF;
        }
        .fw select optgroup { background-color:#fff; color:#1A3A6B; font-weight:700; }
        .fw select option   { background-color:#fff; color:#111827; }

        /* PHONE ROW */
        .phone-row { display:flex; gap:10px; align-items:center; width:100%; }
        .phone-row select { flex:0 0 160px; width:160px; padding:12px 10px; background:#FAFBFF; border:1.5px solid #DDE2EF; border-radius:10px; color:var(--text); font-family:'Exo 2',sans-serif; font-size:13px; outline:none; cursor:pointer; appearance:auto; box-sizing:border-box; }
        .phone-row input[type="tel"] { flex:1; min-width:0; padding:12px 15px; background:#FAFBFF; border:1.5px solid #DDE2EF; border-radius:10px; color:var(--text); font-family:'Exo 2',sans-serif; font-size:14px; outline:none; box-sizing:border-box; transition:all .22s; }
        .phone-row select:focus, .phone-row input[type="tel"]:focus { border-color:var(--primary); background:#fff; box-shadow:0 0 0 3px rgba(242,47,70,0.10); }

        /* CHIPS */
        .vchips { display:flex; flex-wrap:wrap; gap:8px; }
        .vchip { padding:7px 15px; border-radius:20px; cursor:pointer; font-size:13px; font-family:'Rajdhani',sans-serif; font-weight:600; border:1.5px solid #DDE2EF; background:#F8F9FC; color:var(--text-muted); transition:all .2s; user-select:none; }
        .vchip:hover { border-color:var(--secondary); color:var(--secondary); background:#EEF3FF; }
        .vchip.sel { background:rgba(242,47,70,0.07); border-color:var(--primary); color:var(--primary); }

        /* CHECKBOX GRID */
        .cbgrid { display:grid; grid-template-columns:repeat(auto-fill,minmax(195px,1fr)); gap:10px; }
        .ci { display:flex; align-items:center; gap:10px; padding:10px 13px; background:#FAFBFF; border:1px solid #E5E9F5; border-radius:10px; cursor:pointer; transition:all .2s; font-size:13px; color:var(--text-muted); user-select:none; font-family:'Exo 2',sans-serif; }
        .ci:hover { background:#EEF3FF; border-color:rgba(26,58,107,0.28); color:var(--text); }
        .ci.on    { background:rgba(0,166,90,0.06); border-color:rgba(0,166,90,0.38); color:#007A42; }
        .ci .cbox { width:18px; height:18px; border-radius:5px; border:2px solid currentColor; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:10px; font-weight:800; }
        .fdiv { height:1px; background:#EEF1F8; margin:28px 0; }

        /* CONFIRM BOX */
        #confirmBox { background:#F8F9FC; border:1px solid #DDE2EF; border-radius:14px; padding:20px; margin:24px 0 0; }

        /* RESPONSIVE */
        @media(max-width:768px){
            .demo-card { padding:24px 16px; }
            .fg2 { grid-template-columns:1fr; }
            .col-full { grid-column:1; }
            .cbgrid { grid-template-columns:1fr 1fr; }
            .step-line { width:28px; }
            .phone-row select { flex:0 0 130px; width:130px; font-size:12px; padding:11px 6px; }
        }
        @media(max-width:500px){ .step-line { width:18px; } }
        @media(max-width:480px){ .phone-row select { flex:0 0 100px !important; width:100px !important; font-size:11px !important; padding:10px 4px !important; } }
        @media(max-width:440px){ .cbgrid { grid-template-columns:1fr; } }
</style>

<div class="demo-wrap">

    <!-- HERO -->
    <div class="demo-hero">
        <div class="hero-tags">
            <span class="htag htag-g">🟢 Instant Access</span>
            <span class="htag htag-o">⚡ Live in 30 Mins</span>
            <span class="htag htag-c">🔒 100% Secure</span>
        </div>

        <div class="hero-stats">
            <div class="stat-item"><div class="stat-num">AI</div><div class="stat-label">Automation</div></div>
            <div class="stat-item"><div class="stat-num">1000+</div><div class="stat-label">AI Tools</div></div>
            <div class="stat-item"><div class="stat-num">200+</div><div class="stat-label">Countries</div></div>
            <div class="stat-item"><div class="stat-num">99.9%</div><div class="stat-label">Uptime</div></div>
        </div>

        <div class="serving-bar">
            🌍 Serving <span class="sb-num">200+</span> Countries
            <span class="sb-dots"><span></span><span></span><span></span></span>
            <span class="sb-flags">🇮🇳 🇺🇸 🇬🇧 🇦🇪 🇸🇬 🇦🇺 🇸🇦 🇶🇦 🇩🇪 🇫🇷 🇨🇦 🇧🇷 🇯🇵 🇿🇦 🇳🇬</span>
        </div>

        <div class="trust-row">
            <div class="trust-chip">🔐 100% Secure</div>
            <div class="trust-chip">📞 24/7 Support</div>
        </div>
    </div>

    <!-- REVIEWS -->
    <div style="max-width:900px;margin:28px auto 0;padding:0 20px;">
        <div style="text-align:center;margin-bottom:16px;">
            <div style="font-family:'Rajdhani',sans-serif;font-weight:700;font-size:20px;color:var(--text);margin-bottom:10px;">⭐ What Our Customers Say</div>
            <div style="display:flex;justify-content:center;gap:10px;flex-wrap:wrap;">
                <div style="display:inline-flex;align-items:center;gap:6px;background:#FFFBF0;border:1px solid rgba(251,188,5,0.3);border-radius:20px;padding:5px 14px;">
                    <svg width="14" height="14" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                    <span style="color:#D4A017;font-size:12px;">★★★★★</span>
                    <span style="color:var(--text-muted);font-size:12px;">4.9 · Google 2000+ Reviews</span>
                </div>
                <div style="display:inline-flex;align-items:center;gap:6px;background:#F0FFF8;border:1px solid rgba(0,182,122,0.3);border-radius:20px;padding:5px 14px;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="3" fill="#00B67A"/><path d="M12 4l2.09 6.26H20l-5.27 3.84 2.02 6.23L12 16.27l-4.75 4.06 2.02-6.23L4 10.26h5.91L12 4z" fill="white"/></svg>
                    <span style="color:#00A070;font-size:12px;">★★★★★</span>
                    <span style="color:var(--text-muted);font-size:12px;">4.8 · Trustpilot 1200+ Reviews</span>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM -->
    <form id="demoForm" >
        <div class="demo-card-wrap">
            <div class="step-bar">
                <div class="step done"><div class="step-dot">✓</div><div class="step-label">Your Details</div></div>
                <div class="step-line done"></div>
                <div class="step active"><div class="step-dot">2</div><div class="step-label">Services</div></div>
                <div class="step-line"></div>
                <div class="step"><div class="step-dot">3</div><div class="step-label">Submit</div></div>
                <div class="step-line"></div>
                <div class="step"><div class="step-dot">4</div><div class="step-label">Demo Live!</div></div>
            </div>

            <div class="demo-card">

                <!-- Personal Info -->
                <div class="fst"><div class="fst-ico ico-o">👤</div><div class="fst-txt"><h3>Personal Information</h3><p>We'll use this to create your demo account and send login credentials</p></div></div>
                <div class="fg2">
                    <div class="fw"><label>Full Name <span class="req">*</span></label><input type="text" id="fname" name="full_name" placeholder="e.g. Shyam Kumar"></div>
                    <div class="fw"><label>Email Address <span class="req">*</span></label><input type="email" id="email" name="email" placeholder="shyam@yourcompany.com"></div>
                    <div class="fw" style="grid-column:1/-1;">
                        <label>WhatsApp / Mobile <span class="req">*</span></label>
                        <div class="phone-row">
                            <select id="ccode" name="country_code">
                                <option value="+91">🇮🇳 +91</option><option value="+1">🇺🇸 +1</option>
                                <option value="+44">🇬🇧 +44</option><option value="+971">🇦🇪 +971</option>
                                <option value="+65">🇸🇬 +65</option><option value="+61">🇦🇺 +61</option>
                                <option value="+60">🇲🇾 +60</option><option value="+966">🇸🇦 +966</option>
                                <option value="+974">🇶🇦 +974</option><option value="+965">🇰🇼 +965</option>
                                <option value="+973">🇧🇭 +973</option><option value="+968">🇴🇲 +968</option>
                                <option value="+49">🇩🇪 +49</option><option value="+33">🇫🇷 +33</option>
                                <option value="+86">🇨🇳 +86</option><option value="+81">🇯🇵 +81</option>
                                <option value="+92">🇵🇰 +92</option><option value="+880">🇧🇩 +880</option>
                                <option value="+94">🇱🇰 +94</option><option value="+977">🇳🇵 +977</option>
                                <option value="+55">🇧🇷 +55</option><option value="+27">🇿🇦 +27</option>
                                <option value="+234">🇳🇬 +234</option><option value="+254">🇰🇪 +254</option>
                                <option value="+66">🇹🇭 +66</option><option value="+62">🇮🇩 +62</option>
                            </select>
                            <input type="tel" id="mobile" name="mobile" placeholder="98765 43210">
                        </div>
                    </div>
                    <div class="fw"><label>Country <span class="req">*</span></label><input type="text" id="country" name="country" placeholder="Enter your country" autocomplete="country-name"></div>
                    <div class="fw"><label>Company / Business Name</label><input type="text" id="company" name="company_name" placeholder="Your Company Pvt. Ltd."></div>
                    <div class="fw" style="display:none"><label>Company Located At</label>
                    <input type="text" id="company_location" name="company_location" placeholder="City, State, Country"></div>
                </div>

                <!-- Services -->
                <div class="fst"><div class="fst-ico ico-g">🚀</div><div class="fst-txt"><h3>Services Required</h3><p>Select your primary service — we'll demo this first</p></div></div>
                <div class="fg2">
                    <div class="fw col-full">
                        <label>Primary Service for Demo <span class="req">*</span></label>
                        <select id="primary_svc" name="primary_service">
                            <option value="">— Choose Primary Service —</option>
                            <optgroup label="📱 Bulk SMS">
                                <option>Promo / Marketing</option>
                                <option>Tran / OTP / Utility</option>
                                <option>Two Way SMS</option>
                            </optgroup>
                            <optgroup label="💬 WhatsApp">
                                <option>Bulk WhatsApp</option>
                                <option>WhatsApp Business API (META)</option>
                            </optgroup>
                            <option>🌐 RCS Messaging</option>
                            <option>🎙️ Voice Broadcasting</option>
                            <option>🎙️ Voice QOS</option>
                            <option>📞 SIP Trunks / TDM</option>
                            <option>📱 DID Numbers</option>
                            <option>📟 Toll-Free Numbers</option>
                            <option>☁️ Cloud PBX</option>
                            <option>💼 MS Teams Routing</option>
                            <option>🏷️ White-Label Reseller</option>
                            <option>🔌 Custom API / Integration</option>
                            <optgroup label="🤖 AI Automation">
                                <option>⚙️ AI Agents</option>
                                <option>🤖 AI Chatbots</option>
                                <option>🚀 AI Tools</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- Also Interested In -->
                <div style="margin-top:18px;">
                    <div class="fw"><label>Also Interested In</label></div>
                    <div class="cbgrid" style="margin-top:12px;" id="cbGrid">
                        <div class="ci" onclick="tick(this)" data-value="Promo / Marketing SMS"><div class="cbox"></div>📢 Promo / Marketing SMS</div>
                        <div class="ci" onclick="tick(this)" data-value="Tran / OTP / Utility SMS"><div class="cbox"></div>🔐 Tran / OTP / Utility SMS</div>
                        <div class="ci" onclick="tick(this)" data-value="Two Way SMS"><div class="cbox"></div>🎰 Two Way SMS</div>
                        <div class="ci" onclick="tick(this)" data-value="Bulk WhatsApp"><div class="cbox"></div>💬 Bulk WhatsApp</div>
                        <div class="ci" onclick="tick(this)" data-value="WhatsApp Business API(META)"><div class="cbox"></div>🏢 WhatsApp Business API(META)</div>
                        <div class="ci" onclick="tick(this)" data-value="RCS Messaging"><div class="cbox"></div>🌐 RCS Messaging</div>
                        <div class="ci" onclick="tick(this)" data-value="Voice Broadcasting"><div class="cbox"></div>🎙️ Voice Broadcasting</div>
                        <div class="ci" onclick="tick(this)" data-value="Voice QOS"><div class="cbox"></div>🎙️ Voice QOS</div>
                        <div class="ci" onclick="tick(this)" data-value="SIP Trunks / TDM"><div class="cbox"></div>📞 SIP Trunks / TDM</div>
                        <div class="ci" onclick="tick(this)" data-value="DID Numbers"><div class="cbox"></div>📱 DID Numbers</div>
                        <div class="ci" onclick="tick(this)" data-value="Toll-Free Numbers"><div class="cbox"></div>📟 Toll-Free Numbers</div>
                        <div class="ci" onclick="tick(this)" data-value="Cloud PBX"><div class="cbox"></div>☁️ Cloud PBX</div>
                        <div class="ci" onclick="tick(this)" data-value="MS Teams Routing"><div class="cbox"></div>💼 MS Teams Routing</div>
                        <div class="ci" onclick="tick(this)" data-value="White-Label Reseller"><div class="cbox"></div>🏷️ White-Label Reseller</div>
                        <div class="ci" onclick="tick(this)" data-value="Custom API / Integration"><div class="cbox"></div>🔌 Custom API / Integration</div>
                        <div class="ci" onclick="tick(this)" data-value="AI Agents"><div class="cbox"></div>⚙️ AI Agents</div>
                        <div class="ci" onclick="tick(this)" data-value="AI Chatbots"><div class="cbox"></div>🤖 AI Chatbots</div>
                        <div class="ci" onclick="tick(this)" data-value="AI Tools"><div class="cbox"></div>🚀 AI Tools</div>
                    </div>
                    <input type="hidden" name="interested_services" id="interested_services">
                </div>

                <div class="fdiv"></div>

                <!-- Volume -->
                <div class="fst"><div class="fst-ico ico-p">📊</div><div class="fst-txt"><h3>Volume</h3><p>Helps us configure the right routes and pricing for your demo</p></div></div>
                <div class="fg2">
                    <div class="fw col-full">
                        <label>Estimated SMS / WhatsApp / Voice Volume</label>
                        <div class="vchips" id="vc1">
                            <div class="vchip" onclick="chip(this,'vc1')">Minimum 50K</div>
                            <div class="vchip" onclick="chip(this,'vc1')">50K – 100K</div>
                            <div class="vchip" onclick="chip(this,'vc1')">0.1M – 1M</div>
                            <div class="vchip" onclick="chip(this,'vc1')">1M – 10M</div>
                            <div class="vchip" onclick="chip(this,'vc1')">10M+</div>
                        </div>
                        <input type="hidden" id="volume" name="estimated_volume">
                    </div>
                </div>

                <div class="fg2" style="margin-top:18px;">
                    <div class="fw">
                        <label>Sending Country </label>
                        <select id="sendingCountry" name="sending_country">
                            <option value="">— Select Sending Country —</option>
                            <option>India</option><option>United States</option><option>United Kingdom</option><option>United Arab Emirates</option><option>Saudi Arabia</option><option>Qatar</option><option>Kuwait</option><option>Bahrain</option><option>Oman</option><option>Singapore</option><option>Malaysia</option><option>Australia</option><option>Germany</option><option>France</option><option>Canada</option><option>Indonesia</option><option>Thailand</option><option>Bangladesh</option><option>Sri Lanka</option><option>Nepal</option><option>Pakistan</option><option>Nigeria</option><option>Kenya</option><option>South Africa</option><option>Other</option>
                        </select>
                    </div>
                    <div class="fw">
                        <label>Receiving Country </label>
                        <select id="receivingCountry" name="receiving_country">
                            <option value="">— Select Receiving Country —</option>
                            <option>India</option><option>United States</option><option>United Kingdom</option><option>United Arab Emirates</option><option>Saudi Arabia</option><option>Qatar</option><option>Kuwait</option><option>Bahrain</option><option>Oman</option><option>Singapore</option><option>Malaysia</option><option>Australia</option><option>Germany</option><option>France</option><option>Canada</option><option>Indonesia</option><option>Thailand</option><option>Bangladesh</option><option>Sri Lanka</option><option>Nepal</option><option>Pakistan</option><option>Nigeria</option><option>Kenya</option><option>South Africa</option><option>Other</option>
                        </select>
                    </div>
                </div>

                <!-- T&C Confirm Box -->
                <div id="confirmBox">
                    <input type="hidden" id="agreement" name="agreement">
                    <p style="color:var(--text);font-size:15px;font-weight:600;margin:0 0 6px;font-family:'Rajdhani',sans-serif;">
                        By submitting your details, you agree to our Terms of Service &amp; Privacy Policy.
                    </p>
                    <p style="color:var(--text-muted);font-size:13px;margin:0 0 16px;">
                        Do you confirm and agree to proceed?
                    </p>
                    <div style="display:flex;gap:12px;">
                        <!-- onmouseout="this.style.background='transparent';this.style.color='var(--green)';" -->
                            <!-- <div  id="btnYes" style="flex: 1 1 0%; padding: 12px; border-radius: 10px; border: 2px solid var(--green); background: transparent; color: var(--green); font-size: 15px; font-weight: 700; cursor: pointer; font-family: Rajdhani, sans-serif; transition: 0.2s;" onmouseover="this.style.background='var(--green)';this.style.color='#fff';" 
                            onclick="_handleSubmit();"
                            >
                                ✅ Yes<br>I Agree
                            </div>
                            <div  id="btnNo" style="flex: 1 1 0%; padding: 12px; border-radius: 10px; border: 2px solid rgb(229, 62, 62); background: transparent; color: rgb(229, 62, 62); font-size: 15px; font-weight: 700; cursor: pointer; font-family: Rajdhani, sans-serif; transition: 0.2s;" onmouseover="this.style.background='#E53E3E';this.style.color='#fff';" onmouseout="this.style.background='transparent';this.style.color='#E53E3E';">
                                ❌ No<br>Cancel
                            </div> -->
                            <label>
                            <input type="checkbox" id="chkAgreement" onclick="_handleSubmit(this);" class="chk">
                           <strong style="font-size: 20px; color:#363636">&nbsp;&nbsp; I accept the terms and conditions</strong>
                            </label>

                    </div>
                    <p style="margin-top:12px;font-size:22px;color:var(--text-muted);font-family:'Exo 2',sans-serif;display:none" id="chkmsg">
                        To get instant demo pay $5 to activate your demo account — this $5 will be fully credited to your Main account Balance
                    </p>
                </div>

            </div>
        </div>
    </form>
</div><!-- /demo-wrap -->

<!-- <button class="btn-sticky-submit" onclick="razorpayUpdate('sdfasdfdf123')">
    ⚡ pay
</button> -->

<!-- STICKY FOOTER -->
<div class="sticky-footer-btn">
    <button class="btn-sticky-submit" onclick="handleSubmit()" disabled>
        ⚡  Submit your Requirement
    </button>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<style>
    .btn-sticky-submit:disabled {
        background: #757373;
        border-color: #ccc;
        cursor: not-allowed;
    }
    .chk{
        width: 18px;
    height: 18px;
    border-radius: 5px;
    border: 2px solid currentColor;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 10px;
    font-weight: 800;
    }
    </style>
<?php

    // $keyId = "rzp_test_Sq3k6chKK9dghZ";
    // $keySecret = "EzaLA95PJSsZ7LjWwz8jkJG3";
    $keyId = "rzp_live_Sq3h6AVUV56IAq";
    $keySecret = "2ZMvxRgpYVepGFg8Bkvd0EI7";
    

    // $payment_id = $data['payment_id'];
     
    $amount = 1499000;

    $data = [
        "amount" => $amount,
        "currency" => "INR",
        "receipt" => "rcpt1"
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/orders");
    //curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/payments/".$payment_id."/capture");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $keyId . ":" . $keySecret);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json"
    ]);

    if(curl_errno($ch)){
        echo json_encode(["error" => curl_error($ch)]);
        exit;
    }

    curl_close($ch);

    $order = json_decode($response, true);
    $orderId = $order["id"];

    echo json_encode([
        "order_id" => $order["id"],
        "amount" => $amount
    ]);
    ?>
<script>

/* ---- Form helpers ---- */
function tick(el) {
    el.classList.toggle('on');
    el.querySelector('.cbox').textContent = el.classList.contains('on') ? '✓' : '';
}

function chip(el, gid) {
    document.getElementById(gid).querySelectorAll('.vchip').forEach(function (c) { c.classList.remove('sel'); });
    el.classList.add('sel');
}

function validateForm() {
    var required = ['fname', 'email', 'mobile', 'country', 'primary_svc'];
    var ok = true;
    required.forEach(function (id) {
        var el = document.getElementById(id);
        if (el && !el.value.trim()) {
            el.style.borderColor = '#F22F46';
            el.style.boxShadow = '0 0 0 3px rgba(242,47,70,0.12)';
            ok = false;
            setTimeout(function () { el.style.borderColor = ''; el.style.boxShadow = ''; }, 3500);
        }
    });
    var em = document.getElementById('email').value;
    if (em && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(em)) {
        document.getElementById('email').style.borderColor = '#F22F46';
        ok = false;
    }
    return ok;
}

function razorpayUpdate_old(id){
    
    $.ajax({
        url: "backend/razorpay_update",
        type: "POST",
        data: JSON.stringify({
            email: $('input[name="email"]').val(),
            razorpay_payment_id: id
        }),
        contentType: "application/json",
        dataType: "json",

        success: function(res){
            console.log("SUCCESS:", res);

            if(res.success){
                window.location = "dashboard.php";
            } else {
                alert(res.message);
            }
        },

        error: function(err){
            console.log("===== AJAX ERROR =====");
            console.log("Status:", err.status);
            console.log("Response:", err.responseText);

            debugger;

            try {
                let errorObj = JSON.parse(err.responseText);
                alert(errorObj.message || "Unknown error");
            } catch(e) {
                alert(err.responseText);
            }
        }
    });
}

 function razorpayUpdate(id){
     
     
        $.ajax({
                url: "backend/razorpay_update",
                type: "POST",
                // data:  data,
                data: JSON.stringify({email:$('input[type="email"]').val(),razorpay_payment_id:id}),
                contentType: "application/json",
                success: function(res){
                    console.log(res);
                    if(res?.success == false){
                        alert(res?.message);
                    }else{
                        
                        }
                    window.location = "dashboard.php";
                },
                error: function(err){
                    
                console.log("===== AJAX ERROR =====");
                    console.log("Status:", err.status);
                    console.log("Response:", err.responseText);
                    console.log("Headers:", err.getAllResponseHeaders());
                
                    debugger; // ✅ browser will pause here
                
                    alert(err.responseText);

                }
            });
    }

function pay() {
        // alert('payment');
       //  alert($('input[type="email"]').val());
        
        var orderId = "<?php echo $orderId; ?>";
         var options = {
            "key": "rzp_live_Sq3h6AVUV56IAq", // Enter the Key ID generated from the Dashboard
            "amount": "48000", // Amount is in currency subunits.
            "currency": "INR",
            
            "image": "https://example.com/your_logo",
           order_id: orderId, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                // window.location = "dashboard.php";
                razorpayUpdate(response.razorpay_payment_id);

            },
            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                "name": $("input[name='full_name']").val(),//"Gaurav Kumar", //your customer's name
                "email": $("input[name='email']").val(),//"gaurav.kumar@example.com", 
                "contact": $("input[name='mobile']").val()//"+919876543210"  //Provide the customer's phone number for better conversion rates 
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
            
        });
        rzp1.open();
    }

function _handleSubmit(el) {
           
         let checkbox = $(el);

     // Step 1: Get form data as array
    let formArray = $("#demoForm").serializeArray();

    // Step 2: Convert to JSON object
    let data = {};
    formArray.forEach(function(item){
        data[item.name] = item.value;
    });

    // Step 3: Add custom fields
    let interested = [];
    $("#cbgrid .ci.on").each(function(){
        interested.push($(this).attr("data-value"));
    });

    data.interested_services = interested;
    // data.estimated_volume = $(".vchip.sel").text();
    data.volume_estimate = ""+$("#vc1 .vchip.sel").text()+"";
    data.agreement = "yes";
    data.password = "12345678";
    data.confirm_password = "12345678";

    console.log("Form Data to be sent:", data);

    //  const form = $("#demoForm");
    // const formData = new FormData(form[0]);

    // Step 4: Send as JSON
    $.ajax({
        url: "backend/register",
        type: "POST",
        // data:  data,
        data: JSON.stringify(data),
        contentType: "application/json",
        success: function(res){
           // alert(res.message);
            
            if(res?.success == false){
                        alert(res?.message);
                        checkbox.prop("checked", false);
                        $("#chkmsg").hide();
                        $(".btn-sticky-submit").text('⚡  Submit your Requirement');
                         $(".btn-sticky-submit").prop('disabled', true);
                    }
                    else{
                        
                        if(checkbox.is(":checked"))
                        {
                             $(checkbox).prop('disabled', true);
                             
                             $("#chkmsg").show();
                            $(".btn-sticky-submit").text('Pay $5 Get Your Instant Demo');
                             $(".btn-sticky-submit").prop('disabled', false);
                        }
                        else
                        {
                            
                             $("#chkmsg").hide();
                             $(".btn-sticky-submit").text('⚡  Submit your Requirement');
                            $(".btn-sticky-submit").prop('disabled', true);
                        }
                        
                    }
            console.log(res);
            // alert("Saved successfully!");
            // pay();
        },
        error: function(err){
            console.log(err);
            checkbox.prop("checked", false);
            $("#chkmsg").hide();
            $(".btn-sticky-submit").prop('disabled', true);
            alert("Error!");
        }
    });
}
function handleSubmit() {
    

    //  // Step 1: Get form data as array
    // let formArray = $("#demoForm").serializeArray();

    // // Step 2: Convert to JSON object
    // let data = {};
    // formArray.forEach(function(item){
    //     data[item.name] = item.value;
    // });

    // // Step 3: Add custom fields
    // let interested = [];
    // $("#cbgrid .ci.on").each(function(){
    //     interested.push($(this).attr("data-value"));
    // });

    // data.interested_services = interested;
    // // data.estimated_volume = $(".vchip.sel").text();
    // data.volume_estimate = ""+$("#vc1 .vchip.sel").text()+"";
    // data.agreement = "yes";
    // data.password = "12345678";
    // data.confirm_password = "12345678";

    // console.log("Form Data to be sent:", data);

    // //  const form = $("#demoForm");
    // // const formData = new FormData(form[0]);

    // // Step 4: Send as JSON
    // $.ajax({
    //     url: "backend/register.php",
    //     type: "POST",
    //     // data:  data,
    //     data: JSON.stringify(data),
    //     contentType: "application/json",
    //     success: function(res){
    //         console.log(res);
    //         // alert("Saved successfully!");
            pay();
            
           // razorpayUpdate('viendra12345')
    //     },
    //     error: function(err){
    //         console.log(err);
    //         alert("Error!");
    //     }
    // });




   




    // if (!validateForm()) { window.scrollTo({ top: 0, behavior: 'smooth' }); return; }
    // var extraServices = [];
    // document.querySelectorAll('#cbGrid .ci.on').forEach(function (el) { extraServices.push(el.textContent.trim()); });
    // var volEl = document.querySelector('#vc1 .vchip.sel');
    // var volume = volEl ? volEl.textContent.trim() : '';
    // var data = new FormData();
    // data.append('full_name',         document.getElementById('fname').value);
    // data.append('email',             document.getElementById('email').value);
    // data.append('mobile',            document.getElementById('ccode').value + ' ' + document.getElementById('mobile').value);
    // data.append('country',           document.getElementById('country').value);
    // data.append('company',           document.getElementById('company').value);
    // data.append('company_location',  document.getElementById('company_location').value);
    // data.append('primary_service',   document.getElementById('primary_svc').value);
    // data.append('sending_country',   document.getElementById('sendingCountry').value);
    // data.append('receiving_country', document.getElementById('receivingCountry').value);
    // data.append('volume',            volume);
    // data.append('extra_services',    extraServices.join(', '));
    // fetch('save_demo.php', { method: 'POST', body: data })
    //     .then(function (r) { return r.json(); })
    //     .then(function ()  { window.location.href = 'https://razorpay.me/@pusapatibulksmsservices'; })
    //     .catch(function () { window.location.href = 'https://razorpay.me/@pusapatibulksmsservices'; });
}
</script>

<!-- Hamburger wired to header.php ids -->
<script>
(function () {
    var btn = document.getElementById('hamburger');
    var nav = document.getElementById('mobileNav');
    if (!btn || !nav) return;

    btn.addEventListener('click', function () {
        var isOpen = nav.classList.toggle('open');
        btn.classList.toggle('active', isOpen);
        btn.setAttribute('aria-expanded', String(isOpen));
        nav.setAttribute('aria-hidden', String(!isOpen));
    });

    nav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            nav.classList.remove('open');
            btn.classList.remove('active');
            btn.setAttribute('aria-expanded', 'false');
            nav.setAttribute('aria-hidden', 'true');
        });
    });

    document.addEventListener('click', function (e) {
        if (!btn.contains(e.target) && !nav.contains(e.target)) {
            nav.classList.remove('open');
            btn.classList.remove('active');
            btn.setAttribute('aria-expanded', 'false');
            nav.setAttribute('aria-hidden', 'true');
        }
    });
})();

function toggleMob(el) {
    var sub = el.nextElementSibling;
    var isOpen = sub.classList.toggle('open');
    el.classList.toggle('open', isOpen);
}
</script>