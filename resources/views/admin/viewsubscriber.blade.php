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
			Subscriber List
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th  width="70px"><input type="checkbox" id="master">  nbsp;All</th>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th >Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>
							    <button type="button" class="btn btn-danger btn-sm aldcheck" data-toggle="modal">
                                	Delete All
                                </button>
                            </th>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($subscriber as $key => $subscribe)
						<tr id="tr_{{$subscribe->id}}">
						    
						    <td><input type="checkbox" class="sub_chk" data-id="{{$subscribe->id}}"></td>
							<td>{{ $key+1 }}</td>
							<td>{{ $subscribe->name }}</td>
							<td>{{ $subscribe->email }}</td>
							<td>
								<!-- <a href="#" class="btn btn-info btn-sm">View</a> -->

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
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $subscribe->id }}">
									Delete
								</button>


								@if($subscriber->count()>0)
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $subscribe->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="{{ route('subscriber.delete', $subscribe->id) }}" style="margin-bottom: 0px;" >
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
                                
                                <!-- checkbox Modal -->
<div class="modal fade" id="aldcheck_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="delete_form">
    			<form action="{{ route('subscriber.deleteselected') }}" method="POST" class="container_form" id="" style="margin-bottom: 0px;" >
    				@csrf
    				<div class="modal-body">
    					Are you want to delete the selected subscriber's?
    				</div>
    				<div class="modal-footer">
    					<button type="submit" class="btn btn-primary delete_all" data-url="{{ route('subscriber.deleteselected') }}">Yes! i want</button>
    					<button type="button" class="btn btn-secondary" data-dismiss="modal">No! Cancel</button>
    				</div>
    			</form>
			</div>
			<div id="no_data">
			    <h4 class="alert alert-danger"> Please Select Any Row!</h4>
			</div>
		</div>
	</div>
</div>
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