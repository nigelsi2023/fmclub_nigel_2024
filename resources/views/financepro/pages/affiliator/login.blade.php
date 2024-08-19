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
</style>
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal light-bg">
    <div class="container">
        <div class="row no-margin">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase no-margin" style="text-align: center;">Login as Affiliate</h2>
            </div>
        </div>
    </div>
</section>
<!-- /*PAGE HEADING SECTION -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="margin-top: 20px;">
                @if(session('success'))
                    <script>
                        alert('{{ session("success") }}');
                    </script>
                @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <button type="button" aria-hidden="true" class="close"
                                onclick="this.parentElement.style.display='none'">×</button>
                                <span>{{ $error }}</span>
                            </div>
                        @endforeach
                    @endif

                    <div class="panel-body">
                        <form method="POST" action="{{ route('affiliate.login') }}" autocomplete="off">
                            @csrf
                            <div class="row">                                
                                <div class="col-md-12 form-group">
                                    <label for="email">Email Address <span class="error">*</span></label>
                                    <input type="email" class="form-control border {{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="off" />
                                    @error('email')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12 form-group">
                                    <label for="password">Password <span class="error">*</span></label>
                                    <input type="password" class="form-control border {{ $errors->has('password') ? ' has-error' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="off" />
                                    @error('password')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <a href="{{ route('affiliate.registration') }}" class="btn-link" style="float: left;">No Account? <b>Register</b></a>
                                    <button type="submit" class="btn btn-md btn-dark btn-square btn-hv-dark btn-hv-dark" style="float: right;">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
