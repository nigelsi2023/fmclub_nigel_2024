<!-- Custom CSS -->
<style type="text/css">
    a.logo {
        font-size: 37px;
        font-weight: 1000;
        text-height: 20px;
        font-family: Bell MT;
    }

    .navbar-brand:hover {
        color: #000000;
    }

    .cookie-consent {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding-top: 7px;
        color: #fff;
        line-height: 20px;
        font-size: 14px;
        background: #292929;
        z-index: 120;
    }

    .allow-button {
        height: 30px;
        width: 113px;
        color: #fff;
        font-size: 15px;
        border-radius: 3px;
        border: 1px solid #24cae2;
        background-color: #24cae2;
    }

    .allow-button:hover {
        background-color: #1db7c7;
    }

    #back-to-top.show {
        margin-right: 17px;
    }
</style>

<!-- PAGE WRAPPER -->
<div id="page-wrapper" class="right-push header-dropdown-dark">
    <!-- CONTENT WRAPPER -->
    <div class="content-wrapper">
        <!-- HEADER -->
        <header class="header-details-toggle header-light">
            <!-- HEADER LOGO SECTION -->
            <div class="typo-dark hidden-xs border-bottom-style-2">
                <div class="container">
                    <!-- NAVBAR HEADER -->
                    <div class="navbar-header logo-contact-details">
                        <a class="navbar-toggle" href="#nav-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <a class="navbar-brand hidden-sm no-left-padding logo" href="{{ route('index') }}">
                            <img src="{{ asset('images/db.png') }}" alt="Logo">
                            <strong>FinancialMarkets<span style="color: #24CAE2">Club</span></strong>
                        </a>
                    </div>
                    <!-- /.NAVBAR HEADER -->

                    <!-- HEADER WIDGETS -->
                    <div class="header-widgets hidden-sm navbar-right typo-dark">
                        <div class="widget widget-icon-box">
                            <a class="icon-box" href="tel:+44 754 3944 236">
                                <i class="fa fa-headphones fa-3x"></i>
                            </a>
                            <div class="icon-box-text">
                                <h4 class="icon-box-title">+44 754 3944 236</h4>
                                <span class="icon-box-subtitle">info@financialmarkets.club</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.HEADER WIDGETS -->
                </div>
            </div>
            <!-- /.HEADER LOGO SECTION -->

            <!-- STICKY NAVIGATION -->
            <div id="sticker" class="transparent-bg header-main sticky-navigation s-header">
                <nav class="navbar navbar-default fixed">
                    <div class="container">
                        <!-- TOGGLE ICON -->
                        <div class="navbar-header">
                            <a class="navbar-toggle" href="#nav-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>

                            <a class="navbar-brand hidden-md hidden-lg" href="">
                                <img src="https://financialmarkets.club/images/logo.png" class="img-responsive" alt="logo" width="200" height="40">
                            
                                <img src="https://financialmarkets.club/images/logo.png" class="sticky-logo" alt="logo" width="200" height="40">
                            </a>
                        </div>

                        <!-- MAIN MENU -->
                        <div id="nav-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <!-- Home -->
                                <li class="{{ Request::is('/') ? 'active' : '' }}">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>

                                <!-- Market Analysis -->
                                <li class="dropdown {{ Request::is('trader-blog') ? 'active' : '' }}">
                                    <a href="{{ route('trader-blog') }}">Market Analysis <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        @php
                                            $traderCategories = \App\TraderCategory::all();
                                        @endphp
                                        @foreach($traderCategories as $category)
                                            <li>
                                                <a href="{{ route('trader_category', $category->slug) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!-- Forex Signals -->
                                <li class="{{ Request::is('forex-signal') ? 'active' : '' }}">
                                    <a href="{{ route('forex-signal') }}">Forex Signals</a>
                                </li>

                                <!-- My Portfolio -->
                                @if(Auth::check())
                                    <li class="{{ Request::is('products') ? 'active' : '' }}">
                                        <a href="{{ route('products.index') }}">My Portfolio</a>
                                    </li>
                                @endif

                                <!-- FAQs -->
                                <li class="{{ Request::is('faq') ? 'active' : '' }}">
                                    <a href="{{ route('faq') }}">FAQs</a>
                                </li>

                                <!-- About Us -->
                                @if(!Auth::check())
                                    <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                        <a href="{{ route('about_us') }}">About Us</a>
                                    </li>
                                @endif

                                <!-- Affiliate -->
                                <li>
                                    <a href="{{ url('/') }}/affiliate">Affiliate</a>
                                </li>

                                <!-- Contact Us -->
                                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <!-- Profile Dropdown -->
                                @if(Auth::check())
                                    <li class="dropdown mar-left">
                                        <a href="#">Profile <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="{{ Request::is('profile') ? 'active' : '' }}">
                                                <a href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                                            </li>
                                            <li class="{{ Request::is('account-settings') ? 'active' : '' }}">
                                                <a href="{{ route('account') }}">Account Settings</a>
                                            </li>
                                            <li class="{{ Request::is('products') ? 'active' : '' }}">
                                                <a href="{{ route('products.index') }}">My Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="login-item mar-le {{ Request::is('login') ? 'active' : '' }}">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- /.MAIN MENU -->
                    </div>
                </nav>
            </div>
            <!-- /.STICKY NAVIGATION -->
        </header>
        <!-- /.HEADER -->
    </div>
    <!-- /.CONTENT WRAPPER -->
</div>
<!-- /.PAGE WRAPPER -->
