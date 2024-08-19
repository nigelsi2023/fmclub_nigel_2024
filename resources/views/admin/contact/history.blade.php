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
			Mail History
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
					<thead>
						<tr>
							<th>SL</th>
							<th >Date&emsp;&emsp;</th>
							<th>Subject</th>
							<th>Message</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th >Date&emsp;&emsp;</th>
							<th>Subject</th>
							<th>Message</th>
						</tr>
					</tfoot>

					<tbody>
					    
						@foreach ($maildatas as $key => $maildata)
    						<tr>
    							<td>{{ $key+1 }}</td>
    							<td>{{ Carbon\Carbon::parse($maildata->created_at)->format('Y-m-d') }}</td>
    							<td>{{ $maildata->subject }}</td>
    							<td>{!! $maildata->message !!}</td>
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


