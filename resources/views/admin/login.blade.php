<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - Login</title>

	<!-- Admin Favicon Icon -->
	<link rel="icon" type="text/icon" href="{{ asset('admin.png') }}">

	<!-- Custom fonts for this template-->
	<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template-->
	<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top: 8.25%;!important">
				@if ($errors->any())
				@foreach ($errors->all() as $error)
				<div class="alert alert-danger">
					<button type="button" aria-hidden="true" class="close"
					onclick="this.parentElement.style.display='none'">×</button>
					<span>{{ $error }}</span>
				</div>
				@endforeach
				@endif

				@if (session('error'))
				<div class="alert alert-danger">
					<button type="button" aria-hidden="true" class="close"
					onclick="this.parentElement.style.display='none'">×</button>
					<span>{{ session('error') }}</span>
				</div>
				@php Session::forget('error');; @endphp
				@endif
			</div>
		</div>

		<style type="text/css">
			.error{
				color: #A94442;
				background-color: #FFFFFF;
			}


		</style>

		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<img src="{{ asset('images/logo.ft.png') }}" class="img-fluid" alt="logo">
			</div>
		</div>

		<div class="card card-login mx-auto" style="margin-top: 8.25%;!important">
			<div class="card-header">Login</div>
			<div class="card-body">

				<form method="POST" action="{{ route('admin') }}">
					@csrf
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}"  autofocus="autofocus">
							<label for="inputEmail">Email address</label>
						</div>
						@error('email')
						<span class="invalid-feedback error" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
							<label for="inputPassword">Password</label>
						</div>
						@error('password')
						<span class="invalid-feedback error" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me" {{ old('remember-me') ? 'checked' : '' }}>
								Remember Password
							</label>
						</div>
					</div>
					<input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
					<!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
				</form>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
      </div> -->
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>

</html>
