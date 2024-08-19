@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400"> Login</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Login</li>
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
                
                @if (session('error'))
                    <div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close"
                            onclick="this.parentElement.style.display='none'">×</button>
                        <span>{{ session('error') }}</span>
                        @php Session::forget('error') @endphp
                    </div>
                @endif

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <style type="text/css">
                            .border{
                                border: 2px solid #DFDFDF !important;
                                border-radius: 0px !important;
                            }
                        </style>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <style type="text/css">
                                    .error{
                                        color: #A94442;
                                        background-color: #FFFFFF;
                                    }
                                </style>

                                @error('email')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control border @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="col-md-3 col-xs-3">
                                    <button type="submit" class="btn btn-md btn-theme btn-square btn-hv-dark" style="float: left">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <style type="text/css">
                                    .btn-reg{
                                        background-color: #33B39B;
                                        color: #FFFFFF;
                                    }
                                    .btn-reg:hover{
                                        background-color: #33B39B;
                                        color: #FFFFFF;
                                    }
                                </style>
                                <div class="col-md-3 col-xs-6">
                                    <a class="btn btn-reg btn-md btn-square" href="{{ route('register') }}">
                                            Register for Free Account
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #24CAE2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
