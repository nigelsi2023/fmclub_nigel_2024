@extends('layouts.financepro_content')

  

@section('content')
<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400"> Add New Stock</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li>Add New Stock</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /*PAGE HEADING SECTION -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-hv-dark btn-hv-dark btn-icon-right light-bg bottom-margin-sm" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
<div class="container" style="padding-bottom: 20px;">
    <div class="row">
        <div class="card card-default">
            

            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            	<div class="row">
                            		<div class="col-md-2" style="text-align: right;">
                            			<strong>Name:</strong>
                                		<!--<input type="text" name="name" class="form-control" placeholder="Name"> -->
                            		</div>
                            		<div class="col-md-8">
                            			<select name="name" class="input-subject form-control" style="height: 60px;">
			                                <option value="">Product Name</option selected>
			                                @foreach ($products as $data)                                       
			                                    <option value="{{ $data->name }}">{{ $data->name }}</option>
			                                @endforeach
			                            </select>
                            		</div>
                            	</div>
                            </div>
                        </div>

                        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            	<div class="row">
                            		<div class="col-md-2" style="text-align: right;">
                            			<strong>Price:</strong>
                            		</div>
                            		<div class="col-md-8">
                            			<textarea class="textarea-message form-control" style="height:150px;" name="detail" ></textarea>
                            		</div>
                            	</div>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection