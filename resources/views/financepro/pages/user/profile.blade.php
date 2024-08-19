@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<!-- TITLE-->
				<h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">My Profile</h2>
				<!-- BREADCRUMB-->
				<ul class="breadcrumb">
					<li>
						<a href="{{ route('index') }}">Home</a>
					</li>
					<li>
						<a href="#">My Profile</a>
					</li>
					<li>
						<a href="#">{{ Auth::user()->name }}</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
</section>

<section class="sidebar-wrapper right-sidebar">
	<div class="container" style="margin-top: 20px;margin-bottom: 20px;">
		<!-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                
                <button type="button" aria-hidden="true" class="close"
                    onclick="this.parentElement.style.display='none'">×</button>
                    <span>{{ $error }}</span>
            </div>
            @endforeach
        @endif -->

		@if(session('success'))
		<div class="alert alert-success">
			<button type="button" aria-hidden="true" class="close"
			onclick="this.parentElement.style.display='none'">×</button>
			<span>{{ session('success') }}</span>
			@php Session::forget('success'); @endphp
		</div>
		@endif
		<div class="row">
			<div class="col-md-9 top-margin-lg">
				<div class="col-sm-12 bottom-padding-sm">
                    <!-- TITLE -->
                   <div class="col-md-2 col-sm-2 bottom-padding-sm">
                        @if(Auth::user()->image == 'default.png')
                        	<img src="{{ asset('public/uploads/default.png') }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @elseif(Auth::user()->image == '')
                        	<img src="{{ asset('public/uploads/default.png') }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @else
                        	<img src="{{ asset('public/uploads/users/'.Auth::user()->image) }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @endif
                    </div>
                    <div class="col-md-10 col-sm-10 border">
                    	<h3 class="legend font-weight-lbold text-uppercase bottom-line">Personal Information</h3>
                        <div class="contact-form">
                                <!-- Form Begins -->
                                <form method="post" action="{{ route('update_profile') }}" class="bv-form" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 1 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                            	<label>Name</label>
                                                <input name="name" class="input-name form-control" placeholder="Full Name" value="{{ Auth::user()->name }}" type="text">

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                                            	<label>Phone Number</label>
                                                <input name="phone" class="input-phone form-control" placeholder="Phone Number" value="{{ Auth::user()->telephone }}" type="text">
												
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 3 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                            	<label>Email</label>
                                                <input name="email" class="input-email form-control" placeholder="Email" value="{{ Auth::user()->email }}" type="text" disabled>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <!-- Field 4 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('age') ? ' has-error' : '' }}">
                                            	<label>Age</label>
                                                <input name="age" class="input-age form-control" placeholder="Age" value="{{ Auth::user()->age }}" type="number">

                                                @if ($errors->has('age'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('age') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 3 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('occupation') ? ' has-error' : '' }}">
                                            	<label>Occupation</label>
                                                <input name="occupation" class="input-occupation form-control" placeholder="Occupation" value="{{ Auth::user()->occupation }}" type="text">

                                                @if ($errors->has('occupation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('occupation') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <!-- Field 4 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('buy_shares') ? ' has-error' : '' }}">
                                            	<label>Are You Currently Buying Shares?</label>
                                                <select name="buy_shares" class="input-subject form-control{{ $errors->has('buy_shares') ? ' has-error' : '' }}" style="height: 60px;">
                                                	<option >Your Answer</option>
                                                	<option value="Yes" {{ (Auth::user()->buy_shares == 'Yes')? 'selected' : '' }}>Yes</option>
			                                        <option value="No" {{ (Auth::user()->buy_shares == 'No')? 'selected' : '' }}>No</option>
												</select>

                                                @if ($errors->has('buy_shares'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('buy_shares') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="textarea-message form-group has-feedback{{ $errors->has('image') ? ' has-error' : '' }}">
                                    	<label>Profile Image</label>
                                    	<input name="image" class="input-image form-control" placeholder="Image"  type="file">
                                    	@if ($errors->has('image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 3 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('investing') ? ' has-error' : '' }}">
                                            	<label>How Much Do You Have To Invest?</label>
                                                <input name="investing" class="input-investing form-control" placeholder="Invest" value="{{ Auth::user()->investing }}" type="number">

                                                @if ($errors->has('investing'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('investing') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <!-- Field 4 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('trading_course') ? ' has-error' : '' }}">
                                            	<label>Have You Done Any Trading Course?</label>
                                                <select name="trading_course" class="input-subject form-control{{ $errors->has('trading_course') ? ' has-error' : '' }}" style="height: 60px;">
                                                	<option >Your Answer</option>
                                                	<option value="Yes" {{ (Auth::user()->trading_course == 'Yes')? 'selected' : '' }}>Yes</option>
			                                        <option value="No" {{ (Auth::user()->trading_course == 'No')? 'selected' : '' }}>No</option>
												</select>

                                                @if ($errors->has('trading_course'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('trading_course') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 3 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('how_find') ? ' has-error' : '' }}">
                                            	<label>How Did You Find This Website?</label>
                                                <select name="how_find" class="input-subject form-control{{ $errors->has('how_find') ? ' has-error' : '' }}" style="height: 60px;">
			                                        <option >Your Answer</option>
			                                        <option value="Google Search" {{ (Auth::user()->how_find == 'Google Search')? 'selected' : '' }}>Google Search</option>
			                                        <option value="From a Friend" {{ (Auth::user()->how_find == 'From a Friend')? 'selected' : '' }}>From a Friend</option>
			                                        <option value="Newspaper Advertisement" {{ (Auth::user()->how_find == 'Newspaper Advertisement')? 'selected' : '' }}>Newspaper Advertisement</option>
			                                        <option value="Banner Advertisement" {{ (Auth::user()->how_find == 'Banner Advertisement')? 'selected' : '' }}>Banner Advertisement</option>
			                                        <option value="Leaflet" {{ (Auth::user()->how_find == 'Leaflet')? 'selected' : '' }}>Leaflet</option>
			                                        <option value="Broker House" {{ (Auth::user()->how_find == 'Broker')? 'selected' : '' }}>Broker House</option>
			                                        <option value="Facebook" {{ (Auth::user()->how_find == 'Facebook')? 'selected' : '' }}>Facebook</option>
			                                    </select>

                                                @if ($errors->has('how_find'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('how_find') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <!-- Field 4 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('why_join') ? ' has-error' : '' }}">
                                            	<label>Why Do You Want To Join This Site?</label>
                                                <input name="why_join" class="input-investing form-control" placeholder="Why Join" value="{{ Auth::user()->why_join }}" type="text">

                                                @if ($errors->has('why_join'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('why_join') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                        <!-- Button -->
                                        <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Profile</button>
                                    
                                </form>
                                <!-- Form Ends -->
                            </div>
                    </div>

                </div>
			</div>
			<!-- SIDEBAR -->
			<div class="col-md-3 col-sm-12 sidebar top-margin-lg">
				<div class="forumsidebarblock border-rounded col-md-12 theme-bg  bottom-margin-sm section-title">
					<h2 class="widget-title no-bottom-padding typo-light text-uppercase">Do you need any help?</h2>
					<p class="no-bottom-padding typo-light">My job is to help professionals to achieve their financial goals whilst having adequate protection along the way.</p>
					<a href="{{ route('contact') }}" class="btn btn-hv-dark btn-hv-dark btn-icon-right dark-bg text-white"> Contact Now</a>
				</div>
				<div class="row">
					<div class="recent-block col-md-12">
						<h5 class="legend col-md-12">Recent Post By Me</h5>
						<!-- ITEM-->
						@if($blogs->count() > 0)
						<div class="clearfix col-md-12">
							<ul class="typo-lights list-unstyled no-bottom-margin">
								@foreach($blogs as $blog)
								<li>
									<a href="{{ route('forum.view', $blog->id) }}">{{ $blog->name }}</a>
								</li>
								@endforeach
							</ul>
						</div>
						@else
							<p>No Post Found</p>
						@endif
					</div>
				</div>
			</div>
			<!-- SIDEBAR END -->
		</div>
	</div>
</section>

@endsection