<?php

it('renders the brand review page with the four directions', function () {
    $this->get('/brand-review')
        ->assertOk()
        ->assertSee('Four directions for the Altitude identity.')
        ->assertSeeInOrder(['Tape', 'Thin Air', 'Facet', 'Pitch'])
        ->assertSeeInOrder(['Horizontal lockup', 'Stacked lockup', 'Symbol', 'Wordmark', 'One colour', 'Reversed'])
        ->assertSee('mailto:AMiller@atmholdings.com', false)
        ->assertSee('https://qquantum.ai', false);
});

it('keeps the brand review page out of search engines', function () {
    $response = $this->get('/brand-review');

    expect($response->headers->get('X-Robots-Tag'))->toContain('noindex')
        ->and($response->getContent())->toContain('<meta name="robots" content="noindex');
});
