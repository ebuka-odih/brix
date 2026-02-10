@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'Markets',
    'title' => 'Financial Markets',
    'subtitle' => 'Choose markets with the right liquidity, structure, and behavior for your strategy.',
    'image' => 'markets.jpg',
])

<section class="premium-section">
    <div class="container content-grid">
        <div class="glass-card reveal-up">
            <span class="section-label">Market Role</span>
            <h2 class="section-title">Markets are the engine of capital movement.</h2>
            <p>
                The role of financial markets in the success and strength of the economy cannot be underestimated.
                Markets create liquidity that allows businesses to grow and entrepreneurs to raise capital.
            </p>
            <p style="margin-top: 12px;">
                Public information flow reduces asymmetry and supports investor confidence,
                helping establish price discovery between buyers and sellers of financial assets.
            </p>
        </div>

        <div class="glass-card reveal-up delay-1">
            <span class="section-label">Selection Logic</span>
            <h3 style="font-size: 30px; margin-bottom: 12px;">How to choose your market focus.</h3>
            <ul class="info-list">
                <li>Start with the number of markets you can realistically master at once.</li>
                <li>Align market choice with your experience level and strategy constraints.</li>
                <li>Review average volume, volatility, and liquidity before allocation.</li>
                <li>Prioritize markets that support quality setups and clean risk definition.</li>
                <li>Maintain consistency and avoid over-fragmenting attention across instruments.</li>
            </ul>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="container">
        <div class="callout-card reveal-up">
            <div>
                <span class="section-label">Execution Ready</span>
                <h2 class="section-title">{{ env('APP_NAME') }} provides institutional-grade market access.</h2>
                <p>
                    We provide trading conditions across available markets so your only task is to choose and execute your edge.
                </p>
            </div>
            <a class="btn btn-primary" href="{{ route('register') }}">Open Account</a>
        </div>
    </div>
</section>
@endsection
