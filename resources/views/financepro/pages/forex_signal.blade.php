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
                
                
                .mysection{
                      background-position: 50% -132.992px;
                      background-image: url(public/images/sammy.jpg) !important;
                      margin-top: -40px;
                       margin-bottom: 30px;
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
                       padding: 30px 0;
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

            </style>


        <!-- PAGE HEADING SECTION -->
        <section id="why-choose" class="">
            
            		
        	<div class="container">
            <!--sammy-->
           
            </div>
            </section>
            <section class="mysection bg-image bottom-padding-md parallax-bg typo-light" data-stellar-background-ratio="0.5" data-background="images/content/bg/elements/16.jpg">
                <div class="overlay-darker" style="z-index: -1;"></div>
                <div class="container text-left">
                   
                    <div class="row top-padding-sm">
                        <div class="col-md-4 col-xs-6">
                            <div class="text-center counter-wrapper hv-wrapper">
                                <!-- COUNTER NUMBER -->
                                <div data-count="{{$countRow }}" class="number-counter"><span class="counter">{{$countRow }}</span></div>
                                <!-- COUNTER TITLE -->
                                <h5 class="text-color">Total Signals</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="text-center counter-wrapper hv-wrapper">
                                <!-- COUNTER NUMBER -->
                                <div data-count="{{$liveCount}}" class="number-counter"><span class="counter">{{$liveCount}}</span></div>
                                <!-- COUNTER TITLE -->
                                <h5 class="text-color">Live Signals</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="text-center counter-wrapper hv-wrapper percentage">
                                <!-- COUNTER NUMBER -->
                                <div data-count="{{ $profitCount / ($profitCount + $lossCount) *100 }}" class="number-counter"><span class="counter">{{ $profitCount / ($profitCount + $lossCount) *100 }}</span></div>
                                <!-- COUNTER TITLE -->
                                <h5 class="text-color">Success Rate</h5>

                            </div>
                        </div>
                   
                    </div>
                    <a class="custom-btn" href="go-vip#premium-plan-outer" target="_blank">Get My FREE Forex Signals Now</a>
                </div>
            </section>
            
        <!-- PAGE HEADING SECTION -->
         
        <section id="why-choose" class="">
            
            		
        	<div class="container">
            	<div class="row">
            		<div class="col-md-12">
            			<!--<p>We have analysis available for the following <b>Currencies</b> companies.</p>-->
            			<!--<p>Our Professional UK Trader is analysing new companies every day so please come back and check every day for new analysis which will help you make better investment decisions and help you make more profit in the <b>Currencies</b>.</p>-->
            		
            		
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

								<tr>
									<td>
									    <div style="display:flex;">
									    <?php if(!empty($signal->signal_img)){ ?>
									        <!--<img src="{{ asset('images/signals/'.$signal->signal_img) }}" alt="{{$signal->item_name}}" width="120px;" id="myImg" />-->
									        <img src="{{ asset('images/signals/'.$signal->signal_img) }}" alt="{{$signal->item_name}}" width="120px;" onclick="showme(this.src)" />
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
									<td style="display:inline-block; width:100%;">
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
									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP for $1</a></td>
									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP for $1</a></td>
									    <td><a href="{{ route('go-vip') }}" target="__blank" class="govp">Go VIP for $1</a></td>
									<?php } else{ ?>
									    <td>{{$signal->open_price}}</td>
    									<td>{{$signal->target_price}}</td>
    									<td>{{$signal->stop_loss}}</td>
									<?php } ?>
									
									
									
								
									<!--sammy-->
									<td> {{abs(round(($signal->target_price - $signal->open_price)/($signal->open_price-$signal->stop_loss) , 0))}} : 1 </td>
									
									
									
									<!--mac-->
									<?php if($signal->item_name == 'XAU/USD' || $signal->item_name == 'SP500' || $signal->item_name == 'US2000' || $signal->item_name == 'DJIA'){ ?>
									    
									    <?php if($signal->status == '2'){ ?>
									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))*10}}</td>
									    <?php } else{ ?>
									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))*10}}</td>
									    <?php } ?>
									    
									    
									<?php } else if($signal->item_name == 'NASDAQ'){ ?>
									    
									    <?php if($signal->status == '2'){ ?>
									        <td> {{abs(round($signal->open_price - $signal->stop_loss, 4))}}</td>
									    <?php } else{ ?>
									        <td> {{abs(round($signal->open_price - $signal->target_price, 4))}}</td>
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