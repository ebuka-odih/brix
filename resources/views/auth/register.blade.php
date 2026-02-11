
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="{{ env("APP_NAME")}}, forex trading, stock trading, commodity trading, financial markets, investment strategies, online trading, crypto trading, equity trading, derivatives trading, trading platform, brokerage services, risk management, asset management, futures trading, options trading, market analysis, trading signals, trade execution, financial advisory"/>
    <meta name="author" content="{{ env("APP_NAME")}}"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="{{ env("APP_NAME")}} is a leading trading firm offering expert financial services, including forex, stocks, commodities, and crypto trading. Join us for market insights and profitable investment strategies."/>

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('img2/icon-head.png') }}">
    <!-- Page Title  -->
    <title>Register | BRIXCAP</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.1.1') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.1.1') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth dark-mode">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{ route('index') }}" class="logo-link d-inline-flex align-items-center justify-content-center" style="gap: 10px;">
                                <span style="width: 40px; height: 40px; border-radius: 999px; padding: 4px; display: inline-flex; align-items: center; justify-content: center; border: 1px solid rgba(159, 185, 216, 0.35); background: rgba(255, 255, 255, 0.04);">
                                    <img src="{{ asset('img2/icon-head.png') }}" style="width: 100%; height: 100%; object-fit: contain;" alt="">
                                </span>
                                <span style="font-size: 22px; font-weight: 800; letter-spacing: 0.16em; text-transform: uppercase; color: #9fb9d8;">BRIXCAP</span>
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-Up</h4>
                                    </div>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Name</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" name="name" class="form-control form-control-lg" id="default-01" placeholder="Enter your full name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Username</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" name="username" class="form-control form-control-lg" id="default-01" placeholder="Enter Your username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Confirm Passcode</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password2">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password2" placeholder="Confirm your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign Up</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">
                                    Already have an account?
                                   <a href="{{ route('login') }}">Sign in instead</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-start">
                                        <p class="text-soft">&copy; {{ Date('Y') }} BRIXCAP. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.1.1') }}"></script>
    <!-- select region modal -->

</html>
