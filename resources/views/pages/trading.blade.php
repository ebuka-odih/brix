@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'Trading',
    'title' => 'Trading Principles',
    'subtitle' => 'For successful trading, follow clear rules and execute with discipline.',
    'image' => 'trad.jpg',
])

<section class="premium-section">
    <div class="container content-grid">
        <div class="image-frame reveal-up">
            <img src="{{ asset('trading.png') }}" alt="Trading desk">
        </div>

        <div class="glass-card reveal-up delay-1">
            <span class="section-label">Core Discipline</span>
            <h2 class="section-title">Hold positions for a reason, not for emotion.</h2>
            <p>
                If you are in any position, it means you had a reason to open it and should keep it until that reason disappears.
                Do not take profits just for profit. Build a strategy, understand how it works, and follow it steadily.
            </p>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="section-head reveal-up">
            <span class="section-label">Golden Rules</span>
            <h2 class="section-title">A practical framework for consistent execution.</h2>
        </div>

        <div class="glass-card reveal-up delay-1">
            <ul class="info-list">
                <li>Always use a trading plan and stick to it, especially in emergency conditions.</li>
                <li>Avoid rash and spontaneous decisions while building your process.</li>
                <li>Use stop-loss logic to cap downside when price reaches defined thresholds.</li>
                <li>Focus on liquid instruments where execution and risk controls are more reliable.</li>
                <li>Withdraw part of profits periodically and allocate part to a separate reserve account.</li>
                <li>Track market events continuously so entries and exits are informed by context.</li>
                <li>Risk only capital you can afford to lose and preserve operational longevity.</li>
            </ul>
        </div>
    </div>
</section>
@endsection
