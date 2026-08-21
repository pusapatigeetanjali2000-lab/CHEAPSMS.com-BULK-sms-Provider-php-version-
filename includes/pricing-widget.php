<?php
/**
 * pricing-widget.php — BULKSMS.AI Pricing Widget
 * ─────────────────────────────────────────────────
 * Drop this into ANY page with one line:
 *
 *   <?php include 'pricing-widget.php'; ?>
 *
 * That's it. No extra CSS files, no JS files, no dependencies.
 * The widget is fully self-contained — styles are scoped with
 * the .bsw- prefix so they NEVER clash with your page's CSS.
 *
 * OPTIONAL — pass config before including:
 *   $bsw_title    = "Custom Heading";         // override widget title
 *   $bsw_subtitle = "Custom sub-text";        // override subtitle
 *   $bsw_default  = "India";                  // pre-select a country
 *   $bsw_compact  = true;                     // smaller/compact mode
 *   $bsw_show_table = false;                  // hide the rates table below
 * ─────────────────────────────────────────────────
 */

// ── Config defaults ──────────────────────────────
$bsw_title      = $bsw_title      ?? 'SMS Price Calculator';
$bsw_subtitle   = $bsw_subtitle   ?? 'Select country · Drag slider · Switch currency';
$bsw_default    = $bsw_default    ?? 'Afghanistan';
$bsw_compact    = $bsw_compact    ?? false;
$bsw_show_table = $bsw_show_table ?? true;

