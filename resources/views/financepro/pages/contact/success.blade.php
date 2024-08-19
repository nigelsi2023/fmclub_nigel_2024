@extends('layouts.financepro_content')

@section('style')
<style>
    .my-150 {
        margin-top: 150px;
        margin-bottom: 150px;
    }
    .panel-heading {
        display: flex;
        justify-content: space-between;
        background: #24cae2;
    }
    .panel-heading .title {
        color: #fff;
        font-weight: bold;
        font-size: 20px;
        padding: 8px 0px;
    }
    .panel-body {
        padding: 15px;
        border: 1px solid #24cae2;
        border-radius: 0px 0px 10px 10px;
    }
    .panel-body h4 {
        color: #222222;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 0px;
    }
    .panel-body p {
        color: #222222;
        font-size: 18px;
        margin-bottom: 0px;
    }
</style>    
@endsection

@section('content')
    <div class="container">
        <div class="row my-150">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span class="title">Message Sent Successfuly</span>
                        <a href="javascript:void(0);" class="btn btn-dark btn-sm" onclick="history.back()">Back</a>
                    </div>
                    <div class="panel-body">
                        <h4>Hello {{ $name }}.</h4>
                        <p>Thank you for contacting me. I will call you back within 3 hours to discuss how I can help you increase your Paper Treading Profit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
