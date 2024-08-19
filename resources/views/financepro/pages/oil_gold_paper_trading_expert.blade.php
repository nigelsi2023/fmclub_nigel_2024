@extends('layouts.financepro_content')

<!--mac-->

@section('meta_title', 'Crude Oil & Gold Paper Trading Expert Analysis')

@section('meta_desc', 'Helping Crude Oil and Metals Commodity Trading firms generate 5-20% ROI on Paper Trading')

@section('meta_kewy', 'crude oil  trading strategy latest,  crude oil strategies, crude oil trading, crude oil trading basics, crude oil trading for beginners, crude oil trading strategies, crude oil trading strategy for beginners, how to trade crude oil cfds, how to trade oil, how to trade oil futures, how to trade the oil market, oil futures strategy that works, Trade Brent Crude oil, trading crude oil futures, how to trade crude oil, how to trade oil, how to trade oil on forex, learn how to trade oil')

<!--mac-->

@section('content')

<!-- PAGE HEADING SECTION -->
<style type="text/css">
    .image {
        cursor: pointer;

        transition: 0.3s;
    }

    .image:hover {
        opacity: 0.7;
    }

    .modal {
        display: none;

        position: fixed;

        z-index: 1;

        background-color: rgb(0, 0, 0);

        width: 100%;

        height: 100%;

        left: 0;

        top: 0;

        overflow: auto;

        padding-top: 1%;
    }

    .modal-content {
        display: block;

        width: 95%;

        max-width: 900px;

        margin: auto;

        top: 22px;
    }

    .close {
        position: absolute;

        right: 1%;

        top: 1%;

        color: white;

        cursor: pointer;

        font-size: 40px;
    }

    .mysection .text-color {
        font-size: 3rem;
    }

    /*sammy*/

    .custom-btn {
        letter-spacing: 2px;

        line-height: 27px;

        color: #ffffff;

        font-weight: 700;

        background-image: linear-gradient(0deg, #0166a0 0%, #00aeff 100%);

        display: block;

        text-align: center;

        text-transform: uppercase;

        border: 5px solid #00ebff;

        border-radius: 9px;

        padding: 15px 20px;

        line-height: normal;

        max-width: fit-content;

        margin: auto;

        margin-bottom: 30px;

        margin-top: 65px;
    }

    #why-choose {
        padding: 30px 0;
    }

    /*mac*/

    a.govp {
        color: #24cae2;

        text-decoration: underline;
    }

    /*mac*/

    .percentage {
        position: relative;
    }

    .percentage:after {
        content: "%";

        display: block;

        position: absolute;

        top: 10px;

        right: 100px;

        font-weight: 600;

        font-size: 40px;
    }

    .modal-content {
        animation-name: zoom;

        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }

    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }

    .counterx {
        display: inline-flex;

        cursor: pointer;

        width: 150px;

        height: 150px;

        max-width: 100%;

        position: relative;

        justify-content: center;

        align-items: center;

        font-size: calc(2em + 1vmin);

        transition: height 0.2s ease-in-out;

        background: #fff;

        border-radius: 50%;

        box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.2);

        margin: 1em 0;
    }

    .countery {
        display: inline-flex;

        cursor: pointer;

        width: 150px;

        height: 150px;

        max-width: 100%;

        position: relative;

        justify-content: center;

        align-items: center;

        font-size: calc(2em + 1vmin);

        transition: height 0.2s ease-in-out;

        background: #fff;

        border-radius: 50%;

        box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.2);

        margin: 1em 0;
    }

    .otpo {
        display: inline-block;

        margin-left: 35px;

        float: left;

        margin-top: 5px;
    }

    .percentagex {
        position: absolute;

        text-align: center;

        top: 50%;

        left: 0;

        right: 0;

        vertical-align: middle;

        transform: translate3d(0, -50%, 0);
    }

    .percentagey {
        position: absolute;

        text-align: center;

        top: 50%;

        left: 0;

        right: 0;

        vertical-align: middle;

        transform: translate3d(0, -50%, 0);
    }

    canvas {
        position: absolute;

        top: 0;

        left: 0;
    }

    input {
        width: 200px;
    }

    .percentagex {
        color: #444444;
    }

    .percentagey {
        color: #444444;
    }

    h5.sg-colors {
        color: #fff;

        font-size: 20px;

        font-weight: 500;
    }

    .tbb1 {
        border-bottom: 1px solid gainsboro;

        border-top-style: hidden;

        font-size: 18px;

        margin-top: 10px;
    }

    .overlay-darker {
        background: rgb(44 44 44 / 62%);
    }

    .mysection {
        background-repeat: no-repeat;

        width: 100% !important;

        margin-bottom: 30px;
    }

    .close-button {
        position: absolute;

        right: 15px;

        top: 5px;

        cursor: pointer;

        font-size: 40px;

        background: transparent;

        color: red;

        border: 0px solid;
    }
