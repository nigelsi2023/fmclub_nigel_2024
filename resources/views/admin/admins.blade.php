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
			{{ $tb_name }}
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Address</th>
							<th>Occupation</th>
							<th>Status</th>
							<th style="width: 132px;">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Telephone</th>
							<th>Address</th>
							<th>Occupation</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($users as $key => $user)
						<tr> 
							<td>{{ $key+1 }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->telephone }}</td>
							<td>{{ $user->address }}</td>
							<td>{{ $user->occupation }}</td>
							<td class="">
								@if($user->status == 0)
									<span class="badge badge-success">Unban</span>
								@else
									<span class="badge badge-danger">Ban</span>
								@endif
							</td>
							<td class="adminsactionbutton">
								@if(Auth::id() != $user->id)
									@if($user->status == 0)
										<a href="{{ route('admin.users.ban', $user->id) }}" class="btn btn-warning btn-sm" style="color: #FFFFFF">Ban</a>
									@else
										<a href="{{ route('admin.users.unban', $user->id) }}" class="btn btn-info btn-sm" style="color: #FFFFFF">Unban</a>
									@endif

									<!-- <form id="delete-from-{{ $user->id }}" action="{{ route('category.destroy', $user->id) }}" style="display:none;" method="POST">
										@csrf
										@method('DELETE')
									</form>
									<button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
										event.preventDefault();
										document.getElementById('delete-from-{{ $user->id }}').submit();
									} else {
										event.preventDefault();
									}">Delete</button> -->

									<!-- Button trigger modal -->
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" title="Delete" data-target="#delete-{{ $user->id }}">
										<i class="fa fa-trash" aria-hidden="true"></i>
									</button>
									<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Change Password" data-target="#changePass-{{ $user->id }}" >
										<i class="fa fa-key" aria-hidden="true"></i>
									</button>
									


									@if($users->count()>0)
									<!-- Modal -->
									<div class="modal fade" id="delete-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<form action="{{ route('admin.users.delete', $user->id) }}" method="post" style="margin-bottom: 0px;" >
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
									<!-- Change Password Modal -->
									<div class="modal fade" id="changePass-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
													<div class="modal-body">
										        		<form action="{{ route('admin.change_password') }}" method="post" enctype="multipart/form-data">
                                                			@csrf
                                                			<div class="form-group">
                                                				<label for="email">New Password:</label>
                                                				<input type="password" class="form-control" id="Password" name='password' >
                                                				<input type="hidden" class="form-control" id="user_id" name='user_id' value="{{$user->id}}" >
                                                				@if ($errors->has('password'))
                                                				<span class="help-block">
                                                					<strong>{{ $errors->first('password') }}</strong>
                                                				</span>
                                                				@endif
                                                			</div>
                                                			<div class="form-group">
                                                				<label for="email">Confirm New Password:</label>
                                                				<input type="password" class="form-control" id="Password" name='password_confirmation' >
                                                			</div>
                                                			<div class="text-right">
                                                			    <button type="submit" class="btn btn-primary">Change Password</button>
                                                			</div>
                                                		</form>
													</div>
											</div>
										</div>
									</div>
									@endif
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