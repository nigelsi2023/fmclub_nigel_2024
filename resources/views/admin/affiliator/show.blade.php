@extends('layouts.admin')


@section('content')

@php
    function getCount($data) {
        if ($data < 10) {
            return '00'.$data;
        } elseif ($data >= 10 && $data < 100) {
            return '0'.$data;
        } else {
            return $data;
        }
    }
@endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ getCount($affiliator->referrals->count()) }}</strong>
                </div>
                <div class="card-footer bg-info">
                    <h6 class="m-0 float-left">Referral Visit</h6>
                    <h6 class="m-0 float-right">(Total)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ $todaysTotalVisit }}</strong>
                </div>
                <div class="card-footer bg-warning">
                    <h6 class="m-0 float-left">Referral Visit</h6>
                    <h6 class="m-0 float-right">(Today)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ $lastWeekTotalVisit }}</strong>
                </div>
                <div class="card-footer bg-info">
                    <h6 class="m-0 float-left">Referral Visit</h6>
                    <h6 class="m-0 float-right">(Last Week)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ $lastMonthTotalVisit }}</strong>
                </div>
                <div class="card-footer bg-warning">
                    <h6 class="m-0 float-left">Referral Visit</h6>
                    <h6 class="m-0 float-right">(Last Month)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ getCount($affiliator->referrals->pluck('page_url')->unique()->count()) }}</strong>
                </div>
                <div class="card-footer bg-warning">
                    <h6 class="m-0 float-left">Referrals</h6>
                    <h6 class="m-0 float-right">(Total)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ getCount($uniqueReferralsLastMonth->pluck('page_url')->unique()->count()) }}</strong>
                </div>
                <div class="card-footer bg-info">
                    <h6 class="m-0 float-left">Referrals</h6>
                    <h6 class="m-0 float-right">(Last Month)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ getCount($affiliator->referrals->pluck('visitor_ip')->unique()->count()) }}</strong>
                </div>
                <div class="card-footer bg-warning">
                    <h6 class="m-0 float-left">Unique Visitor</h6>
                    <h6 class="m-0 float-right">(Total)</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <strong>{{ getCount($uniqueReferralsLastMonth->pluck('visitor_ip')->unique()->count()) }}</strong>
                </div>
                <div class="card-footer bg-info">
                    <h6 class="m-0 float-left">Unique Visitor</h6>
                    <h6 class="m-0 float-right">(Last Month)</h6>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    {{ 'Details of ' }} <b>{{ $affiliator->user->name }}</b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $affiliator->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $affiliator->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>{{ $affiliator->user->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                    <tbody>
                                        <tr>
                                            <th>Paypal</th>
                                            <td>{{ $affiliator->paypal_email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Joined At</th>
                                            <td>{{ date('jS M, Y \a\t H:i:s', strtotime($affiliator->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @php
                                                    if ($affiliator->status == 'active') {
                                                        $status = 'success';
                                                    } else {
                                                        $status = 'danger';
                                                    }
                                                @endphp
                                                <div class="badge badge-{{ $status }} text-uppercase">
                                                    {{ $affiliator->status }}
                                                </div>    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    {{ 'All Referrals of ' }} <b>{{ $affiliator->user->name }}</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date & Time</th>
                                    <th>Referral URL</th>
                                    <th>Visitor IP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($affiliator->referrals as $key => $referral)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ date('jS M, Y \a\t H:i:s', strtotime($referral->created_at)) }}</td>
                                    <td>{{ $referral->page_url }}</td>
                                    <td>{{ $referral->visitor_ip }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


@endsection