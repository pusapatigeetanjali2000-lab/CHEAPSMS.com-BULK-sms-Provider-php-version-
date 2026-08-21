
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Sora:wght@600;700;800&display=swap" rel="stylesheet"/>
  <style>
    /* ============================================================
       CSS VARIABLES &mdash; TWILIO RED / BLACK / WHITE
    ============================================================ */
    :root {
      --red:          #f22f46;
      --red-dark:     #c41e32;
      --red-light:    #ff5568;
      --red-bg:       #fff1f2;
      --black:        #000000;
      --gray-900:     #111111;
      --gray-800:     #1f1f1f;
      --navy:         #1a2744;
      --navy-dark:    #131d36;
      --navy-deeper:  #0d1525;
      --gray-700:     #374151;
      --gray-500:     #6b7280;
      --gray-300:     #d1d5db;
      --gray-100:     #f3f4f6;
      --gray-50:      #f9fafb;
      --white:        #ffffff;
      --border:       #e5e7eb;
      --border-dark:  rgba(0,0,0,0.10);
      --shadow-sm:    0 1px 3px rgba(0,0,0,0.10);
      --shadow-md:    0 4px 20px rgba(0,0,0,0.10);
      --shadow-lg:    0 12px 40px rgba(0,0,0,0.12);
      --shadow-red:   0 4px 20px rgba(242,47,70,0.30);
      --font-head:    'Sora', sans-serif;
      --font-body:    'Inter', sans-serif;
      --radius:       10px;
      --radius-lg:    16px;
      --transition:   0.25s cubic-bezier(0.4,0,0.2,1);
      --max-w:        1260px;
    }

    /* ============================================================
       RESET & BASE
    ============================================================ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--font-body);
      background: var(--white);
      color: var(--gray-900);
      font-size: 15px;
      line-height: 1.65;
      overflow-x: hidden;
    }
    img { display: block; max-width: 100%; }
    a { text-decoration: none; color: inherit; }

    /* ============================================================
       HEADER
    ============================================================ */
    header {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      background: rgba(255,255,255,0.97);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border);
      transition: box-shadow var(--transition);
    }
    header.scrolled { box-shadow: var(--shadow-md); }
    .header-inner {
      max-width: var(--max-w);
      margin: 0 auto;
      padding: 0 28px;
      height: 68px;
      display: flex;
      align-items: center;
      gap: 8px;
      position: relative;
    }

    /* ---- Logo ---- */
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      flex-shrink: 0;
      margin-right: 16px;
    }
    .logo-box {
      width: 18px; height: 18px;
      background: var(--red);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-head);
      font-weight: 800;
      font-size: 20px;
      color: #fff;
      letter-spacing: -1px;
    }
    .logo-name {
      font-family: var(--font-head);
      font-size: 18px;
      font-weight: 600;
      color: var(--gray-900);
      letter-spacing: -0.3px;
    }
    .logo-name span { color: var(--red); }

    /* ---- Desktop Nav ---- */
    nav.desktop-nav {
      display: flex;
      align-items: center;
      gap: 2px;
      flex: 1;
    }
    .nav-item { position: relative; }
    .nav-link {
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 8px 14px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      color: var(--gray-700);
      cursor: pointer;
      background: transparent;
      border: none;
      white-space: nowrap;
      transition: color var(--transition), background var(--transition);
    }
    .nav-link:hover { color: var(--red); background: var(--red-bg); }
    .nav-arrow {
      font-size: 10px;
      transition: transform var(--transition);
      color: var(--gray-500);
    }
    .nav-item:hover .nav-arrow { transform: rotate(180deg); color: var(--red); }

    /* ---- Dropdown ---- */
    .dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      /* min-width: 230px; */
      width: -179px !important;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 10px 6px 6px;
      opacity: 0;
      pointer-events: none;
      transform: translateY(-4px);
      transition: var(--transition);
      box-shadow: var(--shadow-lg);
      z-index: 200;
    }
    .dropdown::before {
      content: "";
      position: absolute;
      top: -10px;
      left: 0;
      width: 100%;
      height: 10px;
    }
    .nav-item:hover .dropdown {
      opacity: 1;
      pointer-events: all;
      transform: translateY(0);
    }
    .dropdown a {
      display: block;
      padding: 9px 14px;
      border-radius: 8px;
      font-size: 13.5px;
      color: var(--gray-700);
      transition: var(--transition);
    }
    .dropdown a:hover { background: var(--red-bg); color: var(--red); }
    .dropdown-mega {
      min-width: 760px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
    }
    .dd-col { padding: 4px; }
    .dd-heading {
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--gray-500);
      padding: 8px 14px 4px;
    }
    .dd-divider {
      border: none;
      border-top: 1px solid var(--border);
      margin: 6px 14px;
    }

    /* ---- Header Right ---- */
    .header-right {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-shrink: 0;
      margin-left: auto;
    }
    .btn-login {
      padding: 7px 18px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      color: var(--gray-700);
      background: transparent;
      border: 1px solid var(--border);
      transition: var(--transition);
    }
    .btn-login:hover { border-color: var(--red); color: var(--red); }
    .btn-signup {
      padding: 8px 20px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      background: var(--red);
      color: #fff;
      border: none;
      transition: var(--transition);
      box-shadow: var(--shadow-red);
    }
    .btn-signup:hover { background: var(--red-dark); transform: translateY(-1px); }
    .btn-demo-nav {
      padding: 8px 20px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      background: var(--red);
      color: #fff;
      transition: var(--transition);
      box-shadow: var(--shadow-red);
    }
    .btn-demo-nav:hover { background: var(--red-dark); transform: translateY(-1px); }

    /* ---- Hamburger — ALWAYS visible on desktop + mobile ---- */
    .hamburger {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      cursor: pointer;
      padding: 0;
      border-radius: 10px;
      background: var(--white);
      border: 1.5px solid var(--border);
      transition: background var(--transition), border-color var(--transition);
      flex-shrink: 0;
      position: relative;
      overflow: hidden;
    }
    .hamburger:hover {
      background: var(--gray-100);
      border-color: var(--gray-300);
    }
    .hamburger.active {
      background: var(--red-bg);
      border-color: rgba(242,47,70,0.35);
    }
    /* Both SVG icons sit stacked in center */
    .hamburger .hbg-icon,
    .hamburger .hbg-close {
      position: absolute;
      top: 50%;
      left: 50%;
      transition: opacity 0.22s ease, transform 0.22s ease;
      pointer-events: none;
    }
    /* Default: show lines, hide X */
    .hamburger .hbg-icon  {
      opacity: 1;
      transform: translate(-50%, -50%) rotate(0deg) scale(1);
    }
    .hamburger .hbg-close {
      opacity: 0;
      transform: translate(-50%, -50%) rotate(-90deg) scale(0.6);
    }
    /* Active: hide lines, show X */
    .hamburger.active .hbg-icon {
      opacity: 0;
      transform: translate(-50%, -50%) rotate(90deg) scale(0.6);
    }
    .hamburger.active .hbg-close {
      opacity: 1;
      transform: translate(-50%, -50%) rotate(0deg) scale(1);
    }

    /* ---- Mobile Nav ---- */
    .mobile-nav {
      display: none;
      position: fixed;
      top: 68px; left: 0; right: 0; bottom: 0;
      background: var(--white);
      overflow-y: auto;
      z-index: 999;
      padding: 12px 20px 40px;
      border-top: 1px solid var(--border);
    }
    .mobile-nav.open { display: block; }
    .mobile-group { margin-bottom: 2px; }
    .mobile-toggle {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 500;
      color: var(--gray-700);
      background: transparent;
      border: none;
      cursor: pointer;
      text-align: left;
      transition: var(--transition);
    }
    .mobile-toggle:hover, .mobile-toggle.open { background: var(--red-bg); color: var(--red); }
    .mobile-sub { display: none; padding: 2px 0 4px 14px; }
    .mobile-sub.open { display: block; }
    .mobile-sub a {
      display: block;
      padding: 9px 14px;
      border-radius: 8px;
      font-size: 13.5px;
      color: var(--gray-500);
      transition: var(--transition);
    }
    .mobile-sub a:hover { color: var(--red); background: var(--red-bg); }
    .mobile-direct {
      display: block;
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 500;
      color: var(--gray-700);
      transition: var(--transition);
    }
    .mobile-direct:hover { color: var(--red); background: var(--red-bg); }
    .mobile-cta {
      margin-top: 16px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .mobile-cta a {
      display: block;
      text-align: center;
      padding: 12px 20px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 600;
    }
    .mobile-cta .m-login { border: 1px solid var(--border); color: var(--gray-700); }
    .mobile-cta .m-demo  { background: var(--red); color: #fff; }

    /* ============================================================
       GLOBAL SHARED STYLES
    ============================================================ */
    .container { max-width: var(--max-w); margin: 0 auto; }
    section { padding: 88px 28px; }

    .tag {
      display: inline-block;
      padding: 4px 12px;
      border-radius: 100px;
      background: var(--red-bg);
      border: 1px solid rgba(242,47,70,0.20);
      font-size: 11px;
      font-weight: 700;
      color: var(--red);
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 14px;
    }
    .section-title {
      font-family: var(--font-head);
      font-size: clamp(26px, 3.5vw, 42px);
      font-weight: 800;
      line-height: 1.15;
      color: var(--gray-900);
      margin-bottom: 14px;
    }
    .section-title .accent { color: var(--red); }
    .section-sub {
      font-size: 16px;
      color: var(--gray-500);
      max-width: 540px;
      line-height: 1.7;
      margin-bottom: 48px;
    }

    /* Buttons */
    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 13px 28px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      background: var(--red);
      color: #fff;
      transition: var(--transition);
      box-shadow: var(--shadow-red);
    }
    .btn-primary:hover { background: var(--red-dark); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(242,47,70,0.35); }
    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 13px 28px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      background: transparent;
      border: 1.5px solid var(--border);
      color: var(--gray-700);
      transition: var(--transition);
    }
    .btn-outline:hover { border-color: var(--red); color: var(--red); background: var(--red-bg); }

    /* ============================================================
       HERO
    ============================================================ */
    .hero {
      padding: 130px 28px 80px;
      background: var(--white);
      position: relative;
      overflow: hidden;
    }
    .hero-stats { grid-template-columns: repeat(2, 1fr); }
    .hero::before {
      content: '';
      position: absolute;
      top: 0; right: 0;
      width: 55%;
      height: 100%;
      background: var(--gray-50);
      z-index: 0;
    }
    .hero-inner {
      max-width: var(--max-w);
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
      position: relative;
      z-index: 1;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 12px;
      border-radius: 100px;
      background: var(--red-bg);
      border: 1px solid rgba(242,47,70,0.20);
      font-size: 12px;
      font-weight: 600;
      color: var(--red);
      margin-bottom: 20px;
    }
    .hero-badge .dot {
      width: 6px; height: 6px;
      background: var(--red);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(1.4); }
    }
    .hero h1 {
      font-family: var(--font-head);
      font-size: clamp(36px, 5vw, 60px);
      font-weight: 800;
      line-height: 1.1;
      color: var(--gray-900);
      margin-bottom: 20px;
      letter-spacing: -1px;
    }
    .hero h1 .accent { color: var(--red); }
    .hero-desc {
      font-size: 17px;
      color: var(--gray-500);
      line-height: 1.75;
      margin-bottom: 32px;
      max-width: 480px;
    }
    .hero-chips { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px; }
    .chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 14px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 500;
      background: var(--gray-100);
      border: 1px solid var(--border);
      color: var(--gray-700);
    }
    .chip-dot { width: 7px; height: 7px; border-radius: 50%; }
    .chip-dot.green  { background: #22c55e; }
    .chip-dot.red    { background: var(--red); }
    .hero-cta { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 52px; }
    .hero-stats {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1px;
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      overflow: hidden;
      background: var(--border);
    }
    .stat-box {
     text-align: center;
      padding: 12px 8px;
      background: var(--white);
    }
    .stat-num {
      font-family: var(--font-head);
      font-size: 20px;
      font-weight: 800;
      color: var(--red);
      line-height: 1;
      margin-bottom: 4px;
    }
    .stat-label {
      font-size: 10px;
      color: var(--gray-500);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    /* Hero Visual */
    .hero-visual { position: relative; }
    .hero-img-wrap {
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      border: 1px solid var(--border);
    }
    .hero-img-wrap img { width: 100%; }
    .hero-float {
      position: absolute;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 12px 16px;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: var(--shadow-lg);
      animation: floaty 4s ease-in-out infinite;
    }
    @keyframes floaty {
      0%,100% { transform: translateY(0); }
      50%      { transform: translateY(-8px); }
    }
    .hero-float.f1 { top: 20px; left: -24px; }
    .hero-float.f2 { bottom: 28px; right: -24px; animation-delay: 2s; }
    .hero-float-icon {
      width: 36px; height: 36px;
      border-radius: 8px;
      background: var(--red-bg);
      display: flex; align-items: center; justify-content: center;
    }
    .hero-float-icon svg { width: 18px; height: 18px; fill: none; stroke: var(--red); stroke-width: 2; }
    .fi-label strong { display: block; font-size: 13px; font-weight: 700; color: var(--gray-900); }
    .fi-label small  { font-size: 11px; color: var(--gray-500); }

    /* ============================================================
       TICKER BAR
    ============================================================ */
    .ticker-bar {
      background: var(--gray-900);
      padding: 13px 0;
      overflow: hidden;
    }
    .ticker-track {
      display: flex;
      gap: 48px;
      animation: ticker 35s linear infinite;
      white-space: nowrap;
      width: max-content;
    }
    @keyframes ticker { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .ticker-item {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 500;
      color: rgba(255,255,255,0.65);
    }
    .ticker-sep {
      display: inline-block;
      width: 4px; height: 4px;
      border-radius: 50%;
      background: var(--red);
    }

    /* ============================================================
       TESTIMONIALS
    ============================================================ */
    .testimonials-section { background: var(--gray-50); }
    .reviews-row { display: flex; gap: 16px; margin-bottom: 40px; flex-wrap: wrap; }
    .review-pill {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 18px;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 100px;
      box-shadow: var(--shadow-sm);
    }
    .review-pill-name { font-size: 13px; font-weight: 700; color: var(--gray-900); }
    .review-pill-stars { font-size: 13px; color: #f59e0b; }
    .review-pill-count { font-size: 12px; color: var(--gray-500); }
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
      gap: 20px;
    }
    .tc {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      padding: 24px;
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
    }
    .tc:hover { box-shadow: var(--shadow-lg); transform: translateY(-3px); border-color: rgba(242,47,70,0.20); }
    .tc-top { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 14px; }
    .tc-avatar {
      width: 42px; height: 42px;
      border-radius: 10px;
      background: var(--red);
      display: flex; align-items: center; justify-content: center;
      font-family: var(--font-head);
      font-size: 18px; font-weight: 800;
      color: #fff;
      flex-shrink: 0;
    }
    .tc-avatar.light { background: var(--red-bg); color: var(--red); }
    .tc-info { flex: 1; padding-left: 12px; }
    .tc-name { font-weight: 700; font-size: 14px; color: var(--gray-900); }
    .tc-role { font-size: 12px; color: var(--gray-500); }
    .tc-src { font-size: 11px; font-weight: 700; color: var(--red); }
    .tc-stars { color: #f59e0b; font-size: 13px; margin-bottom: 10px; }
    .tc-text { font-size: 13.5px; color: var(--gray-700); line-height: 1.7; }

    /* ============================================================
       SERVICE CARDS
    ============================================================ */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
      gap: 24px;
    }
    .svc {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      overflow: hidden;
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
    }
    .svc:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); border-color: rgba(242,47,70,0.20); }
    .svc-img { width: 100%; height: 210px; object-fit: cover; display: block; }
    .svc-body { padding: 24px; }
    .svc-icon {
      width: 44px; height: 44px;
      background: var(--red-bg);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 14px;
    }
    .svc-icon svg { width: 22px; height: 22px; stroke: var(--red); fill: none; stroke-width: 2; }
    .svc-title { font-family: var(--font-head); font-size: 19px; font-weight: 700; color: var(--gray-900); margin-bottom: 8px; }
    .svc-desc { font-size: 14px; color: var(--gray-500); line-height: 1.65; margin-bottom: 16px; }
    .svc-list { list-style: none; margin-bottom: 22px; }
    .svc-list li {
      display: flex;
      align-items: flex-start;
      gap: 9px;
      font-size: 13.5px;
      color: var(--gray-700);
      padding: 6px 0;
      border-bottom: 1px solid var(--gray-100);
    }
    .svc-list li:last-child { border-bottom: none; }
    .svc-list .ck {
      width: 16px; height: 16px;
      flex-shrink: 0;
      border-radius: 50%;
      background: var(--red);
      display: flex; align-items: center; justify-content: center;
      margin-top: 2px;
    }
    .svc-list .ck svg { width: 8px; height: 8px; stroke: #fff; fill: none; stroke-width: 3; }
    .svc-btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 9px 20px;
      border-radius: 8px;
      font-size: 13.5px;
      font-weight: 600;
      background: var(--red);
      color: #fff;
      transition: var(--transition);
    }
    .svc-btn:hover { background: var(--red-dark); transform: translateY(-1px); }

    /* ============================================================
       AI / FEATURES SECTION
    ============================================================ */
    .ai-section { background: var(--gray-900); }
    .ai-section .section-title { color: var(--white); }
    .ai-section .section-sub   { color: rgba(255,255,255,0.55); }
    .ai-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
    .ai-feats { display: flex; flex-direction: column; gap: 18px; }
    .ai-feat {
      display: flex;
      gap: 16px;
      padding: 20px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.10);
      border-radius: var(--radius);
      transition: var(--transition);
    }
    .ai-feat:hover { border-color: rgba(242,47,70,0.40); background: rgba(242,47,70,0.08); }
    .ai-feat-ico {
      width: 46px; height: 46px;
      flex-shrink: 0;
      background: rgba(242,47,70,0.15);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
    }
    .ai-feat-ico svg { width: 22px; height: 22px; stroke: var(--red-light); fill: none; stroke-width: 2; }
    .ai-feat-title { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: var(--white); margin-bottom: 4px; }
    .ai-feat-desc  { font-size: 13px; color: rgba(255,255,255,0.55); line-height: 1.6; }
    .ai-img-frame {
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 0 60px rgba(242,47,70,0.12);
    }
    .ai-img-frame img { width: 100%; }

    /* ============================================================
       WHY CHOOSE US
    ============================================================ */
    .why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .why-card {
      text-align: center;
      padding: 30px 20px;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: var(--radius-lg);
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
    }
    .why-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); border-color: rgba(242,47,70,0.20); }
    .why-ico {
      width: 56px; height: 56px;
      margin: 0 auto 16px;
      background: var(--red-bg);
      border-radius: 14px;
      display: flex; align-items: center; justify-content: center;
    }
    .why-ico svg { width: 26px; height: 26px; stroke: var(--red); fill: none; stroke-width: 2; }
    .why-title { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: var(--gray-900); margin-bottom: 8px; }
    .why-desc  { font-size: 13px; color: var(--gray-500); line-height: 1.65; }

    /* ============================================================
       CTA BANNER
    ============================================================ */
    .cta-banner {
      background: var(--gray-900);
      border-radius: var(--radius-lg);
      padding: 64px 48px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .cta-banner::before {
      content: '';
      position: absolute;
      top: -80px; left: 50%;
      transform: translateX(-50%);
      width: 500px; height: 300px;
      background: radial-gradient(ellipse, rgba(242,47,70,0.20) 0%, transparent 70%);
    }
    .cta-banner-content { position: relative; z-index: 1; }
    .cta-banner h2 {
      font-family: var(--font-head);
      font-size: clamp(28px, 4vw, 44px);
      font-weight: 800;
      color: var(--white);
      margin-bottom: 16px;
    }
    .cta-banner h2 .accent { color: var(--red-light); }
    .cta-banner p { font-size: 16px; color: rgba(255,255,255,0.60); margin-bottom: 32px; }
    .cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
    .btn-primary-inv {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 13px 28px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      background: var(--red);
      color: #fff;
      transition: var(--transition);
      box-shadow: var(--shadow-red);
    }
    .btn-primary-inv:hover { background: var(--red-dark); transform: translateY(-2px); }
    .btn-outline-inv {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 13px 28px;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 600;
      background: transparent;
      border: 1.5px solid rgba(255,255,255,0.20);
      color: rgba(255,255,255,0.80);
      transition: var(--transition);
    }
    .btn-outline-inv:hover { border-color: var(--red-light); color: var(--red-light); }

    /* ============================================================
       FOOTER
    ============================================================ */
    footer { background: var(--navy-dark); border-top: 1px solid rgba(255,255,255,0.07); }
    .footer-main {
      max-width: var(--max-w);
      margin: 0 auto;
      padding: 60px 28px 40px;
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
      gap: 40px;
    }
    .footer-brand-desc {
      font-size: 13.5px;
      color: rgba(255,255,255,0.45);
      line-height: 1.75;
      max-width: 250px;
      margin: 16px 0 20px;
    }
    .footer-socials { display: flex; gap: 10px; }
    .footer-social {
      width: 36px; height: 36px;
      border-radius: 8px;
      border: 1px solid rgba(255,255,255,0.10);
      display: flex; align-items: center; justify-content: center;
      color: rgba(255,255,255,0.50);
      font-size: 14px;
      font-weight: 700;
      transition: var(--transition);
    }
    .footer-social:hover { border-color: var(--red); color: var(--red); }
    .footer-col h4 {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 700;
      color: rgba(255,255,255,0.90);
      text-transform: uppercase;
      letter-spacing: 0.8px;
      margin-bottom: 16px;
    }
    .footer-col a {
      display: block;
      font-size: 13px;
      color: rgba(255,255,255,0.50);
      padding: 4px 0;
      transition: var(--transition);
    }
    .footer-col a:hover { color: var(--red-light); }
    .footer-bottom {
      max-width: var(--max-w);
      margin: 0 auto;
      padding: 20px 28px;
      border-top: 1px solid rgba(255,255,255,0.07);
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 12px;
    }
    .footer-bottom p { font-size: 13px; color: rgba(255,255,255,0.35); }
    .footer-badges { display: flex; gap: 8px; flex-wrap: wrap; }
    .f-badge {
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 11px;
      font-weight: 600;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.10);
      color: rgba(255,255,255,0.50);
    }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 1024px) {
      .footer-main { grid-template-columns: 1fr 1fr 1fr; }
      .why-grid    { grid-template-columns: repeat(2, 1fr); }
      .ai-grid     { grid-template-columns: 1fr; }
      .ai-img-frame { display: none; }
    }
    @media (max-width: 900px) {
      nav.desktop-nav { display: none; }
      .header-right .btn-login { display: none; }
      .hero::before { display: none; }
      .hero-inner { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
      .hero-stats { grid-template-columns: repeat(3, 1fr); }
      .services-grid { grid-template-columns: 1fr; }
      .testimonial-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 600px) {
      .footer-main { grid-template-columns: 1fr 1fr; }
      .hero-stats  { grid-template-columns: repeat(2, 1fr); }
      .why-grid    { grid-template-columns: 1fr 1fr; }
      .footer-bottom { flex-direction: column; text-align: center; }
      section { padding: 64px 20px; }
      .cta-banner { padding: 44px 24px; }
    }
    btn-whatsapp {
            display: inline-flex;
            align-items: center;
            background-color: var(--wa-green);
            color: var(--white);
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
        }

        .btn-whatsapp:hover {
            background-color: var(--wa-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(18, 140, 126, 0.4);
        }

        /* The WhatsApp Icon */
        .wa-icon {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            fill: currentColor;
        }

        /* Optional: Pulse effect to draw the eye */
        @keyframes pulse-wa {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        .pulse {
            animation: pulse-wa 2s infinite;
        }
        /* Container to stack the text vertically */
    .logo-text-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .logo-name {
        font-size: 24px;
        font-weight: 800;
        color: #121C2D; /* Deep Twilio Black */
        line-height: 1; /* Tightens space between name and tagline */
        letter-spacing: -0.5px;
    }

    .logo-name span {
        color: #F22F46; /* Twilio Red */
    }

    .logo-tagline {
        font-size: 11px;
        font-weight: 600;
        color: #606B7D; /* Professional Gray */
        text-transform: uppercase;
        letter-spacing: 0.8px;
        margin-top: 4px; /* Small gap between logo and tag */
    }
    .logo-box {
                background: linear-gradient(135deg, #ff4655 0%, #ff1744 100%);
                width: 60px;
                height: 60px;
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 42px;
                color: white;
                font-weight: bold;
                box-shadow: 0 4px 15px rgba(255, 71, 85, 0.4);
            }
  </style>
  <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f6f9;
    }

    /* Welcome Box */
    .welcome-box {
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* Header */
    .welcome-box h2 {
        margin: 0 0 10px;
        color: #333;
    }

    /* Text */
    .welcome-box p {
        color: #666;
        margin-bottom: 20px;
    }

    /* Features */
    .features {
        display: flex;
        justify-content: space-between;
    }

    .feature {
        text-align: center;
        flex: 1;
    }

    /* Icons */
    .feature i {
        font-size: 28px;
        color: #4CAF50;
        margin-bottom: 8px;
    }

    .feature span {
        display: block;
        font-size: 14px;
        color: #444;
    }
</style>


<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    /* Container */
    .user-menu {
        /* position: absolute; */
        display: inline-block;
        /* right: 20px;
        top: 44px; */
    }

    /* Round Icon */
    .user-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #4CAF50;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-weight: bold;
    }

    /* Dropdown box */
    .dropdown {
          position: absolute;
          top: 45px; /* adjust based on icon height */
          right: 0;
          opacity: 0;
          visibility: hidden;
          transition: 0.3s;
    }

    /* Show dropdown on hover */
    .user-menu:hover .dropdown,
    .dropdown:hover {
        opacity: 1;
        visibility: visible;
    }

    /* User details */
    .dropdown h4 {
        margin: 0;
        font-size: 16px;
    }

    .dropdown p {
        margin: 5px 0 0;
        font-size: 14px;
        color: gray;
    }
      .header-inner {
      position: relative !important;
    }
    .user-menu:hover .dropdown{
      /* right: -200px !important; */
      left:calc(100% - 210px) !important;
    }
    .user-menu:hover .dropdown
    {
      opacity: 1 !important;
      visibility: visible !important;
       left:calc(100% - 210px) !important;
    }
</style>

</head>
<body>
<?php
// if (isset($_GET['logout'])) {
//     session_destroy();
//     header("Location: ../index.php");
//     exit;
// }
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

// if (!isset($_SESSION['full_name'])) {
//     header("Location: ../index.php");
//     exit;
// }
$indian_value = $_GET['india'] ?? '';
?>
<!-- ============================================================
     HEADER
============================================================ -->
<header id="site-header">
  <div class="header-inner">

    <a href="index.php" class="logo">
      <div class="logo-box">CS</div>
      <div class="logo-name">CHEAP<span>SMS.com</span></div>
    </a>

    <nav class="desktop-nav">
      <!-- <a href="#" class="nav-link">Dashboard</a> -->
      <h2>Dashboard</h2>
      <!-- position: absolute;
      top: 20px;
      right: 20px; -->
      <!-- <a href="#forget-password" style="color: black;
      z-index: 9999;right: 200px; position: absolute;" class="nav-link">Forget Password</a> -->
      <!-- Button (optional) -->
<button type="button" class="btn btn-primary" id="changePasswordBtn" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
  Change Password
</button>
      <a href="?logout=1" style="color: black;
      z-index: 9999;right: 100px; position: absolute;" class="nav-link">Logout</a>
      <div class="user-menu">
          <div class="user-icon">
              <?php echo substr($_SESSION['full_name'], 0, 2); ?>
          </div>

          <div class="dropdown">
              <h4><?php echo $_SESSION['full_name']; ?></h4>
              <p><?php echo $_SESSION['user_email']; ?></p>
          </div>
      </div>
    </nav>
    


  </div>
</header>

<!-- Mobile Nav -->
<div class="mobile-nav" id="mobileNav" aria-hidden="true">

  <div class="mobile-group">
    <button class="mobile-toggle" onclick="toggleMob(this)">Bulk SMS <span>&#9660;</span></button>
    <div class="mobile-sub">
      <a href="promotional-bulksms-india.php">Promo Normal SMS(India)</a>
      <a href="transactional-bulksms-india.php">Trans/OTP SMS(India)</a>
      <a href="marketing-promo-india.php">Marketing Promo(India)</a>
      <a href="promotional-bulksms.php">Marketing SMS(Global)</a>
      <a href="transactional-bulksms.php">Trans/OTP SMS(Global)</a>
      <a href="gaming-casino-bulksms.php">Gaming /Casino(Global)</a>
      <a href="twoway-bulksms-services.php">Two Way SMS(Global)</a>
    </div>
  </div>

  <div class="mobile-group">
    <button class="mobile-toggle" onclick="toggleMob(this)">WhatsApp <span>&#9660;</span></button>
    <div class="mobile-sub">
      <a href="bulk-whatsapp-india.php">Bulk WhatsApp(India)</a>
      <a href="bulk-whatsapp.php">Bulk WhatsApp(Global))</a>
      <a href="unlimited-whatsapp.php">Unlimited WhatsApp</a>
      <a href="whatsapp-business-api-meta.php">WhatsApp Business API (META)</a>
    </div>
  </div>

  <a href="rcs-rich-communication-sms-services.php" class="mobile-direct">RCS Messaging</a>

  <div class="mobile-group">
    <button class="mobile-toggle" onclick="toggleMob(this)">Voice <span>&#9660;</span></button>
    <div class="mobile-sub">
      <a href="voicebroadcasting.php">Voice Broadcasting</a>
      <a href="ivr.php">IVR</a>
      <a href="voip.php">VoIP Services</a>
      <a href="voiceqos.php">Voice QoS</a>
      <a href="siptrunk.php">SIP Trunk / TDM</a>
      <a href="didnumbers.php">DID / Toll Free Numbers</a>
      
    </div>
  </div>

  <div class="mobile-group">
    <button class="mobile-toggle" onclick="toggleMob(this)">AI Automation <span>&#9660;</span></button>
    <div class="mobile-sub">
      <a href="ai-agents.php">AI Agents</a>
      <a href="ai-chatbots.php">AI Chatbots</a>
      <a href="ai-tools.php">AI Tools</a>
    </div>
  </div>

  <div class="mobile-group">
    <button class="mobile-toggle" onclick="toggleMob(this)">Cloud &amp; Enterprise <span>&#9660;</span></button>
    <div class="mobile-sub">
      <a href="cloudpbx.php">Cloud PBX Services</a>
      <a href="ms-teams-routing.php">MS Teams Direct Routing</a>
      <a href="custom-api-integration.php">Custom API / Integration</a>
    </div>
  </div>
  <a href="white-label-reseller.php"class="mobile-direct">White-Label Reseller</a>
  
  <a href="pricing.php"class="mobile-direct">Pricing</a>

  <div class="mobile-cta">
    <a href="login.php"  class="m-login">Log in</a>
    <a href="signup.php"   class="m-demo">Sign Up</a>
  </div>

</div>
<br>
<br>
<br>

<div class="welcome-box"> 
    <h2>Welcome to CheapSMS 👋</h2>
    <p>
      <?php
      
$conn = getDBConnection();
        if (empty($indian_value) && empty($indian_value) == "1" && $indian_value != "india") {
            echo "Our support team will reach out to you in 60 mins.";

            //$email = "test@gmail.com";

            // Prepare query
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $_SESSION['user_email']);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<hr>";
                    echo "<b>Your Name: </b>" . $row['full_name'] . "<br>";
                    echo "<b>Your Login Username: </b>" . $row['email'] . "<br>";
                    echo "<b>Your Login Password: </b>  12345678 <br>";
                    echo "<b>Your Mobile: </b>" . $row['mobile'] . "<br>";
                    echo "<b>Your Login Dashboard : </b> cheapsms.com/login <br>";
                    echo "<b>Your Requested Services: </b>" . $row['interested_services'] . "<br>";
 

                    echo "<hr>";
                }

            } else {
                echo "No record found-";
            }

        }else {
            echo "Our support team will reach out to you soon.</br> ";
            // Prepare query
            $stmt = $conn->prepare("SELECT * FROM ind_users WHERE email = ?");
            $stmt->bind_param("s", $_SESSION['user_email']);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                  echo "<hr>";
                    echo "<b>Your Name: </b>" . $row['full_name'] . "<br>";
                    echo "<b>Your Login Username: </b>" . $row['email'] . "<br>";
                    echo "<b>Your Login Password: </b>  12345678 <br>";
                    echo "<b>Your Mobile: </b>" . $row['mobile'] . "<br>";
                    echo "<b>Your Login Dashboard : </b> cheapsms.com/login <br>";
                    echo "<b>Your Purchased Services: </b>" . $row['selected'] . "<br>";
 
                    echo "<hr>";
                }

            } else {
                echo "No record found";
            }
        } 
      
      ?>


    </p>

    <!-- <div class="features">
        <div class="feature">
            <i class="fas fa-paper-plane"></i>
            <span>Send SMS</span>
        </div>

        <div class="feature">
            <i class="fas fa-users"></i>
            <span>Manage Contacts</span>
        </div>

        <div class="feature">
            <i class="fas fa-chart-line"></i>
            <span>View Reports</span>
        </div>
    </div> -->
