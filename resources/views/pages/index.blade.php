@extends('pages.layout.app')
@section('content')
<section class="home-hero">
    <div class="container">
        <div class="hero-banner reveal-up">
            <img src="{{ asset('img/banner.png') }}" alt="Premium trading banner">

            <div class="hero-banner-content reveal-up delay-1">
                <span class="hero-eyebrow">Global Trading Desk</span>
                <h1>The pathway to greater heights in modern trading.</h1>
                <p>
                    {{ env('APP_NAME') }} Trade is one of the fastest growing online trading brands in the world.
                    Access CFDs on stocks and ETFs, forex markets, commodities, and digital assets in one secure environment.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="{{ route('register') }}">Get Started</a>
                    <a class="btn btn-ghost" href="{{ route('platform') }}">Explore Platform</a>
                </div>
                <ul class="hero-points">
                    <li>On-chart countdowns to key economic data.</li>
                    <li>News and analysis delivered in-platform.</li>
                    <li>Chart overlays for multi-asset comparison.</li>
                    <li>Live forex session clock and market overlap view.</li>
                </ul>
            </div>
        </div>

        <div class="metric-grid hero-metrics reveal-up delay-2">
            <div class="metric-item">
                <strong>5M+</strong>
                <span>Community Members</span>
            </div>
            <div class="metric-item">
                <strong>130+</strong>
                <span>Tradable Instruments</span>
            </div>
            <div class="metric-item">
                <strong>24/7</strong>
                <span>Client Support</span>
            </div>
            <div class="metric-item">
                <strong>99%</strong>
                <span>Global Coverage</span>
            </div>
        </div>
    </div>
</section>

