@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  @if(session('message'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close"
    onclick="this.parentElement.style.display='none'">×</button>
    <span>{{ session('message') }}</span>
  </div>
  @endif
  
   
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
        Trader Blog Post List
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th style="width: 500px;">Detail</th>
              <th style="width: 200px;">Operation</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Detail</th>
              <th>Operation</th>
            </tr>
          </tfoot>
          <tbody>
          <div style="display: none;"> {{$i=0}} </div> 
            @foreach ($blogs as $blog)
              <div style="display:none;"> {{$i++}} </div>   
                <tr>
                <td>{{ $i }}</td>
                <td>{{ $blog->name }}</td>
                <td>{{ $blog->trader_category['name'] }}</td>
                <td>{!! str_limit(strip_tags($blog->detail), 250) !!}</td>
                <td class="adminsactionbutton">
	                <a href="{{ route('traderpostview', $blog->id) }}" class="btn btn-success btn-sm">View</a>
                  @if(Auth::id() == $blog->user_id)
	                 <a href="{{ route('edittraderpost', $blog->id) }}" class="btn btn-info btn-sm">Edit</a>
                  @endif
	                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $blog->id }}">
                  Delete
                </button>


                @if($blogs->count()>0)
                <!-- Modal -->
                <div class="modal fade" id="delete-{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="view-trader-post/delete/{{ $blog->id }}" style="margin-bottom: 0px;" >
                        @csrf
                        <div class="modal-body">
                          Are you want to delete this?
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Delete</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                @endif
                </td>
              </tr>
            @endforeach 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
