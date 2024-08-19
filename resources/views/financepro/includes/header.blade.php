Page Loader -->

    <div id="pageloader">
        <div class="loader-inner">
            <img src="images/base/loader.gif" alt=""> </div>
    </div>
    <!-- PAGE WRAPPER -->
    <div id="page-wrapper" class="right-push header-dropdown-dark">
        <!-- /.SIDE BAR WRAPPER -->
        <div class="content-wrapper">
            <header class="header-transparent header-details-toggle header-light header-transparent header-top-transparent header-sticky-light">
                <!-- HEADER Logo SECTION -->
                <div class="typo-dark hidden-xs hidden-sm border-bottom-style-2">
                    <div class="container">
                        <!-- CONTAINER -->
                        <!-- TOGGLE ICON -->
                        <div class="navbar-header logo-contact-details">
                            <a class="navbar-toggle" href="#nav-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> </a>


                                <style type="text/css">
                                    a.logo{
                                        font-size: 37px;
                                        font-weight: 80px;
                                        font-family: Bell MT;
                                    }
                                    .navbar-brand:hover{
                                        color: #000000;
                                    }
                                    .d-none{
                                        display:none ;
                                    }
                                </style>

                            <!-- LOGO & LOGO STICKY  -->
                            <a class="navbar-brand hidden-sm no-left-padding" href="{{ route('index') }}"><!-- <img src="images/logo.png" alt="logo" width="235" height="40"><img src="images/logo.png" class="sticky-logo" alt="logo" width="235" height="40"> -->
                                <img src="{{ asset('images/db.png') }}">
                                <strong class="logo-text">FinancialMarkets<span style="color: #24CAE2">Club</span></strong>

                            </a>
                        </div>
                        <!-- /. TOGGLE ICON -->
                        <div class="header-widgets hidden-sm navbar-right typo-dark">
                            <!-- <div class="widget widget-icon-box">
                                <a class="icon-box" href="tel:123456789"> -->
                                    <!-- ICON -->
                                    <!-- <i class="fa fa-map-marker fa-3x"></i> -->
                                    <!-- CONTACT DETAILS -->
                                <!-- </a>
                                <div class="icon-box-text">
                                    <h4 class="icon-box-title">1234, Time Square, </h4>
                                    <span class="icon-box-subtitle">New York, United States.</span>
                                </div>
                            </div> -->
                            <!-- <div class="widget widget-icon-box">
                                <a class="icon-box" href="tel:123456789"> -->
                                    <!-- ICON -->
                                    <!-- <i class="fa fa-clock-o fa-3x"></i> -->
                                    <!-- ADDRESS -->

                                <!-- </a>
                                <div class="icon-box-text">
                                    <h4 class="icon-box-title">Mon-Fri: 9am to 5pm </h4>
                                    <span class="icon-box-subtitle">Saturday / Sunday: Closed</span>
                                </div>
                            </div> -->
                            <div class="widget widget-icon-box">
                                <a class="icon-box" href="tel:+44 754 3944 236">
                                    <!-- ICON -->
                                    <i class="fa fa-headphones fa-3x"></i>

                                </a>
                                <!-- TEXT -->
                                <div class="icon-box-text">
                                    <h4 class="icon-box-title">+44 754 3944 236</h4>
                                    <span class="icon-box-subtitle">info@financialmarkets.club</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. HEADER Logo SECTION -->
                <!-- STICKY WRAPPER -->
                <div id="sticker" class="header-main sticky-navigation s-header">
                    <nav class="navbar navbar-default lights-bg fixed border-bottom-style-3">
                        <div class="container">
                           <div class="row">
						   		 <!-- TOGGLE ICON -->
                            <div class="navbar-header">
                                <a class="navbar-toggle" href="#nav-menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> </a>
                                <!-- LOGO & LOGO STICKY  -->
                                <a class="navbar-brand hidden-md hidden-lg" href="index.html"><img src="images/logo.png" class="img-responsive" alt="logo" width="200" height="40"><img src="images/logo.png" class="sticky-logo" alt="logo" width="200" height="40"></a>                            </div>
                            <!-- /. TOGGLE ICON -->
                            <!-- EXTRA NAV (FOR ELEMENTS) -->
                            <div id="extra-nav" class="extra-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <ul class="hidden-sm hidden-xs header-social-icons">
                                            <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </li>
                                    <!-- TOGGLR SEARCH -->
                                    <li class="dropdown search-dropdown">
                                        <a id="search-toggle" class="header-toggle-icon" href="#"> <span class="flaticon-magnifying-glass"></span></a>
                                    </li>
                                    <!-- /. TOGGLR SEARCH -->

                                    <!-- /. TOGGLR SEARCH -->
                                    <li id="extra-toggle-search" class="theme-bg header-toggle-content">
                                        <div class="container">
                                            <form>
                                                <input type="text" class="form-control typo-light" id="search-form" name="search-form" placeholder="TYPE AND HIT ENTER..">
                                                <a id="toggle-close-search" class="toggle-close" href="#"><span class="fa fa-times text-style typo-light"></span></a>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /. EXTRA NAV (FOR ELEMENTS) -->
                            <!-- MAIN MENU -->
                            <div id="nav-menu" class="">
                                <ul class="nav navbar-nav">
                                    <!-- DROPDOWN -->
                                    <li class="{{ Request::is('/')? 'active':'' }}">
                                        <a href="{{ route('index') }}" class="">Home</a>
                                    </li>
                                    <!-- MENU -->
                                    
                                    <!-- MEGA MENU -->
                                    <li class="dropdown">
                                        <a href="#">Market Analysis <span class="fa fa-angle-down"></span></a>
                                        <!-- DROPDOWN MENU -->
                                        <ul class="dropdown-menu">
                                            <li class="{{ Request::is('dse')? 'active':'' }}"><a href="{{ route('dse') }}">DSE Analysis</a>
                                            </li>
                                            <li class="{{ Request::is('uk')? 'active':'' }}"><a href="{{ route('uk') }}">UK FTSE 100</a>
                                            </li>
                                            <li class="{{ Request::is('us-dow')? 'active':'' }}"><a href="{{ route('us_dow') }}">US Dow Jones</a
                                            ></li>
                                            <li class="{{ Request::is('nasdaq')? 'active':'' }}"><a href="{{ route('nasdaq') }}">US Nasdaq</a>
                                            </li>
                                            <li class="{{ Request::is('currencies')? 'active':'' }}"><a href="{{ route('currencies') }}">Currencies</a>
                                            </li>
                                            <li class="{{ Request::is('commodities')? 'active':'' }}"><a href="{{ route('commodities') }}">Commodities</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- MENU -->
                                    <!-- DROPDOWN -->
                                    <!--<li  class="{{ Request::is('learning-center')? 'active':'' }}">-->
                                    <!--    <a href="{{ route('learning-center') }}" >Learning Center</a>-->

                                    <!--</li>-->
                                    @if(Auth::check())

                                    
                                    <!-- DROPDOWN -->
                                        <!-- <li class="dropdown"><a href="{{ route('admin') }}" target="_blank">Admin Panel</a>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        >
                                        Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->

                                    <li class="{{ Request::is('products')? 'active':'' }}">
                                        <a href="{{ route('products.index') }}" class="">My Portfolio</a>
                                    </li>
                                    @else

                                        <!-- DROPDOWN -->
                                        <!-- <li class="dropdown"><a href="{{ route('register') }}" class="">Registration</a> -->
                                
                                    
                                    <!-- DROPDOWN -->
                                    <li class="{{ Request::is('login')? 'active':'' }}"><a href="{{ route('login') }}" class="">Login</a>
                                    </li>
                                    @endif


                                    
                                    <!-- DROPDOWN -->
                                     <li class="{{ Request::is('trader-blog')? 'active':'' }}"><a href="{{ route('trader-blog') }}" class="">Traders Desk</a>
                                    </li>
                                    
                                    <!-- DROPDOWN -->
                                    <li class="{{ Request::is('stock-charts')? 'active':'' }}"><a href="{{ route('stock_chart') }}" class="">Stock Charts</a>
                                    </li>
                                    <!-- MENU -->

                                    <!--<li class=" {{ Request::is('forum')? 'active':'' }}"><a href="{{ route('forum') }}" class="">Forum</a>-->
                                    <!--</li>-->

                                    <li class="{{ Request::is('faq')? 'active':'' }}"><a href="{{ route('faq') }}" class="">FAQs</a>
                                    </li>
                                    </li>
                                    <!-- MENU -->
                                    <!-- MEGA MENU -->
                                    
                                    <!-- MEGA MENU -->
                                    @if(!Auth::check())
                                    <!-- <li class="dropdown">
                                        <a>About Us <span class="fa fa-angle-down"></span></a> -->
                                        <!-- MEGA MENU WRAPPER -->
                                        <!-- <ul class="dropdown-menu">
                                            <li class="{{ Request::is('about-us')? 'active':'' }}"><a href="{{ route('about_us') }}">About Share Market</a></li>
                                            <li><a href="{{ route('why_choose') }}">Why Choose Us</a></li>
                                        </ul> -->
                                    <!-- </li> -->
                                    <li class="{{ Request::is('about-us')? 'active':'' }}"><a href="{{ route('about_us') }}">About Us</a></li>
                                    @endif
                                    <!-- DROPDOWN -->
                                
                                    <!-- DROPDOWN -->
                                    <li class="{{ Request::is('contact')? 'active':'' }}"><a href="{{ route('contact') }}" class="">Contact Us</a>
                                    </li>

                                    @if(Auth::check())
                                    <style type="text/css">
                                        @media only screen and (min-width: 768px) {
                                            .mar-left{
                                                margin-left: 246px;
                                            }
                                        } 
                                    </style>
                                        <!-- DROPDOWN -->
                                        <li class="dropdown mar-left">
                                            <a href="#">Profile <i class="fa fa-angle-down"></i></a>
                                            <!-- DROPDOWN MENU -->
                                            <ul class="dropdown-menu">
                                                <!-- <li class="{{ Request::is('admin')? 'active':'' }}"><a href="{{ route('admin') }}" target="_blank">Admin Panel</a>
                                                </li> -->
                                                <li class="{{ Request::is('profile')? 'active':'' }}"><a class="dropdown-item" href="{{ route('profile') }}">{{ Auth::user()->name }}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"
                                            >Logout</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                                
                                            </ul>
                                        </li>

                                    @endif


                                </ul>

                            </div>
                            <!-- /. MAIN MENU -->
                            <!-- /.navbar-collapse -->
						   </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
                <!-- /. STICKY WRAPPER -->
            </header>
            <!-- /. HEADER