<section class="premium-section tight">
    <div class="container">
        <div class="callout-card reveal-up">
            <div>
                <span class="section-label">Community</span>
                <h2 class="section-title">Join our trading community now.</h2>
                <p>
                    {{ env('APP_NAME') }} Trade continues to evolve with faster execution, broader product access,
                    and a more focused experience for portfolio builders and active traders.
                </p>
            </div>
            <a class="btn btn-primary" href="{{ route('register') }}">Start Trading</a>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container content-grid">
        <div class="image-frame reveal-up">
            <img src="{{ asset('sa.png') }}" alt="About {{ env('APP_NAME') }}">
        </div>

        <div class="glass-card reveal-up delay-1">
            <span class="section-label">About Us</span>
            <h2 class="section-title">The optimal platform for the next generation of trading.</h2>
            <p>
                Trading will never be the same again. We provide a streamlined web-based platform with the core tools
                needed to perform serious market analysis and execute with confidence.
            </p>
            <ul class="info-list">
                <li>{{ env('APP_NAME') }} Trade's mission is to make trading flexible.</li>
                <li>We prioritize open, transparent markets and resilient infrastructure.</li>
                <li>Our team supports both new and experienced traders with clear guidance.</li>
            </ul>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Mission & Vision</span>
            <h2 class="section-title">Principles that guide every trade.</h2>
            <p class="section-subtitle">
                We offer a full set of services designed to help traders build consistency,
                protect capital, and grow with discipline.
            </p>
        </div>

        <div class="card-grid">
            <article class="premium-card reveal-up">
                <h3>Starting Capital</h3>
                <p>
                    Entry requirements vary by market, and forex in particular allows traders to begin without excessive initial capital.
                </p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <h3>Money Management</h3>
                <p>
                    Sustainable results depend on equity management, strict rules, and repeated execution of a tested process.
                </p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <h3>Conscious Risk</h3>
                <p>
                    Risk is a core part of trading, but it should always be measured, deliberate, and aligned with your plan.
                </p>
            </article>
            <article class="premium-card reveal-up">
                <h3>Trading Strategy</h3>
                <p>
                    Build, test, and refine strategy frameworks based on risk tolerance, profit targets, and market selection.
                </p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <h3>Professionalism</h3>
                <p>
                    Our specialists maintain high standards through ongoing training to stay current with market and platform shifts.
                </p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <h3>Profitability</h3>
                <p>
                    Profit growth depends on your decisions, while our systems and support help reduce avoidable operational risk.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Infrastructure</span>
            <h2 class="section-title">Engineered for secure, global execution.</h2>
        </div>

        <div class="card-grid">
            <article class="premium-card reveal-up">
                <span class="icon-wrap"><img src="{{ asset('strong-security.png') }}" alt="Strong Security"></span>
                <h3>Strong Security</h3>
                <p>Protection against DDoS attacks with full data encryption across core platform surfaces.</p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <span class="icon-wrap"><img src="{{ asset('world-coverage.png') }}" alt="World Coverage"></span>
                <h3>World Coverage</h3>
                <p>Services are available in the vast majority of countries and designed for international clients.</p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <span class="icon-wrap"><img src="{{ asset('payment-options.png') }}" alt="Payment Options"></span>
                <h3>Payment Options</h3>
                <p>Flexible funding methods including cards, bank transfer, and cryptocurrency rails.</p>
            </article>
            <article class="premium-card reveal-up">
                <span class="icon-wrap"><img src="{{ asset('mobile-app.png') }}" alt="Mobile App"></span>
                <h3>Mobile App</h3>
                <p>Trade on the move through a mobile-first experience available on major app ecosystems.</p>
            </article>
            <article class="premium-card reveal-up delay-1">
                <span class="icon-wrap"><img src="{{ asset('cost-efficiency.png') }}" alt="Cost Efficiency"></span>
                <h3>Cost Efficiency</h3>
                <p>Reasonable trading fees and commission structures for takers and market makers.</p>
            </article>
            <article class="premium-card reveal-up delay-2">
                <span class="icon-wrap"><img src="{{ asset('high-liquidity.png') }}" alt="High Liquidity"></span>
                <h3>High Liquidity</h3>
                <p>Fast access to deep order books for major currency pairs and key global instruments.</p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">How It Works</span>
            <h2 class="section-title">Launch in three clear steps.</h2>
        </div>

        <div class="steps-grid">
            <article class="step-card reveal-up">
                <span class="step-number">1</span>
                <h3>Register</h3>
                <p>Open your account in a few minutes and secure immediate access to the platform.</p>
            </article>
            <article class="step-card reveal-up delay-1">
                <span class="step-number">2</span>
                <h3>Verify</h3>
                <p>Complete identity verification to comply with anti-money laundering and account security standards.</p>
            </article>
            <article class="step-card reveal-up delay-2">
                <span class="step-number">3</span>
                <h3>Deposit</h3>
                <p>Fund your wallet and begin trading with flexible capital allocation and portfolio control.</p>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Market Insight</span>
            <h2 class="section-title">Latest trading topics.</h2>
        </div>

        <div class="article-grid">
            <article class="article-card reveal-up">
                <div class="article-media">
                    <img src="{{ asset('news1.png') }}" alt="Gold Price analysis">
                </div>
                <div class="article-body">
                    <h3>Gold Price May Ride the Tailwind of Virus Uncertainty</h3>
                    <p>
                        Gold prices moved above key levels as macro uncertainty and a softer dollar sustained safe-haven demand.
                    </p>
                    <a class="mini-link" href="{{ route('news') }}">Read Analysis</a>
                </div>
            </article>

            <article class="article-card reveal-up delay-1">
                <div class="article-media">
                    <img src="{{ asset('news2.png') }}" alt="EUR/USD analysis">
                </div>
                <div class="article-body">
                    <h3>EUR/USD: Top and Drop or Character Shift?</h3>
                    <p>
                        Extended rallies have faded quickly since 2018. Holding trend resistance could signal a structural change.
                    </p>
                    <a class="mini-link" href="{{ route('news') }}">Read Analysis</a>
                </div>
            </article>

            <article class="article-card reveal-up delay-2">
                <div class="article-media">
                    <iframe src="https://www.youtube.com/embed/hv5ITjaWGhM" title="Market analysis video" allowfullscreen></iframe>
                </div>
                <div class="article-body">
                    <h3>GBP/USD, AUD/JPY and Multi-Pair Setup Review</h3>
                    <p>
                        Weekly chart structures suggest renewed downside pressure if key support levels fail.
                    </p>
                    <a class="mini-link" href="{{ route('news') }}">Read Analysis</a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Terms Overview</span>
            <h2 class="section-title">Key agreement highlights.</h2>
            <p class="section-subtitle">
                Core clauses from the client agreement are grouped below for quick review.
            </p>
        </div>

        <div class="policy-list reveal-up delay-1">
            <details open>
                <summary>1. Preface</summary>
                <p>
                    The client agreement defines the relationship between {{ env('APP_NAME') }} and each account holder,
                    including rules governing platform access and service usage.
                </p>
                <p>
                    Trading in binary options and related instruments includes fixed-return structures and specific platform conditions.
                </p>
            </details>
            <details>
                <summary>2. Trading Account</summary>
                <p>
                    Account opening requires complete and accurate information and acceptance of the agreement terms.
                    Platform activity is authorized through the account credentials assigned to the client.
                </p>
            </details>
            <details>
                <summary>3. Funds, Fees, and Statements</summary>
                <p>
                    Funding and withdrawal procedures, fee policies, reporting, and statement access are managed within
                    the client account environment under published operational rules.
                </p>
            </details>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="callout-card reveal-up">
            <div>
                <span class="section-label">Ready to Trade</span>
                <h2 class="section-title">The right solution for your trading goals.</h2>
                <p>
                    Contact us for platform guidance and immediate access to all trading services on {{ env('APP_NAME') }}.
                </p>
            </div>
            <div class="hero-actions">
                <a class="btn btn-primary" href="{{ route('register') }}">Open Account</a>
                <a class="btn btn-ghost" href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