</style>




{{-- =====================< Youtube Video Section Starts >========================= --}}
<section class="mysection bg-image typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/banner-nasir.jpg') }}">   



    <div class="container">

        <div class="row">

            <div class="col-md-7 text-black" style="margin-top: 30px;">

                <h1 class="text-capitalize">

                    CRUDE OIL & GOLD 
				</h1>
                <h1>
                    Hedging & 

                </h1>
				<h1>
                   Paper Trading Expert

                </h1>

                <h4 style="margin-top: 30px;">

                    <b>Our Clients Gained 33% in 3 Months, <br />Paper Trading Crude Oil</b>

                </h4>

                <h4 style="margin-top: 0px;">

                    <b>How is your Risk Management, Hedging and Paper Trading?</b>

                </h4>
                
                 <a  href="https://api.whatsapp.com/send/?phone=%2B971585400412&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-lg btn-success" >CHAT WITH ME</a>
          <a class="btn btn-lg btn-warning"  href="#contact" >REQUST CALL BACK FROM ME</a>

            </div>

            <div class="col-md-6">

                <div class="card" style="background: transparent;">

                    <div class="card-body">

                       

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =====================< Youtube Video Section Ends >========================= --}}

<section ID="video">

 	<div class="row">
		<h1 align="center">
        What We Can Do For You... [Watch this short video]</h1>
        <h4 align="center">
        The biggest Problem with Paper Trading is Knowing which way the Market is most likely to move next.<br />Most Physical Oil Traders find this Hard. We have developed Strategies over the last 22 years on managing this Risk with good probability.
        </h4>
        <h4 align="center">We have been Analysing the Stock Market for over 20 Years. Using our unique Market Analysis Strategies, we give our clients accurate Market Insights and Trade Ideas.
        <br />
        <strong>If you could get Accurate Trade Idea for your Oil Paper Trades, do you think this will Help You?</strong>
        </h4>
        <br /><br />
    	<div class="col-md-3"></div>
        
        <div class="col-md-6">
         	<iframe width="100%" height="515" src="https://www.youtube.com/embed/6Lr8eOThqYk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div class="col-md-3"></div>
            
</section>



{{-- =====================< Form Section Starts >========================= --}}

