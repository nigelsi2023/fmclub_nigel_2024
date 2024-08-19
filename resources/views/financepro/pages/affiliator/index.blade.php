@extends('layouts.financepro_content')


@section('content')
<style type="text/css">
    .border{
        border: 2px solid #DFDFDF !important;
        border-radius: 0px !important;
    }
    span.error{
        color: #A94442;
        background-color: #FFFFFF;
    }
    .has-error{
        border-color: #A94442;
        border-radius: 0px;
    }
    .panel-body {
        border: 1px solid #efefef;
    }
    .btn-close {
        float: right;
        margin-top: -4px;
        margin-right: -5px;
        border: 1px solid #ff00003b;
        padding: 0px 9px;
        border-radius: 50%;
        background: #dff0d8;
        color: red;
        font-size: 20px;
        font-weight: bold;
        text-decoration: none;
        transition: 0.3s all ease-in-out;
    }
    .btn-close:hover{
        background-color: #A94442;
        color: #DFDFDF;
    }
    .alert.alert-danger {
        background: #ff9b9b;
        font-weight: bold;
    }
</style>
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal light-bg">
    <div class="container">
        <div class="row no-margin">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase no-margin" style="text-align: center;">Register as Affiliate</h2>
            </div>
        </div>
    </div>
</section>
<!-- /*PAGE HEADING SECTION -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 20px;">
                    <div class="panel-body">
                        <form method="post" action="{{ route('affiliate.store') }}" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @if(session('success_msg'))
                                        <div class="alert alert-success" role="alert">
                                            <span class="float-left">{{ session("success_msg") }}</span>
                                            <button type="button" class="btn btn-close" onclick="this.parentElement.style.display='none'">&times;</button>
                                        </div>
                                    @endif
                                    @if(session('error_msg'))
                                        <div class="alert alert-danger" role="alert">
                                            <span class="float-left">{{ session("error_msg") }}</span>
                                            <button type="button" class="btn btn-close" onclick="this.parentElement.style.display='none'">&times;</button>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="first_name">First Name <span class="error">*</span></label>
                                    <input type="text" class="form-control border {{ $errors->has('first_name') ? ' has-error' : '' }}" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" />
                                    @error('first_name')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="last_name">Last Name <span class="error">*</span></label>
                                    <input type="text" class="form-control border {{ $errors->has('last_name') ? ' has-error' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" />
                                    @error('last_name')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="email">Email Address <span class="error">*</span></label>
                                    <input type="email" class="form-control border {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="off" />
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="password">Password <span class="error">*</span></label>
                                    <input type="password" class="form-control border {{ $errors->has('password') ? ' has-error' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="off" />
                                    @error('password')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="paypal_email">Paypal Email <span class="error">*</span></label>
                                    <input type="email" class="form-control border {{ $errors->has('paypal_email') ? ' has-error' : '' }}" name="paypal_email" value="{{ old('paypal_email') }}" placeholder="Paypal Email" />
                                    @error('paypal_email')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label for="phone">Phone Number <span class="error">*</span></label>
                                    <input type="phone" class="form-control border {{ $errors->has('phone') ? ' has-error' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" />
                                    @error('phone')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <a href="{{ route('affiliate.login') }}" class="btn-link" style="float: left;">Already Have Account? <b>Login</b></a>
                                    <button type="submit" class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" style="float: right;">
                                        Register As Affiliate
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
