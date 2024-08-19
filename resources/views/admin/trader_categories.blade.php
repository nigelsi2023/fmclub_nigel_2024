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
			Trader Categories
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th style="width: 132px;">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($categories as $key => $category)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $category->name }}</td>
							<td class="adminsactionbutton">
								<a href="{{ route('trader-category.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>

								<!-- <form id="delete-from-{{ $category->id }}" action="{{ route('trader-category.destroy', $category->id) }}" style="display:none;" method="POST">
									@csrf
									@method('DELETE')
								</form>
								<button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
									event.preventDefault();
									document.getElementById('delete-from-{{ $category->id }}').submit();
								} else {
									event.preventDefault();
								}">Delete</button> -->

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $category->id }}">
									Delete
								</button>


								@if($categories->count()>0)
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="{{ route('trader-category.destroy', $category->id) }}" method="post" style="margin-bottom: 0px;" >
												@csrf
												@method('delete')
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