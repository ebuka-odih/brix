<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid bc-footer-grid">
            <div class="footer-brand bc-footer-brand">
                <a href="{{ route('index') }}" class="footer-logo" aria-label="BRIXCAP home">
                    <img src="{{ asset('img2/logo2.png') }}" alt="BRIXCAP logo">
                </a>
                <p>BRIXCAP is a multi-asset trading platform for account onboarding, execution, and portfolio operations.</p>
            </div>

            <div>
                <h4>Platform</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('platform') }}">Platform Overview</a></li>
                    <li><a href="{{ route('trading') }}">Trading</a></li>
                    <li><a href="{{ route('market') }}">Markets</a></li>
                </ul>
            </div>

            <div>
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('consultant') }}">Advisor Desk</a></li>
                </ul>
            </div>

            <div>
                <h4>Account</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('register') }}">Open Account</a></li>
                    <li><a href="{{ route('login') }}">Client Login</a></li>
                    <li><a href="{{ route('account') }}">Account Types</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom bc-footer-bottom">
            <p>&copy; {{ date('Y') }} BRIXCAP. All rights reserved.</p>
            <p class="bc-footer-note">Trading involves risk. Product availability and service scope can vary by jurisdiction.</p>
        </div>
    </div>
</footer>
