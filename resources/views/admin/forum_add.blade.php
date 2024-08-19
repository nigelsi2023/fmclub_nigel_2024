@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
    <h2>Please Enter Forum Post Title And Detail</h2>
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
    <div class="card-header">Add Forum Post</div>
    <div class="card-body">
      <form action="{{action('PostInsertController@insert_forum')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Title:</label>
        <input type="text" class="form-control" id="Name" name='title'>
      </div>
      
        <div class="form-group">
            <label for="email">Sub Title:</label>
            <input type="text" class="form-control" id="Subtitle" name='sub_title'>
        </div>
      
      <div class="form-group">
          <label for="email">Category:</label>
          <select name="category" class="form-control" >
            <option>Category</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
      <div class="form-group">
        <label for="pwd">Description:</label>
        <textarea id="summernote" name="description" rows="10"></textarea>
      </div>
      <!-- <div class="form-group">
        <label for="pwd">Image:</label>
        <input id="profile_image" type="file" class="form-control" name="image">
      </div> -->
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