@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<!-- TITLE-->
				<h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Stock Charts</h2>
				<!-- BREADCRUMB-->
				<ul class="breadcrumb">
					<li>
						<a href="{{ route('index') }}">Home</a>
					</li>
					<li>
						<a href="#">Stock Charts</a>
					</li>

				</ul>
			</div>
		</div>
	</div>
</section>
<!-- PAGE HEADING SECTION -->

<!-- WHY CHOOSE SECTION -->
<section id="why-choose" class="">
	<div class="container">
		<div class="row">

			<div class="col-sm-12">
				<!-- SECTION TITLE -->
				<div class="contact-title ">
					<h3 class="legend bottom-line text-uppercase">Stock Charts</h3>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset and more recently with desktop publishing software.</p> -->
				</div>


                            <style type="text/css">
                                .checkbox {
                                  display: block;
                                  position: relative;
                                  padding-left: 35px;
                                  margin-bottom: 12px;
                                  cursor: pointer;
                                  font-size: 15px;
                                  -webkit-user-select: none;
                                  -moz-user-select: none;
                                  -ms-user-select: none;
                                  user-select: none;
                                }

                                /* Hide the browser's default checkbox */
                                .checkbox input {
                                  position: absolute;
                                  opacity: 0;
                                  cursor: pointer;
                                  height: 0;
                                  width: 0;
                                }

                                /* Create a custom checkbox */
                                .checkmark {
                                  position: absolute;
                                  top: 0;
                                  left: 0;
                                  height: 25px;
                                  width: 25px;
                                  background-color: #eee;
                                }

                                /* On mouse-over, add a grey background color */
                                .container:hover input ~ .checkmark {
                                  background-color: #ccc;
                                }

                                /* When the checkbox is checked, add a blue background */
                                .container input:checked ~ .checkmark {
                                  background-color: #24CAE2;
                                }

                                /* Create the checkmark/indicator (hidden when not checked) */
                                .checkmark:after {
                                  content: "";
                                  position: absolute;
                                  display: none;
                                }

                                /* Show the checkmark when checked */
                                .container input:checked ~ .checkmark:after {
                                  display: block;
                                }

                                /* Style the checkmark/indicator */
                                .container .checkmark:after {
                                  left: 9px;
                                  top: 5px;
                                  width: 5px;
                                  height: 10px;
                                  border: solid white;
                                  border-width: 0 3px 3px 0;
                                  -webkit-transform: rotate(45deg);
                                  -ms-transform: rotate(45deg);
                                  transform: rotate(45deg);
                                }
                                .contact-form .form-control{
                                	height: 45px !important; 
                                }
                                .contact-form input.form-control{
                                	height: 45px !important;
                                }
                            </style>



                            <!-- <div class="contact-form bottom-padding-sm"> -->
                            	<!-- Form Begins -->
                            	<!-- <form name="bootstrap-form" id="bootstrap-form" method="post" action="#" novalidate="novalidate" class="bv-form">
                            		<button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                            		<button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>

                            		<div class="row">
                            			<div class="col-md-6">
                            				<div class="panel panel-default">
                            					<div class="panel-body" style="background-color: #ECEDEF;border-radius: 5px;">
                            						<style type="text/css">
                            							input.text-field{
                            								height: 25px;
                            							}
                            						</style> -->
                            						<!-- Field 1 -->
                            						<!-- <div class="form-group">
                            							<input name="contact_name" class="text-field" placeholder="Ticker Symbol" data-bv-field="contact_name" type="text" value="ASE.SYMBOL">

                            							<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small>
                            						</div>


                            						<div class="form-group">
                            							<input name="contact_name" class="text-field" placeholder="Compare With" data-bv-field="contact_name" type="text">

                            							<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small>
                            						</div>




                            						<div class="input-email form-group has-feedback">

                            							<select name="hear" class="" >
                            								<option value="howyou">Time Period</option>
                            								<option value="1">1 day</option>
                            								<option value="2">2 days</option>
                            								<option value="5">5 days</option>
                            								<option value="10">10 days</option>
                            								<option value="30">1 month</option>
                            								<option value="60">2 months</option>
                            								<option value="90">3 months</option>
                            								<option value="180" selected>6 months</option>
                            								<option value="360">1 year</option>
                            								<option value="720">2 years</option>
                            								<option value="1080">3 years</option>
                            								<option value="1440">4 years</option>
                            								<option value="1800">5 years</option>
                            								<option value="3600">10 years</option>
                            							</select>

                            							<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small>
                            						</div>




                            						<div class="input-email form-group has-feedback">

                            							<select name="hear" class="" >
                            								<option value="howyou">Chart Size</option>
                            								<option value="S">Small</option>
                            								<option value="M">Medium</option>
                            								<option value="L" selected>Large</option>
                            								<option value="H">Huge</option>
                            							</select>

                            							<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small>
                            						</div>

                            					</div>
                            				</div>
                            			</div>

                            			<div class="col-md-6">
                            				<div class="panel panel-default">
                            					<div class="panel-body" style="background-color: #ECEDEF;border-radius: 5px;">
                            						<div class="input-email form-group has-feedback">

                            							<select name="hear" class="" >
                            								<option value="howyou">Chart Type</option>
                            								<option value="None">None</option>
                            								<option value="CandleStick" selected>CandleStick</option>
                            								<option value="Close">Closing Price</option>
                            								<option value="Median">Median Price</option>
                            								<option value="OHLC">OHLC</option>
                            								<option value="TP">Typical Price</option>
                            								<option value="WC">Weighted Close</option>
                            							</select>

                            							<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>



                            							<div class="input-email form-group has-feedback">

                            								<select name="hear" class="" >
                            									<option value="howyou">Price Band</option>
                            									<option value="None">None</option>
                            									<option value="BB" selected>Bollinger Band</option>
                            									<option value="DC">Donchian Channel</option>
                            									<option value="Envelop">Envelop (SMA 20 +/- 10%)</option>
                            								</select>

                            								<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>



                            								<div class="input-email form-group has-feedback">

                            									<select name="hear" class="" >
                            										<option value="howyou">Moving Averages</option>
                            										<option value="None">None</option>
                            										<option value="SMA" selected>Simple</option>
                            										<option value="EMA">Exponential</option>
                            										<option value="TMA">Triangular</option>
                            										<option value="WMA">Weighted</option>
                            									</select>

                            									<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>


                            									<div class="input-email form-group has-feedback">

                            										<select name="hear" class="" >
                            											<option value="howyou">Moving Averages</option>
                            											<option value="None">None</option>
                            											<option value="SMA" selected>Simple</option>
                            											<option value="EMA">Exponential</option>
                            											<option value="TMA">Triangular</option>
                            											<option value="WMA">Weighted</option>
                            										</select>

                            										<small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>

                            									</div>
                            								</div>

                            							</div>



                            						</div>

                            						<div class="row">
                            							<div class="col-md-6">
                            								<div class="panel panel-default">
                            									<div class="panel-body" style="background-color: #ECEDEF;border-radius: 5px;"> -->
                            										<!-- Field 1 -->
                            										<!-- <div class=" input-text form-group has-feedback"> -->
                                                <!-- <label class="checkbox">Show Volume Bars
                                                  <input type="checkbox" checked="checked">
                                                  <span class="checkmark"></span>
                                              </label> -->
                                              <!-- <input type="checkbox" id="Volume" name="Volume" checked> <label for="Volume">Show Volume Bars</label><br />

                                              <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>




                                              <div class=" input-text form-group has-feedback"> -->
                                                <!-- <label class="checkbox">Parabolic SAR
                                                  <input type="checkbox" >
                                                  <span class="checkmark"></span>
                                              </label> -->
                                              <!-- <input type="checkbox" id="parabolic" name="parabolic" > <label for="parabolic">Parabolic SAR</label><br />

                                              <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>


                                              <div class=" input-text form-group has-feedback"> -->
                                                <!-- <label class="checkbox">Log Scale
                                                  <input type="checkbox" >
                                                  <span class="checkmark"></span>
                                              </label> -->
                                              <!-- <input type="checkbox" id="log" name="log" > <label for="log">Log Scale</label><br />

                                              <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>


                                              <div class=" input-text form-group has-feedback"> -->
                                                <!-- <label class="checkbox">Percentage Scale
                                                  <input type="checkbox" >
                                                  <span class="checkmark"></span>
                                              </label> -->
                                              <!-- <input type="checkbox" id="percentage" name="percentage" > <label for="percentage">Percentage Scale</label><br />

                                              <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>
                                          </div>
                                      </div>

                                  </div>

                                  <div class="col-md-6">
                                  	<div class="panel panel-default">
                                  		<div class="panel-body" style="background-color: #ECEDEF; border-radius: 5px;"> -->
                                  			<!-- Field 2 -->

                                  			<!-- <div class=" input-email form-group has-feedback">

                                  				<select name="hear" class="">
                                  					<option value="howyou">Technical Indicators</option>
                                  					<option value="None">None</option>
                                  					<option value="AccDist">Accumulation/Distribution</option>
                                  					<option value="AroonOsc">Aroon Oscillator</option>
                                  					<option value="Aroon">Aroon Up/Down</option>
                                  					<option value="ADX">Avg Directional Index</option>
                                  					<option value="ATR">Avg True Range</option>
                                  					<option value="BBW">Bollinger Band Width</option>
                                  					<option value="CMF">Chaikin Money Flow</option>
                                  					<option value="COscillator">Chaikin Oscillator</option>
                                  					<option value="CVolatility">Chaikin Volatility</option>
                                  					<option value="CLV">Close Location Value</option>
                                  					<option value="CCI">Commodity Channel Index</option>
                                  					<option value="DPO">Detrended Price Osc</option>
                                  					<option value="DCW">Donchian Channel Width</option>
                                  					<option value="EMV">Ease of Movement</option>
                                  					<option value="FStoch">Fast Stochastic</option>
                                  					<option value="MACD">MACD</option>
                                  					<option value="MDX">Mass Index</option>
                                  					<option value="Momentum">Momentum</option>
                                  					<option value="MFI">Money Flow Index</option>
                                  					<option value="NVI">Neg Volume Index</option>
                                  					<option value="OBV">On Balance Volume</option>
                                  					<option value="Performance">Performance</option>
                                  					<option value="PPO">% Price Oscillator</option>
                                  					<option value="PVO">% Volume Oscillator</option>
                                  					<option value="PVI">Pos Volume Index</option>
                                  					<option value="PVT">Price Volume Trend</option>
                                  					<option value="ROC">Rate of Change</option>
                                  					<option value="RSI" selected>RSI</option>
                                  					<option value="SStoch">Slow Stochastic</option>
                                  					<option value="StochRSI">StochRSI</option>
                                  					<option value="TRIX">TRIX</option>
                                  					<option value="UO">Ultimate Oscillator</option>
                                  					<option value="Vol">Volume</option>
                                  					<option value="WilliamR">William's %R</option>
                                  				</select> -->
                                  				<!-- <input name="contact_name" class="input-subject form-control" placeholder="subject" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i> -->

                                  				<!-- <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>

                                  				<div class=" input-email form-group has-feedback">

                                  					<select name="hear" class="" >

                                  						<option value="None">None</option>
                                  						<option value="AccDist">Accumulation/Distribution</option>
                                  						<option value="AroonOsc">Aroon Oscillator</option>
                                  						<option value="Aroon">Aroon Up/Down</option>
                                  						<option value="ADX">Avg Directional Index</option>
                                  						<option value="ATR">Avg True Range</option>
                                  						<option value="BBW">Bollinger Band Width</option>
                                  						<option value="CMF">Chaikin Money Flow</option>
                                  						<option value="COscillator">Chaikin Oscillator</option>
                                  						<option value="CVolatility">Chaikin Volatility</option>
                                  						<option value="CLV">Close Location Value</option>
                                  						<option value="CCI">Commodity Channel Index</option>
                                  						<option value="DPO">Detrended Price Osc</option>
                                  						<option value="DCW">Donchian Channel Width</option>
                                  						<option value="EMV">Ease of Movement</option>
                                  						<option value="FStoch">Fast Stochastic</option>
                                  						<option value="MACD" selected>MACD</option>
                                  						<option value="MDX">Mass Index</option>
                                  						<option value="Momentum">Momentum</option>
                                  						<option value="MFI">Money Flow Index</option>
                                  						<option value="NVI">Neg Volume Index</option>
                                  						<option value="OBV">On Balance Volume</option>
                                  						<option value="Performance">Performance</option>
                                  						<option value="PPO">% Price Oscillator</option>
                                  						<option value="PVO">% Volume Oscillator</option>
                                  						<option value="PVI">Pos Volume Index</option>
                                  						<option value="PVT">Price Volume Trend</option>
                                  						<option value="ROC">Rate of Change</option>
                                  						<option value="RSI">RSI</option>
                                  						<option value="SStoch">Slow Stochastic</option>
                                  						<option value="StochRSI">StochRSI</option>
                                  						<option value="TRIX">TRIX</option>
                                  						<option value="UO">Ultimate Oscillator</option>
                                  						<option value="Vol">Volume</option>
                                  						<option value="WilliamR">William's %R</option>
                                  					</select> -->
                                  					<!-- <input name="contact_name" class="input-subject form-control" placeholder="subject" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i> -->

                                  					<!-- <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>


                                  					<div class=" input-email form-group has-feedback">

                                  						<select name="hear" class="" >
                                  							<option value="None" selected>None</option>
                                  							<option value="AccDist">Accumulation/Distribution</option>
                                  							<option value="AroonOsc">Aroon Oscillator</option>
                                  							<option value="Aroon">Aroon Up/Down</option>
                                  							<option value="ADX">Avg Directional Index</option>
                                  							<option value="ATR">Avg True Range</option>
                                  							<option value="BBW">Bollinger Band Width</option>
                                  							<option value="CMF">Chaikin Money Flow</option>
                                  							<option value="COscillator">Chaikin Oscillator</option>
                                  							<option value="CVolatility">Chaikin Volatility</option>
                                  							<option value="CLV">Close Location Value</option>
                                  							<option value="CCI">Commodity Channel Index</option>
                                  							<option value="DPO">Detrended Price Osc</option>
                                  							<option value="DCW">Donchian Channel Width</option>
                                  							<option value="EMV">Ease of Movement</option>
                                  							<option value="FStoch">Fast Stochastic</option>
                                  							<option value="MACD">MACD</option>
                                  							<option value="MDX">Mass Index</option>
                                  							<option value="Momentum">Momentum</option>
                                  							<option value="MFI">Money Flow Index</option>
                                  							<option value="NVI">Neg Volume Index</option>
                                  							<option value="OBV">On Balance Volume</option>
                                  							<option value="Performance">Performance</option>
                                  							<option value="PPO">% Price Oscillator</option>
                                  							<option value="PVO">% Volume Oscillator</option>
                                  							<option value="PVI">Pos Volume Index</option>
                                  							<option value="PVT">Price Volume Trend</option>
                                  							<option value="ROC">Rate of Change</option>
                                  							<option value="RSI">RSI</option>
                                  							<option value="SStoch">Slow Stochastic</option>
                                  							<option value="StochRSI">StochRSI</option>
                                  							<option value="TRIX">TRIX</option>
                                  							<option value="UO">Ultimate Oscillator</option>
                                  							<option value="Vol">Volume</option>
                                  							<option value="WilliamR">William's %R</option>
                                  						</select> -->
                                  						<!-- <input name="contact_name" class="input-subject form-control" placeholder="subject" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i> -->

                                  						<!-- <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>



                                  						<div class=" input-email form-group has-feedback">

                                  							<select name="hear" class="">
                                  								<option value="None" selected>None</option>
                                  								<option value="AccDist">Accumulation/Distribution</option>
                                  								<option value="AroonOsc">Aroon Oscillator</option>
                                  								<option value="Aroon">Aroon Up/Down</option>
                                  								<option value="ADX">Avg Directional Index</option>
                                  								<option value="ATR">Avg True Range</option>
                                  								<option value="BBW">Bollinger Band Width</option>
                                  								<option value="CMF">Chaikin Money Flow</option>
                                  								<option value="COscillator">Chaikin Oscillator</option>
                                  								<option value="CVolatility">Chaikin Volatility</option>
                                  								<option value="CLV">Close Location Value</option>
                                  								<option value="CCI">Commodity Channel Index</option>
                                  								<option value="DPO">Detrended Price Osc</option>
                                  								<option value="DCW">Donchian Channel Width</option>
                                  								<option value="EMV">Ease of Movement</option>
                                  								<option value="FStoch">Fast Stochastic</option>
                                  								<option value="MACD">MACD</option>
                                  								<option value="MDX">Mass Index</option>
                                  								<option value="Momentum">Momentum</option>
                                  								<option value="MFI">Money Flow Index</option>
                                  								<option value="NVI">Neg Volume Index</option>
                                  								<option value="OBV">On Balance Volume</option>
                                  								<option value="Performance">Performance</option>
                                  								<option value="PPO">% Price Oscillator</option>
                                  								<option value="PVO">% Volume Oscillator</option>
                                  								<option value="PVI">Pos Volume Index</option>
                                  								<option value="PVT">Price Volume Trend</option>
                                  								<option value="ROC">Rate of Change</option>
                                  								<option value="RSI">RSI</option>
                                  								<option value="SStoch">Slow Stochastic</option>
                                  								<option value="StochRSI">StochRSI</option>
                                  								<option value="TRIX">TRIX</option>
                                  								<option value="UO">Ultimate Oscillator</option>
                                  								<option value="Vol">Volume</option>
                                  								<option value="WilliamR">William's %R</option>
                                  							</select> -->
                                  							<!-- <input name="contact_name" class="input-subject form-control" placeholder="subject" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i> -->

                                  							<!-- <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_name" data-bv-result="NOT_VALIDATED">Please enter a value</small></div>

                                  						</div>
                                  					</div>
                                  				</div>
                                  			</div>


                                  			<div class="row text-center"> -->
                                  					<!-- Button -->
                                  					<!-- <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Chart</button>
                                  				</div>
                                  			</form> -->
                                  			<!-- Form Ends -->
                                  		<!-- </div>
                                  	</div> -->


                        		<style type="text/css">
                        			.top-margisn-sm{
                        				margin-top: 30px !important;
                        			}
                        			.border:hover{
                        				border-color: #24CAE2;
                        			}
                        		</style>

							<div class="contact-form bottom-padding-sm">
								<div class="col-md-12 border bottom-margin-sm top-margin-sm section-title">
                        			<div class="top-margin-sm bottom-margin-sm ">
                            <!-- Form Begins -->
                                <form name="bootstrap-form" method="post" action="{{ route('ticker') }}" novalidate="novalidate" class="bv-form">
                                	@csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-text form-group">
                                            	<label>Ticker Symbol</label>
                                            	<input name="ticker_symbol" class="form-control hei" placeholder="Ticker Symbol" type="text" value="ASE.SYMBOL">
                                            </div>
                                            
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Time Period</label>
	                                            <select name="time_period" class="form-control" >
		                                            <option value="1">1 day</option>
		                                            <option value="2">2 days</option>
		                                            <option value="5">5 days</option>
		                                            <option value="10">10 days</option>
		                                            <option value="30">1 month</option>
		                                            <option value="60">2 months</option>
		                                            <option value="90">3 months</option>
		                                            <option value="180" selected>6 months</option>
		                                            <option value="360">1 year</option>
		                                            <option value="720">2 years</option>
		                                            <option value="1080">3 years</option>
		                                            <option value="1440">4 years</option>
		                                            <option value="1800">5 years</option>
		                                            <option value="3600">10 years</option>
	                                            </select>
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<!-- Button -->
                                    		  <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Chart</button>
                                    	</div>
                                	</div>
                                </form>
                                </div>
                            </div>
                                <div class="col-md-12">
                            		<img src="{{ asset('images/Stock-Chart.png') }}" width="90%" height="450" class="img-responsive">
                        		</div>

                        		<div class="col-md-12 border bottom-margin-sm top-margin-sm section-title">
                        			<div class="top-margin-sm bottom-margin-sm">
                        		<form name="bootstrap-form" method="post" action="{{ route('compare') }}" novalidate="novalidate" class="bv-form">
                        			@csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-text form-group">
                                            	<label>Compare With</label>
                                            	<input name="compare_with" class="form-control hei" placeholder="Compare With" type="text">
                                            </div>
                                            
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Price Band</label>
	                                            <select name="price_band" class="form-control" >
		                                            <option value="None">None</option>
		                                            <option value="BB" selected>Bollinger Band</option>
		                                            <option value="DC">Donchian Channel</option>
		                                            <option value="Envelop">Envelop (SMA 20 +/- 10%)</option>
	                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Chart Type</label>
	                                            <select name="chart_type" class="form-control">
	                                                <option value="None">None</option>
	                                                <option value="CandleStick" selected>CandleStick</option>
	                                                <option value="Close">Closing Price</option>
	                                                <option value="Median">Median Price</option>
	                                                <option value="OHLC">OHLC</option>
	                                                <option value="TP">Typical Price</option>
	                                                <option value="WC">Weighted Close</option>
	                                            </select>
                                        	</div>
                                            
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Chart Size</label>
	                                            <select name="chart_size" class="form-control" >
		                                            <option value="S">Small</option>
		                                            <option value="M">Medium</option>
		                                            <option value="L" selected>Large</option>
		                                            <option value="H">Huge</option>
	                                            </select>
                                          	</div>
                                    	</div>
                                    </div>

                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                    		<div class="col-md-6 input-text form-group has-feedback">
                                                <label class="checkbox">Show Volume Bars
	                                                <input type="checkbox" checked="checked" name="show_volume_bars">
	                                                <span class="checkmark"></span>
                                            	</label>
                                            </div>
                                            <!-- Field 2 -->
                                    		<div class="col-md-6 input-text form-group has-feedback">
                                                <label class="checkbox">Parabolic SAR
	                                                <input type="checkbox" name="parabolic_sar">
	                                                <span class="checkmark"></span>
                                            	</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inline-form">
                                    	<div class="row">
                                            <!-- Field 1 -->
                                    		<div class="col-md-6 input-text form-group has-feedback">
                                                <label class="checkbox">Log Scale
	                                                <input type="checkbox" name="log_scale">
	                                                <span class="checkmark"></span>
                                            	</label>
                                            </div>
                                            <!-- Field 2 -->
                                    		<div class="col-md-6 input-text form-group has-feedback">
                                                <label class="checkbox">Percentage Scale
	                                                <input type="checkbox" name="percentage_scale">
	                                                <span class="checkmark"></span>
                                            	</label>
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<!-- Button -->
                                    		  <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Chart</button>
                                    	</div>
                                	</div>
                                </form>
                            </div>
                            </div>
                                <div class="col-md-12 border bottom-margin-sm top-margin-sm section-title">
                        			<div class="top-margin-sm bottom-margin-sm">
                                <form name="bootstrap-form" method="post" action="{{ route('moving') }}" novalidate="novalidate" class="bv-form">
                                  @csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Moving Averages</label>
	                                            <select name="moving_average" class="form-control" >
	                                                <option value="None">None</option>
	                                                <option value="SMA" selected>Simple</option>
	                                                <option value="EMA">Exponential</option>
	                                                <option value="TMA">Triangular</option>
	                                                <option value="WMA">Weighted</option>
	                                            </select>
                                        	</div>
                                        	<div class="col-md-1">
                                            	<!-- <label>Moving Averages</label> -->
	                                            <input name="moving_average_number" class="form-control hei" placeholder="Compare With" style="margin-top: 32px;" type="text" value="10">
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Moving Averages</label>
	                                            <select name="moving_average2" class="form-control" >
	                                                <option value="None">None</option>
	                                                <option value="SMA" selected>Simple</option>
	                                                <option value="EMA">Exponential</option>
	                                                <option value="TMA">Triangular</option>
	                                                <option value="WMA">Weighted</option>
	                                            </select>
                                        	</div>
                                        	<div class="col-md-1">
                                            	<!-- <label>Moving Averages</label> -->
	                                            <input name="moving_average_number2" class="form-control hei" placeholder="Compare With" style="margin-top: 32px;" type="text" value="25">
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<!-- Button -->
                                    		  <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Chart</button>
                                    	</div>
                                	</div>
                                </form>
                            </div>
                        </div>

                                <div class="col-md-12 border bottom-margin-sm top-margin-sm section-title">
                        			<div class="top-margin-sm bottom-margin-sm">
                                <form name="bootstrap-form" method="post" action="{{ route('technical') }}" novalidate="novalidate" class="bv-form">
                                	@csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Technical Indicators</label>
	                                            <select name="technical_indicators1" class="form-control">
	                                                <option value="None">None</option>
	                                                <option value="AccDist">Accumulation/Distribution</option>
	                                                <option value="AroonOsc">Aroon Oscillator</option>
	                                                <option value="Aroon">Aroon Up/Down</option>
	                                                <option value="ADX">Avg Directional Index</option>
	                                                <option value="ATR">Avg True Range</option>
	                                                <option value="BBW">Bollinger Band Width</option>
	                                                <option value="CMF">Chaikin Money Flow</option>
	                                                <option value="COscillator">Chaikin Oscillator</option>
	                                                <option value="CVolatility">Chaikin Volatility</option>
	                                                <option value="CLV">Close Location Value</option>
	                                                <option value="CCI">Commodity Channel Index</option>
	                                                <option value="DPO">Detrended Price Osc</option>
	                                                <option value="DCW">Donchian Channel Width</option>
	                                                <option value="EMV">Ease of Movement</option>
	                                                <option value="FStoch">Fast Stochastic</option>
	                                                <option value="MACD">MACD</option>
	                                                <option value="MDX">Mass Index</option>
	                                                <option value="Momentum">Momentum</option>
	                                                <option value="MFI">Money Flow Index</option>
	                                                <option value="NVI">Neg Volume Index</option>
	                                                <option value="OBV">On Balance Volume</option>
	                                                <option value="Performance">Performance</option>
	                                                <option value="PPO">% Price Oscillator</option>
	                                                <option value="PVO">% Volume Oscillator</option>
	                                                <option value="PVI">Pos Volume Index</option>
	                                                <option value="PVT">Price Volume Trend</option>
	                                                <option value="ROC">Rate of Change</option>
	                                                <option value="RSI" selected>RSI</option>
	                                                <option value="SStoch">Slow Stochastic</option>
	                                                <option value="StochRSI">StochRSI</option>
	                                                <option value="TRIX">TRIX</option>
	                                                <option value="UO">Ultimate Oscillator</option>
	                                                <option value="Vol">Volume</option>
	                                                <option value="WilliamR">William's %R</option>
	                                            </select>
                                            </div>
                                            
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Technical Indicators</label>
	                                            <select name="technical_indicators2" class="form-control">
	                                                <option value="None">None</option>
	                                                <option value="AccDist">Accumulation/Distribution</option>
	                                                <option value="AroonOsc">Aroon Oscillator</option>
	                                                <option value="Aroon">Aroon Up/Down</option>
	                                                <option value="ADX">Avg Directional Index</option>
	                                                <option value="ATR">Avg True Range</option>
	                                                <option value="BBW">Bollinger Band Width</option>
	                                                <option value="CMF">Chaikin Money Flow</option>
	                                                <option value="COscillator">Chaikin Oscillator</option>
	                                                <option value="CVolatility">Chaikin Volatility</option>
	                                                <option value="CLV">Close Location Value</option>
	                                                <option value="CCI">Commodity Channel Index</option>
	                                                <option value="DPO">Detrended Price Osc</option>
	                                                <option value="DCW">Donchian Channel Width</option>
	                                                <option value="EMV">Ease of Movement</option>
	                                                <option value="FStoch">Fast Stochastic</option>
	                                                <option value="MACD"  selected>MACD</option>
	                                                <option value="MDX">Mass Index</option>
	                                                <option value="Momentum">Momentum</option>
	                                                <option value="MFI">Money Flow Index</option>
	                                                <option value="NVI">Neg Volume Index</option>
	                                                <option value="OBV">On Balance Volume</option>
	                                                <option value="Performance">Performance</option>
	                                                <option value="PPO">% Price Oscillator</option>
	                                                <option value="PVO">% Volume Oscillator</option>
	                                                <option value="PVI">Pos Volume Index</option>
	                                                <option value="PVT">Price Volume Trend</option>
	                                                <option value="ROC">Rate of Change</option>
	                                                <option value="RSI">RSI</option>
	                                                <option value="SStoch">Slow Stochastic</option>
	                                                <option value="StochRSI">StochRSI</option>
	                                                <option value="TRIX">TRIX</option>
	                                                <option value="UO">Ultimate Oscillator</option>
	                                                <option value="Vol">Volume</option>
	                                                <option value="WilliamR">William's %R</option>
	                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inline-form">
                                    	<div class="row">
                                    		<!-- Field 1 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Technical Indicators</label>
	                                            <select name="technical_indicators3" class="form-control">
	                                                <option value="None" selected="selected">None</option>
	                                                <option value="AccDist">Accumulation/Distribution</option>
	                                                <option value="AroonOsc">Aroon Oscillator</option>
	                                                <option value="Aroon">Aroon Up/Down</option>
	                                                <option value="ADX">Avg Directional Index</option>
	                                                <option value="ATR">Avg True Range</option>
	                                                <option value="BBW">Bollinger Band Width</option>
	                                                <option value="CMF">Chaikin Money Flow</option>
	                                                <option value="COscillator">Chaikin Oscillator</option>
	                                                <option value="CVolatility">Chaikin Volatility</option>
	                                                <option value="CLV">Close Location Value</option>
	                                                <option value="CCI">Commodity Channel Index</option>
	                                                <option value="DPO">Detrended Price Osc</option>
	                                                <option value="DCW">Donchian Channel Width</option>
	                                                <option value="EMV">Ease of Movement</option>
	                                                <option value="FStoch">Fast Stochastic</option>
	                                                <option value="MACD">MACD</option>
	                                                <option value="MDX">Mass Index</option>
	                                                <option value="Momentum">Momentum</option>
	                                                <option value="MFI">Money Flow Index</option>
	                                                <option value="NVI">Neg Volume Index</option>
	                                                <option value="OBV">On Balance Volume</option>
	                                                <option value="Performance">Performance</option>
	                                                <option value="PPO">% Price Oscillator</option>
	                                                <option value="PVO">% Volume Oscillator</option>
	                                                <option value="PVI">Pos Volume Index</option>
	                                                <option value="PVT">Price Volume Trend</option>
	                                                <option value="ROC">Rate of Change</option>
	                                                <option value="RSI">RSI</option>
	                                                <option value="SStoch">Slow Stochastic</option>
	                                                <option value="StochRSI">StochRSI</option>
	                                                <option value="TRIX">TRIX</option>
	                                                <option value="UO">Ultimate Oscillator</option>
	                                                <option value="Vol">Volume</option>
	                                                <option value="WilliamR">William's %R</option>
	                                            </select>
                                            </div>
                                            
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback">
                                            	<label>Technical Indicators</label>
	                                            <select name="technical_indicators4" class="form-control">
	                                                <option value="None" selected="selected">None</option>
	                                                <option value="AccDist">Accumulation/Distribution</option>
	                                                <option value="AroonOsc">Aroon Oscillator</option>
	                                                <option value="Aroon">Aroon Up/Down</option>
	                                                <option value="ADX">Avg Directional Index</option>
	                                                <option value="ATR">Avg True Range</option>
	                                                <option value="BBW">Bollinger Band Width</option>
	                                                <option value="CMF">Chaikin Money Flow</option>
	                                                <option value="COscillator">Chaikin Oscillator</option>
	                                                <option value="CVolatility">Chaikin Volatility</option>
	                                                <option value="CLV">Close Location Value</option>
	                                                <option value="CCI">Commodity Channel Index</option>
	                                                <option value="DPO">Detrended Price Osc</option>
	                                                <option value="DCW">Donchian Channel Width</option>
	                                                <option value="EMV">Ease of Movement</option>
	                                                <option value="FStoch">Fast Stochastic</option>
	                                                <option value="MACD">MACD</option>
	                                                <option value="MDX">Mass Index</option>
	                                                <option value="Momentum">Momentum</option>
	                                                <option value="MFI">Money Flow Index</option>
	                                                <option value="NVI">Neg Volume Index</option>
	                                                <option value="OBV">On Balance Volume</option>
	                                                <option value="Performance">Performance</option>
	                                                <option value="PPO">% Price Oscillator</option>
	                                                <option value="PVO">% Volume Oscillator</option>
	                                                <option value="PVI">Pos Volume Index</option>
	                                                <option value="PVT">Price Volume Trend</option>
	                                                <option value="ROC">Rate of Change</option>
	                                                <option value="RSI">RSI</option>
	                                                <option value="SStoch">Slow Stochastic</option>
	                                                <option value="StochRSI">StochRSI</option>
	                                                <option value="TRIX">TRIX</option>
	                                                <option value="UO">Ultimate Oscillator</option>
	                                                <option value="Vol">Volume</option>
	                                                <option value="WilliamR">William's %R</option>
	                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<!-- Button -->
                                    		  <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">Update Chart</button>
                                    	</div>
                                	</div>
                                </form>
                                <!-- Form End -->
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection