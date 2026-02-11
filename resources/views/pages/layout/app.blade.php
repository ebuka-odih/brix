<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="BRIXCAP, multi-asset trading, forex, crypto exchange, copy trading, bot trading, staking, wallet connection">
    <meta name="author" content="BRIXCAP">
    <meta name="robots" content="index, follow">
    <meta name="description" content="BRIXCAP is a multi-asset trading platform with onboarding, KYC, funding, live execution, signals, bot strategies, copy trading, exchange, swap, and staking.">

    <link rel="icon" href="{{ asset('img2/logo2.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img2/logo2.png') }}" type="image/x-icon">

    <title>BRIXCAP | Multi-Asset Trading Platform</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .skip-link {
            position: absolute;
            left: -9999px;
            top: 0;
            z-index: 2000;
            background: #ffffff;
            color: #0b1b2b;
            padding: 10px 14px;
            border-radius: 8px;
            font-weight: 700;
        }

        .skip-link:focus {
            left: 12px;
            top: 12px;
        }
    </style>
    @stack('styles')
</head>
<body class="premium-theme @yield('body_class')">
@php
    $supportEmail = env('MAIL_FROM_ADDRESS_2', env('MAIL_FROM_ADDRESS', 'support@brixcap.com'));
    $isLanding = request()->routeIs('index');

    $defaultNavItems = [
        ['route' => 'index', 'label' => 'Home'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'account', 'label' => 'Accounts'],
        ['route' => 'trading', 'label' => 'Trading'],
        ['route' => 'market', 'label' => 'Markets'],
        ['route' => 'platform', 'label' => 'Platform'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];

    $landingNavItems = [
        ['href' => '#capabilities', 'label' => 'Capabilities'],
        ['href' => '#onboarding', 'label' => 'How It Works'],
        ['href' => '#proof', 'label' => 'Platform Proof'],
        ['href' => '#trust', 'label' => 'Trust'],
        ['href' => '#markets', 'label' => 'Markets'],
        ['href' => '#faq', 'label' => 'FAQ'],
    ];
@endphp

<a class="skip-link" href="#main-content">Skip to main content</a>

<div class="site-shell">
    <header class="site-header" id="site-header">
        @if (!$isLanding)
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
        @endif

        <div class="header-main">
            <div class="container header-main-inner">
                <a class="brand" href="{{ route('index') }}">
                    <span class="brand-mark" aria-hidden="true">
                        <iconify-icon icon="solar:chart-square-bold-duotone"></iconify-icon>
                    </span>
                    <span class="brand-name">BRIXCAP</span>
                </a>

                <button type="button" class="navbar-toggle premium-toggle collapsed" data-toggle="collapse" data-target="#public-nav" aria-expanded="false" aria-controls="public-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <nav id="public-nav" class="collapse navbar-collapse header-nav" aria-label="Public">
                    <ul class="nav navbar-nav premium-nav">
                        @if ($isLanding)
                            @foreach ($landingNavItems as $item)
                                <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                            @endforeach
                            @guest
                                <li class="visible-xs-block"><a href="{{ route('register') }}">Open Account</a></li>
                            @endguest
                        @else
                            @foreach ($defaultNavItems as $item)
                                <li class="{{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                                    <a href="{{ route($item['route']) }}" @if(request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </nav>

                <div class="header-actions hidden-xs">
                    @guest
                        @if ($isLanding)
                            <a class="btn btn-ghost" href="{{ route('consultant') }}">Contact Advisor</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Open Account</a>
                        @else
                            <a class="btn btn-ghost" href="{{ route('login') }}">Log In</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Open Account</a>
                        @endif
                    @else
                        <a class="btn btn-primary" href="{{ route('user.dashboard') }}">Open Dashboard</a>
                    @endguest
                </div>
            </div>
        </div>
    </header>

    <main id="main-content" class="site-main">
        @yield('content')
    </main>

    @include('pages.layout.footer')
</div>

<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/iconify-icon.min.js') }}"></script>
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
