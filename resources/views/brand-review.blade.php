{{--
    Altitude.com — private identity review page for the client.
    Self-contained: no Vite build, no external JS. Fonts come from Google Fonts.
    Kept out of search: robots meta below + X-Robots-Tag header on the route.
--}}
@php
    // Static marks used for logo types, favicons and app icons. Colours come from
    // CSS custom properties on the wrapper (--i-ink, --i-acc, --i-b1…), so one
    // drawing serves light, dark, brand and one-colour versions. $id keeps clipPath ids unique.
    $mark = [
        'tape' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><rect x="62" y="16" width="118" height="168" rx="24" fill="none" stroke-width="12" style="stroke:var(--i-ink)"></rect><g style="fill:var(--i-ink)"><rect x="104" y="44" width="56" height="10" rx="5"></rect><rect x="128" y="70" width="32" height="8" rx="4"></rect><rect x="128" y="122" width="32" height="8" rx="4"></rect><rect x="104" y="146" width="56" height="10" rx="5"></rect></g><rect x="68" y="93" width="106" height="14" style="fill:var(--i-acc)"></rect><path d="M12,72 L50,100 L12,128 Z" style="fill:var(--i-acc)"></path></svg>',
        'thinair' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><g style="fill:var(--i-ink)"><rect x="20" y="164" width="160" height="16" rx="8"></rect><rect x="20" y="139" width="160" height="14" rx="7"></rect><rect x="20" y="110" width="160" height="12" rx="6"></rect><rect x="20" y="77" width="160" height="10" rx="5"></rect><rect x="20" y="40" width="160" height="8" rx="4"></rect></g><circle cx="152" cy="17" r="14" style="fill:var(--i-acc)"></circle></svg>',
        'facet' => fn (string $id) => '<svg viewBox="8 3 184 184" aria-hidden="true"><g stroke-width="4" stroke-linejoin="round" style="stroke:var(--i-bg)"><path d="M100,14 L16,176 L68,176 Z" style="fill:var(--i-b1)"></path><path d="M100,14 L68,176 L100,122 Z" style="fill:var(--i-b2)"></path><path d="M100,14 L100,122 L132,176 Z" style="fill:var(--i-acc)"></path><path d="M100,14 L132,176 L184,176 Z" style="fill:var(--i-acc2)"></path></g></svg>',
        'pitch' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><defs><clipPath id="'.$id.'c"><circle cx="100" cy="100" r="80"></circle></clipPath></defs><circle cx="100" cy="100" r="80" style="fill:var(--i-sky)"></circle><g clip-path="url(#'.$id.'c)"><g transform="rotate(-12 100 100)"><rect x="-20" y="100" width="240" height="120" style="fill:var(--i-acc)"></rect><rect x="-20" y="96" width="240" height="8" style="fill:var(--i-hz)"></rect></g></g><circle cx="100" cy="100" r="88" fill="none" stroke-width="10" style="stroke:var(--i-ink)"></circle><path d="M36,100 H76 M124,100 H164 M82,100 L100,118 L118,100" fill="none" stroke-width="24" stroke-linecap="round" stroke-linejoin="round" style="stroke:var(--i-halo, transparent)"></path><path d="M36,100 H76 M124,100 H164 M82,100 L100,118 L118,100" fill="none" stroke-width="12" stroke-linecap="round" stroke-linejoin="round" style="stroke:var(--i-pl)"></path></svg>',
    ];

    $vars = fn (array $c) => collect($c)->except('bg')->map(fn ($v, $k) => "--i-{$k}: {$v}")->push('--i-bg: '.($c['bg'] ?? 'transparent'))->implode('; ');

    $concepts = [
        [
            'id' => 'tape', 'num' => '01', 'name' => 'Tape',
            'idea' => 'An altimeter tape that never stops scrolling, with a signal-green pointer holding the current level. Precise and technical — the direction for a product that measures, tracks or reports.',
            'word' => ['text' => 'altitude', 'css' => "'Martian Mono', ui-monospace, monospace", 'weight' => 500, 'tracking' => '-0.04em', 'upper' => false, 'cursor' => true],
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings, data', 'family' => 'Martian Mono', 'css' => "'Martian Mono', ui-monospace, monospace", 'weight' => 500, 'tracking' => '-0.03em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface', 'family' => 'Hanken Grotesk', 'css' => "'Hanken Grotesk', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Instrument', '#0B1014', 'Dark background & primary', '#E8EEF0'],
                ['Signal', '#7CFFB2', 'Accent on dark', '#0B1014'],
                ['Fern', '#0B7A4C', 'Accent on light', '#FFFFFF'],
                ['Mist', '#EEF2F0', 'Light background', '#0B1014'],
                ['Gauge', '#8A979E', 'Secondary text on dark', '#0B1014'],
                ['Slate', '#56626A', 'Secondary text on light', '#FFFFFF'],
            ],
            'icons' => [
                'light' => ['bg' => '#EEF2F0', 'ink' => '#0B1014', 'acc' => '#0B7A4C'],
                'dark' => ['bg' => '#0B1014', 'ink' => '#E8EEF0', 'acc' => '#7CFFB2'],
                'brand' => ['bg' => '#7CFFB2', 'ink' => '#0B1014', 'acc' => '#0B1014'],
                'mono' => ['bg' => '#FFFFFF', 'ink' => '#111111', 'acc' => '#111111'],
                'rev' => ['bg' => '#0B7A4C', 'ink' => '#FFFFFF', 'acc' => '#FFFFFF'],
            ],
        ],
        [
            'id' => 'thinair', 'num' => '02', 'name' => 'Thin Air',
            'idea' => 'Lines thin out towards the top, the way air does with height, while a single point keeps rising through them. Calm and abstract — altitude as a feeling rather than a picture.',
            'word' => ['text' => 'altitude', 'css' => "'Sora', system-ui, sans-serif", 'weight' => 600, 'tracking' => '-0.01em', 'upper' => false, 'cursor' => false],
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Sora', 'css' => "'Sora', system-ui, sans-serif", 'weight' => 600, 'tracking' => '-0.01em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface', 'family' => 'Instrument Sans', 'css' => "'Instrument Sans', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Stratos', '#07090F', 'Dark background & primary', '#EEF1F8'],
                ['Cyan', '#4FD1FF', 'Accent on dark', '#07090F'],
                ['Deep Cyan', '#0873A4', 'Accent on light', '#FFFFFF'],
                ['Cloud', '#F2F4F8', 'Light background', '#0A1020'],
                ['Haze', '#8C93A6', 'Secondary text on dark', '#07090F'],
                ['Dusk', '#545B6E', 'Secondary text on light', '#FFFFFF'],
            ],
            'icons' => [
                'light' => ['bg' => '#F2F4F8', 'ink' => '#0A1020', 'acc' => '#0873A4'],
                'dark' => ['bg' => '#07090F', 'ink' => '#EEF1F8', 'acc' => '#4FD1FF'],
                'brand' => ['bg' => '#4FD1FF', 'ink' => '#07090F', 'acc' => '#07090F'],
                'mono' => ['bg' => '#FFFFFF', 'ink' => '#111111', 'acc' => '#111111'],
                'rev' => ['bg' => '#0873A4', 'ink' => '#FFFFFF', 'acc' => '#FFFFFF'],
            ],
        ],
        [
            'id' => 'facet', 'num' => '03', 'name' => 'Facet',
            'idea' => 'A solid, low-poly peak with one sunlit face; the notch at its base doubles as the counter of an “A”. Confident and dimensional — the boldest mark of the four.',
            'word' => ['text' => 'Altitude', 'css' => "'Syne', system-ui, sans-serif", 'weight' => 700, 'tracking' => '-0.01em', 'upper' => false, 'cursor' => false],
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Syne', 'css' => "'Syne', system-ui, sans-serif", 'weight' => 700, 'tracking' => '-0.01em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface', 'family' => 'Work Sans', 'css' => "'Work Sans', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Carbon', '#121316', 'Dark background & primary', '#F2EFE9'],
                ['Amber', '#FFB547', 'Accent on dark — sunlit face', '#121316'],
                ['Ochre', '#B56A05', 'Accent on light', '#FFFFFF'],
                ['Bone', '#F3F0EA', 'Light background', '#121316'],
                ['Graphite', '#3B3E47', 'Shadow face', '#F2EFE9'],
                ['Pewter', '#62666F', 'Mid face, secondary text', '#FFFFFF'],
            ],
            'icons' => [
                'light' => ['bg' => '#F3F0EA', 'ink' => '#121316', 'b1' => '#2E3038', 'b2' => '#5B5F6B', 'acc' => '#B56A05', 'acc2' => '#7F4A03'],
                'dark' => ['bg' => '#121316', 'ink' => '#F2EFE9', 'b1' => '#3B3E47', 'b2' => '#62666F', 'acc' => '#FFB547', 'acc2' => '#B37F32'],
                'brand' => ['bg' => '#FFB547', 'ink' => '#121316', 'b1' => '#121316', 'b2' => '#3B3E47', 'acc' => '#F2EFE9', 'acc2' => '#C9C3B8'],
                'mono' => ['bg' => '#FFFFFF', 'ink' => '#111111', 'b1' => '#111111', 'b2' => '#111111', 'acc' => '#111111', 'acc2' => '#111111'],
                'rev' => ['bg' => '#B56A05', 'ink' => '#FFFFFF', 'b1' => '#FFFFFF', 'b2' => '#FFFFFF', 'acc' => '#FFFFFF', 'acc2' => '#FFFFFF'],
            ],
        ],
        [
            'id' => 'pitch', 'num' => '04', 'name' => 'Pitch',
            'idea' => 'An aircraft attitude indicator — horizon, sky and a level wing — that pitches up on hover and barrel-rolls on click. Playful and instantly recognisable, with the strongest standalone symbol.',
            'word' => ['text' => 'Altitude', 'css' => "'Chakra Petch', system-ui, sans-serif", 'weight' => 600, 'tracking' => '0.06em', 'upper' => true, 'cursor' => false],
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Chakra Petch', 'css' => "'Chakra Petch', system-ui, sans-serif", 'weight' => 600, 'tracking' => '0.02em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface', 'family' => 'Barlow', 'css' => "'Barlow', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Cockpit', '#0D1117', 'Dark background & primary', '#EDF0F5'],
                ['Afterburner', '#FF8A3D', 'Accent on dark — ground', '#0D1117'],
                ['Ember', '#B8480F', 'Accent on light', '#FFFFFF'],
                ['Cloud', '#F1F2F4', 'Light background', '#0D1117'],
                ['Panel', '#1A2230', 'Sky, dark surfaces', '#EDF0F5'],
                ['Gauge', '#8B93A1', 'Secondary text on dark', '#0D1117'],
            ],
            'icons' => [
                'light' => ['bg' => '#F1F2F4', 'ink' => '#0D1117', 'acc' => '#B8480F', 'sky' => '#D8DEE8', 'hz' => '#FFFFFF', 'pl' => '#0D1117'],
                'dark' => ['bg' => '#0D1117', 'ink' => '#EDF0F5', 'acc' => '#FF8A3D', 'sky' => '#1A2230', 'hz' => '#EDF0F5', 'pl' => '#EDF0F5'],
                'brand' => ['bg' => '#FF8A3D', 'ink' => '#0D1117', 'acc' => '#F4F5F7', 'sky' => '#0D1117', 'hz' => '#F4F5F7', 'pl' => '#FF8A3D'],
                'mono' => ['bg' => '#FFFFFF', 'ink' => '#111111', 'acc' => '#111111', 'sky' => '#FFFFFF', 'hz' => '#FFFFFF', 'pl' => '#111111', 'halo' => '#FFFFFF'],
                'rev' => ['bg' => '#B8480F', 'ink' => '#FFFFFF', 'acc' => '#FFFFFF', 'sky' => '#B8480F', 'hz' => '#B8480F', 'pl' => '#FFFFFF', 'halo' => '#B8480F'],
            ],
        ],
    ];

    // The six logo types every direction is broken down into, and which colourway each is shown in.
    $types = [
        ['key' => 'horizontal', 'label' => 'Horizontal lockup', 'use' => 'Primary logo — site header, documents, email signatures.', 'icons' => 'light'],
        ['key' => 'stacked', 'label' => 'Stacked lockup', 'use' => 'Square and centred spaces — social profiles, signage, cover pages.', 'icons' => 'dark'],
        ['key' => 'symbol', 'label' => 'Symbol', 'use' => 'Where space is tight — favicon, app icon, social avatar.', 'icons' => 'brand'],
        ['key' => 'wordmark', 'label' => 'Wordmark', 'use' => 'When the symbol is already nearby, or the name must read first.', 'icons' => 'light'],
        ['key' => 'mono', 'label' => 'One colour', 'use' => 'Single-colour print, stamps, engraving and merchandise.', 'icons' => 'mono'],
        ['key' => 'reversed', 'label' => 'Reversed', 'use' => 'White out of a brand colour or a photograph.', 'icons' => 'rev'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
<meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
<meta name="bingbot" content="noindex, nofollow, noarchive">
<meta name="referrer" content="no-referrer">
<title>Altitude identity review — private</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&amp;family=Chakra+Petch:wght@500;600&amp;family=Geist+Mono:wght@400;500&amp;family=Geist:wght@400;500;600&amp;family=Hanken+Grotesk:wght@400;500&amp;family=Instrument+Sans:wght@400;500&amp;family=Martian+Mono:wght@400;500&amp;family=Sora:wght@400;600&amp;family=Syne:wght@500;700&amp;family=Work+Sans:wght@400;500&amp;display=swap">
<script>document.documentElement.classList.add('js')</script>
@verbatim
<style>
:root{--page:#F4F3EF;--text:#151515;--muted:#5E5D58;--line:#E2E0D9;--card:#FFFFFF}
*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;background:var(--page);color:var(--text);font:400 16px/1.55 'Geist',system-ui,sans-serif}
a{color:inherit}
.wrap{max-width:1200px;margin:0 auto;padding:0 16px}
@media (min-width:760px){.wrap{padding:0 32px}}

/* Top bar */
.top{position:sticky;top:0;z-index:10;background:rgba(244,243,239,.88);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border-bottom:1px solid var(--line)}
.top .wrap{display:flex;align-items:center;justify-content:space-between;gap:16px;min-height:60px;flex-wrap:wrap;padding-top:8px;padding-bottom:8px}
.brand{display:flex;align-items:baseline;gap:12px;font-weight:600;letter-spacing:-.01em}
.brand small{font-weight:400;font-size:13px;color:var(--muted)}
.nav{display:flex;gap:4px;flex-wrap:wrap}
.nav a{display:inline-flex;align-items:center;gap:6px;min-height:44px;padding:0 12px;border-radius:999px;text-decoration:none;font-size:14px;color:var(--muted)}
.nav a:hover{background:#E9E7E1;color:var(--text)}
.nav a span{font-family:'Geist Mono',monospace;font-size:12px}

/* Intro */
.hero{padding-top:72px;padding-bottom:40px}
.eyebrow{font:500 12px/1 'Geist Mono',monospace;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);margin:0 0 20px}
.hero h1{font-size:clamp(36px,6vw,64px);line-height:1.02;letter-spacing:-.035em;font-weight:600;margin:0;max-width:14ch;text-wrap:balance}
.hero p{max-width:60ch;color:var(--muted);font-size:18px;margin:24px 0 0;text-wrap:pretty}
.how{display:flex;gap:8px;flex-wrap:wrap;margin-top:28px}
.how span{display:inline-flex;align-items:center;gap:8px;padding:8px 14px;border:1px solid var(--line);border-radius:999px;font-size:14px;background:var(--card)}
.how b{font:500 11px/1 'Geist Mono',monospace;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}

/* Concept sections */
.concept{padding:56px 0;border-top:1px solid var(--line);scroll-margin-top:72px}
.c-head{display:grid;gap:12px 40px;margin-bottom:28px}
@media (min-width:900px){.c-head{grid-template-columns:minmax(0,1fr) minmax(0,1.3fr);align-items:end}}
.c-head h2{margin:0;font-size:clamp(32px,4.4vw,48px);letter-spacing:-.03em;line-height:1;font-weight:600;display:flex;align-items:baseline;gap:16px}
.c-head h2 span{font:500 14px/1 'Geist Mono',monospace;color:var(--muted);letter-spacing:.04em}
.c-head p{margin:0;color:var(--muted);max-width:58ch;text-wrap:pretty}

.stages{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
@media (max-width:760px){.stages{grid-template-columns:minmax(0,1fr)}}
.stage{position:relative;height:clamp(320px,36vw,420px);border-radius:24px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:var(--bg);color:var(--ink)}
.stage .mode{position:absolute;top:18px;left:20px;font:500 11px/1 'Geist Mono',monospace;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.replay{position:absolute;right:14px;bottom:14px;height:44px;padding:0 16px 0 12px;display:flex;align-items:center;gap:8px;border-radius:999px;border:1px solid color-mix(in srgb,var(--ink) 24%,transparent);background:transparent;color:var(--ink);font:500 13px/1 'Geist',system-ui,sans-serif;cursor:pointer;transition:background-color .2s,border-color .2s}
.replay:hover{background:color-mix(in srgb,var(--ink) 7%,transparent);border-color:color-mix(in srgb,var(--ink) 45%,transparent)}
.replay:focus-visible{outline:2px solid var(--ink);outline-offset:3px}

.details{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;margin-top:16px}
@media (max-width:760px){.details{grid-template-columns:minmax(0,1fr)}}
.card{background:var(--card);border:1px solid var(--line);border-radius:24px;padding:24px;min-width:0}
.card h3{margin:0 0 20px;font:500 12px/1 'Geist Mono',monospace;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}

/* Logo types */
.types{margin-top:16px}
.type-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px 16px;margin:0}
@media (max-width:900px){.type-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:560px){.type-grid{grid-template-columns:minmax(0,1fr)}}
.type{margin:0;display:flex;flex-direction:column;gap:12px;min-width:0}
.tile{height:184px;border-radius:16px;background:var(--i-bg);display:flex;align-items:center;justify-content:center;padding:20px;overflow:hidden;box-shadow:inset 0 0 0 1px rgba(0,0,0,.07);color:var(--i-ink)}
.type figcaption{display:grid;gap:2px;font-size:13px;color:var(--muted);text-wrap:pretty}
.type figcaption b{font-size:14px;font-weight:600;color:var(--text)}
.lk{display:flex;align-items:center;font-size:clamp(22px,2.3vw,27px);line-height:1;white-space:nowrap}
.lk .m{display:block;flex:none}
.lk .m svg{display:block;width:100%;height:100%}
.lk.h{gap:.5em}
.lk.h .m{width:1.9em;height:1.9em}
.lk.s{flex-direction:column;gap:.45em}
.lk.s .m{width:3.4em;height:3.4em}
.lk.sym .m{width:92px;height:92px}
.lk.w{font-size:clamp(30px,3.2vw,38px)}
.lk .wd{display:inline-flex;align-items:baseline}
.lk .cur{display:inline-block;width:.55em;height:.09em;margin-left:.06em;background:var(--i-acc)}

/* Favicon */
.tabbar{display:flex;align-items:flex-end;height:46px;padding:0 10px;border-radius:12px 12px 0 0;gap:4px}
.tabbar.light{background:#DEE1E6}
.tabbar.dark{background:#1F2023;margin-top:12px}
.tab{display:flex;align-items:center;gap:10px;height:36px;padding:0 12px;border-radius:10px 10px 0 0;font:400 13px/1 system-ui,sans-serif;min-width:0;width:230px;max-width:100%}
.tabbar.light .tab{background:#FFFFFF;color:#1F1F1F}
.tabbar.dark .tab{background:#35363A;color:#E8EAED}
.tab .t{flex:1;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.tab .x{opacity:.6;font-size:15px}
.tab .fav{width:16px;height:16px;flex:none;display:block}
.fav svg,.app svg,.sz svg{display:block;width:100%;height:100%}
.sizes{display:flex;gap:12px;margin-top:20px;flex-wrap:wrap}
.sizes .grp{display:flex;align-items:flex-end;gap:14px;padding:14px 16px;border-radius:14px;background:var(--i-bg)}
.sz{display:flex;flex-direction:column;align-items:center;gap:8px;font:400 11px/1 'Geist Mono',monospace}
.sizes .grp.light .sz{color:#4F5A5E}
.sizes .grp.dark .sz{color:#A3A3A8}

/* App icons */
.apps{display:flex;gap:20px;flex-wrap:wrap}
.app-item{display:flex;flex-direction:column;align-items:center;gap:10px;font-size:13px;color:var(--muted)}
.app{width:96px;height:96px;border-radius:22.5%;background:var(--i-bg);padding:18px;box-shadow:0 1px 2px rgba(0,0,0,.08),0 8px 24px -8px rgba(0,0,0,.25),inset 0 0 0 1px rgba(0,0,0,.06)}
.app.sm{width:60px;height:60px;padding:11px}
.apps-row{display:flex;align-items:flex-end;gap:14px;margin-top:22px;padding-top:20px;border-top:1px solid var(--line);flex-wrap:wrap}

/* Type */
.fonts{display:grid;gap:20px}
.font{display:grid;grid-template-columns:auto minmax(0,1fr);gap:4px 20px;align-items:center}
.font .aa{font-size:64px;line-height:1;grid-row:span 3}
.font .role{font:500 11px/1.4 'Geist Mono',monospace;letter-spacing:.1em;text-transform:uppercase;color:var(--muted)}
.font .fam{font-size:20px;font-weight:600;letter-spacing:-.01em}
.font .use{font-size:13px;color:var(--muted)}
.sample{margin:4px 0 0;padding-top:16px;border-top:1px solid var(--line);display:grid;gap:10px}
.sample .h{font-size:clamp(22px,2.8vw,28px);line-height:1.15;margin:0}
.sample .b{font-size:16px;line-height:1.6;margin:0;color:#3D3C38}

/* Palette */
.swatches{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:10px}
@media (max-width:480px){.swatches{grid-template-columns:repeat(2,minmax(0,1fr))}}
.sw{border-radius:16px;padding:14px;min-height:112px;display:flex;flex-direction:column;justify-content:space-between;gap:10px;box-shadow:inset 0 0 0 1px rgba(0,0,0,.07)}
.sw b{font-size:15px;font-weight:600}
.sw span{display:block;font:400 12px/1.35 'Geist Mono',monospace;opacity:.9}

/* Closing + footer */
.closing{padding:64px 0;border-top:1px solid var(--line)}
.closing h2{font-size:clamp(28px,4vw,40px);letter-spacing:-.03em;line-height:1.05;margin:0;font-weight:600}
.closing p{color:var(--muted);max-width:60ch;margin:16px 0 0}
.closing a{color:var(--text);text-underline-offset:3px}
.foot{border-top:1px solid var(--line);padding:28px 0 40px}
.foot .wrap{display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;font-size:13px;color:var(--muted)}
.credit{display:inline-flex;align-items:center;gap:12px;text-decoration:none;color:#151515;min-height:44px}
.credit svg{height:20px;width:auto;display:block}
.credit:hover svg{opacity:.8}

/* ---------- Logos: shared ---------- */
.logo{appearance:none;background:none;border:0;margin:0;padding:24px 32px;font:inherit;color:inherit;cursor:pointer;-webkit-tap-highlight-color:transparent;border-radius:24px}
@media (max-width:480px){.logo{padding:20px 12px}}
.logo:focus-visible{outline:2px solid var(--acc);outline-offset:6px}
.logo svg{display:block;overflow:visible}
.logo svg g{transform-box:fill-box;transform-origin:center}
.ltr{display:inline-block}
.js .logo:not(.play),.js .logo:not(.play) *{animation-play-state:paused!important}

/* ---------- 01 Tape ---------- */
.c-tape .light{--bg:#EEF2F0;--ink:#0B1014;--acc:#0B7A4C;--muted:#56626A}
.c-tape .dark{--bg:#0B1014;--ink:#E8EEF0;--acc:#7CFFB2;--muted:#8A979E}
.tp-logo{display:flex;align-items:center;gap:clamp(14px,2.4vw,28px)}
.tp-svg{width:clamp(72px,9vw,112px);height:auto}
.tp-frame{fill:none;stroke:var(--ink);stroke-width:3px;stroke-dasharray:1 1.1;stroke-dashoffset:1.05;animation:tp-draw .9s cubic-bezier(.6,0,.3,1) .1s forwards}
@keyframes tp-draw{to{stroke-dashoffset:0}}
.tp-tick{fill:var(--ink);opacity:.55;transition:opacity .4s ease}
.tp-long{opacity:.9}
.logo:hover .tp-tick{opacity:.85}
.logo:hover .tp-long{opacity:1}
.tp-i{animation:tp-spin 1.7s cubic-bezier(.15,.8,.25,1) .25s backwards}
@keyframes tp-spin{from{transform:translateY(-240px);opacity:0}30%{opacity:1}}
.tp-w{animation:tp-roll 3s linear 1.95s infinite}
@keyframes tp-roll{to{transform:translateY(60px)}}
.logo:hover .tp-w{animation-play-state:paused}
.ca .tp-k{animation:tp-climb-a 1.3s cubic-bezier(.15,.8,.25,1)}
.cb .tp-k{animation:tp-climb-b 1.3s cubic-bezier(.15,.8,.25,1)}
@keyframes tp-climb-a{from{transform:translateY(-240px)}}
@keyframes tp-climb-b{from{transform:translateY(-240px)}}
.tp-level{fill:var(--acc)}
.logo svg .tp-li{transform-origin:left center;animation:tp-grow .6s cubic-bezier(.2,.8,.2,1) 1.3s backwards}
@keyframes tp-grow{from{transform:scaleX(0)}}
.tp-lh{transition:transform .4s cubic-bezier(.2,.9,.3,1.3)}
.logo:hover .tp-lh{transform:scaleY(2)}
.tp-ptr{fill:var(--acc)}
.tp-pi{animation:tp-slide .6s cubic-bezier(.2,.8,.2,1) 1.2s backwards}
@keyframes tp-slide{from{transform:translateX(-26px);opacity:0}}
.tp-pw{animation:tp-pulse 2.4s ease-in-out 2s infinite}
@keyframes tp-pulse{0%,100%{opacity:1}50%{opacity:.55}}
.tp-ph{transition:transform .45s cubic-bezier(.2,.9,.3,1.3)}
.logo:hover .tp-ph{transform:translateX(6px)}
.ca .tp-pk{animation:tp-kick-a .5s ease-out 1s}
.cb .tp-pk{animation:tp-kick-b .5s ease-out 1s}
@keyframes tp-kick-a{0%,100%{transform:none}35%{transform:translateX(10px)}}
@keyframes tp-kick-b{0%,100%{transform:none}35%{transform:translateX(10px)}}
.tp-word{display:flex;align-items:baseline;font:500 clamp(26px,3.6vw,44px)/1 'Martian Mono',ui-monospace,monospace;letter-spacing:-.04em;color:var(--ink)}
.tp-word .ltr{animation:tp-type .01s linear calc(.9s + var(--i)*.07s) backwards}
@keyframes tp-type{from{opacity:0}}
.ca .tp-word .ltr{animation:tp-flap-a .36s ease-out calc(var(--i)*.05s)}
.cb .tp-word .ltr{animation:tp-flap-b .36s ease-out calc(var(--i)*.05s)}
@keyframes tp-flap-a{0%{transform:scaleY(1)}40%{transform:scaleY(0)}100%{transform:scaleY(1)}}
@keyframes tp-flap-b{0%{transform:scaleY(1)}40%{transform:scaleY(0)}100%{transform:scaleY(1)}}
.tp-cur{display:inline-block;width:.55em;height:.09em;margin-left:.06em;background:var(--acc);animation:tp-type .01s linear 1.5s backwards,tp-blink 1.1s steps(1) 1.5s infinite}
@keyframes tp-blink{50%{opacity:0}}

/* ---------- 02 Thin Air ---------- */
.c-thinair .light{--bg:#F2F4F8;--ink:#0A1020;--acc:#0873A4;--muted:#545B6E}
.c-thinair .dark{--bg:#07090F;--ink:#EEF1F8;--acc:#4FD1FF;--muted:#8C93A6}
.ta-logo{display:flex;align-items:center;gap:clamp(14px,2.6vw,32px)}
.ta-svg{width:clamp(80px,10vw,128px);height:auto}
.ta-bar{fill:var(--ink)}
.logo svg .ta-i{transform-origin:left center;animation:ta-in .7s cubic-bezier(.2,.8,.2,1) calc(.1s + var(--i)*.06s) backwards}
@keyframes ta-in{from{transform:scaleX(0)}}
.ta-w{animation:ta-shimmer 3.2s ease-in-out calc(1.6s + var(--i)*.14s) infinite}
@keyframes ta-shimmer{0%,100%{opacity:1}50%{opacity:.3}}
.ta-h{transition:transform .6s cubic-bezier(.2,.9,.3,1.2) calc(var(--i)*.025s)}
.logo:hover .ta-h{transform:translateY(calc(var(--i)*var(--i)*-.3px))}
.ca .ta-k{animation:ta-wake-a .5s ease-out calc(var(--i)*.045s)}
.cb .ta-k{animation:ta-wake-b .5s ease-out calc(var(--i)*.045s)}
@keyframes ta-wake-a{0%,100%{transform:none}40%{transform:scaleX(.82)}70%{transform:scaleX(1.05)}}
@keyframes ta-wake-b{0%,100%{transform:none}40%{transform:scaleX(.82)}70%{transform:scaleX(1.05)}}
.ta-dot{fill:var(--acc)}
.ta-di{animation:ta-rise 1.1s cubic-bezier(.2,.8,.2,1) .85s backwards}
@keyframes ta-rise{from{transform:translateY(150px);opacity:0}}
.ta-dw{animation:ta-float 3s ease-in-out 2s infinite}
@keyframes ta-float{0%,100%{transform:none}50%{transform:translateY(-4px)}}
.ta-dh{transition:transform .7s cubic-bezier(.2,.9,.3,1.2) .2s}
.logo:hover .ta-dh{transform:translateY(-50px)}
.ca .ta-dk{animation:ta-shoot-a .8s cubic-bezier(.2,.8,.2,1)}
.cb .ta-dk{animation:ta-shoot-b .8s cubic-bezier(.2,.8,.2,1)}
@keyframes ta-shoot-a{0%{transform:translateY(150px);opacity:0}15%{opacity:1}70%{transform:translateY(-14px)}100%{transform:none}}
@keyframes ta-shoot-b{0%{transform:translateY(150px);opacity:0}15%{opacity:1}70%{transform:translateY(-14px)}100%{transform:none}}
.ta-word{display:flex;font:600 clamp(32px,4.4vw,54px)/1 'Sora',system-ui,sans-serif;letter-spacing:-.01em;color:var(--ink)}
.ta-word .ltr{animation:ta-letter .8s cubic-bezier(.2,.8,.2,1) calc(.7s + var(--i)*.06s) backwards;transition:transform .6s cubic-bezier(.2,.9,.3,1.2)}
@keyframes ta-letter{from{opacity:0;filter:blur(10px)}}
.logo:hover .ta-word .ltr{transform:translateX(calc(var(--i)*3px))}

/* ---------- 03 Facet ---------- */
.c-facet .light{--bg:#F3F0EA;--ink:#121316;--acc:#B56A05;--f1:#2E3038;--f2:#5B5F6B;--muted:#5E5B55}
.c-facet .dark{--bg:#121316;--ink:#F2EFE9;--acc:#FFB547;--f1:#3B3E47;--f2:#62666F;--muted:#8F8F98}
.fc-logo{display:flex;flex-direction:column;align-items:center;gap:clamp(14px,2vw,22px)}
.fc-svg{width:clamp(120px,16vw,180px);height:auto}
.fc-f1{fill:var(--f1)}.fc-f2{fill:var(--f2)}.fc-lit{fill:var(--acc)}
.fc-shade{fill:#000;opacity:.3}
.fc-i{animation:fc-in .9s cubic-bezier(.2,.9,.25,1.1) calc(.1s + var(--o)*.13s) backwards}
@keyframes fc-in{from{transform:translate(calc(var(--dx)*9px),calc(var(--dy)*9px)) rotate(var(--r)) scale(.6);opacity:0}}
.fc-w{animation:fc-glint 4.8s ease-in-out calc(1.8s + var(--o)*.35s) infinite}
@keyframes fc-glint{0%,100%{opacity:1}50%{opacity:.8}}
.fc-h{transition:transform .55s cubic-bezier(.3,1.4,.5,1)}
.logo:hover .fc-h{transform:translate(calc(var(--dx)*1px),calc(var(--dy)*1px))}
.ca .fc-k{animation:fc-burst-a .8s cubic-bezier(.3,0,.3,1) calc(var(--o)*.04s)}
.cb .fc-k{animation:fc-burst-b .8s cubic-bezier(.3,0,.3,1) calc(var(--o)*.04s)}
@keyframes fc-burst-a{0%,100%{transform:none}30%{transform:translate(calc(var(--dx)*4px),calc(var(--dy)*4px)) rotate(calc(var(--r)*.4))}60%{transform:translate(calc(var(--dx)*-.4px),calc(var(--dy)*-.4px))}}
@keyframes fc-burst-b{0%,100%{transform:none}30%{transform:translate(calc(var(--dx)*4px),calc(var(--dy)*4px)) rotate(calc(var(--r)*.4))}60%{transform:translate(calc(var(--dx)*-.4px),calc(var(--dy)*-.4px))}}
.fc-word{display:flex;font:700 clamp(32px,4.2vw,48px)/1 'Syne',system-ui,sans-serif;letter-spacing:-.01em;color:var(--ink)}
.fc-word .ltr{animation:fc-letter .6s cubic-bezier(.2,.8,.2,1) calc(.75s + var(--i)*.05s) backwards}
@keyframes fc-letter{from{opacity:0;transform:translateY(-12px) rotate(-6deg)}}
.ca .fc-word .ltr{animation:fc-jolt-a .5s ease-out calc(.15s + var(--i)*.03s)}
.cb .fc-word .ltr{animation:fc-jolt-b .5s ease-out calc(.15s + var(--i)*.03s)}
@keyframes fc-jolt-a{0%,100%{transform:none}35%{transform:translateY(-6px) rotate(-4deg)}}
@keyframes fc-jolt-b{0%,100%{transform:none}35%{transform:translateY(-6px) rotate(-4deg)}}

/* ---------- 04 Pitch ---------- */
.c-pitch .light{--bg:#F1F2F4;--ink:#0D1117;--acc:#B8480F;--sky:#D8DEE8;--hz:#FFFFFF;--muted:#59606D}
.c-pitch .dark{--bg:#0D1117;--ink:#EDF0F5;--acc:#FF8A3D;--sky:#1A2230;--hz:#EDF0F5;--muted:#8B93A1}
.pt-logo{display:flex;align-items:center;gap:clamp(14px,2.4vw,30px)}
.pt-svg{width:clamp(88px,11vw,136px);height:auto}
.logo svg .pt-c{transform-box:view-box;transform-origin:100px 100px}
.pt-sky{fill:var(--sky)}
.pt-ground{fill:var(--acc)}
.pt-horizon{fill:var(--hz)}
.pt-rung{fill:var(--ink);opacity:.5}
.pt-rung-g{fill:#000;opacity:.3}
.pt-bezel{fill:none;stroke:var(--ink);stroke-width:4px;stroke-dasharray:1 1.1;stroke-dashoffset:1.05;animation:pt-draw 1s cubic-bezier(.6,0,.3,1) .1s forwards}
@keyframes pt-draw{to{stroke-dashoffset:0}}
.pt-tick{fill:none;stroke:var(--ink);stroke-width:3px;stroke-linecap:round;opacity:.7}
.pt-i{animation:pt-level 1.6s cubic-bezier(.2,.8,.2,1) .35s backwards}
@keyframes pt-level{from{transform:rotate(-70deg) translateY(90px)}}
.pt-w{animation:pt-sway 5s ease-in-out 2s infinite}
@keyframes pt-sway{0%,100%{transform:none}30%{transform:rotate(4deg)}70%{transform:rotate(-3deg)}}
.pt-h{transition:transform .9s cubic-bezier(.2,.8,.2,1)}
.logo:hover .pt-h{transform:translateY(34px)}
.ca .pt-k{animation:pt-roll-a 1.2s cubic-bezier(.45,0,.2,1)}
.cb .pt-k{animation:pt-roll-b 1.2s cubic-bezier(.45,0,.2,1)}
@keyframes pt-roll-a{from{transform:rotate(-360deg)}}
@keyframes pt-roll-b{from{transform:rotate(-360deg)}}
.pt-plane{fill:none;stroke:var(--ink);stroke-width:6px;stroke-linecap:round;stroke-linejoin:round}
.pt-hub{fill:var(--ink)}
.pt-ai{animation:pt-pop .5s cubic-bezier(.3,1.6,.5,1) 1.2s backwards}
@keyframes pt-pop{from{transform:scaleX(0)}}
.pt-ah{transition:transform .6s cubic-bezier(.3,1.4,.5,1)}
.logo:hover .pt-ah{transform:translateY(-4px)}
.ca .pt-ak{animation:pt-bump-a .5s ease-out 1s}
.cb .pt-ak{animation:pt-bump-b .5s ease-out 1s}
@keyframes pt-bump-a{0%,100%{transform:none}40%{transform:scale(1.15)}}
@keyframes pt-bump-b{0%,100%{transform:none}40%{transform:scale(1.15)}}
.pt-word{display:flex;font:600 clamp(26px,3.6vw,42px)/1 'Chakra Petch',system-ui,sans-serif;letter-spacing:.06em;text-transform:uppercase;color:var(--ink)}
.pt-word .ltr{animation:pt-letter .6s cubic-bezier(.2,.8,.2,1) calc(.8s + var(--i)*.05s) backwards;transition:transform .8s cubic-bezier(.2,.8,.2,1)}
@keyframes pt-letter{from{opacity:0;transform:translateX(-18px)}}
.logo:hover .pt-word .ltr{transform:translateY(calc((var(--i) - 3.5)*-2.2px))}

@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  .logo,.logo *{animation-duration:1ms!important;animation-delay:0s!important;animation-iteration-count:1!important;transition-duration:1ms!important}
}
</style>
@endverbatim
</head>
<body>

<header class="top">
    <div class="wrap">
        <div class="brand">Altitude.com <small>Identity review · private preview</small></div>
        <nav class="nav" aria-label="Directions">
            @foreach ($concepts as $c)
                <a href="#{{ $c['id'] }}"><span>{{ $c['num'] }}</span>{{ $c['name'] }}</a>
            @endforeach
        </nav>
    </div>
</header>

<main>
    <section class="hero wrap">
        <p class="eyebrow">Altitude.com · Brand identity</p>
        <h1>Four directions for the Altitude identity.</h1>
        <p>Each direction is shown as it would live on the site — animated, in light and dark mode — then broken down into its logo types: horizontal and stacked lockups, symbol, wordmark, one-colour and reversed. Favicon, app icon, type pairing and colour palette follow.</p>
        <div class="how">
            <span><b>Hover</b> Point at a logo</span>
            <span><b>Click</b> Tap a logo</span>
            <span><b>Replay</b> Watch the intro again</span>
        </div>
    </section>

    @foreach ($concepts as $c)
        @php
            $w = $c['word'];
            $wordStyle = "font-family: {$w['css']}; font-weight: {$w['weight']}; letter-spacing: {$w['tracking']}".($w['upper'] ? '; text-transform: uppercase' : '');
        @endphp
        <section class="concept c-{{ $c['id'] }}" id="{{ $c['id'] }}" aria-labelledby="{{ $c['id'] }}-title">
            <div class="wrap">
                <div class="c-head">
                    <h2 id="{{ $c['id'] }}-title"><span>{{ $c['num'] }}</span>{{ $c['name'] }}</h2>
                    <p>{{ $c['idea'] }}</p>
                </div>

                <div class="stages">
                    @foreach (['light', 'dark'] as $m)
                        <div class="stage {{ $m }}">
                            <span class="mode">{{ ucfirst($m) }} mode</span>

                            @switch($c['id'])
                                @case('tape')
                                    <button type="button" class="logo tp-logo" aria-label="Play the Tape logo animation, {{ $m }} mode">
                                        <svg class="tp-svg" width="112" height="164" viewBox="0 0 150 220" aria-hidden="true">
                                            <defs>
                                                <clipPath id="tp-win-{{ $m }}"><rect x="28" y="10" width="110" height="200" rx="16"></rect></clipPath>
                                                <pattern id="tp-ticks-{{ $m }}" x="0" y="0" width="150" height="60" patternUnits="userSpaceOnUse">
                                                    <rect class="tp-tick tp-long" x="62" y="4.5" width="62" height="3" rx="1.5"></rect>
                                                    @foreach ([17, 29, 41, 53] as $ty)
                                                        <rect class="tp-tick" x="98" y="{{ $ty }}" width="26" height="2" rx="1"></rect>
                                                    @endforeach
                                                </pattern>
                                            </defs>
                                            <g clip-path="url(#tp-win-{{ $m }})">
                                                <g class="tp-k"><g class="tp-i"><g class="tp-w">
                                                    <rect x="28" y="-310" width="110" height="900" fill="url(#tp-ticks-{{ $m }})"></rect>
                                                </g></g></g>
                                                <g class="tp-lh"><g class="tp-li"><rect class="tp-level" x="28" y="108.5" width="110" height="3"></rect></g></g>
                                            </g>
                                            <rect class="tp-frame" x="28" y="10" width="110" height="200" rx="16" pathLength="1"></rect>
                                            <g class="tp-pk"><g class="tp-ph"><g class="tp-pi"><g class="tp-pw">
                                                <path class="tp-ptr" d="M2,97 L22,110 L2,123 Z"></path>
                                            </g></g></g></g>
                                        </svg>
                                        <span class="tp-word">@foreach (str_split('altitude') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach<span class="tp-cur"></span></span>
                                    </button>
                                    @break

                                @case('thinair')
                                    <button type="button" class="logo ta-logo" aria-label="Play the Thin Air logo animation, {{ $m }} mode">
                                        <svg class="ta-svg" width="128" height="128" viewBox="0 0 180 180" aria-hidden="true">
                                            @foreach ([[166.5, 7], [157.75, 6.5], [148, 6], [137.25, 5.5], [124.5, 5], [109.75, 4.5], [92, 4], [70.25, 3.5], [43.5, 3], [10.75, 2.5]] as $i => [$y, $h])
                                                <g class="ta-k" style="--i: {{ $i }}"><g class="ta-h"><g class="ta-i"><g class="ta-w"><rect class="ta-bar" x="14" y="{{ $y }}" width="152" height="{{ $h }}" rx="{{ $h / 2 }}"></rect></g></g></g></g>
                                            @endforeach
                                            <g class="ta-dk"><g class="ta-dh"><g class="ta-di"><g class="ta-dw">
                                                <circle class="ta-dot" cx="146" cy="27" r="8"></circle>
                                            </g></g></g></g>
                                        </svg>
                                        <span class="ta-word">@foreach (str_split('altitude') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break

                                @case('facet')
                                    <button type="button" class="logo fc-logo" aria-label="Play the Facet logo animation, {{ $m }} mode">
                                        <svg class="fc-svg" width="180" height="171" viewBox="0 0 200 190" aria-hidden="true">
                                            <g class="fc-k" style="--dx: -7; --dy: 3; --r: -14deg; --o: 0"><g class="fc-h"><g class="fc-i"><g class="fc-w">
                                                <path class="fc-f1" d="M100,14 L16,176 L68,176 Z"></path>
                                            </g></g></g></g>
                                            <g class="fc-k" style="--dx: -3; --dy: -3; --r: 9deg; --o: 1"><g class="fc-h"><g class="fc-i"><g class="fc-w">
                                                <path class="fc-f2" d="M100,14 L68,176 L100,122 Z"></path>
                                            </g></g></g></g>
                                            <g class="fc-k" style="--dx: 3; --dy: -3; --r: -9deg; --o: 2"><g class="fc-h"><g class="fc-i"><g class="fc-w">
                                                <path class="fc-lit" d="M100,14 L100,122 L132,176 Z"></path>
                                            </g></g></g></g>
                                            <g class="fc-k" style="--dx: 7; --dy: 3; --r: 14deg; --o: 3"><g class="fc-h"><g class="fc-i"><g class="fc-w">
                                                <path class="fc-lit" d="M100,14 L132,176 L184,176 Z"></path>
                                                <path class="fc-shade" d="M100,14 L132,176 L184,176 Z"></path>
                                            </g></g></g></g>
                                        </svg>
                                        <span class="fc-word">@foreach (str_split('Altitude') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break

                                @case('pitch')
                                    <button type="button" class="logo pt-logo" aria-label="Play the Pitch logo animation, {{ $m }} mode">
                                        <svg class="pt-svg" width="136" height="136" viewBox="0 0 200 200" aria-hidden="true">
                                            <defs>
                                                <clipPath id="pt-dial-{{ $m }}"><circle cx="100" cy="100" r="82"></circle></clipPath>
                                            </defs>
                                            <circle class="pt-sky" cx="100" cy="100" r="82"></circle>
                                            <g clip-path="url(#pt-dial-{{ $m }})">
                                                <g class="pt-k pt-c"><g class="pt-h"><g class="pt-i pt-c"><g class="pt-w pt-c">
                                                    <rect class="pt-ground" x="-120" y="100" width="440" height="320"></rect>
                                                    <rect class="pt-horizon" x="-120" y="98" width="440" height="4"></rect>
                                                    <rect class="pt-rung" x="80" y="68" width="40" height="3" rx="1.5"></rect>
                                                    <rect class="pt-rung" x="70" y="38" width="60" height="3" rx="1.5"></rect>
                                                    <rect class="pt-rung" x="80" y="8" width="40" height="3" rx="1.5"></rect>
                                                    <rect class="pt-rung-g" x="80" y="130" width="40" height="3" rx="1.5"></rect>
                                                    <rect class="pt-rung-g" x="70" y="160" width="60" height="3" rx="1.5"></rect>
                                                </g></g></g></g>
                                            </g>
                                            <circle class="pt-bezel" cx="100" cy="100" r="90" pathLength="1"></circle>
                                            <path class="pt-tick" d="M100,2 V-8 M149,15.1 L154,6.4 M51,15.1 L46,6.4 M185,51 L193.7,46 M15,51 L6.3,46"></path>
                                            <g class="pt-ak"><g class="pt-ah"><g class="pt-ai">
                                                <path class="pt-plane" d="M46,100 H80 M120,100 H154 M84,100 L100,114 L116,100"></path>
                                                <circle class="pt-hub" cx="100" cy="100" r="5"></circle>
                                            </g></g></g>
                                        </svg>
                                        <span class="pt-word">@foreach (str_split('Altitude') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break
                            @endswitch

                            <button type="button" class="replay">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"></path><path d="M3 4v5h5"></path></svg>
                                <span>Replay intro</span>
                            </button>
                        </div>
                    @endforeach
                </div>

                <div class="card types">
                    <h3>Logo types</h3>
                    <div class="type-grid">
                        @foreach ($types as $t)
                            @php
                                $ic = $c['icons'][$t['icons']];
                                $word = '<span class="wd" style="'.e($wordStyle).'">'.e($w['text']).($w['cursor'] ? '<span class="cur"></span>' : '').'</span>';
                                $sym = '<span class="m">'.$mark[$c['id']]($c['id'].'-lt-'.$t['key']).'</span>';
                            @endphp
                            <figure class="type">
                                <div class="tile" style="{{ $vars($ic) }}">
                                    @switch($t['key'])
                                        @case('horizontal')
                                        @case('mono')
                                            <div class="lk h">{!! $sym !!}{!! $word !!}</div>
                                            @break
                                        @case('stacked')
                                        @case('reversed')
                                            <div class="lk s">{!! $sym !!}{!! $word !!}</div>
                                            @break
                                        @case('symbol')
                                            <div class="lk sym">{!! $sym !!}</div>
                                            @break
                                        @case('wordmark')
                                            <div class="lk w">{!! $word !!}</div>
                                            @break
                                    @endswitch
                                </div>
                                <figcaption><b>{{ $t['label'] }}</b>{{ $t['use'] }}</figcaption>
                            </figure>
                        @endforeach
                    </div>
                </div>

                <div class="details">
                    <div class="card">
                        <h3>Favicon</h3>
                        <div class="tabbar light">
                            <div class="tab"><span class="fav" style="{{ $vars($c['icons']['light']) }}">{!! $mark[$c['id']]($c['id'].'-tl') !!}</span><span class="t">Altitude.com</span><span class="x" aria-hidden="true">×</span></div>
                        </div>
                        <div class="tabbar dark">
                            <div class="tab"><span class="fav" style="{{ $vars($c['icons']['dark']) }}">{!! $mark[$c['id']]($c['id'].'-td') !!}</span><span class="t">Altitude.com</span><span class="x" aria-hidden="true">×</span></div>
                        </div>
                        <div class="sizes">
                            @foreach (['light', 'dark'] as $m)
                                <div class="grp {{ $m }}" style="{{ $vars($c['icons'][$m]) }}">
                                    @foreach ([16, 32, 48] as $s)
                                        <div class="sz"><span style="width: {{ $s }}px; height: {{ $s }}px; display: block">{!! $mark[$c['id']]($c['id'].'-s'.$m.$s) !!}</span>{{ $s }}px</div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card">
                        <h3>App icon</h3>
                        <div class="apps">
                            @foreach (['light' => 'Light', 'dark' => 'Dark', 'brand' => 'Brand'] as $k => $label)
                                <div class="app-item">
                                    <div class="app" style="{{ $vars($c['icons'][$k]) }}">{!! $mark[$c['id']]($c['id'].'-a'.$k) !!}</div>
                                    {{ $label }}
                                </div>
                            @endforeach
                        </div>
                        <div class="apps-row" aria-label="Smaller sizes">
                            @foreach (['light', 'dark', 'brand'] as $k)
                                <div class="app sm" style="{{ $vars($c['icons'][$k]) }}">{!! $mark[$c['id']]($c['id'].'-m'.$k) !!}</div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card">
                        <h3>Typography</h3>
                        <div class="fonts">
                            @foreach ($c['fonts'] as $f)
                                <div class="font">
                                    <span class="aa" style="font-family: {{ $f['css'] }}; font-weight: {{ $f['weight'] }}; letter-spacing: {{ $f['tracking'] }}" aria-hidden="true">Aa</span>
                                    <span class="role">{{ $f['role'] }}</span>
                                    <span class="fam">{{ $f['family'] }}</span>
                                    <span class="use">{{ $f['use'] }}</span>
                                </div>
                            @endforeach
                            <div class="sample">
                                <p class="h" style="font-family: {{ $c['fonts'][0]['css'] }}; font-weight: {{ $c['fonts'][0]['weight'] }}; letter-spacing: {{ $c['fonts'][0]['tracking'] }}">This is an elite-level .com domain.</p>
                                <p class="b" style="font-family: {{ $c['fonts'][1]['css'] }}">Altitude.com is being brokered by ATM Holdings (previously owned by a large company).</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h3>Colour palette</h3>
                        <div class="swatches">
                            @foreach ($c['palette'] as [$name, $hex, $role, $on])
                                <div class="sw" style="background: {{ $hex }}; color: {{ $on }}">
                                    <b>{{ $name }}</b>
                                    <div><span>{{ $hex }}</span><span>{{ $role }}</span></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="closing">
        <div class="wrap">
            <h2>Choosing a direction</h2>
            <p>Let us know the number of the direction you prefer. Elements can be combined — one direction’s mark with another’s motion, type or colour — before the identity is finalised.</p>
            <p>Altitude.com is being brokered by ATM Holdings. Check out <a href="https://atmholdings.com/" target="_blank" rel="noopener">this resource</a> to see some relevant domain upgrades. Contact us: <a href="mailto:AMiller@atmholdings.com?subject=Domain%20inquiry%3A%20Altitude.com">AMiller@atmholdings.com</a></p>
        </div>
    </section>
</main>

<footer class="foot">
    <div class="wrap">
        <span>Private preview for Altitude.com — please don’t share this link.</span>
        <a class="credit" href="https://qquantum.ai" target="_blank" rel="noopener">
            <span>Brand identity by</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -780 5620 1010" role="img" aria-label="QQuantum.ai" fill="none"><title>QQuantum.ai</title><g><path transform="translate(301 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="currentColor"/></g><g><path transform="translate(942 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(1523 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="currentColor"/></g><g><path transform="translate(2066 0)" d="M70 0V-496H194V-431H212Q224 -457 257 -480Q290 -504 357 -504Q415 -504 458 -478Q502 -451 526 -404Q550 -358 550 -296V0H424V-286Q424 -342 396 -370Q369 -398 318 -398Q260 -398 228 -360Q196 -321 196 -252V0Z" fill="currentColor"/></g><g><path transform="translate(2647 0)" d="M260 0Q211 0 180 -30Q150 -61 150 -112V-392H26V-496H150V-650H276V-496H412V-392H276V-134Q276 -104 304 -104H400V0Z" fill="currentColor"/></g><g><path transform="translate(3068 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(3649 0)" d="M70 0V-496H194V-442H212Q225 -467 255 -486Q285 -504 334 -504Q387 -504 419 -484Q451 -463 468 -430H486Q503 -462 534 -483Q565 -504 622 -504Q668 -504 706 -484Q743 -465 766 -426Q788 -386 788 -326V0H662V-317Q662 -358 641 -378Q620 -399 582 -399Q539 -399 516 -372Q492 -344 492 -293V0H366V-317Q366 -358 345 -378Q324 -399 286 -399Q243 -399 220 -372Q196 -344 196 -293V0Z" fill="currentColor"/></g><g><path transform="translate(4468 0)" d="M150 14Q109 14 82 -13Q54 -39 54 -81Q54 -123 82 -150Q109 -176 150 -176Q190 -176 217 -149Q244 -123 244 -81Q244 -39 217 -12Q190 14 150 14Z" fill="#5eb3d6"/></g><g><path transform="translate(4731 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="#5eb3d6"/></g><g><path transform="translate(5274 0)" d="M70 0V-496H196V0ZM133 -554Q99 -554 76 -576Q52 -598 52 -634Q52 -670 76 -692Q99 -714 133 -714Q168 -714 191 -692Q214 -670 214 -634Q214 -598 191 -576Q168 -554 133 -554Z" fill="#5eb3d6"/></g><g><path transform="translate(0 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="none" stroke="#c9a75c" stroke-width="55" stroke-linejoin="round"/></g></svg>
        </a>
    </div>
</footer>

@verbatim
<script>
(function () {
  function bindLogo(logo) {
    var n = 0;
    logo.addEventListener('click', function () {
      n++;
      logo.classList.remove('ca', 'cb');
      logo.classList.add(n % 2 ? 'ca' : 'cb');
    });
  }

  // Intros wait until the logo is on screen, so lower sections aren't finished before they're seen.
  var io = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('play'); io.unobserve(e.target); }
    });
  }, { threshold: 0.35 }) : null;

  function watch(logo) { io ? io.observe(logo) : logo.classList.add('play'); }

  document.querySelectorAll('.logo').forEach(function (logo) { bindLogo(logo); watch(logo); });

  // Replay: swapping in a fresh clone restarts every CSS animation from zero.
  document.querySelectorAll('.replay').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var old = btn.closest('.stage').querySelector('.logo');
      var fresh = old.cloneNode(true);
      fresh.classList.remove('ca', 'cb');
      fresh.classList.add('play');
      old.replaceWith(fresh);
      bindLogo(fresh);
    });
  });
})();
</script>
@endverbatim
</body>
</html>