<section ID="contact" class="mysection bg-image typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/bannerbackground1.jpg') }}">   
<div class="overlay-dark" style="z-index: -1;"></div>
    <div class="container">

        <div class="row">
        
        <!--<h1 align="center">
        Find Out How to make 5-10% Oil Paper Trading Profits Monthly Average</h1>-->
        

            <div class="col-md-6" style="margin-top: 30px;">

                <h1 class="text-capitalize" style="line-height: 5rem;">

                 <!--   Imagine 5-20% Monthly

                    <br>

                    Paper Trading Profit

                    <br>

                    With my Help-->
                    How much can you Reduce your Paper Trading Loss with Expert Market Insight 

                </h1>

                <h4 style="margin-top: 50px;">

                    <b>Our Oil Trading Clients in Dubai achieve up to <span style="color:#FF3">$1,790,000 profit per year</span>, on Oil Paper Trading, by following our unique Strategies.</b>

                </h4>

                <h4 style="margin-top: 50px;">

                    <b>Book a Meeting  Today <br />To discuss your  Challenges with Oil Hedging & Paper Trading  by filling in the Form on the Right</b>

                </h4>

            </div>

            <div class="col-md-6" style="margin-top: 30px;">

                @if(session('full_name'))

                    <div class="alert alert-success">

                        <button type="button" aria-hidden="true" class="close-button"

                        onclick="this.parentElement.style.display='none'">×</button>

                        <h3><b>Thank You. <br> For Contacting Me {{ session('full_name') }}</b></h3>

                        <h5>

                            <strong>I’ll call you back within 3 hours to discuss how I can help you increase your Paper Trading Profits.</strong>

                        </h5>

                        @php Session::forget('full_name'); @endphp

                    </div>

                @else

                    <form action="{{ route('oil_gold_paper_trading_expert.sendinfo') }}" method="post">

                        @csrf

                        <div class="row">

                            <div class="col-md-12 form-group">

                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" placeholder="Full Name *" required>

                                @if ($errors->has('name'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('name') }}</strong>

                                    </span>

                                @endif

                            </div>

                            <div class="col-md-6 form-group">

                                <input type="tel" name="phone" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" placeholder="Phone Number *" required>

                                @if ($errors->has('phone'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('phone') }}</strong>

                                    </span>

                                @endif

                            </div>

                            <div class="col-md-6 form-group">

                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" placeholder="Email Address *" required>

                                @if ($errors->has('email'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('email') }}</strong>

                                    </span>

                                @endif

                            </div>

                            <div class="col-md-12 form-group">

                                <select name="howyou" class="form-control {{ $errors->has('howyou') ? 'has-error' : '' }}" style="height: 40px;" required>

                                    <option value="">Select How You Hear About This Website?</option>

                                    <option value="Google Search">Google Search</option>

                                    <option value="From a Friend">From a Friend</option>

                                    <option value="Newspaper Advertisement">Newspaper Advertisement</option>

                                    <option value="Banner Advertisement">Banner Advertisement</option>

                                    <option value="Leaflet">Leaflet</option>

                                    <option value="Broker House">Broker House</option>

                                    <option value="Facebook">Facebook</option>

                                </select>

                                @if ($errors->has('howyou'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('howyou') }}</strong>

                                    </span>

                                @endif

                            </div>

                            <div class="col-md-12 form-group">

                                <input type="text" name="subject" class="form-control {{ $errors->has('subject') ? 'has-error' : '' }}" placeholder="Subject *" required>

                                @if ($errors->has('subject'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('subject') }}</strong>

                                    </span>

                                @endif

                            </div>

                            <div class="col-md-12 form-group">

                                <textarea name="message" class="form-control {{ $errors->has('message') ? 'has-error' : '' }}" placeholder="Write Your Message *" required></textarea>

                                @if ($errors->has('message'))

                                    <span class="help-block">

                                        <strong>{{ $errors->first('message') }}</strong>

                                    </span>

                                @endif

                            </div>



                            <div class="col-md-12">

                                <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">

                                    {!! app('captcha')->display() !!}

                                    @if ($errors->has('g-recaptcha-response'))

                                        <span class="help-block">

                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>

                                        </span>

                                    @endif

                                </div>

                            </div>

                            {!! NoCaptcha::renderJs() !!}

                            <div class="col-md-12">

                                <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">SEND NOW</button>

                            </div>

                        </div>

                    </form>

                @endif

            </div>

        </div>

    </div>

</section>

{{-- =====================< Form Section Ends >========================= --}}

   
   
   
<section>
	<div class="container">
 	<div class="row">
		
       
        
    	
        
        <div class="col-md-5"> 
        	<a href="../../../../public/images/Nasir Profile 2022.pdf" target="_blank"><img src="../../../../public/images/nasir-resume.PNG" alt="crude-oil-paper-trader" width="300"/></a>
        
        </div>	
            

        
     
        
        <div class="col-md-7">
            <h1>
            Who Are We?
            </h1>
           
            <p class="lead">
            Ok so you probably want to know a little about our background. On the left is a bio of our Head of Oil Trading - who has been in Financial Markets for over 22 years, seen 3 stock market crashes, and trained many Investment Bankers from top reputable investment banks such at Deutsche Bank, Barclays Invest Bank, Societe Generale etc. 
            
            <br />
            <br />
            Go ahead and click the image on the left to view in full detail
            </p>
        </div>
        
        
        </div>	
        </div>
            
</section>     




   
   <section ID="video" class="mysection bg-image typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/bannerbackground1.jpg') }}">   
<div class="overlay-dark" style="z-index: -1;"></div>

 	<div class="row">
		<h1 align="center">
        Here is  our Last Oil Market Analysis... 
        </h1>
        <h2 align="center">
        What do you Think was it quite accurate?
        </h2>
        <h4 align="center">If you knew the information in our Analysis Before it happened, and we calculated all the Trades for you - do you think you could make IMPROVE Your Paper Trading? <br />
        Our Clients typically make $50k - $150k Profit on each Trade Idea from us(depending on account size) 
        
        </h4>
        <br /><br />
    	<div class="col-md-3"></div>
        
        <div class="col-md-6">
         	
  
          
         <iframe width="100%" height="515" src="https://www.youtube.com/embed/x_Lyq_ZvF04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
        </div>
        
        <div class="col-md-3"></div>
            
