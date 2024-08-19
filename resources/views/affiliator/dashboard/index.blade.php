@extends('layouts.affiliator.app')

@section('meta_tags')
    {{--  External META's  --}}

@endsection

@section('page_title', __('Dashboard'))

@section('css_links')
    {{--  External CSS  --}}
@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
    /* Custom CSS Here */
    .card-body .media i {
        font-style: normal;
    }
    </style>
@endsection


@section('page_name')
    <b class="text-uppercase">{{ __('Dashboard') }}</b>
@endsection


@section('breadcrumb')
    <li class="breadcrumb-item text-uppercase active">{{ __('Dashboard') }}</li>
@endsection



@section('content')

<!-- Start row -->
<div class="row">
    @php
        function getCount($data)
        {
            if ($data < 10) {
                return '00'.$data;
            } elseif ($data >= 10 && $data < 100) {
                return '0'.$data;
            } else {
                return $data;
            }
        }
    @endphp
    <div class="col-md-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    {{-- <i class="sl-icon-eye mr-3 mt-1 font-40 text-info-gradient"></i> --}}
                    <i class="mr-3 font-40 text-info-gradient font-normal">#</i>
                    <div class="media-body">
                        <h6 class="mb-2">Total Visits</h6> 
                        <h4 class="mb-0 text-dark-gradient"><b>{{ getCount($totalVisit) }}</b><h4>
                    </div>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <i class="mr-3 font-40 text-warning-gradient font-normal">#</i>
                    <div class="media-body">
                        <h6 class="mb-2">Today's Visits</h6> 
                        <h4 class="mb-0 text-dark-gradient"><b>{{ getCount($todaysTotalVisit) }}</b><h4>
                    </div>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <i class="mr-3 font-40 text-dark-gradient font-normal">#</i>
                    <div class="media-body">
                        <h6 class="mb-2">Last Week Visits</h6> 
                        <h4 class="mb-0 text-dark-gradient"><b>{{ getCount($lastWeekTotalVisit) }}</b><h4>
                    </div>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-md-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <i class="mr-3 font-40 text-success-gradient font-normal">#</i>
                    <div class="media-body">
                        <h6 class="mb-2">Last Month Visits</h6> 
                        <h4 class="mb-0 text-dark-gradient"><b>{{ getCount($lastMonthTotalVisit) }}</b><h4>
                    </div>
                </div>
            </div>
        </div>            
    </div>

    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <i class="sl-icon-paper-clip mr-3 mt-1 font-40 text-info-gradient"></i>
                    <div class="media-body"> 
                        <h4 class="mb-0">
                            <b>Your Unique ID: </b>
                            <a href="https://financialmarkets.club?ref={{ auth()->user()->affiliator->id }}" target="_blank" class="text-primary">https://financialmarkets.club?ref={{ auth()->user()->affiliator->id }}</a>
                        <h4>
                        <h6 class="mb-2"><b>Note:</b> You can use any page from the <a href="{{ url('/') }}" class="text-primary text-bold" target="_blank">Website</a>, simply add <q class="text-info">?ref={{ auth()->user()->affiliator->id }}</q> at the end of the URL</h6>
                    </div>
                    <a href="{{ route('affiliator.referral.create') }}" class="btn btn-info btn-lg float-end" style="padding: 18px;"><b>Create Link</b></a>
                </div>
            </div>
        </div>            
    </div>
</div>
<!-- End row -->

@endsection


@section('script_links')
    {{--  External Javascript Links --}}
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        // Custom Script Here
    </script>
@endsection
