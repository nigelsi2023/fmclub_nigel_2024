@extends('layouts.admin')

@section('content')
<div class="container-fluid">

	<div class="admincreatetitle">
		<h2>Please Write Frequently Asked Question And Answer</h2>
	</div>

	

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

	<div class="card mb-3">
		<div class="card-header">Add Frequently Asked Question</div>
		<div class="card-body">
			<form action="{{ route('faqs.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="question">Question:</label>
					<input type="text" class="form-control" id="Name" name="question">
					@error('question')
					<span class="invalid-feedback error" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="answer">Answer:</label>
					<textarea id="summernote" name="answer" rows="10"></textarea>
					@error('answer')
					<span class="invalid-feedback error" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
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