</div>


<!-- Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form id="changePasswordForm">
          <input type="password" id="current_password" class="form-control mb-2" placeholder="Current Password">
          <input type="password" id="new_password" class="form-control mb-2" placeholder="New Password">
          <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password">
        </form>

        <div id="msg" style="margin-top:10px;"></div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-success" onclick="changePassword()">Update</button>
      </div>

    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php
  // $showModal = false;

  // if (isset($_GET['change-password'])) {
  //     $showModal = true;
  // }
?>
<script>
       var myModal = null;
  document.addEventListener("DOMContentLoaded", function () {
    
     myModal = new bootstrap.Modal(document.getElementById('changePasswordModal'));
          // myModal.show();
  });
  document.getElementById("changePasswordBtn").addEventListener("click", function() {
      // var myModal = new bootstrap.Modal(document.getElementById('changePasswordModal'));
      myModal.show();
  });
</script>
<script>
  function changePassword() {
      let current = document.getElementById("current_password").value.trim();
      let newPass = document.getElementById("new_password").value.trim();
      let confirm = document.getElementById("confirm_password").value.trim();
      let email = <?php echo json_encode($_SESSION['user_email']); ?>;
      let msg = document.getElementById("msg");

      msg.innerHTML = "";

      // 🔴 Validation
      if (!current || !newPass || !confirm) {
          msg.innerHTML = "<span style='color:red'>All fields are required</span>";
          return;
      }

      if (newPass.length < 6) {
          msg.innerHTML = "<span style='color:red'>Password must be at least 6 characters</span>";
          return;
      }

      if (newPass !== confirm) {
          msg.innerHTML = "<span style='color:red'>Passwords do not match</span>";
          return;
      }

      // ✅ API Call
      fetch("backend/change_password.php", {
          method: "POST",
          headers: {
              "Content-Type": "application/x-www-form-urlencoded"
          },
          body: `current_password=${encodeURIComponent(current)}&new_password=${encodeURIComponent(newPass)}&email=${encodeURIComponent(email)}`
      })
      .then(res => res.json())
      .then(data => {
          if (data.status) {
              msg.innerHTML = "<span style='color:green'>" + data.message + "</span>";

              // Optional: close modal after success
              setTimeout(() => {
                  let modal = bootstrap.Modal.getInstance(document.getElementById('changePasswordModal'));
                  modal.hide();
              }, 1500);

          } else {
              msg.innerHTML = "<span style='color:red'>" + data.message + "</span>";
          }
      })
      .catch(err => {
          msg.innerHTML = "<span style='color:red'>Something went wrong</span>";
      });
  }
</script>