</section>     



<section ID="trade_history" class="mysection bg-image bottom-padding-md parallax-bg typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/newgreen2.jpg') }}" style="margin-top: 0px;">   

<div class="overlay-darker" style="z-index: -1;"></div>

    <div class="container">

       

        

        <div class="col-md-8 col-xs-6">

            <h2 style="text-align:left; margin-bottom:20px;font-size: 50px;">

              CHECK OUR PERFORMANCE

            </h2>

            

            <div class="otpo">

                <h5 class="sg-colors">Total Trades</h5>

                <div class="countery" data-cp-percentagey="{{ $signals->count() }}" data-cp-color="#24CAE2"></div>

            </div>

            <div class="otpo">

                <h5 class="sg-colors">Live Trades</h5>

                <div class="countery" data-cp-percentagey="{{$liveCount}}" data-cp-color="#24CAE2"></div>

            </div>

            <div class="otpo">

                <h5 class="sg-colors">Success Rate</h5>

                <div class="counterx" data-cp-percentagex="{{$profitCount / ($profitCount + $lossCount) *100}}" data-cp-color="#24CAE2"></div>

            </div>

           

        </div>

        

        <div class="col-md-4 col-xs-6">

            <h2 style="text-align:left; margin-bottom:20px;font-size: 50px;"> Statistics </h2>

            

            <table class="table tbb1">

              

              <tbody>

                <tr>

                  <td style="text-align:left;">Total $ on Target</td>

                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">
                      <?php
                        $total_ppip = $total_lpip = 0;
                      ?>

                      @foreach($signals as $signal)
                        <?php if($signal->item_name == 'XAU/USD' || $signal->item_name == 'SP500' || $signal->item_name == 'US2000' || $signal->item_name == 'DJIA'){
						    if($signal->status == '2'){ 
						        $total_lpip +=  abs(round($signal->open_price - $signal->stop_loss, 4))*10;
						    } elseif($signal->status == '1'){
						        $total_ppip += abs(round($signal->open_price - $signal->target_price, 4))*10;
						    }
						} else if($signal->item_name == 'NASDAQ'){
						    if($signal->status == '2'){ 
						        $total_lpip +=  abs(round($signal->open_price - $signal->stop_loss, 4))*10;
						    } elseif($signal->status == '1'){
						        $total_ppip += abs(round($signal->open_price - $signal->target_price, 4))*10;
						    }
					    } else if($signal->item_name == 'XBR/USD'){
						    if($signal->status == '2'){ 
						        $total_lpip +=  abs(round($signal->open_price - $signal->stop_loss, 4))*100;
						    } elseif($signal->status == '1'){
						        $total_ppip += abs(round($signal->open_price - $signal->target_price, 4))*100;
						    }
						} else{
						    if($signal->status == '2'){ 
						        $total_lpip +=  abs(round($signal->open_price - $signal->stop_loss, 4))*10000;
						    } elseif($signal->status == '1'){
						        $total_ppip += abs(round($signal->open_price - $signal->target_price, 4))*10000;
						    }
						} ?>
                      @endforeach
                      +{{$total_ppip}}
                  </td>
                </tr>
                <tr>

                  <td style="text-align:left;">Total $ at Stop Loss</td>

                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">-{{$total_lpip}}</td>

                </tr>

                <tr>

                  <td style="text-align:left;">Net $ (Profit/Loss)</td>

                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">+{{$total_ppip - $total_lpip}}</td>

                </tr>

                <tr>

                  <td style="text-align:left;">Profit Rate vs Loss Rate</td>

                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{(int)abs(round($total_ppip / $total_lpip,2))}}x</td>

                </tr>

                

              </tbody>

              

            </table>

            <p style="margin-top:-18px;">Meaning we make {{(int)abs(round($total_ppip / $total_lpip,2))}}x MORE PROFIT than losses.</p>

        </div>

        

    </div>

