@extends('layouts.financepro')

@section('content')

<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Company Analysis</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Company Analysis</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE HEADING SECTION -->

            <section id="why-choose" class="">
            	<div class="container">

            		<style type="text/css">
                    .srv-icon-one{
                        font-size: 70px;
                        padding: 10px;
                        color: #24CAE2;
                    }
                    .border{
                        padding: 25px;
                        /*border: 1px solid aliceblue;
                        margin-right: 2px;
                        margin-bottom: 5px;*/
                    }
                    .border:hover{
                        /*box-shadow: 1px 4px 4px 4px rgba(0, 0, 0, .5);
                        padding: 5px;
                        background: #FFFFFF;*/
                        border: 1px solid #24CAE2;
                    }

                    </style>

            		<div class="row">
            			<!-- <a href="{{ route('dse') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border"> -->
            						<!-- FEATURE BOX -->
            						<!-- <div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm"> -->
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<!-- <div class="srv-icon-one"><i class="fa fa-area-chart" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper"> -->
            									<!-- FEATURE TITLE -->
            									<!-- <h4 class="text-capitalize">DSE Analysis</h4>
            								</div>
            							</div> -->
            							<!-- FEATURE DESCRIPTION -->
            							<!-- <p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Dhaka Stock Exchange</b></p>
            						</div>
            					</div> -->
            					<!-- /.FEATURE BOX -->
            				<!-- </div>
            			</a> -->

            			<a href="{{ route('uk') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border">
            						<!-- FEATURE BOX -->
            						<div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm">
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<div class="srv-icon-one"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper">
            									<!-- FEATURE TITLE -->
            									<h4 class="text-capitalize">UK FTSE 100</h4>
            								</div>
            							</div>
            							<!-- FEATURE DESCRIPTION -->
            							<p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>London Stock Exchange</b>.</p>
            						</div>
            					</div>
            					<!-- /.FEATURE BOX -->
            				</div>
            			</a>

            			<a href="{{ route('us_dow') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border">
            						<!-- FEATURE BOX -->
            						<div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm">
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<div class="srv-icon-one"><i class="fa fa-pie-chart" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper">
            									<!-- FEATURE TITLE -->
            									<h4 class="text-capitalize">US Dow Jons 30</h4>
            								</div>
            							</div>
            							<!-- FEATURE DESCRIPTION -->
            							<p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>New York Stock Exchange</b>.</p>
            						</div>
            					</div>
            					<!-- /.FEATURE BOX -->
            				</div>
            			</a>

            			<a href="{{ route('nasdaq') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border">
            						<!-- FEATURE BOX -->
            						<div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm">
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<div class="srv-icon-one"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper">
            									<!-- FEATURE TITLE -->
            									<h4 class="text-capitalize">US Nasdaq</h4>
            								</div>
            							</div>
            							<!-- FEATURE DESCRIPTION -->
            							<p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Nasdaq Stock Exchange</b>.</p>
            						</div>
            					</div>
            					<!-- /.FEATURE BOX -->
            				</div>
            			</a>

            			<!-- <a href="{{ route('currencies') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border"> -->
            						<!-- FEATURE BOX -->
            						<!-- <div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm"> -->
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<!-- <div class="srv-icon-one"><i class="fa fa-dollar" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper"> -->
            									<!-- FEATURE TITLE -->
            									<!-- <h4 class="text-capitalize">Currencies</h4>
            								</div>
            							</div> -->
            							<!-- FEATURE DESCRIPTION -->
            							<!-- <p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Currencies</b>.</p>
            						</div>
            					</div> -->
            					<!-- /.FEATURE BOX -->
            				<!-- </div>
            			</a> -->
            			
            			<!-- <a href="{{ route('commodities') }}">
            				<div class="col-md-4 col-sm-6 bottom-margin-sm">
            					<div class="feature-box border"> -->
            						<!-- FEATURE BOX -->
            						<!-- <div class="hv-wrapper text-center">
            							<div class="feature-inner-wrapper">
            								<div class="icon-wrapper bottom-padding-sm"> -->
            									<!-- image -->
            									<!-- <img class="img-responsive" src="images/content/services/grid-icon1.png" alt="grid-icon1"> -->
            									<!-- <div class="srv-icon-one"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            								</div>
            								<div class="title-wrapper"> -->
            									<!-- FEATURE TITLE -->
            									<!-- <h4 class="text-capitalize">Commodities</h4>
            								</div>
            							</div> -->
            							<!-- FEATURE DESCRIPTION -->
            							<!-- <p class="feature-description">Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Commodities</b>.</p>
            						</div>
            					</div> -->
            					<!-- /.FEATURE BOX -->
            				<!-- </div>
            			</a> -->
            		</div>
            	</div>
            </section>

@endsection