@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
    <h2>Please Enter Admin Credentials</h2> 
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
    <div class="card-header">Add Admin</div>
    <div class="card-body">
      <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" id="Name" name='name'>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="Email" name='email'>
      </div>
      <div class="form-group">
        <label for="email">Password:</label>
        <input type="password" class="form-control" id="Password" name='password'>
      </div>
      <div class="form-group">
        <label for="email">Confirm Password:</label>
        <input type="password" class="form-control" id="Password" name='password_confirmation'>
      </div>
      <button type="submit" class="btn btn-primary">Add Admin</button>
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