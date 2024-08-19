@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', 'All our Latest Forex Signals for $1 per day')
@section('meta_desc', 'High accuracy rate and up to date forex signals for  for XAUUSD, XBRUSD, EURUSD, GBPUSD')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')

<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Forex Signals</h2>
                            <!-- BREADCRUMB-->

                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Signals</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <style type="text/css">
                .image{
                  cursor: pointer;
                  transition: 0.3s;
                }
                
                 .image:hover{
                 opacity: 0.7;
                 }
                
                 .modal{
                 display: none;
                 position: fixed;
                 z-index: 1;
                 background-color: rgb(0, 0, 0);
                 width: 100%;
                 height: 100%;
                 left: 0;
                 top:0;
                 overflow: auto;
                 padding-top: 1%;
                 }
                
                 .modal-content{
                 display: block;
                 width: 95%;
                 max-width: 900px;
                 margin:auto;
                 top:22px;
                 }
                
                 .close{
                 position: absolute;
                 right:1%;
                 top:1%;
                 color:white;
                 cursor: pointer;
                 font-size: 40px;
                 }
               
                .mysection .text-color{
                    font-size:3rem;
                 
                }
                
           /*sammy*/
                  .custom-btn{
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
                   #why-choose{
                       padding: 50px 0;
                   }
                   
                /*mac*/
                    a.govp {
                        color: #24CAE2;
                        text-decoration: underline;
                    }
                /*mac*/    
                
                    .percentage {
                    position: relative
                    }
                    .percentage:after{
                    content: '%';
                    display:block;
                    position: absolute;
                    top:10px;
                    right: 100px;
                    font-weight: 600;
                    font-size: 40px;
                    }
         
           
                 .modal-content{
                 animation-name: zoom;
                 animation-duration: 0.6s;
                 }
                
                 @keyframes zoom{
                 from {transform: scale(0);}
                 to{transform: scale(1);}
                 }
                
                @media only screen and (max-width: 700px){
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
  /*margin: 1em 0;*/
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
  /*margin: 1em 0;*/
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

.percentagex{
    color:#444444;
}
.percentagey{
    color:#444444;
}

h5.sg-colors {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
}

.tbb1 {
    border-bottom: 1px solid gainsboro;
    border-top-style: hidden;
    font-size:18px;
    margin-top:10px;
}
/*######*/
.param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
} 

var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 80px;
    max-height: 60px;
    border: none;
}
.media{
    text-align: left;
    margin-bottom: 20px;
}
.media11{
    text-align: left;
    margin-bottom: 20px;
}
/*.media1{*/
/*    margin-top: 40px !important;*/
/*    margin-bottom: 20px;*/
/*}*/
.img-wrap {
    float: left;
}

.card {
    background: #f7f7f7;
    padding: 5px;
}
table.table.tb1 {
    border: none;
}
.progress-bar.pccolor {
    background-color: #24cae2;
}
.progress-bar.pccolord {
    background-color: #ff5c59;
}
.progress-bar.pccolory {
    background-color: #ffdd7b;
}
.progress {
    height: 25px !important;
}
.progress-bar {
    line-height: 25px !important;
}
/*.progress, .progress-bar {*/
/*    float: inline-start;*/
/*}*/

span.media1 b {
    font-size: 30px !important;
}
.overlay-darker {
    background: rgb(44 44 44 / 62%);
}
.mysection {
    background-repeat: no-repeat;
    width: 100% !important;
}
a.choose-plan-click2 {
    font-size: 18px;
    letter-spacing: 1px;
    color: #ffffff;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
    padding: 22px 26px;
    background-color: #f6bd00;
    text-transform: uppercase;
    border-radius: 3px;
    margin-top: 35px;
    display: inline-block;
    line-height: 22px;
    filter: drop-shadow(2.5px 4.33px 4px rgba(0,0,0,0.2));
}
@media only screen and (max-width: 600px) {
  a.choose-plan-click2 {
    font-size: 14px;
    letter-spacing: 0.5px;
    color: #ffffff;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
    padding: 10px 10px;
    background-color: #f6bd00;
    text-transform: uppercase;
    border-radius: 3px;
    margin-top: 15px;
    display: inline-block;
    line-height: 18px;
    filter: drop-shadow(2.5px 4.33px 4px rgba(0,0,0,0.2));
}
}
.fs-bnr-btn2 {
    text-align: center;
}

.nopadd {
     padding-right: 0px; 
     padding-left: 0px; 
}
img.img-responsive.newmg {
    width: 530px;
}
.borderless{
    padding: 0px;
}
.borderless td, .borderless th {
    border: none !important;
    padding: 0px !important;
}
</style>



