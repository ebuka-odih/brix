@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'Accounts',
    'title' => 'Trading Accounts',
    'subtitle' => 'Flexible account structures for every stage of your trading journey.',
    'image' => 'img/trader.jpg',
])

<section class="premium-section">
    <div class="container">
        <div class="glass-card reveal-up">
            <span class="section-label">Account Access</span>
            <h2 class="section-title">Choose the account setup that matches your strategy.</h2>
            <p>
                Our team offers five account approaches tailored to the needs of traders and investors.
                Flexible account types create room to choose an option aligned with your style and level of trading.
            </p>
            <ul class="info-list">
                <li>Seamless onboarding for both new and advanced clients.</li>
                <li>Funding and withdrawal processes built for transparency.</li>
                <li>Risk controls and account monitoring from one dashboard.</li>
                <li>Scalable structure for long-term portfolio development.</li>
            </ul>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Account Framework</span>
            <h2 class="section-title">Designed to support disciplined execution.</h2>
        </div>

        <div class="card-grid">
            <article class="premium-card reveal-up">
                <h3>Capital Planning</h3>
                <p>
                    Starting capital requirements depend on the market and strategy, with scalable allocation options.
                </p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <h3>Money Management</h3>
                <p>
                    Account architecture supports rule-based risk handling and structured trade sizing.
                </p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <h3>Support Continuity</h3>
                <p>
                    24/7 support coverage helps maintain execution continuity across sessions and market conditions.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="steps-grid">
            <article class="step-card reveal-up">
                <span class="step-number">1</span>
                <h3>Open Account</h3>
                <p>Register your profile and gain immediate access to account setup controls.</p>
            </article>
            <article class="step-card reveal-up delay-1">
                <span class="step-number">2</span>
                <h3>Verify Identity</h3>
                <p>Complete verification to strengthen account security and regulatory compliance.</p>
            </article>
            <article class="step-card reveal-up delay-2">
                <span class="step-number">3</span>
                <h3>Activate Trading</h3>
                <p>Fund your wallet and begin executing trades based on your selected strategy profile.</p>
            </article>
        </div>
    </div>
</section>
@endsection