</section>



        <!-- PAGE HEADING SECTION -->



        

            



         

        <section id="why-choose" class="">

            

            		

        	<div class="container">

            	<div class="row">

            		<div class="col-md-12">

            			<!--<p>We have analysis available for the following <b>Currencies</b> companies.</p>-->

            			<!--<p>Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Currencies</b>.</p>-->
			<h2 align="center">
            Below is a History of ALL our Trades <br />we have given our Commodity Trading Clients. 
            </h2>
            <br /><br />
            		

            		

            			<table class="table" >

							<thead>

                <th>Chart</th>

                <th>Date</th>

								<th>Name</th>

								<th>Open Price</th>

								<th>Target Price</th>

								<th>Stop Loss</th>

								<th>Risk</th>

								<th>Pips</th>

								<!--<th>Closed Price</th>-->

								<th style="width: 30px"></th>

							</thead>













							<tbody>

						    @if($signals)

						    @foreach($signals as $signal)

						    <!--sammy 7/13/2022-->

	                          <?php //if($signal->item_name == 'XAU/USD' || $signal->item_name == 'XBR/USD'){ ?>

								<tr>

									<td >

									    <div style="display:flex;">

									    <?php if(!empty($signal->signal_img)){ ?>

									        <!--<img src="{{ asset('public/images/signals/'.$signal->signal_img) }}" alt="{{$signal->item_name}}" width="120px;" id="myImg" />-->

									        <img src="{{ asset('public/images/signals/'.$signal->signal_img) }}" alt="{{$signal->item_name}}" width="120px;" onclick="showme(this.src)" />

									    <?php } ?>   &nbsp;

									    <div>

    									    <?php if($signal->signal_type == 'vip'){ ?>

    									        <span class="label label-success" style="padding:5px 15px; background-color:orange;">VIP</span>

    									    <?php } else { ?>

    									        <span class="label label-danger" style="padding:5px 10px; background-color:gray;">FREE</span>

    									   <?php } ?>

									   </div>

									   </div>

									    

									</td>

									

									

									<td>

									    <?= date('d/m/y', strtotime($signal->signal_date)); ?>

									</td>

									

									

									

									<td>

									    <span style="float:left;">{{$signal->item_name}} &nbsp;</span> 

									    <span>



                                    

									   

									   <!--mac-->

									    <?php if($signal->target_price > $signal->open_price){  ?>

									        

									       <?php if($signal->status == 0 and $signal->signal_type == 'vip' ){

									           echo " ";

									       }else{ ?>

									           <img src="{{ asset('/uploads/profit.png') }}" alt="Profit" width="20px" />

									       

									        

									        

									    <?php  } } else {  ?>

									        

									        <?php if($signal->signal_type == 'vip' && $signal->status == 0 ){

									           echo " ";

									       }else{ ?>

									           <img src="{{ asset('/uploads/loss.png') }}" alt="Loss" width="20px" />

									        

									   <?php }} ?>

									   <!--mac-->

									   

									   

									   </span>

									</td>

									

									

									

									<?php if($signal->signal_privacy == 'private'){ ?>

									    <td><a href="#contact" class="govp">VIP Only</a></td>

									    <td><a href="#contact" class="govp">VIP Only</a></td>

									    <td><a href="#contact" class="govp">VIP Only</a></td>

									<?php } else{ ?>

									    <td>{{$signal->open_price}}</td>

    									<td>{{$signal->target_price}}</td>

    									<td>{{$signal->stop_loss}}</td>

									<?php } ?>

									

									

									

								

									<!--sammy-->

									<td> {{abs(round(($signal->target_price - $signal->open_price) /($signal->open_price-$signal->stop_loss) , 0))}} : 1 </td>

									

									

									

									<!--mac-->

									<?php if($signal->item_name == 'XAU/USD' || $signal->item_name == 'SP500' || $signal->item_name == 'US2000' || $signal->item_name == 'DJIA'){ ?>

									    

									    <?php if($signal->status == '2'){ ?>

									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))*10}}</td>

									    <?php } else{ ?>

									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))*10}}</td>

									    <?php } ?>

									    

									    

									<?php } else if($signal->item_name == 'NASDAQ'){ ?>

									    

									    <?php if($signal->status == '2'){ ?>

									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))*10}}</td>

									    <?php } else{ ?>

									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))*10}}</td>

									    <?php } ?>    

									    

									    

									    

									<?php } else if($signal->item_name == 'XBR/USD'){ ?>

									    

									    <?php if($signal->status == '2'){ ?>

									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))*100}}</td>

									    <?php } else{ ?>

									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))*100}}</td>

									    <?php } ?>

									    

									<?php } else{ ?>

									    

									    <?php if($signal->status == '2'){ ?>

									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))*10000}}</td>

									    <?php } else{ ?>

									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))*10000}}</td>

									    <?php } ?>

									    

									<?php } ?>

									<!--mac-->

									

									

									<!--<td> {{$signal->open_price - $signal->target_price}}</td>-->

									<!--R = absolute value [ ((target price - open price)  / open price - stop loss) ]-->

								

								

									<!--<td>{{$signal->closed_price}}</td>-->

									

									

									<td>

									    <?php if($signal->status == 1){ ?>

									        <span class="label label-success" style="padding:5px 15px; background-color:green;">Profit</span>

									    <?php } elseif($signal->status == 2) { ?>

									        <span class="label label-danger" style="padding:5px 10px; background-color:red;">Stopped</span>

									   <?php } else { ?>

									        <span class="label label-danger" style="padding:5px 18px; background-color:gray;">Live</span>

									   <?php } ?>

									</td>

								

									<!--<td><a class = "btn typo-light btn-square btn-hv-dark theme-bg btn-sm" href="#" style="color: #fff;font-size: 15px;"><i class="fa fa-eye" aria-hidden="true"></i></a></td>-->

								</tr>

								<?php //} ?>

							@endforeach

							@endif

							</tbody>

						</table>

						<!-- The Modal -->

                        <!--<div id="myModal" class="modal">-->

                        <!--  <span class="close">&times;</span>-->

                        <!--  <img class="modal-content" id="img01">-->

                        <!--  <div id="caption"></div>-->

                        <!--</div>-->

                         <div class="modal" id="modal">

                             <div class="close" id="close">&times;</div>

                             <img id="modal-image" class="modal-content">

                             <div class="caption"></div>

                         </div>

            		</div>

            	</div>

            </div>

        </section>