// ── Country data (EUR per SMS) ───────────────────
$bsw_countries = [
  ["Afghanistan",0.3113],["Åland Islands",0.10296],["Albania",0.09713],["Algeria",0.2464],
  ["American Samoa",0.1815],["Andorra",0.1089],["Angola",0.12397],["Anguilla",0.13948],
  ["Antigua & Barbuda",0.21736],["Argentina",0.0781],["Armenia",0.1672],["Aruba",0.26037],
  ["Australia",0.0473],["Austria",0.07425],["Azerbaijan",0.3355],["Bahamas",0.0506],
  ["Bahrain",0.02772],["Bangladesh",0.3234],["Barbados",0.26037],["Belarus",0.21109],
  ["Belgium",0.10186],["Belize",0.24552],["Benin",0.21857],["Bermuda",0.26037],
  ["Bhutan",0.3234],["Bolivia",0.1936],["Bosnia & Herzegovina",0.3586],["Botswana",0.07942],
  ["Bouvet Island",0.01045],["Brazil",0.0209],["British Indian Ocean Territory",0.10296],
  ["British Virgin Islands",0.26037],["Brunei",0.05951],["Bulgaria",0.14047],
  ["Burkina Faso",0.1716],["Burundi",0.3278],["Cambodia",0.3355],["Cameroon",0.21153],
  ["Canada",0.01188],["Cape Verde",0.2002],["Caribbean Netherlands",0.10296],
  ["Cayman Islands",0.26037],["Central African Republic",0.3223],["Chad",0.26741],
  ["Chile",0.04389],["China",0.03245],["Colombia",0.0385],["Comoros",0.2354],
  ["Congo - Brazzaville",0.2618],["Congo - Kinshasa",0.21384],["Cook Islands",0.13464],
  ["Costa Rica",0.03454],["Côte d'Ivoire",0.3355],["Croatia",0.0869],["Cyprus",0.06743],
  ["Czechia",0.05126],["Denmark",0.05313],["Djibouti",0.15664],["Dominica",0.14795],
  ["Dominican Republic",0.08525],["Ecuador",0.2046],["Egypt",0.3223],["El Salvador",0.2101],
  ["Equatorial Guinea",0.2145],["Eritrea",0.10483],["Estonia",0.0737],["Eswatini",0.22484],
  ["Ethiopia",0.3168],["Falkland Islands",0.0825],["Faroe Islands",0.06732],["Fiji",0.16687],
  ["Finland",0.0726],["France",0.06292],["French Guiana",0.1375],["French Polynesia",0.13585],
  ["Gabon",0.2541],["Gambia",0.21373],["Georgia",0.14905],["Germany",0.09383],
  ["Ghana",0.2882],["Gibraltar",0.1056],["Greece",0.04939],["Greenland",0.03135],
  ["Grenada",0.2255],["Guadeloupe",0.13233],["Guam",0.05533],["Guatemala",0.20636],
  ["Guernsey",0.10296],["Guinea",0.264],["Guinea-Bissau",0.3201],["Guyana",0.15741],
  ["Haiti",0.27368],["Heard & McDonald Islands",0.10296],["Honduras",0.2277],
  ["Hong Kong SAR China",0.0539],["Hungary",0.06809],["Iceland",0.06842],["India",0.0638],
  ["Indonesia",0.3894],["Iraq",0.3278],["Ireland",0.05852],["Isle of Man",0.10296],
  ["Israel",0.2134],["Italy",0.07755],["Jamaica",0.26037],["Japan",0.07073],
  ["Jersey",0.10296],["Jordan",0.2585],["Kazakhstan",0.2662],["Kenya",0.13629],
  ["Kiribati",0.1397],["Kuwait",0.2684],["Kyrgyzstan",0.2277],["Laos",0.19778],
  ["Latvia",0.0583],["Lebanon",0.32329],["Lesotho",0.2365],["Liberia",0.21021],
  ["Libya",0.3267],["Liechtenstein",0.0352],["Lithuania",0.0429],["Luxembourg",0.07084],
  ["Macao SAR China",0.02618],["Madagascar",0.35926],["Malawi",0.3091],["Malaysia",0.2189],
  ["Maldives",0.02948],["Mali",0.2948],["Malta",0.08448],["Marshall Islands",0.14839],
  ["Martinique",0.1199],["Mauritania",0.2497],["Mauritius",0.15917],["Mayotte",0.10296],
  ["Mexico",0.11726],["Micronesia",0.0638],["Moldova",0.1122],["Monaco",0.16115],
  ["Mongolia",0.2684],["Montenegro",0.14652],["Montserrat",0.19283],["Morocco",0.19943],
  ["Mozambique",0.3124],["Myanmar (Burma)",0.27302],["Namibia",0.0495],["Nauru",0.26037],
  ["Nepal",0.2673],["Netherlands",0.09152],["New Caledonia",0.12232],["New Zealand",0.07942],
  ["Nicaragua",0.13552],["Niger",0.29931],["Nigeria",0.2948],["Niue",0.23804],
  ["Norfolk Island",0.10296],["North Macedonia",0.1067],["Northern Mariana Islands",0.10296],
  ["Norway",0.05665],["Oman",0.17237],["Pakistan",0.3993],["Palau",0.09636],
  ["Palestinian Territories",0.10296],["Panama",0.1606],["Papua New Guinea",0.26037],
  ["Paraguay",0.1078],["Peru",0.18678],["Philippines",0.1881],["Pitcairn Islands",0.10296],
  ["Poland",0.03454],["Portugal",0.0418],["Puerto Rico",0.03454],["Qatar",0.2101],
  ["Réunion",0.1342],["Romania",0.05962],["Russia",0.429],["Rwanda",0.24332],
  ["Samoa",0.26037],["San Marino",0.07216],["São Tomé & Príncipe",0.07634],
  ["Saudi Arabia",0.12947],["Senegal",0.3201],["Serbia",0.2882],["Seychelles",0.2189],
  ["Sierra Leone",0.3619],["Singapore",0.03575],["Sint Maarten",0.10296],["Slovakia",0.0759],
  ["Slovenia",0.1804],["Solomon Islands",0.1056],["Somalia",0.242],["South Africa",0.0121],
  ["South Korea",0.03971],["South Sudan",0.21868],["Spain",0.0495],["Sri Lanka",0.32538],
  ["St. Helena",0.10296],["St. Kitts & Nevis",0.26037],["St. Lucia",0.26037],
  ["St. Martin",0.10296],["St. Pierre & Miquelon",0.099],["St. Vincent & Grenadines",0.2156],
  ["Suriname",0.26037],["Svalbard & Jan Mayen",0.10296],["Sweden",0.04202],
  ["Switzerland",0.05753],["Tajikistan",0.4224],["Tanzania",0.2794],["Thailand",0.02299],
  ["Timor-Leste",0.1628],["Togo",0.3685],["Tokelau",0.10296],["Tonga",0.26037],
  ["Trinidad & Tobago",0.26037],["Tunisia",0.3146],["Turkey",0.02299],
  ["Turkmenistan",0.3058],["Turks & Caicos Islands",0.2365],["Tuvalu",0.09933],
  ["U.S. Virgin Islands",0.10296],["Uganda",0.28512],["Ukraine",0.1265],
  ["United Arab Emirates",0.10032],["United Kingdom",0.04796],["United States",0.00924],
  ["Uruguay",0.0748],["Uzbekistan",0.30943],["Vanuatu",0.26037],["Vatican City",0.10296],
  ["Venezuela",0.14421],["Vietnam",0.1496],["Wallis & Futuna",0.0836],
  ["Zambia",0.27258],["Zimbabwe",0.1276]
];

// Generate a unique widget ID so multiple widgets on same page don't collide
$bsw_id = 'bsw_' . substr(md5(uniqid()), 0, 8);
?>

<!-- ═══════════════════════════════════════════════════
     BULKSMS.AI PRICING WIDGET — START
     Include: <?php include 'pricing-widget.php'; ?>
