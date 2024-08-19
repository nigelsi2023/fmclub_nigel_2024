@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Market Summery Product Available List
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th class="text-center">SL No.</th>
							<th text-center>Name</th>
							<th class="text-center">Logo</th>
							<th class="text-center" style="width: 100px;">Current Price</th>
							<th class="text-center">Price Change Amount</th>
							<th class="text-center">Price Change Percent</th>
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
							<td class="text-center">{{ $key+1 }}</td>
							<td class="text-center">{{ $product->name }}</td>
							<td class="text-center"><img src="{{ $product->image }}" width="50" height="50"></td>
							<td>
								
                                @if($product->status == 'up')
                                	<i class="fa fa-arrow-up" style="color: #071"></i>
                                @elseif($product->status == 'down')
                                	<i class="fa fa-arrow-down" style="color: #B00"></i>
                                @endif
                                
                                @php
									$price = preg_replace("/[^0-9.$]/", "", $product->current_price);
								@endphp
								{{ $price }}
							</td>
							<td class="text-center">
								@php
								$change = preg_replace("/[^0-9.%-]/", "", $product->price_change_amount);
								@endphp

								@if($product->status == 'down')
								<p style="color: #B00">${{ $change }}</p>
								@else
								<p style="color: #071;">${{ $change }}</p>
								@endif
							</td>
							<td class="text-center">
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
<!-- /.container-fluid -->

@endsection