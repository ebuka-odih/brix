<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ env('APP_NAME') }}, forex trading, stock trading, commodity trading, financial markets, investment strategies, online trading, crypto trading, equity trading, derivatives trading, trading platform, brokerage services, risk management, asset management, futures trading, options trading, market analysis, trading signals, trade execution, financial advisory">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{ env('APP_NAME') }} is a leading trading firm offering expert financial services, including forex, stocks, commodities, and crypto trading.">

    <link rel="icon" href="{{ asset('img2/logo2.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img2/logo2.png') }}" type="image/x-icon">

    <title>{{ env('APP_NAME') }} | The pathway to greater heights</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @stack('styles')
</head>
<body class="premium-theme">
@php
    $supportEmail = env('MAIL_FROM_ADDRESS_2', env('MAIL_FROM_ADDRESS', 'support@brixfin.com'));
    $navItems = [
        ['route' => 'index', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'account', 'label' => 'Accounts'],
        ['route' => 'trading', 'label' => 'Trading'],
        ['route' => 'market', 'label' => 'Markets'],
        ['route' => 'platform', 'label' => 'Platform'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<div class="site-shell">
    <header class="site-header" id="site-header">
        <div class="header-utility">
            <div class="container header-utility-inner">
                <p class="utility-email"><i class="fa fa-envelope"></i> {{ $supportEmail }}</p>
                <div class="utility-links">
                    @auth
                        <a href="{{ route('user.dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log In</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container header-main-inner">
                <a class="brand" href="{{ route('index') }}">
                    <img src="{{ asset('img2/logo.png') }}" alt="{{ env('APP_NAME') }} logo">
                </a>

                <button type="button" class="navbar-toggle premium-toggle collapsed" data-toggle="collapse" data-target="#public-nav" aria-expanded="false" aria-controls="public-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <nav id="public-nav" class="collapse navbar-collapse header-nav" aria-label="Public">
                    <ul class="nav navbar-nav premium-nav">
                        @foreach ($navItems as $item)
                            <li class="{{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                                <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <div class="header-actions hidden-xs">
                    @guest
                        <a class="btn btn-ghost" href="{{ route('login') }}">Log In</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">Start Trading</a>
                    @else
                        <a class="btn btn-primary" href="{{ route('user.dashboard') }}">Open Dashboard</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    <main class="site-main">
        @yield('content')
    </main>

    @include('pages.layout.footer')
</div>

<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    (function () {
        var header = document.getElementById('site-header');

        function onScroll() {
            if (!header) {
                return;
            }
            if (window.scrollY > 10) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        }

        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });

        if (window.jQuery) {
            $('.premium-nav a').on('click', function () {
                $('.header-nav').collapse('hide');
            });
        }
    })();
</script>
@stack('scripts')
</body>
</html>
