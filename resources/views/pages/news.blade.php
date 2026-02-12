@extends('pages.layout.app')
@section('content')
@include('pages.layout.page-header', [
    'label' => 'Insights',
    'title' => 'Trading Tips & Reviews',
    'subtitle' => 'Actionable market reads covering FX, commodities, and global indices.',
    'image' => 'news.jpg',
])

<section class="premium-section">
    <div class="container">
        <div class="news-grid">
            <article class="news-card reveal-up">
                <div class="news-media"><img src="{{ asset('news1.png') }}" alt="Gold article"></div>
                <div class="news-body">
                    <h3>Gold Price May Ride the Tailwind of Virus Uncertainty</h3>
                    <p>
                        Gold prices broke above key levels around US$1,750 as growth uncertainty and recovery concerns
                        supported safe-haven demand.
                    </p>
                </div>
            </article>

            <article class="news-card reveal-up delay-1">
                <div class="news-media"><img src="{{ asset('news2.png') }}" alt="EUR/USD article"></div>
                <div class="news-body">
                    <h3>EUR/USD: Top and Drop or Break From Typical Behavior?</h3>
                    <p>
                        The rally structure is at risk of failure, consistent with previous extended moves since 2018.
                        Trend-line behavior remains the key confirmation zone.
                    </p>
                </div>
            </article>

            <article class="news-card reveal-up delay-2">
                <div class="news-media"><img src="{{ asset('news.jpg') }}" alt="Market Analysis"></div>
                <div class="news-body">
                    <h3>GBP/USD, AUD/JPY & More: Charts for Next Week</h3>
                    <p>
                        Cable broke and retested trend support, raising downside risk if 1.2335 fails and momentum extends.
                    </p>
                </div>
            </article>

            <article class="news-card reveal-up">
                <div class="news-media"><img src="{{ asset('news4.png') }}" alt="GBP outlook"></div>
                <div class="news-body">
                    <h3>British Pound Outlook: GBP/USD Poised for More Selling</h3>
                    <p>
                        A sequence of lower highs keeps pressure on GBP/USD after a break below the March trend structure.
                    </p>
                </div>
            </article>

            <article class="news-card reveal-up delay-1">
                <div class="news-media"><img src="{{ asset('news5.png') }}" alt="USDJPY outlook"></div>
                <div class="news-body">
                    <h3>USD/JPY Reversal Ahead of May Low</h3>
                    <p>
                        Price and RSI trend breaks suggest broad yen recovery risk, while reversal behavior may still support tactical rebounds.
                    </p>
                </div>
            </article>

            <article class="news-card reveal-up delay-2">
                <div class="news-media"><img src="{{ asset('news6.png') }}" alt="Dow Jones outlook"></div>
                <div class="news-body">
                    <h3>Dow Jones, CAC 40 & FTSE 100 Weekly Forecast</h3>
                    <p>
                        Equities remained under pressure as major benchmarks printed lower highs from recent peaks.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
