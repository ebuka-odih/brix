@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'Platform',
    'title' => 'Trading Platform',
    'subtitle' => 'High-performance execution with professional analysis and account control.',
    'image' => 'platt.jpg',
])

<section class="premium-section">
    <div class="container content-grid">
        <div class="image-frame reveal-up">
            <img src="{{ asset('plat.png') }}" alt="Trading platform view">
        </div>

        <div class="glass-card reveal-up delay-1">
            <span class="section-label">Why You Need It</span>
            <h2 class="section-title">A platform is your command center for execution and risk.</h2>
            <p>
                Investors and traders use platforms to place transactions and control accounts through financial intermediaries.
                Modern platforms also provide real-time quotes, charting, research feeds, and tools for specific market workflows.
            </p>
            <p style="margin-top: 12px;">
                Serious traders combine low transaction costs with reliable platform tooling,
                because consistent execution quality often matters more than headline pricing alone.
            </p>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="split-panel reveal-up">
            <span class="section-label">MetaTrader 4</span>
            <h2 class="section-title">Proven global standard for technical and systematic trading.</h2>
            <p>
                The current version of MetaTrader 4 remains popular worldwide due to its convenient interface,
                extensive technical analysis tools, and integrated MQL4 language for custom indicators and trading robots.
            </p>
            <p style="margin-top: 12px;">
                MT4 supports instant and market execution, pending order types, trailing stop functionality,
                and one-click chart trading for faster decision-to-order conversion.
            </p>
            <p style="margin-top: 12px;">
                To start in financial markets, open an account and choose a profile aligned with your stage,
                from beginner and demo pathways to professional trading structures.
            </p>
            <div class="hero-actions" style="margin-top: 24px;">
                <a class="btn btn-primary" href="{{ route('register') }}">Start With MT4</a>
            </div>
        </div>
    </div>
</section>
@endsection