@endsection





@section('scripts')



<script>



  document.addEventListener("DOMContentLoaded", function() {



  var circleProgress = (function(selector) {

    var wrapper = document.querySelectorAll(selector);

    Array.prototype.forEach.call(wrapper, function(wrapper, i) {

      var wrapperWidth,

        wrapperHeight,

        percent,

        innerHTML,

        context,

        lineWidth,

        centerX,

        centerY,

        radius,

        newPercent,

        speed,

        from,

        to,

        duration,

        start,

        strokeStyle,

        text;



      var getValues = function() {

        wrapperWidth = parseInt(window.getComputedStyle(wrapper).width);

        wrapperHeight = wrapperWidth;

        percent = wrapper.getAttribute('data-cp-percentagey');

        innerHTML = '<span class="percentagey"><strong>' + percent + '</strong>%</span><canvas class="circleProgressCanvas" width="' + (wrapperWidth * 2) + '" height="' + wrapperHeight * 2 + '"></canvas>';

        wrapper.innerHTML = innerHTML;

        text = wrapper.querySelector(".percentagey");

        canvas = wrapper.querySelector(".circleProgressCanvas");

        wrapper.style.height = canvas.style.width = canvas.style.height = wrapperWidth + "px";

        context = canvas.getContext('2d');

        centerX = canvas.width / 2;

        centerY = canvas.height / 2;

        newPercent = 0;

        speed = 1;

        from = 0;

        to = percent;

        duration = 1000;

        lineWidth = 25;

        radius = canvas.width / 2 - lineWidth;

        strokeStyle = wrapper.getAttribute('data-cp-color');

        start = new Date().getTime();

      };



      function animate() {

        requestAnimationFrame(animate);

        var time = new Date().getTime() - start;

        if (time <= duration) {

          var x = easeInOutQuart(time, from, to - from, duration);

          newPercent = x;

          text.innerHTML = Math.round(newPercent) + '';

          drawArc();

        }

      }



      function drawArc() {

        var circleStart = 1.5 * Math.PI;

        var circleEnd = circleStart + (newPercent / 50) * Math.PI;

        context.clearRect(0, 0, canvas.width, canvas.height);

        context.beginPath();

        context.arc(centerX, centerY, radius, circleStart, 4 * Math.PI, false);

        context.lineWidth = lineWidth;

        context.strokeStyle = "#ddd";

        context.stroke();

        context.beginPath();

        context.arc(centerX, centerY, radius, circleStart, circleEnd, false);

        context.lineWidth = lineWidth;

        context.strokeStyle = strokeStyle;

        context.stroke();



      }

      var update = function() {

        getValues();

        animate();

      }

      update();





      



      var resizeTimer;

      window.addEventListener("resize", function() {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function() {

          clearTimeout(resizeTimer);

          start = new Date().getTime();

          update();

        }, 250);

      });

    });



    //

    // http://easings.net/#easeInOutQuart

    //  t: current time

    //  b: beginning value

    //  c: change in value

    //  d: duration

    //

    function easeInOutQuart(t, b, c, d) {

      if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;

      return -c / 2 * ((t -= 2) * t * t * t - 2) + b;

    }



  });



  circleProgress('.countery');



  // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zur端ck

  function getRandom(min, max) {

    return Math.random() * (max - min) + min;

  }

});

