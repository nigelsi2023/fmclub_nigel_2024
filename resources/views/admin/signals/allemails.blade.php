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

<style>
    .inlineee{
        display: inline-flex;
    }
    .onevalue{
        margin-right: 5px;
    }
    .zerovalue {
        box-shadow: 0px 0px 8px -2px #0000007a;
        font-size: 14px;
        margin-right: 5px;
    }
    .modal-footer{
        padding-top: 10px;
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 10px;
    }
    .btmrg {
        margin-right: 5px;
    }
    span.badge.badgecustomm {
        background: #ffa500;
        color: #fff;
    }
</style>

	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Emails
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
					<thead>
						<tr>
							<th>SL</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
					    
						@foreach ($allmailsvnd as $key => $singlemailsvnd)
    						<tr>
    							<td>{{ $key+1 }}</td>
    							<td>{{ $singlemailsvnd->subject }}</td>
    							<td>{!! $singlemailsvnd->message !!}</td>
    							<td>
    							    <button type="submit" class="btn btn-danger btn-sm btmrg" data-toggle="modal" data-target="#delete-{{ $singlemailsvnd->id }}">
    								    <i class="fas fa-trash"></i>
    							    </button>
    								
    								
    						   
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $singlemailsvnd->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="{{ url('signal/delete-save-send') }}/{{ $singlemailsvnd->id }}" method="post" style="margin-bottom: 0px;">
												@csrf
												<div class="modal-body">
													Are you want to delete this?
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Delete</button>
													<button type="button" class="btn btn-secondary btmrg" data-dismiss="modal">Cancel</button>
												</div>
											</form>
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

