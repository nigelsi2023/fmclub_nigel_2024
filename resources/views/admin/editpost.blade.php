@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
    <h2>Please Enter Trader Blog Name And Detail</h2>
  </div>
  

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
    <div class="card-header">Edit Blog Post</div>
    <div class="card-body">
      <form action="{{ route('updatepost', $blog->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" id="Name" name='blogname' value="{{ $blog->name }}">
      </div>
      <div class="form-group">
          <label for="email">Category:</label>
          <select name="category" class="form-control" >
            <option>Category</option>
            @foreach($categories as $category)
              @if($blog->category_id == $category->id)
                <option value="{{ $blog->category_id }}" selected>{{ $blog->category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach
          </select>
        </div>
      <div class="form-group">
        <label for="pwd">Detail:</label>
        <textarea id="summernote" name="blogdetail" rows="10">{{ $blog->detail }}</textarea>
      </div>
      <div class="form-group">
        <label for="pwd">image:</label>
        <input id="profile_image" type="file" class="form-control" name="profile_image">
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