@extends('layouts.admin')


@section('content')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			{{ __('All Affiliates') }}
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Total Referrals</th>
							<th>Total Visitor</th>
							<th>Total Unique Visitor</th>
							<th style="width: 5%;">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($affiliators as $key => $affiliator)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $affiliator->user->name }}</td>
							<td>{{ $affiliator->country }}</td>
							<td>{{ $affiliator->referrals->pluck('page_url')->unique()->count() }}</td>
							<td>{{ $affiliator->referrals->count() }}</td>
							<td>{{ $affiliator->referrals->pluck('visitor_ip')->unique()->count() }}</td>
							<td style="width: 5%;">
								<a href="{{ route('admin.affiliators.show', ['id' => $affiliator->id]) }}" class="btn btn-info btn-sm">
									<i class="fa fa-eye"></i>
								</a>
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