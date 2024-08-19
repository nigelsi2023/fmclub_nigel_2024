@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
      <h2>Please Enter Forum Post Title And Detail</h2>
  </div>
  


  @if(session('message'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close"
    onclick="this.parentElement.sty le.display='none'">×</button>
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
    <div class="card-header">Add Forum Post</div>
    <div class="card-body">
      <form action="{{ route('trader-category.update', $category->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="email">Category Name:</label>
        <input type="text" class="form-control" id="Name" name="name" value="{{ $category->name }}">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
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