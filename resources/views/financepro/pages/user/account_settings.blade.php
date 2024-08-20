@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<!-- TITLE-->
				<h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">My Account Settings</h2>
				<!-- BREADCRUMB-->
				<ul class="breadcrumb">
					<li>
						<a href="{{ route('index') }}">Home</a>
					</li>
					<li>
						<a href="#">My Account Settings</a>
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

		@if(session('error'))
		<div class="alert alert-danger">
			<button type="button" aria-hidden="true" class="close"
			onclick="this.parentElement.style.display='none'">×</button>
			<span>{{ session('error') }}</span>
			@php Session::forget('error'); @endphp
		</div>
		@endif

		<div class="row">
			<div class="col-md-9 top-margin-lg">
				<div class="col-md-12 col-sm-12 bottom-padding-sm">
                    <!-- TITLE -->
                   <div class="col-md-2 col-sm-2 bottom-padding-sm">
                        @if(Auth::user()->image == 'default.png')
                        	<img src="{{ asset('uploads/default.png') }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @elseif(Auth::user()->image == '')
                        	<img src="{{ asset('uploads/default.png') }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @else
                        	<img src="{{ asset('uploads/users/'.Auth::user()->image) }}" width="100" height="100" class="img-responsive img-circle" alt="Profile Image">
                        @endif
                    </div>
                    <div class="col-md-10 col-sm-10 border">
                    	<h3 class="legend font-weight-lbold text-uppercase bottom-line">Account Information</h3>
                        <div class="contact-form">
                                <!-- Form Begins -->
                                <form method="post" action="{{ route('password') }}" class="bv-form" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    

                                    <div class="textarea-message form-group has-feedback{{ $errors->has('old_pass') ? ' has-error' : '' }}">
                                    	<label>Old Password</label>
                                    	<input name="old_password" class="input-password form-control" placeholder="Old Password"  type="password">
                                    	@if ($errors->has('old_pass'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('old_pass') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="textarea-message form-group has-feedback{{ $errors->has('new_pass') ? ' has-error' : '' }}">
                                    	<label>New Password</label>
                                    	<input name="password" class="input-password form-control" placeholder="New Password"  type="password">
                                    	@if ($errors->has('new_pass'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new_pass') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="textarea-message form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                    	<label>Confirm New Password</label>
                                    	<input name="password_confirmation" class="input-password form-control" placeholder="Confirm New Password"  type="password">
                                    	
                                    </div>

                                    <!-- Button -->
                                    <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Change Password</button>
                                    
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