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

    <link rel="icon" href="{{ asset('img2/icon-head.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img2/icon-head.png') }}" type="image/x-icon">

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

        .public-simple .site-header {
            background: rgba(7, 18, 33, 0.94);
            border-bottom: 1px solid rgba(157, 181, 212, 0.22);
            backdrop-filter: blur(8px);
        }

        .public-simple .site-header.is-scrolled {
            background: rgba(7, 18, 33, 0.98);
            box-shadow: 0 8px 24px rgba(4, 12, 21, 0.45);
        }

        .public-simple .header-main {
            min-height: 76px;
        }

        .public-simple .site-main {
            padding-top: 96px;
        }

        .public-simple .header-main-inner {
            gap: 16px;
        }

        .public-simple .brand-mark {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            padding: 4px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(157, 181, 212, 0.34);
            box-shadow: none;
            color: transparent;
        }

        .public-simple .brand-mark img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .public-simple .brand-name {
            font-size: 1.05rem;
            text-shadow: none;
        }

        .public-simple .premium-nav {
            justify-content: flex-start;
            gap: 3px;
            flex-wrap: wrap;
        }

        .public-simple .premium-nav > li > a {
            text-transform: none;
            letter-spacing: 0.01em;
            font-size: 13px;
            padding: 9px 12px;
        }

        .public-simple .premium-nav > li.is-active > a {
            border: 1px solid rgba(102, 177, 255, 0.28);
        }

        .public-simple .btn {
            text-transform: none;
            letter-spacing: 0.01em;
            font-size: 13px;
            padding: 10px 16px;
        }

        .public-simple .btn.btn-primary,
        .public-simple .btn.btn-primary:focus {
            color: #ffffff;
            background: linear-gradient(180deg, #1264eb 0%, #0d53c5 100%);
            border-color: #0d53c5;
            box-shadow: none;
        }

        .public-simple .btn.btn-primary:hover {
            color: #ffffff;
            background: linear-gradient(180deg, #0f5cda 0%, #0a47af 100%);
            border-color: #0a47af;
        }

        @media (max-width: 991px) {
            .public-simple .site-main {
                padding-top: 82px;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="premium-theme public-simple @yield('body_class')">
@php
    $navItems = [
        ['route' => 'index', 'label' => 'Explore'],
        ['route' => 'market', 'label' => 'Markets'],
        ['route' => 'trading', 'label' => 'Trading'],
        ['route' => 'platform', 'label' => 'Platform'],
        ['route' => 'news', 'label' => 'Insights'],
        ['route' => 'about', 'label' => 'About'],
        ['route' => 'account', 'label' => 'Accounts'],
        ['route' => 'contact', 'label' => 'Contact'],
    ];
@endphp

<a class="skip-link" href="#main-content">Skip to main content</a>

<div class="site-shell">
    <header class="site-header" id="site-header">
        <div class="header-main">
            <div class="container header-main-inner">
                <a class="brand" href="{{ route('index') }}" aria-label="BRIXCAP home">
                    <span class="brand-mark" aria-hidden="true">
                        <img src="{{ asset('img2/icon-head.png') }}" alt="">
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
                        @foreach ($navItems as $item)
                            <li class="{{ request()->routeIs($item['route']) ? 'is-active' : '' }}">
                                <a href="{{ route($item['route']) }}" @if(request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                        @guest
                            <li class="visible-xs-block"><a href="{{ route('consultant') }}">Advisor Desk</a></li>
                            <li class="visible-xs-block"><a href="{{ route('register') }}">Open Account</a></li>
                        @endguest
                    </ul>
                </nav>

                <div class="header-actions hidden-xs">
                    @guest
                        <a class="btn btn-ghost" href="{{ route('consultant') }}">Advisor Desk</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">Open Account</a>
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
