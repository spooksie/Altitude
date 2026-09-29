{{--
    Altitude.com — public landing page (the domain is for sale).
    Concept: the page is an ascent through the atmosphere. Each section is a layer
    (troposphere → orbit), the sky darkens and the rules thin as you climb — the
    "Thin Air" mark at page scale. An altimeter rail replaces a conventional nav.
    Self-contained: inline CSS/JS, Google Fonts only, no Vite build.
    Every fact and contact detail is carried over word-for-word from the original
    altitude.com holding page. Do not invent prices, dates or owners.
--}}
@php
    $url = 'https://altitude.com/';
    $email = 'AMiller@atmholdings.com';
    $mailto = 'mailto:AMiller@atmholdings.com?subject=Domain%20inquiry%3A%20Altitude.com';
    $broker = 'https://atmholdings.com/';
    $ogImage = $url.'og-image.png'; // 1200×630, source: resources/og/og-image.html
    $ogAlt = 'The Altitude logo — lines thinning upward with a rising cyan dot — beside the words “An elite-level .com domain. Brokered by ATM Holdings.”';

    $title = 'Altitude.com is for sale — an elite-level .com domain';
    $description = 'Altitude.com, a one-word .com previously owned by a large company, is available to acquire. Brokered by ATM Holdings.';

    // The climb. Altitudes are the real, conventional boundaries of each layer.
    $layers = [
        ['id' => 'top', 'label' => 'Ground', 'layer' => 'Troposphere', 'km' => 0],
        ['id' => 'facts', 'label' => 'Flight data', 'layer' => 'Stratosphere', 'km' => 12],
        ['id' => 'why', 'label' => 'Why Altitude', 'layer' => 'Mesosphere', 'km' => 50],
        ['id' => 'industries', 'label' => 'Industries', 'layer' => 'Thermosphere', 'km' => 80],
        ['id' => 'faq', 'label' => 'FAQ', 'layer' => 'Kármán line', 'km' => 100],
        ['id' => 'enquire', 'label' => 'Enquire', 'layer' => 'Orbit', 'km' => 400],
    ];

    $facts = [
        ['Domain', 'Altitude.com', null],
        ['Length', 'One word, eight letters', null],
        ['Extension', '.com', null],
        ['Status', 'Available to acquire', null],
        ['Brokered by', 'ATM Holdings', $broker],
        ['Previously owned by', 'A large company', null],
        ['Enquiries', $email, $mailto],
    ];

    $why = [
        ['A single, meaningful word', 'Altitude is height — how far above the ground you have climbed. The name promises elevation before a single line of marketing is written.'],
        ['The .com people type first', 'Customers assume the .com. Owning it means every word-of-mouth mention, every guess and every search lands on you.'],
        ['No industry lock-in', 'Altitude describes a position rather than a product, so it fits an airline, a bank, a fitness brand or an AI start-up equally well.'],
        ['A name with history', 'Altitude.com was previously owned by a large company and is now brokered by ATM Holdings.'],
    ];

    $industries = [
        ['Aviation & aerospace', 'Airlines, private charter, aircraft makers and space technology — brands where altitude is the product.'],
        ['Drones & air mobility', 'Drone operators, eVTOL and urban air mobility, aerial surveying and mapping.'],
        ['Outdoor & mountaineering', 'Expedition companies, climbing gyms, outdoor gear and technical apparel.'],
        ['Travel & hospitality', 'Mountain resorts, ski destinations, rooftop hotels and adventure travel.'],
        ['Sport & performance', 'Altitude-training centres, endurance coaching, sports science and fitness apps.'],
        ['Health & wellbeing', 'Breathing, respiratory and wellness brands, clinics and recovery studios.'],
        ['Finance & wealth', 'Wealth managers, investment platforms and funds that offer a higher vantage point.'],
        ['Software & AI', 'SaaS, analytics and AI platforms that give teams the view from above.'],
        ['Weather & climate', 'Meteorology, atmospheric science and climate-data companies.'],
        ['Space & satellites', 'Satellite operators, earth observation and connectivity from orbit.'],
        ['Real estate & high-rise', 'Developers, high-rise residences and property investment brands.'],
        ['Leadership & consulting', 'Executive coaching, strategy consultancies and leadership programmes.'],
    ];

    $faqs = [
        ['Is Altitude.com for sale?', 'Yes. Altitude.com is an elite-level .com domain and is available to acquire.'],
        ['Who is brokering Altitude.com?', 'The domain is being brokered by ATM Holdings.'],
        ['Who owned Altitude.com before?', 'Altitude.com was previously owned by a large company.'],
        ['How do I make an enquiry or an offer?', 'Email AMiller@atmholdings.com with the subject “Domain inquiry: Altitude.com”.'],
        ['What could Altitude.com be used for?', 'Because “altitude” describes height and elevation rather than a specific product, it suits aviation, drones, outdoor and travel, sport and health, finance, software and AI, weather and climate, space, real estate and consulting brands.'],
        ['What does the price depend on?', 'Pricing is handled directly by the broker. Contact ATM Holdings to discuss terms.'],
        ['Where can I see other domain upgrades?', 'ATM Holdings lists relevant domain upgrades at atmholdings.com.'],
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            ['@type' => 'WebSite', '@id' => $url.'#website', 'url' => $url, 'name' => 'Altitude.com', 'description' => $description, 'inLanguage' => 'en', 'copyrightHolder' => ['@id' => 'https://coherence.com/#organization'], 'publisher' => ['@id' => 'https://coherence.com/#organization'], 'creator' => ['@id' => 'https://qquantum.ai/#organization']],
            ['@type' => 'Organization', '@id' => 'https://coherence.com/#organization', 'name' => 'Coherence', 'legalName' => 'Booth.com Ltd', 'url' => 'https://coherence.com/'],
            ['@type' => 'Organization', '@id' => 'https://qquantum.ai/#organization', 'name' => 'QQuantum.ai', 'url' => 'https://qquantum.ai/', 'description' => 'AI systems engineering studio in Barcelona — brand identity, logo and web design, AI agents and custom AI systems.'],
            ['@type' => 'WebPage', '@id' => $url.'#webpage', 'url' => $url, 'name' => $title, 'description' => $description, 'isPartOf' => ['@id' => $url.'#website'], 'about' => ['@id' => $url.'#domain'], 'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $ogImage, 'width' => 1200, 'height' => 630], 'inLanguage' => 'en'],
            [
                '@type' => 'Product', '@id' => $url.'#domain', 'name' => 'Altitude.com', 'category' => 'Premium .com domain name', 'image' => $ogImage,
                'description' => 'Altitude.com is an elite-level .com domain, previously owned by a large company, brokered by ATM Holdings.',
                'offers' => ['@type' => 'Offer', 'url' => $url, 'availability' => 'https://schema.org/InStock', 'seller' => ['@id' => $broker.'#organization']],
            ],
            [
                '@type' => 'Organization', '@id' => $broker.'#organization', 'name' => 'ATM Holdings', 'url' => $broker, 'email' => $email,
                'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'sales', 'email' => $email],
            ],
            [
                '@type' => 'FAQPage', '@id' => $url.'#faq',
                'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs),
            ],
        ],
    ];

    // Hero "air column": lines dense at ground level, thinning with height.
    $column = collect(range(0, 15))->map(fn ($k) => [
        'y' => round(100 * pow($k / 15, 1.8), 2),
        'h' => round(7 - $k * 0.38, 2),
        'o' => round(1 - $k * 0.045, 2),
    ]);

    // Animated Thin Air lockup (mark + wordmark), identical motion to the review page.
    // 'compact' = four heavier lines for small sizes (footer).
    $tmark = function (string $variant = 'full') {
        $bars = $variant === 'compact'
            ? [[159, 16], [127, 13], [91, 10], [53, 8]]
            : [[166.5, 7], [157.75, 6.5], [148, 6], [137.25, 5.5], [124.5, 5], [109.75, 4.5], [92, 4], [70.25, 3.5], [43.5, 3], [10.75, 2.5]];
        [$cy, $r] = $variant === 'compact' ? [24, 13] : [27, 8];
        $svg = '<svg class="ta-svg" viewBox="0 0 180 180" aria-hidden="true">';
        foreach ($bars as $i => [$y, $h]) {
            $svg .= '<g class="ta-k" style="--i: '.$i.'"><g class="ta-h"><g class="ta-i"><g class="ta-w"><rect class="ta-bar" x="14" y="'.$y.'" width="152" height="'.$h.'" rx="'.($h / 2).'"></rect></g></g></g></g>';
        }
        $svg .= '<g class="ta-dk"><g class="ta-dh"><g class="ta-di"><g class="ta-dw"><circle class="ta-dot" cx="146" cy="'.$cy.'" r="'.$r.'"></circle></g></g></g></g></svg>';
        $word = '<span class="ta-word">';
        foreach (str_split('altitude') as $i => $l) {
            $word .= '<span class="ltr" style="--i: '.$i.'">'.$l.'</span>';
        }
        return $svg.$word.'</span>';
    };

    $sun = '<svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"></path></svg>';
    $moon = '<svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5Z"></path></svg>';
    $up = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"></path></svg>';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<link rel="canonical" href="{{ $url }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Altitude.com">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $ogAlt }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:image:alt" content="{{ $ogAlt }}">
<meta name="theme-color" content="#F2F4F8" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#0D121C" media="(prefers-color-scheme: dark)">
<meta name="color-scheme" content="light dark">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="alternate" type="text/plain" href="/llms.txt" title="LLM summary">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600&amp;family=Sora:wght@300;400;500;600&amp;display=swap">
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@verbatim
<script>
(function () {
  var d = document.documentElement, t = null;
  try { t = localStorage.getItem('theme'); } catch (e) {}
  d.dataset.theme = t || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  d.classList.add('js');
})();
</script>
<style>
/* Sky tokens: --l0…--l4 step from ground-level sky to the edge of space. */
:root{
  --ink:#0A1020;--muted:#4A5266;--acc:#06628C;--dot:#0873A4;--acc-ink:#FFFFFF;--line:rgba(10,16,32,.14);--glass:rgba(242,244,248,.78);--card:#FFFFFF;
  --l0:#F2F4F8;--l1:#EAEFF6;--l2:#E1E8F2;--l3:#D8E1EE;--l4:#CFD9E9;
  --display:'Sora',system-ui,-apple-system,sans-serif;--text:'Instrument Sans',system-ui,-apple-system,sans-serif;
  color-scheme:light;interpolate-size:allow-keywords;
}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){
  --ink:#EEF1F8;--muted:#8C93A6;--acc:#4FD1FF;--dot:#4FD1FF;--acc-ink:#07090F;--line:rgba(238,241,248,.13);--glass:rgba(13,18,28,.74);--card:#111724;
  --l0:#0D121C;--l1:#0B0F18;--l2:#090C14;--l3:#070A10;--l4:#06080D;color-scheme:dark}}
:root[data-theme="dark"]{
  --ink:#EEF1F8;--muted:#8C93A6;--acc:#4FD1FF;--dot:#4FD1FF;--acc-ink:#07090F;--line:rgba(238,241,248,.13);--glass:rgba(13,18,28,.74);--card:#111724;
  --l0:#0D121C;--l1:#0B0F18;--l2:#090C14;--l3:#070A10;--l4:#06080D;color-scheme:dark}

*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;background:var(--l0);color:var(--ink);font:400 17px/1.6 var(--text);-webkit-font-smoothing:antialiased}
a{color:inherit}
svg{display:block}
.wrap{max-width:1180px;margin:0 auto;padding:0 20px}
@media (min-width:760px){.wrap{padding:0 40px}}
@media (min-width:1024px){.wrap{padding-right:132px}}
.skip{position:absolute;left:16px;top:-60px;z-index:100;background:var(--ink);color:var(--l0);padding:10px 16px;border-radius:8px;text-decoration:none}
.skip:focus{top:16px}
:focus-visible{outline:2px solid var(--acc);outline-offset:3px}
::selection{background:var(--dot);color:var(--acc-ink)}
.nw{white-space:nowrap}
:root[data-theme="dark"] .i-moon,:root[data-theme="light"] .i-sun{display:none}
.icon-btn{display:inline-flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:10px;border:1px solid var(--line);background:transparent;color:var(--ink);cursor:pointer;transition:border-color .25s,background-color .25s}
.icon-btn:hover{border-color:var(--ink)}

/* Layer labels — every section states where you are in the climb. */
.alt{display:flex;align-items:center;gap:12px;margin:0;font:500 12px/1 var(--display);letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.alt b{font-weight:600;color:var(--ink);letter-spacing:.06em}
.alt::after{content:"";flex:1;max-width:120px;height:1px;background:var(--line)}
h2{margin:18px 0 0;font:500 clamp(34px,5vw,64px)/1.02 var(--display);letter-spacing:-.045em;max-width:16ch;text-wrap:balance}
.intro{margin:20px 0 0;max-width:54ch;color:var(--muted);font-size:18px;text-wrap:pretty}
.layer{position:relative;background:var(--bg)}
.sec{padding:clamp(96px,13vw,168px) 0}

/* Reveal: things condense out of thin air (blur → sharp), no slide. */
.js [data-reveal]{opacity:0;filter:blur(10px);transition:opacity 1s cubic-bezier(.2,.8,.2,1),filter 1.1s cubic-bezier(.2,.8,.2,1);transition-delay:calc(var(--d,0)*90ms)}
.js [data-reveal].in{opacity:1;filter:none}

/* Buttons: squared-off, instrument-like */
.btn{display:inline-flex;align-items:center;gap:12px;min-height:54px;padding:0 22px;border-radius:12px;font:500 16px/1 var(--text);text-decoration:none;border:1px solid transparent;cursor:pointer;transition:background-color .25s,color .25s,border-color .25s}
.btn svg{transition:transform .45s cubic-bezier(.3,1.4,.5,1)}
.btn:hover svg{transform:translate(3px,-3px)}
.btn-solid{background:var(--ink);color:var(--l0)}
.btn-solid:hover{background:var(--acc);color:var(--acc-ink)}
.btn-line{border-color:var(--line);color:var(--ink)}
.btn-line:hover{border-color:var(--ink)}

/* ---------- Thin Air lockup (logo) ---------- */
.amark{appearance:none;background:none;border:0;margin:0;padding:0;font:inherit;cursor:pointer;color:var(--ink);text-decoration:none;-webkit-tap-highlight-color:transparent;border-radius:14px}
.lockup{display:inline-flex;align-items:center;gap:calc(var(--lh)*.2)}
.lockup .ta-svg{width:var(--lh);height:var(--lh);flex:none;overflow:visible}
.lockup .ta-word{font-size:calc(var(--lh)*.46)}
.amark g{transform-box:fill-box;transform-origin:center}
.js .amark:not(.play),.js .amark:not(.play) *{animation-play-state:paused!important}
.ltr{display:inline-block}
.ta-bar{fill:currentColor}
.amark .ta-i{transform-origin:left center;animation:ta-in .7s cubic-bezier(.2,.8,.2,1) calc(.15s + var(--i)*.06s) backwards}
@keyframes ta-in{from{transform:scaleX(0)}}
.ta-w{animation:ta-shimmer 3.2s ease-in-out calc(1.7s + var(--i)*.14s) infinite}
@keyframes ta-shimmer{0%,100%{opacity:1}50%{opacity:.3}}
.ta-h{transition:transform .6s cubic-bezier(.2,.9,.3,1.2) calc(var(--i)*.025s)}
.amark:hover .ta-h{transform:translateY(calc(var(--i)*var(--i)*-.3px))}
.ca .ta-k{animation:ta-wake-a .5s ease-out calc(var(--i)*.045s)}
.cb .ta-k{animation:ta-wake-b .5s ease-out calc(var(--i)*.045s)}
@keyframes ta-wake-a{0%,100%{transform:none}40%{transform:scaleX(.82)}70%{transform:scaleX(1.05)}}
@keyframes ta-wake-b{0%,100%{transform:none}40%{transform:scaleX(.82)}70%{transform:scaleX(1.05)}}
.ta-dot{fill:var(--dot)}
.ta-di{animation:ta-rise 1.1s cubic-bezier(.2,.8,.2,1) .9s backwards}
@keyframes ta-rise{from{transform:translateY(150px);opacity:0}}
.ta-dw{animation:ta-float 3s ease-in-out 2.1s infinite}
@keyframes ta-float{0%,100%{transform:none}50%{transform:translateY(-4px)}}
.ta-dh{transition:transform .7s cubic-bezier(.2,.9,.3,1.2) .2s}
.amark:hover .ta-dh{transform:translateY(-50px)}
.ca .ta-dk{animation:ta-shoot-a .8s cubic-bezier(.2,.8,.2,1)}
.cb .ta-dk{animation:ta-shoot-b .8s cubic-bezier(.2,.8,.2,1)}
@keyframes ta-shoot-a{0%{transform:translateY(150px);opacity:0}15%{opacity:1}70%{transform:translateY(-14px)}100%{transform:none}}
@keyframes ta-shoot-b{0%{transform:translateY(150px);opacity:0}15%{opacity:1}70%{transform:translateY(-14px)}100%{transform:none}}
.ta-word{display:inline-flex;font-family:var(--display);font-weight:600;line-height:1;letter-spacing:-.01em}
.ta-word .ltr{animation:ta-letter .8s cubic-bezier(.2,.8,.2,1) calc(.75s + var(--i)*.06s) backwards;transition:transform .6s cubic-bezier(.2,.9,.3,1.2)}
@keyframes ta-letter{from{opacity:0;filter:blur(10px)}}
.amark:hover .ta-word .ltr{transform:translateX(calc(var(--i)*.055em))}
.compact .ta-dw{animation-name:ta-float-c}
@keyframes ta-float-c{0%,100%{transform:none}50%{transform:translateY(-8px)}}
.amark.compact:hover .ta-h{transform:translateY(calc(var(--i)*-5px))}
.amark.compact:hover .ta-dh{transform:translateY(-20px)}
.amark.compact:hover .ta-word .ltr{transform:translateX(calc(var(--i)*.04em))}

/* ---------- Hero: ground level ---------- */
.hero{--bg:var(--l0);min-height:100svh;display:flex;flex-direction:column;overflow:hidden}
.hero-bar{display:flex;align-items:center;justify-content:space-between;gap:16px;padding-top:22px;padding-bottom:22px;width:100%}
.hero-tag{font:500 12px/1.3 var(--display);letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.hero-actions{display:flex;align-items:center;gap:8px}
.tlink{display:inline-flex;align-items:center;min-height:44px;padding:0 12px;font-weight:500;text-decoration:none;border-radius:10px}
.tlink:hover{background:var(--line)}
.hero-grid{flex:1;display:grid;grid-template-columns:minmax(0,1.35fr) minmax(0,1fr);gap:clamp(24px,5vw,72px);align-items:end;padding-bottom:clamp(40px,7svh,80px);width:100%}
.hero-copy{position:relative;z-index:1;padding-top:clamp(12px,4svh,48px)}
.hero-mark{--lh:clamp(52px,8svh,76px)}
.hero h1{margin:clamp(20px,4svh,40px) 0 0;font:500 clamp(40px,min(6.4vw,9.4svh),92px)/.98 var(--display);letter-spacing:-.05em;text-wrap:balance}
.hero .lede{margin:24px 0 0;max-width:48ch;font-size:clamp(16px,1.6vw,19px);color:var(--muted);text-wrap:pretty}
.hero .lede a{color:var(--ink);text-decoration-color:var(--dot);text-underline-offset:4px;text-decoration-thickness:2px}
.hero-cta{display:flex;gap:10px;flex-wrap:wrap;margin-top:30px}
.hero-contact{margin:18px 0 0;font-size:15px;color:var(--muted)}
.hero-contact a{color:var(--ink);text-underline-offset:4px}
.js .h-in{opacity:0;filter:blur(10px);animation:h-in 1s cubic-bezier(.2,.8,.2,1) forwards;animation-delay:var(--d)}
@keyframes h-in{to{opacity:1;filter:none}}

/* The air column: the mark stretched to the height of the sky */
.column{position:relative;align-self:stretch;min-height:min(62svh,600px);margin-top:24px}
.column i{position:absolute;left:0;right:0;border-radius:99px;background:var(--ink);opacity:calc(var(--o)*.9);transform-origin:left center;animation:col-in .9s cubic-bezier(.2,.8,.2,1) calc(.2s + var(--k)*.05s) backwards,col-air 3.4s ease-in-out calc(1.8s + var(--k)*.16s) infinite;transition:translate .7s cubic-bezier(.2,.9,.3,1.2) calc(var(--k)*.02s)}
@keyframes col-in{from{transform:scaleX(0)}}
@keyframes col-air{0%,100%{opacity:calc(var(--o)*.9)}50%{opacity:calc(var(--o)*.25)}}
.column:hover i{translate:0 calc(var(--k)*var(--k)*-.16px)}
.column .climber{position:absolute;right:14%;bottom:0;width:18px;height:18px;border-radius:50%;background:var(--dot);box-shadow:0 0 0 6px color-mix(in srgb,var(--dot) 18%,transparent);animation:climb 9s cubic-bezier(.4,0,.2,1) 1.4s infinite backwards}
.column .km.km-g{translate:0 calc(100% + 14px)}
/* Climbs by `bottom` so the same keyframes fit the tall desktop column and the short mobile band */
@keyframes climb{0%{bottom:0;opacity:0}6%{opacity:1}75%{opacity:1}100%{bottom:100%;opacity:0}}
.column .km{position:absolute;left:0;translate:0 -130%;font:500 11px/1 var(--display);letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
/* Phones and small tablets: content first, then the air column laid down as a full-bleed
   band of sky along the bottom of the hero — lines run edge to edge, dense at the ground. */
@media (max-width:859px){
  .hero-grid{grid-template-columns:minmax(0,1fr);grid-template-rows:auto minmax(132px,1fr);align-items:start;gap:40px;padding-bottom:0}
  .hero-copy{padding-top:4px}
  .hero h1{margin-top:28px}
  .column{align-self:stretch;min-height:0;margin:0 -20px}
  .column i{scale:1 .6}
  .column .km{left:20px}
  .column .km-g{display:none}
  .column .climber{width:12px;height:12px;right:18%;box-shadow:0 0 0 5px color-mix(in srgb,var(--dot) 18%,transparent);animation-duration:6s}
}
@media (min-width:760px) and (max-width:859px){.column{margin:0 -40px}.column .km{left:40px}}
@media (max-width:519px){
  .tag-x{display:none}
  .hero-cta .btn{flex:1 1 100%;justify-content:space-between}
}

/* ---------- Stratosphere: flight data ---------- */
.strat{--bg:var(--l1)}
.split{display:grid;gap:48px}
@media (min-width:960px){.split{grid-template-columns:minmax(0,.9fr) minmax(0,1.1fr);align-items:start}}
.readout{margin:0;border-top:2px solid var(--ink)}
.readout div{display:flex;align-items:baseline;gap:14px;padding:18px 0;border-bottom:1px solid var(--line)}
.readout dt{flex:none;font:500 12px/1.4 var(--display);letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.readout div::after{content:"";order:1;flex:1;min-width:24px;border-bottom:1px dotted color-mix(in srgb,var(--ink) 35%,transparent);transform:translateY(-4px) scaleX(0);transform-origin:left;transition:transform 1s cubic-bezier(.6,0,.2,1) calc(var(--d)*110ms + 200ms)}
.readout.in div::after{transform:translateY(-4px) scaleX(1)}
.readout dd{order:2;margin:0;text-align:right;font:500 clamp(17px,2vw,22px)/1.3 var(--display);letter-spacing:-.02em;overflow-wrap:anywhere}
.readout dd a{text-decoration:none;background:linear-gradient(var(--dot),var(--dot)) 0 100%/100% 2px no-repeat;padding-bottom:2px}
.readout dd a:hover{color:var(--acc)}

/* ---------- Mesosphere: strata that thin as they rise ---------- */
.meso{--bg:var(--l2)}
.strata{list-style:none;margin:64px 0 0;padding:0}
.stratum{position:relative;display:grid;grid-template-columns:72px minmax(0,1fr) minmax(0,1.1fr);gap:8px 32px;padding:34px 0 38px;border-top:var(--w) solid var(--ink)}
@media (max-width:759px){.stratum{grid-template-columns:48px minmax(0,1fr)}.stratum p{grid-column:2}}
.stratum::before{content:"";position:absolute;left:0;top:calc(var(--w) / -2);width:12px;height:12px;border-radius:50%;background:var(--dot);translate:-2px -50%;transition:left 1.1s cubic-bezier(.6,0,.2,1)}
.stratum:hover::before{left:calc(100% - 10px)}
.stratum .n{font:500 14px/1.9 var(--display);color:var(--muted)}
.stratum h3{margin:0;font:500 clamp(22px,2.6vw,30px)/1.15 var(--display);letter-spacing:-.03em}
.stratum p{margin:0;color:var(--muted);text-wrap:pretty}

/* ---------- Thermosphere: flight-level index ---------- */
.thermo{--bg:var(--l3)}
.index{list-style:none;margin:56px 0 0;padding:0;border-top:1px solid var(--line)}
.fl{display:grid;grid-template-columns:88px minmax(0,1.1fr) minmax(0,1fr);gap:6px 28px;align-items:baseline;padding:22px 12px;border-bottom:1px solid var(--line);border-radius:4px;transition:background-color .35s}
@media (max-width:759px){.fl{grid-template-columns:64px minmax(0,1fr)}.fl p{grid-column:2}}
.fl:hover{background:color-mix(in srgb,var(--ink) 5%,transparent)}
.fl .code{font:500 12px/1 var(--display);letter-spacing:.1em;color:var(--muted);transition:color .3s}
.fl:hover .code{color:var(--acc)}
.fl h3{margin:0;font:400 clamp(22px,3vw,36px)/1.1 var(--display);letter-spacing:-.035em;transition:translate .5s cubic-bezier(.3,1.3,.5,1)}
.fl:hover h3{translate:10px 0}
.fl p{margin:0;font-size:15px;color:var(--muted);text-wrap:pretty}

/* ---------- Kármán line: FAQ ---------- */
.karman{--bg:var(--l4)}
.kline{display:flex;align-items:center;gap:16px;margin:0 0 56px;font:500 12px/1 var(--display);letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.kline::before,.kline::after{content:"";flex:1;height:0;border-top:1px dashed color-mix(in srgb,var(--ink) 40%,transparent)}
.kline::before{max-width:48px}
.faq{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:0 40px;margin-top:48px}
@media (max-width:859px){.faq{grid-template-columns:minmax(0,1fr)}}
.faq details{border-top:1px solid var(--line)}
.faq summary{list-style:none;display:grid;grid-template-columns:40px minmax(0,1fr) 20px;gap:12px;align-items:start;min-height:64px;padding:20px 0;cursor:pointer;font:500 18px/1.35 var(--display);letter-spacing:-.015em}
.faq summary::-webkit-details-marker{display:none}
.faq summary .q{font-size:13px;color:var(--muted);padding-top:3px}
.faq summary i{position:relative;width:20px;height:20px;margin-top:2px}
.faq summary i::before,.faq summary i::after{content:"";position:absolute;left:50%;top:50%;border-radius:2px;background:currentColor;translate:-50% -50%;transition:height .45s cubic-bezier(.3,1.4,.5,1),opacity .3s}
.faq summary i::before{width:2px;height:14px}
.faq summary i::after{width:14px;height:2px}
.faq details[open] summary i::before{height:0;opacity:0}
.faq details::details-content{height:0;overflow:clip;transition:height .5s cubic-bezier(.2,.8,.2,1),content-visibility .5s allow-discrete}
.faq details[open]::details-content{height:auto}
.faq .a{margin:0;padding:0 32px 26px 52px;color:var(--muted)}

/* ---------- Orbit: enquire (always night) ---------- */
.orbit{--bg:#04060B;--ink:#EEF1F8;--muted:#9AA1B4;--acc:#4FD1FF;--dot:#4FD1FF;--acc-ink:#07090F;--line:rgba(238,241,248,.14);--l0:#04060B;color:var(--ink);overflow:hidden}
.orbit .wrap{display:grid;gap:48px;align-items:center}
@media (min-width:960px){.orbit .wrap{grid-template-columns:minmax(0,1.2fr) minmax(0,.8fr)}}
.orbit h2{max-width:13ch}
.mail{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-top:36px}
.mail a.big{font:500 clamp(22px,3.8vw,42px)/1.2 var(--display);letter-spacing:-.035em;text-decoration:none;overflow-wrap:anywhere;background:linear-gradient(var(--dot),var(--dot)) 0 100%/0 2px no-repeat;padding-bottom:4px;transition:background-size .6s cubic-bezier(.6,0,.2,1)}
.mail a.big:hover{background-size:100% 2px}
.copy{display:inline-flex;align-items:center;min-height:44px;padding:0 16px;border-radius:10px;border:1px solid var(--line);background:transparent;color:var(--ink);font:500 14px/1 var(--text);cursor:pointer}
.copy:hover{border-color:var(--ink)}
.orbit .row{display:flex;gap:10px;flex-wrap:wrap;margin-top:30px}
.orbit .btn-solid{background:#EEF1F8;color:#04060B}
.orbit .btn-solid:hover{background:var(--acc);color:var(--acc-ink)}
.planet{width:min(100%,420px);justify-self:center;aspect-ratio:1}
.planet svg{width:100%;height:100%;overflow:visible}
.planet .ring{fill:none;stroke:rgba(238,241,248,.18);stroke-width:1;stroke-dasharray:3 6}
.planet .spin{transform-box:view-box;transform-origin:200px 200px;animation:orbit 22s linear infinite}
@keyframes orbit{to{transform:rotate(360deg)}}
.planet .sat{fill:var(--dot)}
.planet .halo{fill:none;stroke:var(--dot);stroke-width:1.5;opacity:.5}
.planet .stars circle{fill:#EEF1F8;animation:tw 4s ease-in-out infinite}
@keyframes tw{50%{opacity:.2}}

/* ---------- Footer: back to ground ---------- */
.site-foot{background:var(--l0);padding:0 0 calc(104px + env(safe-area-inset-bottom))}
@media (min-width:1024px){.site-foot{padding-bottom:36px}}
.ground{display:grid;gap:5px;padding:0 0 56px}
.ground span{display:block;background:var(--ink);opacity:.9}
.foot-top{display:grid;gap:40px;grid-template-columns:minmax(0,1fr);padding-bottom:48px}
@media (min-width:760px){.foot-top{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (min-width:1180px){.foot-top{grid-template-columns:minmax(0,1.2fr) minmax(0,.7fr) minmax(0,1fr) minmax(0,1.1fr)}}
@media (min-width:760px) and (max-width:1179px){.foot-cta{grid-column:1 / -1}}
.foot-logo{--lh:44px}
.foot-logo .ta-word{font-size:30px}
.foot-brand p{margin:16px 0 0;color:var(--muted);font-size:15px;max-width:30ch}
.foot-col{display:flex;flex-direction:column;gap:4px}
.foot-col h2{margin:0 0 8px;font:500 11px/1 var(--display);letter-spacing:.18em;text-transform:uppercase;color:var(--muted);max-width:none}
.foot-col a{display:inline-flex;align-items:center;min-height:36px;font-size:15px;color:color-mix(in srgb,var(--ink) 80%,transparent);text-decoration:none;width:fit-content}
.foot-col a:hover{color:var(--ink);text-decoration:underline;text-decoration-color:var(--dot);text-underline-offset:4px}
.foot-cta{display:flex;flex-direction:column;align-items:flex-start;gap:14px;min-width:0}
.foot-cta p{margin:0;font:500 18px/1.3 var(--display);letter-spacing:-.01em}
.foot-cta .btn{max-width:100%;line-height:1.2;padding-block:12px}
.foot-bottom{border-top:1px solid var(--line);padding-top:28px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:20px;font-size:13px;color:var(--muted)}
.foot-bottom p{margin:0}
.foot-credits{display:flex;flex-wrap:wrap;align-items:center;gap:16px 24px}
.foot-credits a{display:inline-flex;align-items:center;gap:12px;min-height:44px;color:var(--ink);text-decoration:none}
.foot-credits span{font:500 10px/1 var(--display);letter-spacing:.18em;text-transform:uppercase;color:var(--muted);transition:color .25s}
.foot-credits a:hover span{color:var(--ink)}
.foot-credits svg{width:auto;opacity:.75;transition:opacity .25s}
.foot-credits a:hover svg{opacity:1}
.credit-qq svg{height:13px}
.credit-coh svg{height:24px}
.foot-sep{width:1px;height:18px;background:var(--line)}
@media (max-width:559px){.foot-sep{display:none}}

/* ---------- Altimeter rail (navigation) ---------- */
.rail{position:fixed;z-index:50;right:18px;top:50%;translate:0 -50%;display:flex;flex-direction:column;align-items:flex-end;gap:16px;opacity:0;visibility:hidden;transition:opacity .6s,visibility 0s linear .6s}
.past .rail{opacity:1;visibility:visible;transition:opacity .6s,visibility 0s}
.rail-read{text-align:right;padding-right:6px}
.rail-read .v{display:block;font:500 26px/1 var(--display);letter-spacing:-.04em;font-variant-numeric:tabular-nums}
.rail-read .v small{font-size:12px;letter-spacing:.08em;margin-left:3px;color:var(--muted)}
.rail-read .ln{display:block;margin-top:6px;font:500 10px/1 var(--display);letter-spacing:.16em;text-transform:uppercase;color:var(--muted)}
.rail-track{position:relative;width:40px;height:min(50vh,420px)}
.rail-track::before{content:"";position:absolute;right:13px;top:0;bottom:0;width:1px;background:var(--line)}
.rail-track ol{list-style:none;margin:0;padding:0}
.rail-track li{position:absolute;right:0;bottom:calc(var(--p) * 100%);translate:0 50%}
.rail-track a{position:relative;display:flex;align-items:center;justify-content:flex-end;min-height:40px;width:40px;text-decoration:none;color:var(--ink)}
.rail-track a i{width:12px;height:1px;margin-right:8px;background:var(--ink);opacity:.45;transition:width .35s,opacity .35s}
.rail-track a .rl{position:absolute;right:40px;white-space:nowrap;padding:6px 10px;border-radius:8px;background:var(--glass);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border:1px solid var(--line);font-size:13px;font-weight:500;opacity:0;translate:6px 0;pointer-events:none;transition:opacity .3s,translate .4s cubic-bezier(.3,1.3,.5,1)}
.rail-track a .rl small{display:block;font:500 10px/1.3 var(--display);letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.rail-track a:hover .rl,.rail-track a:focus-visible .rl{opacity:1;translate:0}
.rail-track a.active i{width:22px;opacity:1}
.rail-dot{position:absolute;right:7px;bottom:0;width:13px;height:13px;border-radius:50%;background:var(--dot);translate:0 50%;box-shadow:0 0 0 5px color-mix(in srgb,var(--dot) 20%,transparent);pointer-events:none;transition:bottom .15s linear}
.rail-ctl{display:flex;flex-direction:column;align-items:flex-end;gap:8px}
.rail-ctl .icon-btn{background:var(--glass);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px)}
.rail-cta{display:inline-flex;align-items:center;min-height:44px;padding:0 14px;border-radius:10px;background:var(--ink);color:var(--l0);font-size:14px;font-weight:500;text-decoration:none}
.rail-cta:hover{background:var(--acc);color:var(--acc-ink)}
.rail-toggle{display:none}
/* Over the always-night orbit section the rail takes its colours */
.in-orbit .rail{--ink:#EEF1F8;--muted:#9AA1B4;--dot:#4FD1FF;--acc:#4FD1FF;--acc-ink:#07090F;--line:rgba(238,241,248,.18);--glass:rgba(4,6,11,.7);--card:#0B0F18;--l0:#04060B;color:#EEF1F8}
@media (max-width:1023px){
  .rail{top:auto;right:12px;left:12px;bottom:calc(12px + env(safe-area-inset-bottom));translate:none;flex-direction:row;align-items:center;justify-content:space-between;gap:8px;padding:6px 6px 6px 14px;border-radius:14px;background:var(--glass);backdrop-filter:blur(16px) saturate(1.4);-webkit-backdrop-filter:blur(16px) saturate(1.4);border:1px solid var(--line);box-shadow:0 16px 40px -20px rgba(0,0,0,.4)}
  .rail-read{text-align:left;padding:0;min-width:0}
  .rail-read .v{font-size:20px;display:inline}
  .rail-read .ln{display:inline;margin:0 0 0 8px}
  .rail-track{position:static;width:auto;height:auto}
  .rail-track::before,.rail-dot{display:none}
  .rail-track ol{position:absolute;left:0;right:0;bottom:calc(100% + 8px);display:grid;gap:4px;padding:6px;border-radius:14px;background:var(--card);border:1px solid var(--line);box-shadow:0 20px 50px -20px rgba(0,0,0,.45);opacity:0;visibility:hidden;translate:0 10px;transition:opacity .3s,translate .4s cubic-bezier(.3,1.3,.5,1),visibility 0s linear .3s}
  .rail.open .rail-track ol{opacity:1;visibility:visible;translate:0;transition:opacity .3s,translate .4s cubic-bezier(.3,1.3,.5,1),visibility 0s}
  .rail-track li{position:static;translate:none}
  .rail-track a{width:auto;min-height:48px;justify-content:flex-start;padding:0 12px;border-radius:10px}
  .rail-track a.active{background:color-mix(in srgb,var(--ink) 8%,transparent)}
  .rail-track a i{display:none}
  .rail-track a .rl{position:static;opacity:1;translate:none;background:none;border:0;padding:0;backdrop-filter:none;-webkit-backdrop-filter:none;display:flex;align-items:baseline;justify-content:space-between;width:100%;font-size:16px}
  .rail-ctl{flex-direction:row;align-items:center;gap:6px}
  .rail-ctl .icon-btn{background:transparent;backdrop-filter:none;border-color:transparent}
  .rail-toggle{display:inline-flex;align-items:center;min-height:44px;padding:0 12px;border-radius:10px;border:1px solid var(--line);background:transparent;color:var(--ink);font:500 14px/1 var(--text);cursor:pointer}
  .rail.open .rail-toggle{background:var(--ink);color:var(--l0)}
}
@media (max-width:420px){.rail-read .ln{display:none}}

/* Theme switch: night rises from the ground up (day falls from the top) */
::view-transition-old(root),::view-transition-new(root){animation:none;mix-blend-mode:normal}

@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  *,*::before,*::after{animation-duration:1ms!important;animation-delay:0s!important;animation-iteration-count:1!important;transition-duration:1ms!important;transition-delay:0s!important}
  .column .climber{display:none}
}
</style>
@endverbatim
</head>
<body>
<a class="skip" href="#main">Skip to content</a>

<nav class="rail" id="rail" aria-label="Altitude — page sections">
    <div class="rail-read" aria-hidden="true"><span class="v"><span id="alt-km">0</span><small>km</small></span><span class="ln" id="alt-layer">Troposphere</span></div>
    <div class="rail-track">
        <ol id="rail-list">
            @foreach ($layers as $i => $l)
                <li style="--p: {{ round($i / (count($layers) - 1), 4) }}"><a href="#{{ $l['id'] }}"><span class="rl">{{ $l['label'] }} <small>{{ $l['layer'] }} · {{ $l['km'] }} km</small></span><i aria-hidden="true"></i></a></li>
            @endforeach
        </ol>
        <span class="rail-dot" id="rail-dot" aria-hidden="true"></span>
    </div>
    <div class="rail-ctl">
        <button class="rail-toggle" type="button" aria-expanded="false" aria-controls="rail-list">Sections</button>
        <button class="icon-btn theme-toggle" type="button" aria-label="Toggle dark mode">{!! $sun !!}{!! $moon !!}</button>
        <a class="rail-cta" href="{{ $mailto }}">Enquire</a>
    </div>
</nav>

<header class="hero layer" id="top" data-km="0" data-layer="Troposphere">
    <div class="wrap hero-bar">
        <span class="hero-tag h-in" style="--d: .1s">Altitude.com<span class="tag-x"> · Premium domain</span></span>
        <div class="hero-actions h-in" style="--d: .2s">
            <a class="tlink" href="#enquire">Enquire</a>
            <button class="icon-btn theme-toggle" type="button" aria-label="Toggle dark mode">{!! $sun !!}{!! $moon !!}</button>
        </div>
    </div>

    <div class="wrap hero-grid">
        <div class="hero-copy">
            <button type="button" class="amark lockup hero-mark play" aria-label="Altitude">{!! $tmark('full') !!}</button>
            <h1 class="h-in" style="--d: 1.1s">This is an <span class="nw">elite-level</span> .com domain</h1>
            <p class="lede h-in" style="--d: 1.25s">It is being brokered by ATM Holdings (previously owned by a large company). Check out <a href="{{ $broker }}" target="_blank" rel="noopener">this resource</a> to see some relevant domain upgrades.</p>
            <div class="hero-cta h-in" style="--d: 1.4s">
                <a class="btn btn-solid" href="{{ $mailto }}">Contact Us About This Domain {!! $up !!}</a>
                <a class="btn btn-line" href="#facts">Begin the climb</a>
            </div>
            <p class="hero-contact h-in" style="--d: 1.55s">Contact us: <a href="{{ $mailto }}">{{ $email }}</a></p>
        </div>

        <div class="column" aria-hidden="true">
            @foreach ($column as $k => $c)
                <i style="--k: {{ $k }}; --o: {{ $c['o'] }}; bottom: {{ $c['y'] }}%; height: {{ $c['h'] }}px"></i>
            @endforeach
            <span class="km" style="bottom: 100%">Thin air</span>
            <span class="km km-g" style="bottom: 0%">Ground · 0 km</span>
            <span class="climber"></span>
        </div>
    </div>
</header>

<main id="main">
    <section class="layer strat sec" id="facts" data-km="12" data-layer="Stratosphere" aria-labelledby="facts-title">
        <div class="wrap split">
            <div>
                <p class="alt" data-reveal>Stratosphere <b>12 km</b></p>
                <h2 id="facts-title" data-reveal style="--d: 1">Flight data.</h2>
                <p class="intro" data-reveal style="--d: 2">Everything known about the name, exactly as the broker states it — nothing added.</p>
            </div>
            <dl class="readout" data-reveal style="--d: 2">
                @foreach ($facts as $i => [$k, $v, $href])
                    <div style="--d: {{ $i }}"><dt>{{ $k }}</dt><dd>@if ($href)<a href="{{ $href }}" @if (str_starts_with($href, 'http')) target="_blank" rel="noopener" @endif>{{ $v }}</a>@else{{ $v }}@endif</dd></div>
                @endforeach
            </dl>
        </div>
    </section>

    <section class="layer meso sec" id="why" data-km="50" data-layer="Mesosphere" aria-labelledby="why-title">
        <div class="wrap">
            <p class="alt" data-reveal>Mesosphere <b>50 km</b></p>
            <h2 id="why-title" data-reveal style="--d: 1">A name that means rising above.</h2>
            <p class="intro" data-reveal style="--d: 2">Short, positive, easy to spell and impossible to mishear. Altitude.com is the kind of domain a brand is built around, not squeezed into.</p>
            <ol class="strata">
                @foreach ($why as $i => [$h, $p])
                    <li class="stratum" data-reveal style="--d: {{ $i }}; --w: {{ 4 - $i }}px">
                        <span class="n">0{{ $i + 1 }}</span>
                        <h3>{{ $h }}</h3>
                        <p>{{ $p }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="layer thermo sec" id="industries" data-km="80" data-layer="Thermosphere" aria-labelledby="ind-title">
        <div class="wrap">
            <p class="alt" data-reveal>Thermosphere <b>80 km</b></p>
            <h2 id="ind-title" data-reveal style="--d: 1">Every industry that aims higher.</h2>
            <p class="intro" data-reveal style="--d: 2">Altitude describes a position — height, elevation, the view from above — so it works for almost any category. Twelve of the flight levels it was made for:</p>
            <ol class="index">
                @foreach ($industries as $i => [$name, $text])
                    <li class="fl" data-reveal style="--d: {{ $i % 4 }}">
                        <span class="code">FL{{ str_pad(($i + 1) * 10, 3, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $name }}</h3>
                        <p>{{ $text }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="layer karman sec" id="faq" data-km="100" data-layer="Kármán line" aria-labelledby="faq-title">
        <div class="wrap">
            <p class="kline" data-reveal>Kármán line · 100 km · where space begins</p>
            <h2 id="faq-title" data-reveal style="--d: 1">Questions about Altitude.com</h2>
            <div class="faq" data-reveal style="--d: 2">
                @foreach ($faqs as $i => [$q, $a])
                    <details @if ($i === 0) open @endif>
                        <summary><span class="q">Q{{ $i + 1 }}</span>{{ $q }}<i aria-hidden="true"></i></summary>
                        <p class="a">{{ $a }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="layer orbit sec" id="enquire" data-km="400" data-layer="Orbit" aria-labelledby="enq-title">
        <div class="wrap">
            <div>
                <p class="alt" data-reveal>Orbit <b>400 km</b></p>
                <h2 id="enq-title" data-reveal style="--d: 1">Contact us about this domain.</h2>
                <p class="intro" data-reveal style="--d: 2">Altitude.com is being brokered by ATM Holdings. Send an enquiry and the broker will take it from there.</p>
                <div class="mail" data-reveal style="--d: 3">
                    <a class="big" href="{{ $mailto }}">{{ $email }}</a>
                    <button class="copy" type="button" data-copy="{{ $email }}">Copy email</button>
                </div>
                <div class="row" data-reveal style="--d: 4">
                    <a class="btn btn-solid" href="{{ $mailto }}">Contact Us About This Domain {!! $up !!}</a>
                    <a class="btn btn-line" href="{{ $broker }}" target="_blank" rel="noopener">See relevant domain upgrades</a>
                </div>
            </div>
            <div class="planet" aria-hidden="true" data-reveal style="--d: 2">
                <svg viewBox="0 0 400 400">
                    <defs><clipPath id="planet-clip"><circle cx="200" cy="200" r="92"></circle></clipPath></defs>
                    <g class="stars">
                        @foreach ([[40, 60, 1.2, 0], [340, 40, 1, 1.2], [370, 300, 1.4, .6], [60, 330, 1, 2], [300, 360, 1.1, 2.8], [20, 200, 1.3, 1.6], [250, 20, 1, .3]] as [$sx, $sy, $sr, $sd])
                            <circle cx="{{ $sx }}" cy="{{ $sy }}" r="{{ $sr }}" style="animation-delay: {{ $sd }}s"></circle>
                        @endforeach
                    </g>
                    <circle class="ring" cx="200" cy="200" r="170"></circle>
                    <g clip-path="url(#planet-clip)" fill="#EEF1F8">
                        @foreach ([[276, 16], [248, 13], [222, 10], [197, 8], [174, 6], [153, 4.5], [133, 3.5], [114, 2.5]] as $j => [$py, $ph])
                            <rect x="100" y="{{ $py }}" width="200" height="{{ $ph }}" rx="{{ $ph / 2 }}" opacity="{{ 1 - $j * .1 }}"></rect>
                        @endforeach
                    </g>
                    <circle cx="200" cy="200" r="92" fill="none" stroke="rgba(238,241,248,.25)"></circle>
                    <g class="spin">
                        <circle class="halo" cx="200" cy="30" r="14"></circle>
                        <circle class="sat" cx="200" cy="30" r="8"></circle>
                    </g>
                </svg>
            </div>
        </div>
    </section>
</main>

<footer class="site-foot">
    <div class="ground" aria-hidden="true">
        @foreach ([1, 1.5, 2.5, 4, 6] as $gh)
            <span style="height: {{ $gh }}px"></span>
        @endforeach
    </div>
    <div class="wrap">
        <div class="foot-top">
            <div class="foot-brand">
                <a href="#top" class="foot-logo amark lockup compact" aria-label="Altitude.com — back to top">{!! $tmark('compact') !!}</a>
                <p>An elite-level .com domain. Brokered by ATM Holdings.</p>
            </div>
            <nav class="foot-col" aria-label="Explore">
                <h2>Explore</h2>
                <a href="#facts">Flight data</a>
                <a href="#why">Why Altitude</a>
                <a href="#industries">Industries</a>
                <a href="#faq">FAQ</a>
            </nav>
            <div class="foot-col">
                <h2>Contact</h2>
                <a href="{{ $mailto }}">{{ $email }}</a>
                <a href="{{ $broker }}" target="_blank" rel="noopener">ATM Holdings</a>
                <a href="/llms.txt">llms.txt</a>
            </div>
            <div class="foot-cta">
                <p>Interested in Altitude.com?</p>
                <a class="btn btn-solid" href="{{ $mailto }}">Contact Us About This Domain {!! $up !!}</a>
            </div>
        </div>
        <div class="foot-bottom">
            <p>&copy;{{ date('Y') }} Booth.com Ltd. All Rights Reserved.</p>
            <div class="foot-credits">
                <a class="credit-qq" href="https://qquantum.ai/creative-design/brand-identity-logos" target="_blank" rel="noopener" title="QQuantum.ai — brand identity, logo and web design by an AI systems engineering studio in Barcelona">
                    <span>Designed &amp; built by</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -780 5620 1010" role="img" aria-label="QQuantum.ai" fill="none"><title>QQuantum.ai</title><g><path transform="translate(301 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="currentColor"/></g><g><path transform="translate(942 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(1523 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="currentColor"/></g><g><path transform="translate(2066 0)" d="M70 0V-496H194V-431H212Q224 -457 257 -480Q290 -504 357 -504Q415 -504 458 -478Q502 -451 526 -404Q550 -358 550 -296V0H424V-286Q424 -342 396 -370Q369 -398 318 -398Q260 -398 228 -360Q196 -321 196 -252V0Z" fill="currentColor"/></g><g><path transform="translate(2647 0)" d="M260 0Q211 0 180 -30Q150 -61 150 -112V-392H26V-496H150V-650H276V-496H412V-392H276V-134Q276 -104 304 -104H400V0Z" fill="currentColor"/></g><g><path transform="translate(3068 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(3649 0)" d="M70 0V-496H194V-442H212Q225 -467 255 -486Q285 -504 334 -504Q387 -504 419 -484Q451 -463 468 -430H486Q503 -462 534 -483Q565 -504 622 -504Q668 -504 706 -484Q743 -465 766 -426Q788 -386 788 -326V0H662V-317Q662 -358 641 -378Q620 -399 582 -399Q539 -399 516 -372Q492 -344 492 -293V0H366V-317Q366 -358 345 -378Q324 -399 286 -399Q243 -399 220 -372Q196 -344 196 -293V0Z" fill="currentColor"/></g><g><path transform="translate(4468 0)" d="M150 14Q109 14 82 -13Q54 -39 54 -81Q54 -123 82 -150Q109 -176 150 -176Q190 -176 217 -149Q244 -123 244 -81Q244 -39 217 -12Q190 14 150 14Z" fill="#5eb3d6"/></g><g><path transform="translate(4731 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="#5eb3d6"/></g><g><path transform="translate(5274 0)" d="M70 0V-496H196V0ZM133 -554Q99 -554 76 -576Q52 -598 52 -634Q52 -670 76 -692Q99 -714 133 -714Q168 -714 191 -692Q214 -670 214 -634Q214 -598 191 -576Q168 -554 133 -554Z" fill="#5eb3d6"/></g><g><path transform="translate(0 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="none" stroke="#c9a75c" stroke-width="55" stroke-linejoin="round"/></g></svg>
                </a>
                <span class="foot-sep" aria-hidden="true"></span>
                <a class="credit-coh" href="https://coherence.com" target="_blank" rel="noopener" title="Coherence — ethical, human-centred AI across sound, education and consciousness">
                    <span>Part of</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="3.00 3.00 289.08 58.00" role="img" aria-label="Coherence">
  <title>Coherence</title>
  
  <defs>
    <clipPath id="coherence-mark-clip">
      <rect x="3" y="3" width="58" height="58" rx="15"/>
    </clipPath>
  </defs>
  <g id="mark">
    <rect x="3.5" y="3.5" width="57" height="57" rx="14.5" fill="none" stroke="#00BDF1" stroke-opacity="0.65" stroke-width="2.5"/>
    <g clip-path="url(#coherence-mark-clip)">
      <path d="M-48 19 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="currentColor" stroke-opacity="0.85" stroke-width="2.4" stroke-linecap="round"/>
      <path d="M-48 32 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="#00BDF1" stroke-opacity="1" stroke-width="2.4" stroke-linecap="round"/>
      <path d="M-48 45 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="currentColor" stroke-opacity="0.85" stroke-width="2.4" stroke-linecap="round"/>
    </g>
  </g>
  <g id="wordmark" fill="currentColor">
    <path d="M88.12800000000001 46.86682352941176Q84.00752941176471 46.86682352941176 81.07764705882353 45.42776470588235Q78.14776470588235 43.98870588235294 76.30494117647059 41.65929411764706Q74.46211764705883 39.329882352941176 73.5924705882353 36.607058823529414Q72.72282352941177 33.884235294117644 72.72282352941177 31.33741176470588V30.426352941176468Q72.72282352941177 27.631058823529408 73.61317647058824 24.887529411764703Q74.50352941176472 22.143999999999995 76.35670588235294 19.90776470588235Q78.20988235294118 17.671529411764702 81.088 16.325647058823527Q83.96611764705882 14.97976470588235 87.90023529411765 14.97976470588235Q92.0 14.97976470588235 95.05411764705883 16.460235294117645Q98.10823529411766 17.940705882352937 99.93035294117648 20.60141176470588Q101.7524705882353 23.26211764705882 102.1044705882353 26.823529411764703H96.18258823529412Q95.87200000000001 24.752941176470586 94.73317647058825 23.334588235294113Q93.59435294117648 21.916235294117644 91.84470588235294 21.181176470588234Q90.09505882352941 20.44611764705882 87.90023529411765 20.44611764705882Q85.664 20.44611764705882 83.93505882352942 21.222588235294115Q82.20611764705883 21.99905882352941 81.04658823529412 23.40705882352941Q79.88705882352942 24.81505882352941 79.28658823529412 26.72Q78.68611764705882 28.624941176470585 78.68611764705882 30.923294117647053Q78.68611764705882 33.1595294117647 79.28658823529412 35.064470588235295Q79.88705882352942 36.96941176470588 81.088 38.398117647058825Q82.28894117647059 39.82682352941176 84.04894117647059 40.61364705882353Q85.8089411764706 41.400470588235294 88.12800000000001 41.400470588235294Q91.52376470588236 41.400470588235294 93.85317647058824 39.72329411764706Q96.18258823529412 38.04611764705882 96.67952941176472 35.02305882352941H102.60141176470589Q102.208 38.27388235294117 100.41694117647059 40.96564705882353Q98.62588235294118 43.657411764705884 95.53035294117647 45.26211764705882Q92.43482352941177 46.86682352941176 88.12800000000001 46.86682352941176Z"/>
    <path d="M116.47435294117648 46.86682352941176Q113.51341176470589 46.86682352941176 111.23576470588236 45.91435294117647Q108.95811764705883 44.961882352941174 107.3844705882353 43.336470588235294Q105.81082352941178 41.71105882352941 105.00329411764707 39.640470588235296Q104.19576470588237 37.56988235294118 104.19576470588237 35.31294117647059V34.443294117647056Q104.19576470588237 32.14494117647058 105.03435294117648 30.043294117647054Q105.8729411764706 27.941647058823527 107.46729411764707 26.316235294117647Q109.06164705882354 24.690823529411762 111.33929411764707 23.748705882352937Q113.6169411764706 22.806588235294114 116.47435294117648 22.806588235294114Q119.3524705882353 22.806588235294114 121.61976470588237 23.748705882352937Q123.88705882352943 24.690823529411762 125.4814117647059 26.316235294117647Q127.07576470588236 27.941647058823527 127.91435294117647 30.043294117647054Q128.75294117647059 32.14494117647058 128.75294117647059 34.443294117647056V35.31294117647059Q128.75294117647059 37.56988235294118 127.94541176470588 39.640470588235296Q127.13788235294119 41.71105882352941 125.56423529411765 43.336470588235294Q123.99058823529413 44.961882352941174 121.7129411764706 45.91435294117647Q119.43529411764706 46.86682352941176 116.47435294117648 46.86682352941176ZM116.47435294117648 41.93882352941176Q118.58635294117649 41.93882352941176 120.03576470588237 41.017411764705884Q121.48517647058824 40.096 122.2409411764706 38.49129411764706Q122.99670588235296 36.88658823529411 122.99670588235296 34.87811764705882Q122.99670588235296 32.807529411764705 122.22023529411766 31.202823529411763Q121.44376470588236 29.59811764705882 119.98400000000001 28.66635294117647Q118.52423529411766 27.734588235294115 116.47435294117648 27.734588235294115Q114.44517647058825 27.734588235294115 112.97505882352942 28.66635294117647Q111.5049411764706 29.59811764705882 110.7284705882353 31.202823529411763Q109.95200000000001 32.807529411764705 109.95200000000001 34.87811764705882Q109.95200000000001 36.88658823529411 110.70776470588237 38.49129411764706Q111.46352941176471 40.096 112.92329411764706 41.017411764705884Q114.38305882352942 41.93882352941176 116.47435294117648 41.93882352941176Z"/>
    <path d="M132.35576470588236 46.08V15.849411764705877H138.11200000000002V33.49082352941176H137.11811764705885Q137.11811764705885 30.11576470588235 137.9774117647059 27.744941176470583Q138.83670588235296 25.37411764705882 140.56564705882354 24.13176470588235Q142.29458823529413 22.88941176470588 144.92423529411766 22.88941176470588H145.17270588235294Q149.024 22.88941176470588 151.02211764705885 25.55011764705882Q153.02023529411767 28.210823529411762 153.02023529411767 33.263058823529406V46.08H147.264V32.70399999999999Q147.264 30.571294117647057 146.032 29.318588235294115Q144.8 28.065882352941173 142.81223529411767 28.065882352941173Q140.70023529411768 28.065882352941173 139.40611764705886 29.453176470588232Q138.11200000000002 30.84047058823529 138.11200000000002 33.09741176470588V46.08Z"/>
    <path d="M167.80423529411766 46.86682352941176Q164.9054117647059 46.86682352941176 162.73129411764705 45.87294117647059Q160.55717647058825 44.87905882352941 159.1284705882353 43.21223529411765Q157.69976470588236 41.54541176470588 156.97505882352942 39.474823529411765Q156.2503529411765 37.40423529411764 156.2503529411765 35.23011764705882V34.443294117647056Q156.2503529411765 32.20705882352941 156.97505882352942 30.12611764705882Q157.69976470588236 28.04517647058823 159.11811764705885 26.39905882352941Q160.53647058823532 24.752941176470586 162.6588235294118 23.77976470588235Q164.78117647058824 22.806588235294114 167.55576470588235 22.806588235294114Q171.20000000000002 22.806588235294114 173.65364705882354 24.411294117647056Q176.1072941176471 26.016 177.36 28.593882352941172Q178.61270588235294 31.17176470588235 178.61270588235294 34.15341176470588V36.24470588235294H158.69364705882353V32.724705882352936H174.98917647058823L173.22917647058824 34.443294117647056Q173.22917647058824 32.28988235294118 172.59764705882355 30.75764705882353Q171.96611764705884 29.22541176470588 170.71341176470588 28.39717647058823Q169.46070588235295 27.568941176470585 167.55576470588235 27.568941176470585Q165.63011764705882 27.568941176470585 164.3049411764706 28.448941176470584Q162.97976470588236 29.328941176470586 162.30682352941176 30.95435294117647Q161.63388235294119 32.579764705882354 161.63388235294119 34.85741176470588Q161.63388235294119 36.990117647058824 162.28611764705883 38.625882352941176Q162.93835294117648 40.26164705882353 164.3049411764706 41.18305882352941Q165.6715294117647 42.104470588235294 167.80423529411766 42.104470588235294Q169.89552941176473 42.104470588235294 171.22070588235295 41.255529411764705Q172.5458823529412 40.406588235294116 172.91858823529412 39.18494117647059H178.21929411764708Q177.74305882352942 41.483294117647056 176.32470588235296 43.22258823529411Q174.9063529411765 44.961882352941174 172.74258823529414 45.91435294117647Q170.57882352941178 46.86682352941176 167.80423529411766 46.86682352941176Z"/>
    <path d="M181.9670588235294 46.08V23.59341176470588H186.52235294117648V33.118117647058824H186.39811764705883Q186.39811764705883 28.293647058823527 188.46870588235294 25.798588235294115Q190.53929411764707 23.303529411764703 194.55623529411764 23.303529411764703H195.3844705882353V28.314352941176466H193.81082352941178Q190.89129411764708 28.314352941176466 189.30729411764707 29.877647058823527Q187.72329411764707 31.440941176470588 187.72329411764707 34.38117647058823V46.08Z"/>
    <path d="M207.8494117647059 46.86682352941176Q204.95058823529413 46.86682352941176 202.77647058823533 45.87294117647059Q200.6023529411765 44.87905882352941 199.17364705882355 43.21223529411765Q197.7449411764706 41.54541176470588 197.02023529411767 39.474823529411765Q196.29552941176473 37.40423529411764 196.29552941176473 35.23011764705882V34.443294117647056Q196.29552941176473 32.20705882352941 197.02023529411767 30.12611764705882Q197.7449411764706 28.04517647058823 199.16329411764707 26.39905882352941Q200.58164705882356 24.752941176470586 202.704 23.77976470588235Q204.82635294117648 22.806588235294114 207.6009411764706 22.806588235294114Q211.24517647058826 22.806588235294114 213.69882352941178 24.411294117647056Q216.1524705882353 26.016 217.40517647058826 28.593882352941172Q218.65788235294121 31.17176470588235 218.65788235294121 34.15341176470588V36.24470588235294H198.73882352941177V32.724705882352936H215.0343529411765L213.2743529411765 34.443294117647056Q213.2743529411765 32.28988235294118 212.64282352941177 30.75764705882353Q212.01129411764708 29.22541176470588 210.75858823529416 28.39717647058823Q209.5058823529412 27.568941176470585 207.6009411764706 27.568941176470585Q205.67529411764707 27.568941176470585 204.35011764705882 28.448941176470584Q203.0249411764706 29.328941176470586 202.35200000000003 30.95435294117647Q201.67905882352943 32.579764705882354 201.67905882352943 34.85741176470588Q201.67905882352943 36.990117647058824 202.33129411764708 38.625882352941176Q202.98352941176472 40.26164705882353 204.35011764705882 41.18305882352941Q205.71670588235295 42.104470588235294 207.8494117647059 42.104470588235294Q209.94070588235297 42.104470588235294 211.26588235294122 41.255529411764705Q212.59105882352944 40.406588235294116 212.96376470588237 39.18494117647059H218.26447058823533Q217.78823529411767 41.483294117647056 216.3698823529412 43.22258823529411Q214.95152941176474 44.961882352941174 212.78776470588238 45.91435294117647Q210.62400000000002 46.86682352941176 207.8494117647059 46.86682352941176Z"/>
    <path d="M222.01223529411766 46.08V23.59341176470588H226.56752941176472V33.24235294117647H226.1534117647059Q226.1534117647059 29.825882352941175 227.05411764705883 27.527529411764704Q227.95482352941178 25.229176470588232 229.76658823529414 24.059294117647056Q231.5783529411765 22.88941176470588 234.24941176470588 22.88941176470588H234.4978823529412Q238.5355294117647 22.88941176470588 240.60611764705885 25.488Q242.67670588235296 28.086588235294116 242.67670588235296 33.22164705882353V46.08H236.9204705882353V32.70399999999999Q236.9204705882353 30.63341176470588 235.7298823529412 29.34964705882353Q234.53929411764707 28.065882352941173 232.46870588235296 28.065882352941173Q230.35670588235297 28.065882352941173 229.06258823529413 29.380705882352938Q227.76847058823532 30.695529411764703 227.76847058823532 32.869647058823524V46.08Z"/>
    <path d="M257.35717647058823 46.86682352941176Q254.43764705882353 46.86682352941176 252.29458823529413 45.883294117647054Q250.15152941176473 44.899764705882355 248.73317647058826 43.23294117647059Q247.31482352941177 41.566117647058825 246.6108235294118 39.49552941176471Q245.90682352941178 37.42494117647058 245.90682352941178 35.2715294117647V34.48470588235294Q245.90682352941178 32.22776470588235 246.63152941176472 30.13647058823529Q247.35623529411765 28.04517647058823 248.79529411764707 26.39905882352941Q250.23435294117647 24.752941176470586 252.36705882352942 23.77976470588235Q254.49976470588237 22.806588235294114 257.3157647058824 22.806588235294114Q260.2767058823529 22.806588235294114 262.5854117647059 23.94541176470588Q264.8941176470588 25.084235294117644 266.28141176470587 27.11341176470588Q267.6687058823529 29.142588235294113 267.83435294117646 31.83435294117647H262.24376470588237Q262.036705882353 30.11576470588235 260.784 28.945882352941172Q259.53129411764706 27.775999999999996 257.3157647058824 27.775999999999996Q255.41082352941177 27.775999999999996 254.15811764705882 28.68705882352941Q252.9054117647059 29.59811764705882 252.28423529411765 31.19247058823529Q251.6630588235294 32.78682352941176 251.6630588235294 34.87811764705882Q251.6630588235294 36.86588235294117 252.25317647058824 38.470588235294116Q252.84329411764708 40.075294117647054 254.10635294117648 40.98635294117646Q255.3694117647059 41.89741176470588 257.35717647058823 41.89741176470588Q258.86870588235297 41.89741176470588 259.9454117647059 41.35905882352941Q261.02211764705885 40.82070588235294 261.664 39.87858823529412Q262.3058823529412 38.936470588235295 262.45082352941176 37.71482352941176H268.0414117647059Q267.89647058823533 40.468705882352936 266.46776470588236 42.51858823529412Q265.03905882352944 44.56847058823529 262.6889411764706 45.71764705882353Q260.3388235294118 46.86682352941176 257.35717647058823 46.86682352941176Z"/>
    <path d="M281.2724705882353 46.86682352941176Q278.37364705882356 46.86682352941176 276.19952941176473 45.87294117647059Q274.0254117647059 44.87905882352941 272.5967058823529 43.21223529411765Q271.168 41.54541176470588 270.44329411764704 39.474823529411765Q269.71858823529413 37.40423529411764 269.71858823529413 35.23011764705882V34.443294117647056Q269.71858823529413 32.20705882352941 270.44329411764704 30.12611764705882Q271.168 28.04517647058823 272.5863529411765 26.39905882352941Q274.00470588235294 24.752941176470586 276.1270588235294 23.77976470588235Q278.2494117647059 22.806588235294114 281.024 22.806588235294114Q284.66823529411766 22.806588235294114 287.12188235294116 24.411294117647056Q289.5755294117647 26.016 290.8282352941177 28.593882352941172Q292.0809411764706 31.17176470588235 292.0809411764706 34.15341176470588V36.24470588235294H272.1618823529412V32.724705882352936H288.4574117647059L286.6974117647059 34.443294117647056Q286.6974117647059 32.28988235294118 286.06588235294123 30.75764705882353Q285.4343529411765 29.22541176470588 284.1816470588235 28.39717647058823Q282.9289411764706 27.568941176470585 281.024 27.568941176470585Q279.0983529411765 27.568941176470585 277.7731764705883 28.448941176470584Q276.44800000000004 29.328941176470586 275.77505882352943 30.95435294117647Q275.10211764705883 32.579764705882354 275.10211764705883 34.85741176470588Q275.10211764705883 36.990117647058824 275.7543529411765 38.625882352941176Q276.4065882352941 40.26164705882353 277.7731764705883 41.18305882352941Q279.1397647058824 42.104470588235294 281.2724705882353 42.104470588235294Q283.3637647058824 42.104470588235294 284.6889411764706 41.255529411764705Q286.0141176470588 40.406588235294116 286.3868235294118 39.18494117647059H291.68752941176473Q291.21129411764707 41.483294117647056 289.7929411764706 43.22258823529411Q288.37458823529414 44.961882352941174 286.21082352941175 45.91435294117647Q284.0470588235294 46.86682352941176 281.2724705882353 46.86682352941176Z"/>
  </g>
</svg>
                </a>
            </div>
        </div>
    </div>
</footer>

@verbatim
<script>
(function () {
  var root = document.documentElement;
  var reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Theme: follows the system until toggled. Night rises from the ground; day falls from the top. */
  function label(t) {
    document.querySelectorAll('.theme-toggle').forEach(function (b) {
      b.setAttribute('aria-label', t === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
    });
  }
  function applyTheme(t) {
    root.dataset.theme = t;
    try { localStorage.setItem('theme', t); } catch (e) {}
    label(t);
  }
  document.querySelectorAll('.theme-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var next = root.dataset.theme === 'dark' ? 'light' : 'dark';
      if (!document.startViewTransition || reduced) { applyTheme(next); return; }
      var from = next === 'dark' ? 'inset(100% 0 0 0)' : 'inset(0 0 100% 0)';
      document.startViewTransition(function () { applyTheme(next); }).ready.then(function () {
        root.animate({ clipPath: [from, 'inset(0 0 0 0)'] },
          { duration: 800, easing: 'cubic-bezier(.6,0,.2,1)', pseudoElement: '::view-transition-new(root)' });
      });
    });
  });
  label(root.dataset.theme);
  try {
    if (!localStorage.getItem('theme')) {
      matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
        if (!localStorage.getItem('theme')) { root.dataset.theme = e.matches ? 'dark' : 'light'; label(root.dataset.theme); }
      });
    }
  } catch (e) {}

  /* Logo click: the lines tighten and the point shoots up through them. */
  document.querySelectorAll('.amark').forEach(function (m) {
    var n = 0;
    m.addEventListener('click', function () {
      n++;
      m.classList.remove('ca', 'cb');
      m.classList.add(n % 2 ? 'ca' : 'cb');
    });
  });
  var footMark = document.querySelector('.foot-logo');
  new IntersectionObserver(function (e, o) {
    if (e[0].isIntersecting) { footMark.classList.add('play'); o.disconnect(); }
  }, { threshold: 0.6 }).observe(footMark);

  /* Altimeter rail: appears once you leave the ground; the dot and the km readout climb with the scroll. */
  var rail = document.getElementById('rail'), hero = document.getElementById('top');
  var toggle = rail.querySelector('.rail-toggle');
  function close() { rail.classList.remove('open'); toggle.setAttribute('aria-expanded', 'false'); }
  new IntersectionObserver(function (e) {
    var past = !e[0].isIntersecting;
    document.body.classList.toggle('past', past);
    if (!past) close();
  }, { rootMargin: '-35% 0px 0px 0px' }).observe(hero);

  toggle.addEventListener('click', function () {
    var open = rail.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  rail.querySelectorAll('.rail-track a').forEach(function (a) { a.addEventListener('click', close); });
  document.addEventListener('click', function (e) { if (!rail.contains(e.target)) close(); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && rail.classList.contains('open')) { close(); toggle.focus(); } });

  var layers = Array.prototype.slice.call(document.querySelectorAll('[data-km]'));
  var links = Array.prototype.slice.call(rail.querySelectorAll('.rail-track a'));
  var kmEl = document.getElementById('alt-km'), lnEl = document.getElementById('alt-layer'), dot = document.getElementById('rail-dot');
  var ticking = false;
  function update() {
    ticking = false;
    var y = scrollY + innerHeight * 0.45, n = layers.length, i = 0;
    var tops = layers.map(function (l) { return l.getBoundingClientRect().top + scrollY; });
    for (var j = 0; j < n; j++) { if (tops[j] <= y) i = j; }
    var next = Math.min(i + 1, n - 1);
    var f = next === i ? 0 : Math.max(0, Math.min(1, (y - tops[i]) / (tops[next] - tops[i])));
    var k0 = +layers[i].dataset.km, k1 = +layers[next].dataset.km;
    kmEl.textContent = Math.round(k0 + (k1 - k0) * f);
    lnEl.textContent = layers[i].dataset.layer;
    dot.style.bottom = ((i + f) / (n - 1) * 100) + '%';
    links.forEach(function (a, idx) {
      var on = idx === i;
      a.classList.toggle('active', on);
      if (on) { a.setAttribute('aria-current', 'true'); } else { a.removeAttribute('aria-current'); }
    });
    document.body.classList.toggle('in-orbit', layers[i].id === 'enquire');
  }
  addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(update); } }, { passive: true });
  addEventListener('resize', update);
  update();

  /* Everything condenses out of thin air; the flight-data leaders draw once the panel is in view. */
  var rev = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in'); rev.unobserve(e.target); } });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
  document.querySelectorAll('[data-reveal]').forEach(function (el) { rev.observe(el); });

  /* Copy email. */
  document.querySelectorAll('[data-copy]').forEach(function (b) {
    b.addEventListener('click', function () {
      if (!navigator.clipboard) return;
      navigator.clipboard.writeText(b.dataset.copy).then(function () {
        var t = b.textContent; b.textContent = 'Copied';
        setTimeout(function () { b.textContent = t; }, 1600);
      });
    });
  });
})();
</script>
@endverbatim
</body>
</html>
