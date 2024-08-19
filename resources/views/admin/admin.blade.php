@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Product Price
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Name</th>
							<th>Logo</th>
							<th>Current Price</th>
							<th>Price Change Amount</th>
							<th>Price Change Percent</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL No.</th>
							<th>Name</th>
							<th>Logo</th>
							<th>Current Price</th>
							<th>Price Change Amount</th>
							<th>Price Change Percent</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach ($products as $key => $product)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $product->name }}</td>
							<td><img src="{{ $product->image }}" width="50" height="50"></td>
							<td>{{ $product->current_price }}</td>
							<td>
								@php
									$change = preg_replace("/[^0-9.%-]/", "", $product->price_change_amount);
								@endphp

								@if($product->status == 'down')
									<p style="color: #B00">${{ $change }}</p>
								@else
									<p style="color: #071;">${{ $change }}</p>
								@endif
							</td>
							<td>
								@php
									$percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent);
								@endphp

								@if($product->status == 'down')
									<p style="color: #B00">${{ $percent }}</p>
								@else
									<p style="color: #071;">${{ $percent }}</p>
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
