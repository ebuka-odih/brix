@php
    $supportEmail = env('MAIL_FROM_ADDRESS_2', env('MAIL_FROM_ADDRESS', 'support@brixcap.com'));
@endphp

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('index') }}" class="footer-logo">
                    <img src="{{ asset('img2/logo2.png') }}" alt="{{ env('APP_NAME') }} logo">
                </a>
                <p>
                    {{ env('APP_NAME') }} delivers multi-asset trading infrastructure, research-led decision support,
                    and secure execution for modern investors.
                </p>
            </div>

            <div>
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('account') }}">Accounts</a></li>
                    <li><a href="{{ route('platform') }}">Platform</a></li>
                    <li><a href="{{ route('consultant') }}">Consultancy</a></li>
                </ul>
            </div>

            <div>
                <h4>Markets</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('market') }}">Market Overview</a></li>
                    <li><a href="{{ route('trading') }}">Trading Principles</a></li>
                    <li><a href="{{ route('news') }}">Trading Insights</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4>Start Here</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('register') }}">Open an Account</a></li>
                    <li><a href="{{ route('login') }}">Client Login</a></li>
                    <li><a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2015 - {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