/////con

  document.addEventListener("DOMContentLoaded", function() {



  var circleProgress = (function(selector) {

    var wrapper = document.querySelectorAll(selector);

    Array.prototype.forEach.call(wrapper, function(wrapper, i) {

      var wrapperWidth,

        wrapperHeight,

        percent,

        innerHTML,

        context,

        lineWidth,

        centerX,

        centerY,

        radius,

        newPercent,

        speed,

        from,

        to,

        duration,

        start,

        strokeStyle,

        text;



      var getValues = function() {

        wrapperWidth = parseInt(window.getComputedStyle(wrapper).width);

        wrapperHeight = wrapperWidth;

        percent = wrapper.getAttribute('data-cp-percentagex');

        innerHTML = '<span class="percentagex"><strong>' + percent + '</strong>%</span><canvas class="circleProgressCanvas" width="' + (wrapperWidth * 2) + '" height="' + wrapperHeight * 2 + '"></canvas>';

        wrapper.innerHTML = innerHTML;

        text = wrapper.querySelector(".percentagex");

        canvas = wrapper.querySelector(".circleProgressCanvas");

        wrapper.style.height = canvas.style.width = canvas.style.height = wrapperWidth + "px";

        context = canvas.getContext('2d');

        centerX = canvas.width / 2;

        centerY = canvas.height / 2;

        newPercent = 0;

        speed = 1;

        from = 0;

        to = percent;

        duration = 1000;

        lineWidth = 25;

        radius = canvas.width / 2 - lineWidth;

        strokeStyle = wrapper.getAttribute('data-cp-color');

        start = new Date().getTime();

      };



      function animate() {

        requestAnimationFrame(animate);

        var time = new Date().getTime() - start;

        if (time <= duration) {

          var x = easeInOutQuart(time, from, to - from, duration);

          newPercent = x;

          text.innerHTML = Math.round(newPercent) + '%';

          drawArc();

        }

      }



      function drawArc() {

        var circleStart = 1.5 * Math.PI;

        var circleEnd = circleStart + (newPercent / 50) * Math.PI;

        context.clearRect(0, 0, canvas.width, canvas.height);

        context.beginPath();

        context.arc(centerX, centerY, radius, circleStart, 4 * Math.PI, false);

        context.lineWidth = lineWidth;

        context.strokeStyle = "#ddd";

        context.stroke();

        context.beginPath();

        context.arc(centerX, centerY, radius, circleStart, circleEnd, false);

        context.lineWidth = lineWidth;

        context.strokeStyle = strokeStyle;

        context.stroke();



      }

      var update = function() {

        getValues();

        animate();

      }

      update();





      



      var resizeTimer;

      window.addEventListener("resize", function() {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function() {

          clearTimeout(resizeTimer);

          start = new Date().getTime();

          update();

        }, 250);

      });

    });



    //

    // http://easings.net/#easeInOutQuart

    //  t: current time

    //  b: beginning value

    //  c: change in value

    //  d: duration

    //

    function easeInOutQuart(t, b, c, d) {

      if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;

      return -c / 2 * ((t -= 2) * t * t * t - 2) + b;

    }



  });



  circleProgress('.counterx');



  // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zur端ck

  function getRandom(min, max) {

    return Math.random() * (max - min) + min;

  }

});

</script>



<script>

    var modal=document.getElementById("modal");

    var modalImage=document.getElementById("modal-image");

    

    function showme(src){

     modal.style.display="block";

     modalImage.src=src;

    }

    

    document.getElementById("close").onclick=function(){

     modal.style.display="none";

    }

</script>



@endsection