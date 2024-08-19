@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400"> Verify Email</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Verify Email</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /*PAGE HEADING SECTION -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Verify Your Email Address') }}</div>

                <div class="panel-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