═══════════════════════════════════════════════════ -->
<style>
/* ── Scoped to .bsw-widget — zero collision with host page ── */
.bsw-widget *,.bsw-widget *::before,.bsw-widget *::after{box-sizing:border-box;margin:0;padding:0}
.bsw-widget{
  --bsw-red:#e11d3f;--bsw-red2:#c81e38;--bsw-red3:#f87171;
  --bsw-pink:#ff4d6d;--bsw-bg:#1a0608;--bsw-bg2:#2a080d;
  --bsw-card:rgba(255,255,255,.04);--bsw-border:rgba(255,255,255,.08);
  --bsw-text:#e2e8f0;--bsw-muted:#94a3b8;--bsw-dim:#64748b;
  --bsw-surface:#1f0509;
  font-family:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;
  color:var(--bsw-text);
  background:var(--bsw-bg);
  border:1px solid var(--bsw-border);
  border-radius:20px;
  overflow:hidden;
  box-shadow:0 8px 40px rgba(0,0,0,.35),inset 0 1px 0 rgba(255,255,255,.06);
  max-width:800px;
  width:100%;
}
/* Header */
.bsw-head{
  background:linear-gradient(135deg,rgba(225,29,63,.18),rgba(255,77,109,.08));
  border-bottom:1px solid var(--bsw-border);
  padding:20px 28px;
  display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px
}
.bsw-head-left h3{font-size:1rem;font-weight:700;color:#fff;margin-bottom:3px;letter-spacing:-.2px}
.bsw-head-left p{font-size:.76rem;color:var(--bsw-muted)}
.bsw-live{display:flex;align-items:center;gap:7px;background:rgba(225,29,63,.1);border:1px solid rgba(225,29,63,.3);border-radius:20px;padding:5px 13px;font-size:.72rem;font-weight:700;color:var(--bsw-pink)}
.bsw-live .bsw-dot{width:7px;height:7px;border-radius:50%;background:var(--bsw-pink);flex-shrink:0;animation:bswPulse 1.6s ease-in-out infinite}
@keyframes bswPulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.3;transform:scale(.65)}}

/* Body */
.bsw-body{padding:24px 28px}

