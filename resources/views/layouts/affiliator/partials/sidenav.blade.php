<!-- Start Leftbar -->
<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{ route('affiliator.dashboard.index') }}" class="logo logo-large"><h2 class="mb-0 fw-bold">FM-CLUB</h2></a>
            <a href="{{ route('affiliator.dashboard.index') }}" class="logo logo-small"><h2 class="mb-0 fw-bold">FMC</h2></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('affiliator.dashboard.index') }}">
                        <i class="sl-icon-grid"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                
                <li>
                    <a href="javaScript:void(0);">
                        <i class="sl-icon-paper-clip"></i>
                        <span>{{ __('Referrals') }}</span>
                        <i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{ route('affiliator.referral.index') }}">{{ __('All Referrals') }}</a></li>
                        <li><a href="{{ route('affiliator.referral.create') }}">{{ __('Create Referral') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
<!-- End Leftbar -->