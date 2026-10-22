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
                <a class="credit-qq" href="https://qquantum.ai/creative-design/domain-landing-pages" target="_blank" rel="noopener" title="QQuantum.ai — domain landing pages designed and built by an AI systems engineering studio">
                    <span>Designed &amp; built by</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -780 5620 1010" role="img" aria-label="QQuantum.ai" fill="none"><title>QQuantum.ai</title><g><path transform="translate(301 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="currentColor"/></g><g><path transform="translate(942 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(1523 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="currentColor"/></g><g><path transform="translate(2066 0)" d="M70 0V-496H194V-431H212Q224 -457 257 -480Q290 -504 357 -504Q415 -504 458 -478Q502 -451 526 -404Q550 -358 550 -296V0H424V-286Q424 -342 396 -370Q369 -398 318 -398Q260 -398 228 -360Q196 -321 196 -252V0Z" fill="currentColor"/></g><g><path transform="translate(2647 0)" d="M260 0Q211 0 180 -30Q150 -61 150 -112V-392H26V-496H150V-650H276V-496H412V-392H276V-134Q276 -104 304 -104H400V0Z" fill="currentColor"/></g><g><path transform="translate(3068 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(3649 0)" d="M70 0V-496H194V-442H212Q225 -467 255 -486Q285 -504 334 -504Q387 -504 419 -484Q451 -463 468 -430H486Q503 -462 534 -483Q565 -504 622 -504Q668 -504 706 -484Q743 -465 766 -426Q788 -386 788 -326V0H662V-317Q662 -358 641 -378Q620 -399 582 -399Q539 -399 516 -372Q492 -344 492 -293V0H366V-317Q366 -358 345 -378Q324 -399 286 -399Q243 -399 220 -372Q196 -344 196 -293V0Z" fill="currentColor"/></g><g><path transform="translate(4468 0)" d="M150 14Q109 14 82 -13Q54 -39 54 -81Q54 -123 82 -150Q109 -176 150 -176Q190 -176 217 -149Q244 -123 244 -81Q244 -39 217 -12Q190 14 150 14Z" fill="#5eb3d6"/></g><g><path transform="translate(4731 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="#5eb3d6"/></g><g><path transform="translate(5274 0)" d="M70 0V-496H196V0ZM133 -554Q99 -554 76 -576Q52 -598 52 -634Q52 -670 76 -692Q99 -714 133 -714Q168 -714 191 -692Q214 -670 214 -634Q214 -598 191 -576Q168 -554 133 -554Z" fill="#5eb3d6"/></g><g><path transform="translate(0 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="none" stroke="#c9a75c" stroke-width="55" stroke-linejoin="round"/></g></svg>
                </a>
                <span class="foot-sep" aria-hidden="true"></span>
                <a class="credit-coh" href="https://coherence.com" target="_blank" rel="noopener" title="Coherence — ethical, human-centred AI across sound, education and consciousness">
                    <span>Part of</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="3.00 3.00 275.00 58.00" role="img" aria-label="Coherence">
  <title>Coherence</title>
  <g id="mark">
    <g fill="none" stroke-width="2.8" stroke-linejoin="round">
        <path d="M52.56 49.26L52.07 50.39L51.35 51.35L50.39 52.07L49.26 52.56L48.01 52.86L46.72 53.03L45.48 53.16L44.34 53.37L43.31 53.72L42.38 54.27L41.53 55.01L40.7 55.89L39.83 56.84L38.89 57.73L37.87 58.46L36.75 58.92L35.56 59.08L34.36 58.92L33.16 58.5L32 57.92L30.9 57.29L29.84 56.72L28.8 56.32L27.75 56.13L26.65 56.15L25.48 56.34L24.24 56.6L22.97 56.82L21.69 56.89L20.47 56.72L19.37 56.26L18.42 55.53L17.63 54.56L16.99 53.44L16.45 52.27L15.93 51.15L15.37 50.15L14.69 49.31L13.85 48.63L12.85 48.07L11.73 47.55L10.56 47.01L9.44 46.37L8.47 45.58L7.74 44.63L7.28 43.53L7.11 42.31L7.18 41.03L7.4 39.76L7.66 38.52L7.85 37.35L7.87 36.25L7.68 35.2L7.28 34.16L6.71 33.1L6.08 32L5.5 30.84L5.08 29.64L4.92 28.44L5.08 27.25L5.54 26.13L6.27 25.11L7.16 24.17L8.11 23.3L8.99 22.47L9.73 21.62L10.28 20.69L10.63 19.66L10.84 18.52L10.97 17.28L11.14 15.99L11.44 14.74L11.93 13.61L12.65 12.65L13.61 11.93L14.74 11.44L15.99 11.14L17.28 10.97L18.52 10.84L19.66 10.63L20.69 10.28L21.62 9.73L22.47 8.99L23.3 8.11L24.17 7.16L25.11 6.27L26.13 5.54L27.25 5.08L28.44 4.92L29.64 5.08L30.84 5.5L32 6.08L33.1 6.71L34.16 7.28L35.2 7.68L36.25 7.87L37.35 7.85L38.52 7.66L39.76 7.4L41.03 7.18L42.31 7.11L43.53 7.28L44.63 7.74L45.58 8.47L46.37 9.44L47.01 10.56L47.55 11.73L48.07 12.85L48.63 13.85L49.31 14.69L50.15 15.37L51.15 15.93" stroke="currentColor" stroke-opacity="1"/>
        <path d="M46.57 44.22L46.22 45.03L45.7 45.7L45.03 46.22L44.22 46.57L43.34 46.78L42.43 46.89L41.55 46.99L40.74 47.14L40.01 47.38L39.35 47.77L38.75 48.3L38.16 48.92L37.55 49.6L36.88 50.23L36.15 50.74L35.36 51.07L34.53 51.18L33.67 51.07L32.82 50.77L32 50.36L31.22 49.91L30.47 49.51L29.73 49.23L28.99 49.09L28.21 49.11L27.38 49.24L26.51 49.43L25.6 49.58L24.7 49.63L23.84 49.51L23.05 49.19L22.38 48.67L21.82 47.98L21.37 47.18L20.98 46.36L20.62 45.56L20.22 44.85L19.74 44.26L19.15 43.78L18.44 43.38L17.64 43.02L16.82 42.63L16.02 42.18L15.33 41.62L14.81 40.95L14.49 40.16L14.37 39.3L14.42 38.4L14.57 37.49L14.76 36.62L14.89 35.79L14.91 35.01L14.77 34.27L14.49 33.53L14.09 32.78L13.64 32L13.23 31.18L12.93 30.33L12.82 29.47L12.93 28.64L13.26 27.85L13.77 27.12L14.4 26.45L15.08 25.84L15.7 25.25L16.23 24.65L16.62 23.99L16.86 23.26L17.01 22.45L17.11 21.57L17.22 20.66L17.43 19.78L17.78 18.97L18.3 18.3L18.97 17.78L19.78 17.43L20.66 17.22L21.57 17.11L22.45 17.01L23.26 16.86L23.99 16.62L24.65 16.23L25.25 15.7L25.84 15.08L26.45 14.4L27.12 13.77L27.85 13.26L28.64 12.93L29.47 12.82L30.33 12.93L31.18 13.23L32 13.64L32.78 14.09L33.53 14.49L34.27 14.77L35.01 14.91L35.79 14.89L36.62 14.76L37.49 14.57L38.4 14.42L39.3 14.37L40.16 14.49L40.95 14.81L41.62 15.33L42.18 16.02L42.63 16.82L43.02 17.64L43.38 18.44L43.78 19.15L44.26 19.74L44.85 20.22L45.56 20.62" stroke="#00BDF1"/>
        <path d="M40.57 39.19L40.36 39.66L40.06 40.06L39.66 40.36L39.19 40.57L38.67 40.69L38.13 40.76L37.62 40.82L37.14 40.9L36.71 41.05L36.33 41.28L35.97 41.59L35.62 41.96L35.26 42.35L34.87 42.72L34.44 43.02L33.98 43.22L33.49 43.28L32.98 43.22L32.48 43.04L32 42.8L31.54 42.54L31.1 42.3L30.67 42.13L30.23 42.05L29.77 42.06L29.28 42.14L28.77 42.25L28.24 42.34L27.7 42.37L27.2 42.3L26.74 42.11L26.34 41.8L26.01 41.4L25.75 40.93L25.52 40.45L25.31 39.98L25.07 39.56L24.79 39.21L24.44 38.93L24.02 38.69L23.55 38.48L23.07 38.25L22.6 37.99L22.2 37.66L21.89 37.26L21.7 36.8L21.63 36.3L21.66 35.76L21.75 35.23L21.86 34.72L21.94 34.23L21.95 33.77L21.87 33.33L21.7 32.9L21.46 32.46L21.2 32L20.96 31.52L20.78 31.02L20.72 30.51L20.78 30.02L20.98 29.56L21.28 29.13L21.65 28.74L22.04 28.38L22.41 28.03L22.72 27.67L22.95 27.29L23.1 26.86L23.18 26.38L23.24 25.87L23.31 25.33L23.43 24.81L23.64 24.34L23.94 23.94L24.34 23.64L24.81 23.43L25.33 23.31L25.87 23.24L26.38 23.18L26.86 23.1L27.29 22.95L27.67 22.72L28.03 22.41L28.38 22.04L28.74 21.65L29.13 21.28L29.56 20.98L30.02 20.78L30.51 20.72L31.02 20.78L31.52 20.96L32 21.2L32.46 21.46L32.9 21.7L33.33 21.87L33.77 21.95L34.23 21.94L34.72 21.86L35.23 21.75L35.76 21.66L36.3 21.63L36.8 21.7L37.26 21.89L37.66 22.2L37.99 22.6L38.25 23.07L38.48 23.55L38.69 24.02L38.93 24.44L39.21 24.79L39.56 25.07L39.98 25.31" stroke="currentColor" stroke-opacity="1"/>
    </g>
    <circle cx="32" cy="32" r="3.4" fill="#00BDF1"/>
  </g>
  <g id="wordmark" fill="currentColor">
    <path d="M83.928 46.95L83.928 46.95Q80.469 46.95 77.84 45.827Q75.212 44.704 73.46 42.659Q71.707 40.615 70.854 37.829Q70 35.044 70 31.674L70 31.674Q70 28.214 70.899 25.339Q71.797 22.463 73.527 20.397Q75.257 18.33 77.818 17.184Q80.379 16.038 83.704 16.038L83.704 16.038Q86.489 16.038 88.646 16.825Q90.802 17.611 92.24 19.049Q93.678 20.486 94.374 22.396Q95.071 24.305 94.981 26.552L94.981 26.552L89.724 27.451Q89.679 25.339 88.915 23.879Q88.152 22.418 86.781 21.632Q85.411 20.846 83.524 20.846L83.524 20.846Q81.951 20.846 80.558 21.475Q79.166 22.104 78.132 23.407Q77.099 24.71 76.515 26.687Q75.931 28.664 75.931 31.404L75.931 31.404Q75.931 34.909 76.897 37.29Q77.863 39.671 79.705 40.907Q81.547 42.143 84.063 42.143L84.063 42.143Q86.444 42.143 87.904 41.132Q89.365 40.121 90.039 38.279Q90.713 36.436 90.668 34.1L90.668 34.1L95.924 34.729Q96.059 37.245 95.408 39.447Q94.756 41.648 93.296 43.333Q91.836 45.018 89.522 45.984Q87.208 46.95 83.928 46.95Z"/>
    <path d="M108.909 46.95L108.909 46.95Q105.539 46.95 102.933 45.557Q100.327 44.164 98.845 41.424Q97.362 38.683 97.362 34.594L97.362 34.594Q97.362 30.416 98.89 27.675Q100.417 24.935 103.023 23.587Q105.629 22.239 108.909 22.239L108.909 22.239Q112.234 22.239 114.84 23.632Q117.446 25.024 118.928 27.765Q120.411 30.506 120.411 34.639L120.411 34.639Q120.411 38.818 118.906 41.558Q117.401 44.299 114.772 45.625Q112.144 46.95 108.909 46.95ZM109.044 42.592L109.044 42.592Q110.841 42.592 112.077 41.693Q113.312 40.795 113.986 39.065Q114.66 37.335 114.66 34.909L114.66 34.909Q114.66 32.348 113.964 30.551Q113.267 28.754 111.942 27.765Q110.616 26.777 108.774 26.777L108.774 26.777Q106.977 26.777 105.719 27.698Q104.461 28.619 103.787 30.349Q103.113 32.078 103.113 34.505L103.113 34.505Q103.113 38.324 104.686 40.458Q106.258 42.592 109.044 42.592Z"/>
    <path d="M128.588 46.321L122.927 46.321L122.927 34.055L122.882 15.05L128.633 15.05L128.633 21.52Q128.633 22.374 128.543 23.699Q128.453 25.024 128.274 26.552Q128.094 28.08 127.914 29.607Q127.735 31.135 127.555 32.438L127.555 32.438L128.139 32.438Q128.588 28.933 129.622 26.664Q130.655 24.395 132.362 23.317Q134.07 22.239 136.451 22.239L136.451 22.239Q140.36 22.239 142.247 25.002Q144.134 27.765 144.134 33.336L144.134 33.336L144.134 46.321L138.428 46.321L138.428 33.786Q138.428 30.371 137.462 28.798Q136.496 27.226 134.474 27.226L134.474 27.226Q132.677 27.226 131.374 28.461Q130.071 29.697 129.352 32.056Q128.633 34.415 128.588 37.829L128.588 37.829L128.588 46.321Z"/>
    <path d="M158.017 46.95L158.017 46.95Q155.007 46.95 152.828 46.051Q150.649 45.153 149.211 43.558Q147.773 41.963 147.077 39.784Q146.38 37.605 146.38 34.999L146.38 34.999Q146.38 32.348 147.077 30.034Q147.773 27.72 149.166 25.968Q150.559 24.216 152.67 23.227Q154.782 22.239 157.613 22.239L157.613 22.239Q160.308 22.239 162.353 23.16Q164.397 24.081 165.7 25.811Q167.003 27.54 167.542 29.922Q168.081 32.303 167.767 35.268L167.767 35.268L149.975 35.493L149.975 32.168L163.768 31.944L162.51 33.875Q162.735 31.584 162.218 30.034Q161.701 28.484 160.533 27.653Q159.365 26.822 157.613 26.822L157.613 26.822Q155.726 26.822 154.445 27.81Q153.165 28.798 152.536 30.573Q151.907 32.348 151.907 34.774L151.907 34.774Q151.907 38.683 153.502 40.637Q155.097 42.592 158.107 42.592L158.107 42.592Q159.5 42.592 160.421 42.187Q161.342 41.783 161.926 41.132Q162.51 40.48 162.78 39.649Q163.049 38.818 163.094 37.964L163.094 37.964L168.261 38.503Q168.171 40.166 167.565 41.693Q166.958 43.221 165.722 44.389Q164.487 45.557 162.577 46.254Q160.668 46.95 158.017 46.95Z"/>
    <path d="M176.214 46.321L170.552 46.321L170.552 34.415L170.507 22.868L175.495 22.868L175.225 32.348L175.764 32.348Q176.034 28.798 176.887 26.597Q177.741 24.395 179.089 23.362Q180.437 22.329 182.279 22.329L182.279 22.329Q182.908 22.329 183.627 22.463Q184.346 22.598 185.065 22.958L185.065 22.958L184.795 29.113Q183.986 28.709 183.178 28.506Q182.369 28.304 181.695 28.304L181.695 28.304Q180.033 28.304 178.842 29.338Q177.651 30.371 177 32.325Q176.348 34.28 176.214 37.065L176.214 37.065L176.214 46.321Z"/>
    <path d="M196.881 46.95L196.881 46.95Q193.871 46.95 191.692 46.051Q189.513 45.153 188.075 43.558Q186.637 41.963 185.941 39.784Q185.244 37.605 185.244 34.999L185.244 34.999Q185.244 32.348 185.941 30.034Q186.637 27.72 188.03 25.968Q189.423 24.216 191.535 23.227Q193.646 22.239 196.477 22.239L196.477 22.239Q199.173 22.239 201.217 23.16Q203.261 24.081 204.564 25.811Q205.867 27.54 206.406 29.922Q206.945 32.303 206.631 35.268L206.631 35.268L188.839 35.493L188.839 32.168L202.632 31.944L201.374 33.875Q201.599 31.584 201.082 30.034Q200.565 28.484 199.397 27.653Q198.229 26.822 196.477 26.822L196.477 26.822Q194.59 26.822 193.309 27.81Q192.029 28.798 191.4 30.573Q190.771 32.348 190.771 34.774L190.771 34.774Q190.771 38.683 192.366 40.637Q193.961 42.592 196.971 42.592L196.971 42.592Q198.364 42.592 199.285 42.187Q200.206 41.783 200.79 41.132Q201.374 40.48 201.644 39.649Q201.913 38.818 201.958 37.964L201.958 37.964L207.125 38.503Q207.035 40.166 206.429 41.693Q205.822 43.221 204.587 44.389Q203.351 45.557 201.441 46.254Q199.532 46.95 196.881 46.95Z"/>
    <path d="M215.078 46.321L209.416 46.321L209.416 33.471L209.372 22.868L214.314 22.868L213.999 32.258L214.538 32.258Q214.898 28.843 215.886 26.642Q216.875 24.44 218.582 23.34Q220.289 22.239 222.761 22.239L222.761 22.239Q226.714 22.239 228.669 24.979Q230.623 27.72 230.623 33.336L230.623 33.336L230.623 46.321L224.917 46.321L224.917 33.875Q224.917 30.461 223.929 28.821Q222.94 27.181 220.829 27.181L220.829 27.181Q219.031 27.181 217.751 28.394Q216.47 29.607 215.796 31.988Q215.123 34.37 215.078 37.919L215.078 37.919L215.078 46.321Z"/>
    <path d="M244.506 46.95L244.506 46.95Q241.541 46.95 239.34 46.029Q237.138 45.108 235.7 43.445Q234.263 41.783 233.566 39.582Q232.87 37.38 232.87 34.819L232.87 34.819Q232.87 32.168 233.589 29.899Q234.307 27.63 235.723 25.9Q237.138 24.171 239.295 23.205Q241.451 22.239 244.327 22.239L244.327 22.239Q247.652 22.239 249.808 23.452Q251.965 24.665 253.043 26.642Q254.121 28.619 254.076 31.045L254.076 31.045L248.955 31.854Q248.955 30.236 248.37 29.113Q247.786 27.99 246.73 27.406Q245.675 26.822 244.237 26.822L244.237 26.822Q242.979 26.822 241.968 27.271Q240.957 27.72 240.193 28.686Q239.429 29.652 239.025 31.09Q238.621 32.528 238.621 34.549L238.621 34.549Q238.621 37.2 239.34 38.975Q240.058 40.75 241.406 41.648Q242.754 42.547 244.596 42.547L244.596 42.547Q246.483 42.547 247.562 41.738Q248.64 40.929 249.134 39.649Q249.628 38.368 249.584 36.976L249.584 36.976L254.795 37.515Q254.84 39.492 254.234 41.199Q253.627 42.906 252.347 44.209Q251.066 45.512 249.112 46.231Q247.157 46.95 244.506 46.95Z"/>
    <path d="M267.555 46.95L267.555 46.95Q264.545 46.95 262.366 46.051Q260.187 45.153 258.749 43.558Q257.311 41.963 256.615 39.784Q255.919 37.605 255.919 34.999L255.919 34.999Q255.919 32.348 256.615 30.034Q257.311 27.72 258.704 25.968Q260.097 24.216 262.209 23.227Q264.32 22.239 267.151 22.239L267.151 22.239Q269.847 22.239 271.891 23.16Q273.935 24.081 275.238 25.811Q276.541 27.54 277.08 29.922Q277.62 32.303 277.305 35.268L277.305 35.268L259.513 35.493L259.513 32.168L273.306 31.944L272.048 33.875Q272.273 31.584 271.756 30.034Q271.24 28.484 270.071 27.653Q268.903 26.822 267.151 26.822L267.151 26.822Q265.264 26.822 263.983 27.81Q262.703 28.798 262.074 30.573Q261.445 32.348 261.445 34.774L261.445 34.774Q261.445 38.683 263.04 40.637Q264.635 42.592 267.645 42.592L267.645 42.592Q269.038 42.592 269.959 42.187Q270.88 41.783 271.464 41.132Q272.048 40.48 272.318 39.649Q272.587 38.818 272.632 37.964L272.632 37.964L277.799 38.503Q277.709 40.166 277.103 41.693Q276.496 43.221 275.261 44.389Q274.025 45.557 272.116 46.254Q270.206 46.95 267.555 46.95Z"/>
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
