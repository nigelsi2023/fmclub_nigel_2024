@extends('layouts.admin')


@section('content')
	<div class="container-fluid">
  
  <h2>Update Your Profile</h2>

  @if(session('message'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close"
    onclick="this.parentElement.style.display='none'">×</button>
    <span>{{ session('message') }}</span>
    @php Session::forget('message');; @endphp
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
    <div class="card-header">Update Profile</div>
    <div class="card-body">
      <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" id="Name" name='name' value="{{ Auth::user()->name }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="Email" name='email' value="{{ Auth::user()->email }}" disabled>
      </div>
      <div class="form-group">
        <label for="email">Phone:</label>
        <input type="text" class="form-control" id="Password" name='phone' value="{{ Auth::user()->telephone }}">
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">Age:</label>
        <input type="number" class="form-control" id="Password" name='age' value="{{ Auth::user()->age }}">
        @if ($errors->has('age'))
            <span class="help-block">
                <strong>{{ $errors->first('age') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">Occupation:</label>
        <input type="text" class="form-control" id="Password" name='occupation' value="{{ Auth::user()->occupation }}">
        @if ($errors->has('occupation'))
            <span class="help-block">
                <strong>{{ $errors->first('occupation') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label for="email">Profile Image:</label>
        <input type="file" class="form-control" id="Password" name='image'>
        @if ($errors->has('image'))
            <span class="help-block">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Update Profile</button>
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