<!--First banner-->
<section class="mysection bg-image bottom-padding-md typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/bannerbackground1.jpg') }}">   
<div class="overlay-darker" style="z-index: -1;"></div>
    <div class="container">
       
        
        <div class="col-md-8 col-xs-6">
            <h2 style="text-align:left; margin-bottom:20px;font-size: 50px;"> Signal Summary </h2>
            
            <div class="otpo">
                <h5 class="sg-colors">Total Signals</h5>
                <div class="countery" data-cp-percentagey="{{$countRow}}" data-cp-color="#24CAE2"></div>
            </div>
            <div class="otpo">
                <h5 class="sg-colors">Live Signals</h5>
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
                  <td style="text-align:left;">Total Pips on Target</td>
                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">
                       
                      <?php
                        $total_ppip = $total_lpip = 0;
                      ?>
                      @foreach($signals1 as $signal)
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
                  <td style="text-align:left;">Total Pips at Stop Loss</td>
                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">-{{$total_lpip}}</td>
                </tr>
                <tr>
                  <td style="text-align:left;">Net Pips (Profit/Loss)</td>
                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">+{{$total_ppip - $total_lpip}}</td>
                </tr>
                <tr>
                  <td style="text-align:left;">Profit Rate vs Loss Rate</td>
                  <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{(int)abs(round($total_ppip / $total_lpip,2))}}x</td>
                </tr>
                
              </tbody>
              
            </table>
            <p style="margin-top:-18px; font-weight:bold">Meaning we make {{(int)abs(round($total_ppip / $total_lpip,2))}}x MORE PROFIT than losses.</p>
            
        </div>
         
    </div>
    <div class="fs-bnr-btn2">
                <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Get My Froex Signals for Free Now</a>
            </div>
</section>
<!--End First banner-->





<!--3rd banner-->
<div class="container-fluid nopadd">
    <div class="row">
        <div class="col-md-12"><img src="https://financialmarkets.club/images/new111.jpg" class="img-responsive" style="width: 100%;"></div> 
    </div>
</div>
<!--End 3rd banner-->




        <!-- PAGE HEADING SECTION -->
         
        <section id="why-choose" class="">
            
            		
        	<div class="container-fluid">
            	<div class="row">
                <div class=col-md-12 style="text-align:center">
                <br />
                <br />
                <h1>Below is a Full History of all our Forex Signals</h1>
                <br />
                <br />
                </div>	
            	    <div class="col-md-9 bottom-margin-md">
                		<div class="col-md-12">
                			<!--<p>We have analysis available for the following <b>Currencies</b> companies.</p>-->
                			<!--<p>Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Currencies</b>.</p>-->
                		
                			<table class="table">
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
    									
    									
    									
    									<td style="">
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
    									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP to See</a></td>
    									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP to See</a></td>
    									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP to See</a></td>
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
    							</tbody>
    						</table>
    						<div class="container">
    						    <div class="row">
    						        <div style="float:right;">{{ $signals->links() }}</div>
    						    </div>
    						</div>
                                	
    							@endif
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
                	
                    <!-- SIDEBAR -->
                    <div class="col-md-3 sidebar">
                        
                        <!-- <div class="border-rounded col-md-12 theme-bg  bottom-margin-sm section-title">
                            <h2 class="widget-title no-bottom-padding typo-light text-uppercase">Do you need any help?</h2>
                            <p class="no-bottom-padding typo-light">My job is to help professionals to achieve their financial goals whilst having adequate protection along the way.</p>
                            <a href="contact-us.html" class="btn btn-hv-dark btn-hv-dark btn-icon-right light-bg bottom-margin-sm"> Contact Now</a>
                        </div> -->
        
                        <div class="row">
                            <div class="recent-block col-md-12">
                                <h5 class="legend col-md-12">Categories</h5>
                                <!-- ITEM-->
                                <div class="clearfix col-md-12">
                                    <ul class="typo-lights list-unstyled text-capitalize">
                                        @foreach($trader_category as $category)
                                        <li class="border-bottom-style-2 bottom-margin-vsm">
                                            <a href="{{ route('trader_category', $category->slug) }}">{{ $category->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
        
                            </div>
                            
                            <div class="recent-block col-md-12">
                                <h5 class="legend col-md-12">Recent Post</h5>
                                <!-- ITEM-->
                                <div class="clearfix col-md-12">
                                    <ul class="typo-lights list-unstyled text-capitalize">
                                        @foreach($desc_blogs as $blog)
                                        <li class="border-bottom-style-2 bottom-margin-vsm">
                                            <a href="{{ route('fulltraderpost',$blog->page_url) }}">{{ $blog->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
        
                            </div>
                        </div>
                    </div>
                    <!-- SIDEBAR END -->            		                	
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

  // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zurück
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

  // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zurück
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