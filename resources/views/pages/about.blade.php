@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'About',
    'title' => 'About Us',
    'subtitle' => 'Committed to people, committed to the trade.',
    'image' => 'slide1.jpg',
])

<section class="premium-section">
    <div class="container content-grid">
        <div class="glass-card reveal-up">
            <span class="section-label">Who We Are</span>
            <h2 class="section-title">International brokerage focused on durable client outcomes.</h2>
            <p>
                Fcs Market is an international online broker, providing access to over 130 tradable instruments from
                6 asset classes for both retail and institutional investors.
            </p>
            <p style="margin-top: 12px;">
                Our success is built on diversity, flexibility, transparency, and open pricing structures.
                We aim to create long-lasting client relationships and provide the tools, knowledge, and support
                needed to excel in trading.
            </p>
        </div>

        <div class="image-frame reveal-up delay-1">
            <img src="{{ asset('img/about.webp') }}" alt="About {{ env('APP_NAME') }}">
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Best Features</span>
            <h2 class="section-title">Built for real traders and real market conditions.</h2>
            <p class="section-subtitle">
                With the {{ env('APP_NAME') }} team, traders simplify complexity and gain practical market readiness.
            </p>
        </div>

        <div class="card-grid">
            <article class="premium-card reveal-up">
                <h3>Platform</h3>
                <p>
                    The current platform version remains globally popular for its intuitive interface and integrated analysis tools.
                </p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <h3>Markets</h3>
                <p>
                    Financial markets create the liquidity businesses need to grow and provide capital formation opportunities.
                </p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <h3>Accounts</h3>
                <p>
                    We offer multiple account options tailored to varied risk profiles, skill levels, and trading styles.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Why Choose Us</span>
            <h2 class="section-title">Clear experience, resilient systems, constant support.</h2>
        </div>

        <div class="card-grid">
            <article class="premium-card reveal-up">
                <h3>User-Friendly Interface</h3>
                <p>
                    Whether you are new or experienced, the platform remains accessible and straightforward to navigate.
                </p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <h3>DDoS Protection</h3>
                <p>
                    Infrastructure is hardened against major disruption events to preserve transaction reliability.
                </p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <h3>24/7 Customer Support</h3>
                <p>
                    Support is available by ticket and email with fast, professional follow-up for operational issues.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="counter-grid reveal-up">
            <div class="counter-card">
                <strong>35</strong>
                <span>Support Countries</span>
            </div>
            <div class="counter-card">
                <strong>700</strong>
                <span>Bitcoin ATMs</span>
            </div>
            <div class="counter-card">
                <strong>300</strong>
                <span>Producers</span>
            </div>
            <div class="counter-card">
                <strong>55</strong>
                <span>Operators</span>
            </div>
        </div>
    </div>
</section>
@endsection
