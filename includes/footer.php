<!-- ============================================================
     FOOTER
============================================================ -->
<?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);

// List of pages where the footer should NOT appear
$excluded_pages = [
    'promotional-bulksms-india.php',
    'marketing-promotional-sms-india.php',
    'transactional-bulksms-india.php',
    'prices.php',
    'sms-and-whatsapp-packages.php',
    'bulk-whatsapp-messages-india.php'
];

// Only show footer if the current page is NOT in the excluded list
if (!in_array($current_page, $excluded_pages)): 
?>

<style>
    /* Blinking animation for the link */
    @keyframes blinker {
        50% { opacity: 0.3; }
    }

    .sticky-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #000000;
        color: #ffffff;
        padding: 15px 0;
        text-align: center;
        font-family: 'Inter', sans-serif;
        z-index: 1000;
        border-top: 2px solid #F22F46;
    }

    .demo-link {
        color: #F22F46;
        text-decoration: none;
        font-weight: 700;
        margin-left: 8px;
        text-transform: uppercase;
        animation: blinker 1.5s linear infinite; /* Blinking effect */
    }
    
    body {
        padding-bottom: 60px; 
    }
</style>

<footer class="sticky-footer">
    <p style="margin: 0; font-size: 14px;">
        Ready to scale? 
        <a href="demo" class="demo-link">
            Get Instant Demo →
        </a>
    </p>
</footer>

<?php endif; ?>
<footer>
  <div class="footer-main">

    <div>
      <a href="index" class="logo" style="margin-bottom:0">
        <div class="logo-box">CS</div>
        <div class="logo-name" style="color:#fff">CHEAP<span>SMS.com</span></div>
      </a>
      <p class="footer-brand-desc">Revolutionizing customer engagement through intelligent, AI-driven communication systems. Trusted by Millions of Businesses <br>AI-powered for the future.</p>
    </div>

    <div class="footer-col">
      <h4>DLT & Support</h4>
      <a href="free-dlt-registration-support"> DLT Registration Support</a>
      <a href="free-senderid-registration-support"> SenderID Registration Support</a>
       <a href="free-template-registration-support"> Template Registration Support</a>
      <a href="free-sms-test-credits-support"> SMS Test Credits</a>
      <a href="https://waba.io"> WhatsApp Business Api META PARTNER</a>
      <a href="https://bulkwhatsapp.com">Bulk Whatsapp Services</a>
      <a href="demo-credits-free-50">Demo Credits</a>
      
      
    </div>

    <div class="footer-col">
      <h4>Company</h4>
      <a href="about-us">About Us</a>
      <a href="contact-us">Contact Us</a>
      <a href="terms-and-conditions">Terms &amp; Conditions</a>
      <a href="privacy-policy">Privacy Policy</a>
      <a href="disclaimer">Disclaimer</a>
    </div>

    <div class="footer-col">
      <h4>Reach Us</h4>
      <h4>+91-9000937601</h4>
      <h4>info@cheapsms.com</h4>
      <h4><a href="login">Login</a></h4>
      
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date('2002-2026'); ?> cheapsms.com All rights reserved.</p>
  </div>
</footer>

<!-- ============================================================
     GLOBAL JAVASCRIPT
============================================================ -->
<script>
  /* ----- Hamburger ----- */
  const hbg  = document.getElementById('hamburger');
  const mNav = document.getElementById('mobileNav');
  hbg.addEventListener('click', () => {
    const open = mNav.classList.toggle('open');
    hbg.classList.toggle('active');
    hbg.setAttribute('aria-expanded', open);
    mNav.setAttribute('aria-hidden', !open);
    document.body.style.overflow = open ? 'hidden' : '';
  });
  mNav.querySelectorAll('a').forEach(l => l.addEventListener('click', () => {
    mNav.classList.remove('open');
    hbg.classList.remove('active');
    document.body.style.overflow = '';
  }));

  /* ----- Mobile accordion ----- */
  function toggleMob(btn) {
    const sub  = btn.nextElementSibling;
    const open = sub.classList.contains('open');
    document.querySelectorAll('.mobile-sub').forEach(s => s.classList.remove('open'));
    document.querySelectorAll('.mobile-toggle').forEach(b => b.classList.remove('open'));
    if (!open) { sub.classList.add('open'); btn.classList.add('open'); }
  }

  /* ----- Sticky header shadow ----- */
  const hdr = document.getElementById('site-header');
  window.addEventListener('scroll', () => {
    hdr.classList.toggle('scrolled', window.scrollY > 10);
  }, { passive: true });

  /* ----- Scroll-reveal ----- */
  const ro = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity   = '1';
        e.target.style.transform = 'translateY(0)';
        ro.unobserve(e.target);
      }
    });
  }, { threshold: 0.10 });
  document.querySelectorAll('.svc, .why-card, .tc, .ai-feat, .stat-box').forEach(el => {
    el.style.opacity   = '0';
    el.style.transform = 'translateY(22px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    ro.observe(el);
  });
</script>
</body>
</html>