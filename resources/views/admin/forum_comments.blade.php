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
			Forum Comments
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Post</th>
							<th>User</th>
							<th>Comment</th>
							<th>Reply</th>
							<th >Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Post</th>
							<th>User</th>
							<th>Comment</th>
							<th>Reply</th>
							<th >Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($comments as $key => $comment)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>
								@php
									$blog = DB::table('forums')->where('id', $comment->commentable_id)->first();
								@endphp
								@if(isset( $blog->name ))
									{{ $blog->name }}
								@endif
							</td>
							<td>{{ $comment->user->name }}</td>
							<td>
								@if($comment->parent_id != null)
									@php
										$blog = DB::table('trader_comments')->where('id', $comment->parent_id)->first();
									@endphp
								
									{{ $blog['body'] }}
									@else
										<strong><i>First Comment</i></strong>
								@endif
							</td>
							<td>{{ $comment->body }}</td>
							<td>
								

								<!-- <form id="delete-from-" action="" style="display:none;" method="POST">
									@csrf
									@method('DELETE')
								</form>
								<button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
									event.preventDefault();
									document.getElementById('delete-from-').submit();
								} else {
									event.preventDefault();
								}">Delete</button> -->

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $comment->id }}">
									Delete
								</button>


								@if($comments->count()>0)
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="forum-comments/delete/{{ $comment->id }}" style="margin-bottom: 0px;" >
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
<!-- /.container-fluid -->


@endsection