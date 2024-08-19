<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta Starts --}}
        @include('layouts.affiliator.partials.metas')
        {{-- Meta Ends --}}
        
        {{--  Page Title  --}}
        <title> {{ __('FM-CLUB') }} | Affiliate | @yield('page_title') </title>
        <!-- Fevicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" /> --}}
        <link rel="shortcut icon" href="https://financialmarkets.club/icon.png" />

        <!-- Start css -->
        @include('layouts.affiliator.partials.stylesheet')
        <!-- End css -->
    </head>

    
    <body class="vertical-layout">
        <!-- Start Containerbar -->
        <div id="containerbar">
            <!-- Start Leftbar -->
            @include('layouts.affiliator.partials.sidenav')
            <!-- End Leftbar -->
            
            <!-- Start Rightbar -->
            <div class="rightbar">
                <!-- Start Topbar Mobile -->
                @include('layouts.affiliator.partials.topnav_mobile')
                <!-- Start Topbar -->
                @include('layouts.affiliator.partials.topnav')
                <!-- End Topbar -->

                <!-- Start Breadcrumbbar -->
                @include('layouts.affiliator.partials.breadcrumb')
                <!-- End Breadcrumbbar -->

                <!-- Start Contentbar -->
                <div class="contentbar">
                    <!-- Start row -->
                        @yield('content')
                    <!-- End row -->
                </div>
                <!-- End Contentbar -->

                <!-- Start Footerbar -->
                @include('layouts.affiliator.partials.footer')
                <!-- End Footerbar -->
            </div>
            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->



        <!-- Start js -->
        @include('layouts.affiliator.partials.scripts')
    </body>
</html>
