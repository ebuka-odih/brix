<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BRIXCAP multi-asset trading platform with onboarding, KYC/AML, funding, live trading, signals, bot trading, copy trading, exchange, swap, staking, and wallet connection.">
    <title>BRIXCAP | Multi-Asset Trading Platform</title>
    <script>
        window.brixcapRoutes = {
            home: @json(route('index')),
            register: @json(route('register')),
            login: @json(route('login')),
            market: @json(route('market')),
            platform: @json(route('platform')),
            trust: @json(route('about')),
            contact: @json(route('contact')),
            consultant: @json(route('consultant')),
            trading: @json(route('trading')),
            account: @json(route('account')),
            news: @json(route('news'))
        };
    </script>
    @vite('resources/js/frontpage.tsx')
</head>
<body>
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-[100] focus:bg-white focus:text-black focus:px-3 focus:py-2 focus:rounded">
        Skip to content
    </a>
    <div id="root"></div>
</body>
</html>
