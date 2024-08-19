@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <!-- TITLE-->
                <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">
                 Buy Share
             </h2>
             <!-- BREADCRUMB-->
             <ul class="breadcrumb">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>
                    <a href="#">Buy Share</a>
                </li>

            </ul>
        </div>
    </div>
</div>
</section>
<!-- PAGE HEADING SECTION -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 top-padding-sm bottom-padding-sm">
            <div class="border" style="padding: 20px 20px">
                <h2 class="text-capitalize productsbuytitle">Please Enter Your Quantity of Share for Buy</h2>
                <hr>

                @if(session('message'))
                <div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close"
                    onclick="this.parentElement.style.display='none'">×</button>
                    <span>{{ session('message') }}</span>
                </div>
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

                <div class="contact-form">
                    <!-- Form Begins -->
                    <form method="post" action="{{ route('buy_product', $product->id) }}" class="bv-form" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="textarea-message form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        	<input name="name" class="form-control" placeholder="Company" type="text" value="{{ $product->name }}" readonly>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        @php
                        $price = preg_replace("/[^0-9.%-]/", "", $product->current_price);
                        @endphp

                        <div class="textarea-message form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                            <input name="price" class="form-control" placeholder="Price" type="text" value="{{ $price }}" readonly>
                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="textarea-message form-group has-feedback{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <input name="quantity" id="quantity" class="form-control" placeholder="Quantity" type="text" onkeyup="myFunction()">
                            @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                            @endif
                        </div>

                        <script type="text/javascript">
                        	var price = "<?php echo $price ?>";
                        	
                        	function myFunction(){
                              var quantity = document.getElementById('quantity').value;
                              var cost = price * quantity;
	                          //console.log(cost);
                              var val = cost.toFixed(2);
	                          document.getElementById("cost").value = -val;
                           }
                        	/*var cost = 0;
                        	document.getElementById("cost").value = cost;*/
                        </script>

                        <div class="textarea-message form-group has-feedback{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <input name="cost" id="cost" class="form-control" placeholder="Total Cost" type="text" readonly>
                            @if ($errors->has('quantity'))
                            <span class="help-block">
                                <strong>{{ $errors->first('quantity') }}</strong>
                            </span>
                            @endif
                        </div>

                        
                        <!-- Button -->
                        <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark btn-lg" type="submit">Buy</button>
                        
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection