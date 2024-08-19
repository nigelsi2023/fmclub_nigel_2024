@extends('layouts.financepro_content')


@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
    <div class="container">
        <div class="row no-margin">
            <div class="col-md-12 text-left">
                <!-- TITLE-->
                <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400"> Registration</h2>
                <!-- BREADCRUMB-->
                <ul class="breadcrumb">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /*PAGE HEADING SECTION -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 20px;">
                
                <!-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <button type="button" aria-hidden="true" class="close"
                            onclick="this.parentElement.style.display='none'">×</button>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                    @endif -->

                    <div class="panel-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
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
                            </style>
                            <div class="form-group row">
                                <label for="name" class="col-md-5 col-form-label text-md-right">Full Name <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="name" type="text" class="form-control border {{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    

                                    @error('name')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-5 col-form-label text-md-right">Telephone <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="name" type="text" class="form-control border {{ $errors->has('telephone') ? ' has-error' : '' }}" name="telephone" value="{{ old('telephone') }}"  autocomplete="telephone" autofocus>
                                    

                                    @error('telephone')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }} <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="email" type="email" class="form-control border {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}"  autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-5 col-form-label text-md-right">Confirm E-Mail Address <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="email" type="email" class="form-control border @error('email_confirmation') is-invalid @enderror" name="email_confirmation" value="{{ old('email_confirmation') }}"  autocomplete="email_confirmation">

                                    @error('email_confirmation')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }} <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control border {{ $errors->has('password') ? ' has-error' : '' }}" name="password"  autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }} <span class="error">*</span></label>

                                <div class="col-md-5">
                                    <input id="password-confirm" type="password" class="form-control border" name="password_confirmation"  autocomplete="new-password">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" style="float: left">
                                        Submit
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