/* Country */
.bsw-label{display:block;font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.7px;color:var(--bsw-muted);margin-bottom:8px}
.bsw-sel-wrap{position:relative;margin-bottom:18px}
.bsw-sel-wrap::after{content:'▾';position:absolute;right:13px;top:50%;transform:translateY(-50%);color:var(--bsw-muted);pointer-events:none;font-size:.78rem}
.bsw-sel{
  width:100%;padding:11px 34px 11px 13px;
  background:rgba(255,255,255,.06);border:1px solid var(--bsw-border);
  border-radius:10px;font-size:.88rem;color:#fff;
  font-family:inherit;appearance:none;-webkit-appearance:none;
  cursor:pointer;outline:none;transition:border-color .15s,background .15s
}
.bsw-sel:focus{border-color:var(--bsw-red3);background:rgba(255,255,255,.08)}
.bsw-sel option{background:#2a080d;color:#fff}

/* Rate bar */
.bsw-rate-bar{
  display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;
  background:rgba(225,29,63,.07);border:1px solid rgba(225,29,63,.18);
  border-radius:10px;padding:11px 16px;margin-bottom:18px
}
.bsw-ri .bsw-ri-lbl{font-size:.62rem;font-weight:700;text-transform:uppercase;letter-spacing:.55px;color:var(--bsw-muted);margin-bottom:2px}
.bsw-ri .bsw-ri-val{font-size:.88rem;font-weight:800;color:#fff}
.bsw-ri .bsw-ri-val.hi{color:var(--bsw-pink)}
.bsw-rsep{width:1px;height:32px;background:var(--bsw-border)}

/* Slider */
.bsw-slider-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:9px}
.bsw-pill{
  background:linear-gradient(135deg,var(--bsw-red),var(--bsw-pink));
  border-radius:20px;padding:4px 15px;
  font-size:.82rem;font-weight:800;color:#fff;white-space:nowrap
}
.bsw-slider-wrap{padding:8px 0 4px}
input[type=range].bsw-range{
  -webkit-appearance:none;width:100%;height:6px;border-radius:3px;outline:none;cursor:pointer;
  background:linear-gradient(90deg,var(--bsw-red) var(--p,0%),rgba(255,255,255,.1) var(--p,0%));
}
input[type=range].bsw-range::-webkit-slider-thumb{
  -webkit-appearance:none;width:22px;height:22px;border-radius:50%;
  background:linear-gradient(135deg,var(--bsw-red),var(--bsw-pink));
  border:3px solid #fff;box-shadow:0 2px 8px rgba(225,29,63,.55);cursor:pointer;transition:transform .12s
}
input[type=range].bsw-range::-webkit-slider-thumb:hover{transform:scale(1.15)}
input[type=range].bsw-range::-moz-range-thumb{width:22px;height:22px;border-radius:50%;background:linear-gradient(135deg,var(--bsw-red),var(--bsw-pink));border:3px solid #fff;cursor:pointer}
.bsw-marks{display:flex;justify-content:space-between;padding:0 2px;margin-top:1px}
.bsw-marks span{font-size:.6rem;color:var(--bsw-dim)}

/* Currency tabs */
.bsw-cur-row{display:flex;gap:6px;flex-wrap:wrap;margin:18px 0 16px}
.bsw-cur{
  padding:7px 16px;background:rgba(255,255,255,.05);
  border:1px solid var(--bsw-border);border-radius:20px;
  font-size:.79rem;font-weight:700;color:var(--bsw-muted);
  cursor:pointer;transition:all .15s;font-family:inherit;line-height:1
}
.bsw-cur:hover{border-color:var(--bsw-red3);color:#fff}
.bsw-cur.on{background:var(--bsw-red);border-color:var(--bsw-red);color:#fff;box-shadow:0 3px 12px rgba(225,29,63,.4)}

/* Results */
.bsw-results{
  display:grid;grid-template-columns:1fr 1px 1fr 1px 1fr;
  background:linear-gradient(135deg,rgba(225,29,63,.1),rgba(255,77,109,.06));
  border:1px solid rgba(225,29,63,.22);border-radius:14px;overflow:hidden
}
.bsw-rc{padding:18px 14px;text-align:center}
.bsw-rdiv{background:var(--bsw-border);width:1px}
.bsw-rl{font-size:.65rem;font-weight:700;text-transform:uppercase;letter-spacing:.65px;color:var(--bsw-muted);margin-bottom:6px}
.bsw-rv{font-size:1.5rem;font-weight:900;color:#fff;letter-spacing:-.4px;line-height:1}
.bsw-rv.red{color:var(--bsw-pink)}
.bsw-rs{font-size:.7rem;color:var(--bsw-muted);margin-top:4px}

/* Summary */
.bsw-summary{
  margin-top:14px;padding:12px 16px;
  background:rgba(255,255,255,.03);border:1px solid var(--bsw-border);
  border-radius:10px;font-size:.81rem;color:var(--bsw-muted);line-height:1.6
}
.bsw-summary strong{color:#fff}
.bsw-formula{
  display:inline-block;margin-top:7px;font-family:'Courier New',monospace;
  font-size:.76rem;color:var(--bsw-pink);
  padding:5px 10px;background:rgba(225,29,63,.07);border-radius:6px
}

/* View full pricing link */
.bsw-footer{
  border-top:1px solid var(--bsw-border);
  padding:14px 28px;
  display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px
}
.bsw-footer-note{font-size:.72rem;color:var(--bsw-muted)}
.bsw-footer-link{
  padding:8px 20px;background:linear-gradient(135deg,var(--bsw-red),var(--bsw-red2));
  color:#fff;font-size:.79rem;font-weight:700;border-radius:8px;
  box-shadow:0 4px 14px rgba(225,29,63,.35);transition:transform .14s,opacity .14s;
  white-space:nowrap
}
.bsw-footer-link:hover{transform:translateY(-1px);opacity:.9;text-decoration:none;color:#fff}

/* ── Optional rates table ── */
.bsw-tbl-wrap{border-top:1px solid var(--bsw-border)}
.bsw-tbl-controls{display:flex;flex-wrap:wrap;align-items:center;gap:10px;padding:16px 28px 12px}
.bsw-tsearch{position:relative;flex:1 1 200px;max-width:280px}
.bsw-tsearch input{width:100%;padding:8px 11px 8px 32px;background:var(--bsw-card);border:1px solid var(--bsw-border);border-radius:8px;font-size:.8rem;color:#fff;font-family:inherit;outline:none;transition:border-color .14s}
.bsw-tsearch input::placeholder{color:var(--bsw-muted)}
.bsw-tsearch input:focus{border-color:var(--bsw-red3)}
.bsw-tsearch .bsw-si{position:absolute;left:10px;top:50%;transform:translateY(-50%);color:var(--bsw-muted);font-size:.8rem;pointer-events:none}
.bsw-tcur-row{display:flex;gap:5px;flex-wrap:wrap}
.bsw-tcur{padding:6px 13px;background:var(--bsw-card);border:1px solid var(--bsw-border);border-radius:20px;font-size:.74rem;font-weight:600;color:var(--bsw-muted);cursor:pointer;font-family:inherit;transition:all .14s}
.bsw-tcur:hover{border-color:var(--bsw-red3);color:#fff}
.bsw-tcur.on{background:var(--bsw-red);border-color:var(--bsw-red);color:#fff}
.bsw-tcount{margin-left:auto;font-size:.74rem;color:var(--bsw-muted);background:var(--bsw-card);border:1px solid var(--bsw-border);border-radius:20px;padding:4px 11px;white-space:nowrap}
.bsw-tbl-scroll{overflow-x:auto;padding:0 0 4px}
.bsw-tbl-scroll table{width:100%;border-collapse:collapse;font-size:.81rem}
.bsw-tbl-scroll thead tr{background:#1e0508}
.bsw-tbl-scroll thead th{padding:11px 18px;text-align:left;font-size:.67rem;font-weight:700;text-transform:uppercase;letter-spacing:.6px;color:var(--bsw-muted);white-space:nowrap;cursor:pointer;user-select:none;transition:color .13s}
.bsw-tbl-scroll thead th:hover{color:#fff}
.bsw-tbl-scroll thead th.bsw-sa::after{content:' ↑';color:var(--bsw-pink)}
.bsw-tbl-scroll thead th.bsw-sd::after{content:' ↓';color:var(--bsw-pink)}
.bsw-tbl-scroll tbody tr{border-bottom:1px solid rgba(255,255,255,.032);transition:background .1s}
.bsw-tbl-scroll tbody tr:last-child{border-bottom:none}
.bsw-tbl-scroll tbody tr:nth-child(even){background:rgba(225,29,63,.03)}
.bsw-tbl-scroll tbody tr:hover{background:rgba(225,29,63,.09)}
.bsw-tbl-scroll td{padding:9px 18px;white-space:nowrap}
.bsw-tbl-scroll td.bsw-n{color:var(--bsw-dim);font-size:.72rem;width:42px}
.bsw-tbl-scroll td.bsw-c{font-weight:500;color:#fff;white-space:normal;min-width:140px}
.bsw-tbl-scroll td.bsw-p{font-family:'Courier New',monospace;font-size:.8rem;text-align:right}
.bsw-tbl-scroll td.bsw-p.hi{color:var(--bsw-pink);font-weight:700}
.bsw-norows{text-align:center;padding:40px;color:var(--bsw-muted);font-size:.85rem}
.bsw-tbl-note{padding:10px 28px 16px;font-size:.68rem;color:var(--bsw-dim)}

/* Compact mode */
.bsw-widget.bsw-compact .bsw-body{padding:18px 20px}
.bsw-widget.bsw-compact .bsw-head{padding:16px 20px}
.bsw-widget.bsw-compact .bsw-rv{font-size:1.2rem}
.bsw-widget.bsw-compact .bsw-ri-val{font-size:.78rem}
.bsw-widget.bsw-compact .bsw-footer{padding:12px 20px}

/* Mobile */
@media(max-width:600px){
  .bsw-results{grid-template-columns:1fr;grid-template-rows:auto}
  .bsw-rdiv{height:1px;width:100%}
  .bsw-rate-bar{gap:6px}
  .bsw-rsep{display:none}
  .bsw-body{padding:18px 16px}
  .bsw-head{padding:16px}
  .bsw-footer{padding:12px 16px}
  .bsw-tbl-controls{padding:12px 16px 8px}
  .bsw-tbl-note{padding:8px 16px 12px}
}
</style>

<div class="bsw-widget<?= $bsw_compact ? ' bsw-compact' : '' ?>" id="<?= $bsw_id ?>">

  <!-- Header -->
  <div class="bsw-head">
    <div class="bsw-head-left">
      <h3><?= htmlspecialchars($bsw_title) ?></h3>
      <p><?= htmlspecialchars($bsw_subtitle) ?></p>
    </div>
    <div class="bsw-live"><span class="bsw-dot"></span> Live Rates · 233 Countries</div>
  </div>

  <!-- Body -->
  <div class="bsw-body">

    <!-- Country selector -->
    <label class="bsw-label" for="<?= $bsw_id ?>_sel">📍 Destination Country</label>
    <div class="bsw-sel-wrap">
      <select class="bsw-sel" id="<?= $bsw_id ?>_sel" onchange="<?= $bsw_id ?>_calc()">
        <?php foreach($bsw_countries as $c): ?>
          <option value="<?= htmlspecialchars($c[0]) ?>" data-eur="<?= $c[1] ?>"
            <?= $c[0]===$bsw_default?'selected':'' ?>>
            <?= htmlspecialchars($c[0]) ?> — €<?= number_format($c[1],5) ?> / SMS
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Rate bar — live per-SMS rate in all 5 currencies -->
    <div class="bsw-rate-bar">
      <div class="bsw-ri">
        <div class="bsw-ri-lbl">€ EUR / SMS</div>
        <div class="bsw-ri-val hi" id="<?= $bsw_id ?>_reur">€0.00000</div>
      </div>
      <div class="bsw-rsep"></div>
      <div class="bsw-ri">
        <div class="bsw-ri-lbl">$ USD / SMS</div>
        <div class="bsw-ri-val" id="<?= $bsw_id ?>_rusd">$0.00000</div>
      </div>
      <div class="bsw-rsep"></div>
      <div class="bsw-ri">
        <div class="bsw-ri-lbl">£ GBP / SMS</div>
        <div class="bsw-ri-val" id="<?= $bsw_id ?>_rgbp">£0.00000</div>
      </div>
      <div class="bsw-rsep"></div>
      <div class="bsw-ri">
        <div class="bsw-ri-lbl">₹ INR / SMS</div>
        <div class="bsw-ri-val" id="<?= $bsw_id ?>_rinr">₹0.0000</div>
      </div>
      <div class="bsw-rsep"></div>
      <div class="bsw-ri">
        <div class="bsw-ri-lbl">د.إ AED / SMS</div>
        <div class="bsw-ri-val" id="<?= $bsw_id ?>_raed">د.إ 0.00000</div>
      </div>
    </div>

    <!-- Slider: 200 → 20 Lakh -->
    <div>
      <div class="bsw-slider-head">
        <label class="bsw-label" style="margin-bottom:0">✉️ Number of SMS</label>
        <div class="bsw-pill" id="<?= $bsw_id ?>_pill">200 SMS</div>
      </div>
      <div class="bsw-slider-wrap">
        <input type="range" class="bsw-range" id="<?= $bsw_id ?>_slider"
               min="0" max="26" value="0"
               oninput="<?= $bsw_id ?>_calc()" style="--p:0%">
      </div>
      <div class="bsw-marks">
        <span>200</span><span>1K</span><span>5K</span><span>10K</span>
        <span>50K</span><span>1L</span><span>5L</span><span>10L</span><span>20L</span>
      </div>
    </div>

    <!-- Currency tabs -->
    <div class="bsw-cur-row" id="<?= $bsw_id ?>_curtabs">
      <button class="bsw-cur on"  onclick="<?= $bsw_id ?>_setCur('EUR',this)">€ EUR</button>
      <button class="bsw-cur"     onclick="<?= $bsw_id ?>_setCur('USD',this)">$ USD</button>
      <button class="bsw-cur"     onclick="<?= $bsw_id ?>_setCur('GBP',this)">£ GBP</button>
      <button class="bsw-cur"     onclick="<?= $bsw_id ?>_setCur('INR',this)">₹ INR</button>
      <button class="bsw-cur"     onclick="<?= $bsw_id ?>_setCur('AED',this)">د.إ AED</button>
    </div>

    <!-- Results panel -->
    <div class="bsw-results">
      <div class="bsw-rc">
        <div class="bsw-rl">No. of SMS</div>
        <div class="bsw-rv" id="<?= $bsw_id ?>_rsms">200</div>
        <div class="bsw-rs">messages</div>
      </div>
      <div class="bsw-rdiv"></div>
      <div class="bsw-rc">
        <div class="bsw-rl">Cost per SMS</div>
        <div class="bsw-rv red" id="<?= $bsw_id ?>_rcps">€0.00000</div>
        <div class="bsw-rs">per message</div>
      </div>
      <div class="bsw-rdiv"></div>
      <div class="bsw-rc">
        <div class="bsw-rl">Total Cost</div>
        <div class="bsw-rv" id="<?= $bsw_id ?>_rtot">€0.00</div>
        <div class="bsw-rs" id="<?= $bsw_id ?>_rcurlbl">euros</div>
      </div>
    </div>

    <!-- Summary formula -->
    <div class="bsw-summary">
      Sending <strong id="<?= $bsw_id ?>_sqty">200 SMS</strong>
      to <strong id="<?= $bsw_id ?>_scountry"><?= htmlspecialchars($bsw_default) ?></strong>
      costs <strong id="<?= $bsw_id ?>_stotal">—</strong>
      <br>
      <span class="bsw-formula" id="<?= $bsw_id ?>_sformula">Loading…</span>
    </div>

  </div><!-- /bsw-body -->

  <!-- Footer CTA -->
  <div class="bsw-footer">
    <div class="bsw-footer-note">
      Rates: 1 EUR = $1.08 · £0.85 · ₹97.50 · د.إ 3.97 &nbsp;(Mar 2026)
    </div>
    <a href="https://bulksms.ai/pricing.php" class="bsw-footer-link">
      📊 View Full Pricing
    </a>
  </div>

  <?php if($bsw_show_table): ?>
  <!-- Optional rates table -->
  <div class="bsw-tbl-wrap">
    <div class="bsw-tbl-controls">
      <div class="bsw-tsearch">
        <span class="bsw-si">🔍</span>
        <input type="text" placeholder="Search country…"
               oninput="<?= $bsw_id ?>_filterTbl(this.value)">
      </div>
      <div class="bsw-tcur-row" id="<?= $bsw_id ?>_tcur">
        <button class="bsw-tcur on"  onclick="<?= $bsw_id ?>_tblCur('usd',this)">$ USD</button>
        <button class="bsw-tcur"     onclick="<?= $bsw_id ?>_tblCur('gbp',this)">£ GBP</button>
        <button class="bsw-tcur"     onclick="<?= $bsw_id ?>_tblCur('inr',this)">₹ INR</button>
        <button class="bsw-tcur"     onclick="<?= $bsw_id ?>_tblCur('aed',this)">د.إ AED</button>
        <button class="bsw-tcur"     onclick="<?= $bsw_id ?>_tblCur('eur',this)">€ EUR</button>
        <button class="bsw-tcur"     onclick="<?= $bsw_id ?>_tblCur('all',this)">All</button>
      </div>
      <div class="bsw-tcount" id="<?= $bsw_id ?>_tcount">233 countries</div>
    </div>
    <div class="bsw-tbl-scroll">
      <table id="<?= $bsw_id ?>_tbl">
        <thead>
          <tr>
            <th onclick="<?= $bsw_id ?>_sortTbl(0)">#</th>
            <th onclick="<?= $bsw_id ?>_sortTbl(1)">Country</th>
            <th class="bsw-tc-usd" onclick="<?= $bsw_id ?>_sortTbl(2)">$ USD/SMS</th>
            <th class="bsw-tc-gbp" onclick="<?= $bsw_id ?>_sortTbl(3)" style="display:none">£ GBP/SMS</th>
            <th class="bsw-tc-inr" onclick="<?= $bsw_id ?>_sortTbl(4)" style="display:none">₹ INR/SMS</th>
            <th class="bsw-tc-aed" onclick="<?= $bsw_id ?>_sortTbl(5)" style="display:none">د.إ AED/SMS</th>
            <th class="bsw-tc-eur" onclick="<?= $bsw_id ?>_sortTbl(6)" style="display:none">€ EUR/SMS</th>
          </tr>
        </thead>
        <tbody id="<?= $bsw_id ?>_tbody">
          <?php
          $n=1;
          foreach($bsw_countries as $c){
            $eur=$c[1]; $nm=htmlspecialchars($c[0]);
            $usd=round($eur*1.08,5); $gbp=round($eur*0.85,5);
            $inr=round($eur*97.50,4); $aed=round($eur*3.97,5);
            echo "<tr>";
            echo "<td class='bsw-n'>{$n}</td>";
            echo "<td class='bsw-c'>{$nm}</td>";
            echo "<td class='bsw-p bsw-tc-usd hi'>\${$usd}</td>";
            echo "<td class='bsw-p bsw-tc-gbp' style='display:none'>£{$gbp}</td>";
            echo "<td class='bsw-p bsw-tc-inr' style='display:none'>₹{$inr}</td>";
            echo "<td class='bsw-p bsw-tc-aed' style='display:none'>د.إ {$aed}</td>";
            echo "<td class='bsw-p bsw-tc-eur' style='display:none'>€{$eur}</td>";
            echo "</tr>";
            $n++;
          }
          ?>
        </tbody>
      </table>
      <div class="bsw-norows" id="<?= $bsw_id ?>_norows" style="display:none">No countries match.</div>
    </div>
    <div class="bsw-tbl-note">
      Exchange rates (March 2026): 1 EUR = $1.08 USD · £0.85 GBP · ₹97.50 INR · د.إ 3.97 AED
    </div>
  </div>
  <?php endif; ?>

</div><!-- /bsw-widget -->

<script>
(function(){
  const ID = '<?= $bsw_id ?>';
  const FX = {EUR:1,USD:1.08,GBP:0.85,INR:97.50,AED:3.97};
  const SYM = {EUR:'€',USD:'$',GBP:'£',INR:'₹',AED:'د.إ '};
  const NM  = {EUR:'euros',USD:'US dollars',GBP:'pounds sterling',INR:'Indian rupees',AED:'UAE dirhams'};
  const STEPS = [
    200,300,500,750,
    1000,2000,3000,5000,7500,
    10000,25000,50000,75000,
    100000,250000,500000,750000,
    1000000,1250000,1500000,1750000,2000000
  ];

  let cur = 'EUR';

  function g(sfx){ return document.getElementById(ID+'_'+sfx); }

  function fmt(n,c,d){
    d = d !== undefined ? d : (c==='INR'?2:4);
    return SYM[c] + (n).toFixed(d);
  }
  function fmtTotal(n,c){
    return SYM[c] + n.toLocaleString('en-US',{minimumFractionDigits:2,maximumFractionDigits:2});
  }
  function fmtQty(n){
    if(n>=100000) return (n/100000).toFixed(n%100000===0?0:1)+' L';
    if(n>=1000)   return (n/1000).toFixed(n%1000===0?0:1)+'K';
    return n.toLocaleString();
  }

  window[ID+'_calc'] = function(){
    const sel = g('sel');
    const eur = parseFloat(sel.options[sel.selectedIndex].dataset.eur);
    const country = sel.value;
    const idx = parseInt(g('slider').value);
    const qty = STEPS[idx];
    const pct = (idx/(STEPS.length-1)*100).toFixed(1);
    g('slider').style.setProperty('--p', pct+'%');
    g('pill').textContent = qty.toLocaleString() + ' SMS';

    // rate bar
    g('reur').textContent = '€' + eur.toFixed(5);
    g('rusd').textContent = '$' + (eur*1.08).toFixed(5);
    g('rgbp').textContent = '£' + (eur*0.85).toFixed(5);
    g('rinr').textContent = '₹' + (eur*97.50).toFixed(4);
    g('raed').textContent = 'د.إ ' + (eur*3.97).toFixed(5);

    // results in active currency
    const rate = eur * FX[cur];
    const total = rate * qty;
    g('rsms').textContent = qty.toLocaleString();
    g('rcps').textContent = fmt(rate, cur);
    g('rtot').textContent = fmtTotal(total, cur);
    g('rcurlbl').textContent = NM[cur];

    // summary
    const qFmt = qty.toLocaleString() + ' SMS';
    const tFmt = fmtTotal(total, cur);
    g('sqty').textContent = qFmt;
    g('scountry').textContent = country;
    g('stotal').textContent = tFmt;
    g('sformula').textContent = qty.toLocaleString() + ' × ' + fmt(rate,cur) + ' = ' + tFmt;
  };

  window[ID+'_setCur'] = function(c, btn){
    cur = c;
    document.querySelectorAll('#'+ID+' .bsw-cur').forEach(b=>b.classList.remove('on'));
    btn.classList.add('on');
    window[ID+'_calc']();
  };

  // ── Table functions ──
  let tblCurActive = 'usd';
  window[ID+'_tblCur'] = function(c, btn){
    tblCurActive = c;
    document.querySelectorAll('#'+ID+'_tcur .bsw-tcur').forEach(b=>b.classList.remove('on'));
    btn.classList.add('on');
    const cols = ['usd','gbp','inr','aed','eur'];
    cols.forEach(col=>{
      const show = (c==='all'||c===col);
      document.querySelectorAll('#'+ID+'_tbl .bsw-tc-'+col)
        .forEach(el=>el.style.display=show?'':'none');
    });
    document.querySelectorAll('#'+ID+'_tbl td.bsw-p').forEach(el=>el.classList.remove('hi'));
    const hi = c==='all'?'usd':c;
    document.querySelectorAll('#'+ID+'_tbl td.bsw-p.bsw-tc-'+hi).forEach(el=>el.classList.add('hi'));
  };

  window[ID+'_filterTbl'] = function(q){
    q = q.toLowerCase();
    const rows = document.querySelectorAll('#'+ID+'_tbody tr');
    let n=0;
    rows.forEach(r=>{
      const show = r.cells[1].textContent.toLowerCase().includes(q);
      r.style.display = show?'':'none';
      if(show) r.cells[0].textContent = ++n;
    });
    const cnt = g('tcount');
    if(cnt) cnt.textContent = n + ' countr'+(n===1?'y':'ies');
    const nr = g('norows');
    if(nr) nr.style.display = n===0?'':'none';
  };

  let sState = {col:-1,asc:true};
  window[ID+'_sortTbl'] = function(col){
    const tbody = g('tbody');
    if(!tbody) return;
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const asc = sState.col===col ? !sState.asc : true;
    sState = {col,asc};
    rows.sort((a,b)=>{
      if(col<=1) return asc
        ? a.cells[col].textContent.trim().localeCompare(b.cells[col].textContent.trim())
        : b.cells[col].textContent.trim().localeCompare(a.cells[col].textContent.trim());
      const va = parseFloat(a.cells[col].textContent.replace(/[^0-9.]/g,''))||0;
      const vb = parseFloat(b.cells[col].textContent.replace(/[^0-9.]/g,''))||0;
      return asc?va-vb:vb-va;
    });
    rows.forEach((r,i)=>{r.cells[0].textContent=i+1;tbody.appendChild(r);});
    const tbl = g('tbl');
    if(tbl) tbl.querySelectorAll('thead th').forEach((th,i)=>{
      th.classList.remove('bsw-sa','bsw-sd');
      if(i===col) th.classList.add(asc?'bsw-sa':'bsw-sd');
    });
  };

  // Init on DOM ready
  if(document.readyState==='loading'){
    document.addEventListener('DOMContentLoaded', window[ID+'_calc']);
  } else {
    window[ID+'_calc']();
  }
})();
</script>
<!-- ═══════════════════════════════════════════════════
     BULKSMS.AI PRICING WIDGET — END
═══════════════════════════════════════════════════ -->