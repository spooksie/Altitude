<?php

it('renders the landing page with the original domain facts and contact details', function () {
    $this->get('/')
        ->assertOk()
        ->assertSeeText('This is an elite-level .com domain')
        ->assertSee('It is being brokered by ATM Holdings (previously owned by a large company).', false)
        ->assertSee('mailto:AMiller@atmholdings.com?subject=Domain%20inquiry%3A%20Altitude.com', false)
        ->assertSee('Contact us: <a href="mailto:AMiller@atmholdings.com?subject=Domain%20inquiry%3A%20Altitude.com">AMiller@atmholdings.com</a>', false)
        ->assertSee('https://atmholdings.com/', false);
});

it('is indexable and carries structured data for search engines and LLMs', function () {
    $html = $this->get('/')->getContent();

    expect($html)
        ->toContain('<meta name="robots" content="index, follow')
        ->toContain('<link rel="canonical" href="https://altitude.com/">')
        ->toContain('"@type":"FAQPage"')
        ->toContain('"@type":"Product"')
        ->not->toContain('noindex');
});

it('credits QQuantum.ai in the footer', function () {
    $this->get('/')->assertSee('https://qquantum.ai', false);
});

it('shows the Booth.com Ltd footer with the Coherence credit', function () {
    $this->get('/')
        ->assertSee('Booth.com Ltd. All Rights Reserved.', false)
        ->assertSee('https://qquantum.ai/creative-design/brand-identity-logos', false)
        ->assertSee('https://coherence.com', false);
});

it('keeps the private review page out of robots.txt, the sitemap and llms.txt', function () {
    foreach (['robots.txt', 'sitemap.xml', 'llms.txt'] as $file) {
        expect(file_get_contents(public_path($file)))->not->toContain('brand-review');
    }
});

it('has a 1200×630 social sharing image wired into Open Graph and Twitter tags', function () {
    $html = $this->get('/')->getContent();

    expect($html)
        ->toContain('<meta property="og:image" content="https://altitude.com/og-image.png">')
        ->toContain('<meta property="og:image:width" content="1200">')
        ->toContain('<meta name="twitter:card" content="summary_large_image">')
        ->toContain('<meta name="twitter:image" content="https://altitude.com/og-image.png">');

    [$width, $height] = getimagesize(public_path('og-image.png'));
    expect([$width, $height])->toBe([1200, 630]);
});
