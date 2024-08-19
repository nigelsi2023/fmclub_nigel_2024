<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">@yield('page_name')</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('affiliator.dashboard.index') }}"><i class="fa fa-home"></i></a></li>
                    @yield('breadcrumb')
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-outline-dark btn-outline-custom fw-bolder" onclick="window.history.back();"><i class="feather icon-arrow-left mr-2"></i><b>BACK</b></button>
            </div>                        
        </div>
    </div>          
</div>