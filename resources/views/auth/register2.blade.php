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

<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <h4>We just need a little more information please</h4>
            <div class="panel panel-default" style="margin-top: 20px;">
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
                    <form method="POST" action="{{ route('register2') }}">
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
                            <label for="age" class="col-md-5 col-form-label text-md-right">Your Age <span class="error">*</span></label>

                            <div class="col-md-5">
                                <input type="number" id="email" class="form-control border {{ $errors->has('age') ? ' has-error' : '' }}" name="age"  autocomplete="age" value="{{ old('age') }}">

                                @error('age')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">Your Occupation <span class="error">*</span></label>

                            <div class="col-md-5">
                                <input id="password" type="text" class="form-control border {{ $errors->has('occupation') ? ' has-error' : '' }}" name="occupation" autocomplete="occupation" value="{{ old('occupation') }}">

                                @error('occupation')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-5 col-form-label text-md-right">Are You Currently Buying Shares? <span class="error">*</span></label>
                            
                            <div class="col-md-5">
                                <select name="buy_shares" class="form-control border" style="height: 40px">
                                    <option >Your Answer</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                @error('buy_shares')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">How Much Do You Have To Invest? <span class="error">*</span></label>

                            <div class="col-md-5">
                                <input id="password" type="number" class="form-control border {{ $errors->has('investing') ? ' has-error' : '' }}" name="investing"  autocomplete="investing" value="{{ old('investing') }}">

                                @error('investing')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">Have You Done Any Trading Course? <span class="error">*</span></label>

                            <div class="col-md-5">
                                <select name="trading_course" class="form-control border {{ $errors->has('trading_course') ? ' has-error' : '' }}" style="height: 40px">
                                    <option >Your Answer</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                @error('trading_course')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="role" class="col-md-5 col-form-label text-md-right">How Did You Find This Website? <span class="error">*</span></label>
                            
                            <div class="col-md-5">
                                <select name="how_find" class="form-control border {{ $errors->has('how_find') ? ' has-error' : '' }}" style="height: 40px">
                                    <option >Your Answer</option>
                                    <option value="Google Search">Google Search</option>
                                    <option value="From a Friend">From a Friend</option>
                                    <option value="Newspaper Advertisement">Newspaper Advertisement</option>
                                    <option value="Banner Advertisement">Banner Advertisement</option>
                                    <option value="Leaflet">Leaflet</option>
                                    <option value="Broker House">Broker House</option>
                                    <option value="Facebook">Facebook</option>
                                </select>
                                @error('how_find')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">Why Do You Want To Join This Site? <span class="error">*</span></label>

                            <div class="col-md-5">
                                <input id="password" type="text" class="form-control border {{ $errors->has('why_join') ? ' has-error' : '' }}" name="why_join"  autocomplete="why_join" value="{{ old('why_join') }}">

                                @error('why_join')
                                <span class="invalid-feedback error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" style="float: left">
                                    Finished
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
