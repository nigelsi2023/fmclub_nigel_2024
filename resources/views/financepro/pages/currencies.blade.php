@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Currencies : Analysis Index
</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Currencies</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <style type="text/css">
                .table > thead > tr > th{
                    border-bottom: 1px solid !important;
                }
                .table > tbody > tr > td{
                    border-bottom: 1px solid !important;
                }

                /*.no-border{
                    border-top: 0px !important;
                    border-bottom: 0px !important;
                }*/

            </style>


            <!-- PAGE HEADING SECTION -->
        <section id="why-choose" class="">
        	<div class="container">
            	<div class="row">
            		<div class="col-md-12">
            			<p>We have analysis available for the following <b>Currencies</b> companies.</p>
            			<p>Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Currencies</b>.</p>
            			<table class="table">
							<thead>
								<th>ID</th>
								<th>Ticker</th>
								<th>Name</th>
								<th style="width: 30px">Action</th>
							</thead>

							<tbody>
								<tr>
									<td>11164</td>
									<td>XBP</td>
									<td>GBP vs USD</td>
									<td><a class = "btn typo-light btn-square btn-hv-dark theme-bg btn-sm" href="#" style="color: #fff;font-size: 15px;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
								</tr>

								<tr>
									<td>11166</td>
									<td>XEU</td>
									<td>EUR vs USD</td>
									<td><a class = "btn typo-light btn-square btn-hv-dark theme-bg btn-sm" href="#" style="color: #fff;font-size: 15px;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
								</tr>

								
							</tbody>
						</table>
            		</div>
            	</div>
            </div>
        </section>


@endsection