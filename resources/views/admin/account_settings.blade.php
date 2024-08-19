@extends('layouts.admin')


@section('content')
<div class="container-fluid">

	<h2>Change Your Password</h2>

	@if(session('message'))
	<div class="alert alert-success">
		<button type="button" aria-hidden="true" class="close"
		onclick="this.parentElement.style.display='none'">×</button>
		<span>{{ session('message') }}</span>
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-danger">
		<button type="button" aria-hidden="true" class="close"
		onclick="this.parentElement.style.display='none'">×</button>
		<span>{{ session('error') }}</span>
		@php Session::forget('error');; @endphp
	</div>
	@endif

   {{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close"
        onclick="this.parentElement.style.display='none'">×</button>
        <span>{{ $error }}</span>
      </div>
    @endforeach
    @endif --}}

    <style type="text/css">
    	.help-block{
    		color: #721c24;
    	}
    </style>

    <div class="card mb-3">
    	<div class="card-header">Change Password</div>
    	<div class="card-body">
    		<form action="{{ route('admin.password') }}" method="post" enctype="multipart/form-data">
    			@csrf
    			<div class="form-group">
    				<label for="email">Old Password:</label>
    				<input type="password" class="form-control" id="Name" name='old_password' >
    				@if ($errors->has('old_password'))
    				<span class="help-block">
    					<strong>{{ $errors->first('old_password') }}</strong>
    				</span>
    				@endif
    			</div>

    			<div class="form-group">
    				<label for="email">New Password:</label>
    				<input type="password" class="form-control" id="Password" name='password' >
    				@if ($errors->has('password'))
    				<span class="help-block">
    					<strong>{{ $errors->first('password') }}</strong>
    				</span>
    				@endif
    			</div>
    			<div class="form-group">
    				<label for="email">Confirm New Password:</label>
    				<input type="password" class="form-control" id="Password" name='password_confirmation' >
    			</div>
    			<button type="submit" class="btn btn-primary">Change Password</button>
    		</form>
    	</div>
    </div>
</div>

@endsection 


@section('scripts')
<script >

	$(document).ready(function () {
		$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
			$("#success-alert").slideUp(500);
		});
	});

</script>
@endsection