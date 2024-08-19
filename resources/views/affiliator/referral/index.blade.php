@extends('layouts.affiliator.app')

@section('meta_tags')
    {{--  External META's  --}}

@endsection

@section('page_title', __('Referrals'))

@section('css_links')
    {{--  External CSS  --}}
    <!-- Switchery css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables css -->
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive Datatable css -->
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('custom_css')
    {{--  External CSS  --}}
    <style>
    /* Custom CSS Here */
    .card-body .media i {
        font-style: normal;
    }
    .form-control[readonly] {
        background-color: #d4d8de1c;
        height: auto;
        padding: 2px;
    }
    </style>
@endsection


@section('page_name')
    <b class="text-uppercase">{{ __('Referrals') }}</b>
@endsection


@section('breadcrumb')
    <li class="breadcrumb-item text-uppercase">{{ __('Referrals') }}</li>
    <li class="breadcrumb-item text-uppercase active">{{ __('All Referrals') }}</li>
@endsection



@section('content')

<!-- Start row -->
<div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">{{ __('All Referrals') }}</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-datatable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Referral Link</th>
                                <th>Visitor IP</th>
                                <th>Visited At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($referrals as $sl => $referral)
                                <tr>
                                    <th class="fw-bold"><b>#{{ $sl+1 }}</b></th>
                                    <td>
                                        <input type="text" class="form-control referral-url" readonly value="{{ $referral->page_url.'?ref='. auth()->user()->affiliator->id }}">
                                    </td>
                                    <td>{{ $referral->visitor_ip }}</td>
                                    <td>{{ date('jS M, Y \a\t H:i:s', strtotime($referral->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
</div>
<!-- End row -->

@endsection


@section('script_links')
    {{--  External Javascript Links --}}
    <!-- Switchery js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Datatable js -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endsection

@section('custom_script')
    {{--  External Custom Javascript  --}}
    <script>
        // Custom Script Here
        /* -- Bootstrap Tooltip -- */
        $('[data-toggle="tooltip"]').tooltip();

        $(document).ready(function() {
            $('.referral-url').click(function() {
                $(this).select(); // Select the input field's value
                document.execCommand('copy'); // Copy the selected value to clipboard
            });
        });

    </script>
@endsection
