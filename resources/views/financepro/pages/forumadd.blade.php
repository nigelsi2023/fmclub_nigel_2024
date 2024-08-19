@extends('layouts.financepro_content')

@section('content')
	   <!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">
                               Ask Forum
                            </h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Ask Forum</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE HEADING SECTION -->

            <div class="container">
                <h2 class="text-capitalize">Please Enter Your Question And Description</h2>
                <hr>

                @if(session('message'))
                <div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close"
                    onclick="this.parentElement.style.display='none'">×</button>
                    <span>{{ session('message') }}</span>
                </div>
                @endif

                <!-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <button type="button" aria-hidden="true" class="close"
                            onclick="this.parentElement.style.display='none'">×</button>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                @endif -->

                <div class="contact-form bottom-padding-sm">
                    <!-- Form Begins -->
                    <form method="post" action="{{ route('forum.insert') }}" class="bv-form" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <div class="textarea-message form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
                            <input name="title" class="form-control" placeholder="Title" type="text">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="textarea-message form-group has-feedback{{ $errors->has('category') ? ' has-error' : '' }}">
                            <select name="category" class="form-control" style="height: 60px;">
                                <option>Category</option>
                                @foreach($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>

                                                
                        <div class=" textarea-message form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
                            <textarea name="description" class="textarea-message form-control " placeholder="Description" rows="4" ></textarea>
                            <!-- tinymce -->

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- Field 2 -->
                        <!-- <div class="form-group has-feedback{{ $errors->has('image') ? ' has-error' : '' }}">
                            <input name="image" class="form-control" type="file">
                                                
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div> -->
                                    
                        <div class="col-md-12">
                            <!-- Button -->
                            <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Add Question</button>
                        </div>
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>

@endsection