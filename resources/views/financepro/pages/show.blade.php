@extends('layouts.financepro_content')

@section('content')
	<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">View Product</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">View Product</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE HEADING SECTION -->


<div class="container" style="margin-top: 20px;">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $product->name }}

            </div>

        </div>

        <div class="col-md-6 col-md-offset-3">

            <div class="form-group">

                <strong>Price:</strong>

                {{ $product->detail }}

            </div>

        </div>

    </div>
</div>
@endsection