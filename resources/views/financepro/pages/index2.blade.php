@extends('layouts.financepro2')
<!--mac-->
@section('meta_title', 'Reliable Forex Signals for only $1 per day')
@section('meta_desc', 'Follow our Expert Traders with 20 years experience, and copy the trades we are doing on Forex, Commodities and Stock Market')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')

        <header id="masthead" class="site-header" role="banner">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            @include('financepro.includes.header_contentNew')
                        </div>
                    </div>
                </div>
        </header>
        <div class="site-content-contain">
            <div id="content" class="site-content">
                <style>
                    body::after{
                        position:absolute; 
                        width:0; 
                        height:0; 
                        overflow:hidden; 
                        z-index:-1;
                        content:url(../cdn.statically.io/img/learn2.trade/f%3dauto%2cq%3d10/wp-content/uploads/2019/10/banner-img2.jpg);
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
                        margin-top: 15px;
                        display: inline-block;
                        line-height: 22px;
                        filter: drop-shadow(2.5px 4.33px 4px rgba(0,0,0,0.2));
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
                    .fs-bnr-btn23 {
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
                    .hero-section {
                        padding: 25px 0 10px 25px;
                        background-size: cover !important;
                        border-radius: 10px;
                        position: relative;
                         margin-top: 0px; 
                        /* margin-bottom: 50px; */
                        margin-bottom: 20px;
                    }
                    .top-banner {
                        width: 100%;
                        background-size: cover !important;
                        /* padding: 140px 0 140px; */
                        padding: 240px 0 240px;
                        display: block;
                        /* margin-bottom: 0px !important; */
                    }
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
                 z-index: 111;
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
                <section class="top-banner" style="background:url({{asset('uploads/imgs/2020/04/banner-img-1.jpg')}})">
                    <div class="container">
                        <div class="row">
                            <div class="banner-left-top">
                                <h1>Quality XAUUSD Forecast, XAUUSD Technical Analysis</h1>
                                <h5 class="text-white">Check our History. High Accuracy XAUUSD Forex Signals. <br />
                                100 - 500 pips per Trade. We don't do small risky trades.</h5>
                                <div class="fs-bnr-btn2">
                                    <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Get My Free XAUUSD Forex Signal Now </a>
                                    <br /><p style="text-align:center; color:#FFF">Free for first 50 Customers Only</p>
                                </div>
                                <div class="hottopics-section">

                                </div>
                            </div>
                            <div class="banner-right-top">
                                <div class="detail-box mb25 broker-top">
                                    <div class="top-broker">
                                        <h2><span><i class="fa fa-star" aria-hidden="true"></i></span>Latest XAUUSD (Gold) Forex Signals</h2>
                                    </div>
                                    <div class="broker-list">
                                        <div class="table-borderless broker-table">
                                            @if($signals)
                                            @foreach($signals as $signal)
                                            <div class="odd-borderles">
                                                <div class="brokr-img" style="color:#fff; font-weight:bold;">
                                                    {{$signal->item_name}}
            									    <?php if($signal->signal_type == 'vip'){ ?>
            									        <span class="label label-success" style="padding:5px 15px; background-color:orange;">VIP</span>
            									    <?php } else { ?>
            									        <span class="label label-danger" style="padding:5px 10px; background-color:gray;">FREE</span>
            									   <?php } ?>                                                    
                                                    <!--<a href="https://www.longhornfx.com/?utm_source=learn2tradefb" class="angle-right"><img src="../cdn.statically.io/img/learn2.trade/f%3dauto%2cq%3d10/wp-content/uploads/2020/09/long-wite.png" alt="">-->
                                                    </a>
                                                </div>
                                                <div class="forex2">
            									    <?php if($signal->target_price > $signal->open_price){ ?>
            									        <img src="{{ asset('/uploads/profit.png') }}" alt="Profit" width="20px" />
            									    <?php } else { ?>
            									        <img src="{{ asset('/uploads/loss.png') }}" alt="Loss" width="20px" />
            									   <?php } ?>
                                                </div>
                                                <div class="forex">
                                                    <span>Stop Loss  </span>
                                                        {{$signal->stop_loss}}
                                                </div>
                                                <div class="list-gs">
                                                    <span>Target</span>
                                                {{$signal->target_price}} USD</div>
                                                <div class="top-broker-list-btn">
                                                    <!--<a href="{{ route('go-vip') }}">Trade Now</a>-->
            							            <?php if($signal->status == 1){ ?>
            									        <span class="label label-success" style="padding:10px 15px; background-color:green;">Profit</span>
            									    <?php } elseif($signal->status == 2) { ?>
            									        <span class="label label-danger" style="padding:10px 10px; background-color:red;">Stopped</span>
            									   <?php } else { ?>
            									        <span class="label label-danger" style="padding:10px 18px; background-color:gray;">Live</span>
            									   <?php } ?>                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                
<!--Second banner-->
<section class="mysection bg-image bottom-padding-md typo-light" data-stellar-background-ratio="0.5" data-background="{{ asset('/images/video_background.jpg') }}">   
<div class="overlay-dark" style="z-index: -1;"></div>
    <div class="container">
       
        <?php $cars = array();
                       
                    ?>

                     
                     @foreach($last30days as $last30day)
                        <?php if($last30day->item_name == 'XAU/USD' || $last30day->item_name == 'SP500' || $last30day->item_name == 'US2000' || $last30day->item_name == 'DJIA'){ 
									    
						    if($last30day->status == '2'){ 
						        $cars[$last30day->id] =  abs(round($last30day->open_price - $last30day->stop_loss, 4))*10;
						    } elseif($last30day->status == '1'){
						        $cars[$last30day->id] = abs(round($last30day->open_price - $last30day->target_price, 4))*10;
						    } 
						    
						    
						} else if($last30day->item_name == 'NASDAQ'){ 
						    
						    if($last30day->status == '2'){ 
						        $cars[$last30day->id] =  abs(round($last30day->open_price - $last30day->stop_loss, 4))*10;
						    } elseif($last30day->status == '1'){
						        $cars[$last30day->id] = abs(round($last30day->open_price - $last30day->target_price, 4))*10;
						    } 
						    
						    
					    } else if($last30day->item_name == 'XBR/USD'){ 
						    
						    if($last30day->status == '2'){ 
						        $cars[$last30day->id] =  abs(round($last30day->open_price - $last30day->stop_loss, 4))*100;
						    } elseif($last30day->status == '1'){
						        $cars[$last30day->id] = abs(round($last30day->open_price - $last30day->target_price, 4))*100;
						    } 
						    
						} else{ 
						    
						    if($last30day->status == '2'){ 
						        $cars[$last30day->id] =  abs(round($last30day->open_price - $last30day->stop_loss, 4))*10000;
						    } elseif($last30day->status == '1'){
						        $cars[$last30day->id] = abs(round($last30day->open_price - $last30day->target_price, 4))*10000;
						    } 
						    
						} ?>
						
						
                      @endforeach
                        <?php  
                        arsort($cars);
                        $hightpipsID = $hightpipsValue = $i = 0;
                            	foreach ($cars as $key => $value) {
                            	    if($i == 0){
                            	        $hightpipsID = $key;
                            	        $hightpipsValue = $value;
                            	        
                            	    }
                            	    $i++;
                        		} ?>
                        		
          @foreach($last30days as $last30day1) 
          <?php  $fid = $last30day1->id;
            if($hightpipsID == $fid){ ?>
            
        <div class="col-md-8 col-xs-6">
            <h2 style="text-align:left; margin-bottom:20px;font-size: 40px;font-weight: bold;"> Don't Miss a XAUUSD (Gold) Trade like this Again! </h2>
            <h3>Our most recent BIG WIN Trade</h3>
            
           <img src="{{ asset('public/images/signals/'.$last30day1->signal_img) }}" class="img-responsive newmg" onclick="showme(this.src)">
           <p>(click to enlarge)
           
        </div>
        
        <div class="col-md-4 col-xs-6">
            @php
                $date = \Carbon\Carbon::parse($last30day1->signal_date);
                $formattedDate = $date->format('jS F, Y');
            @endphp
            <h2 style="text-align:left;margin-bottom: -10px;font-size: 30px;margin-top: 55px;font-weight: bold;"> 
                Trade Details 
                <sup style="font-size: 16px;">({{ $formattedDate }})</sup>
            </h2>
                {{-- {{ dd($last30day1) }} --}}
            <table class="table borderless">
                <h2 style="text-align:left;margin-bottom: 0px;font-size: 20px;font-weight: bold;"> BUY {{$last30day1->item_name}} </h2>
                <tbody>
                <tr>
                    <td style="text-align:left;font-weight: bold;font-size: 20px;">Open Price</td>
                    <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{$last30day1->open_price}}</td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight: bold;font-size: 20px;">Target Price</td>
                    <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{$last30day1->target_price}}</td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight: bold;font-size: 20px;">Stop Loss</td>
                    <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{$last30day1->stop_loss}}</td>
                </tr>
                <tr>
                    <td style="text-align:left;font-weight: bold;font-size: 20px;">Risk Reward</td>
                    <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{abs(round(($last30day1->target_price - $last30day1->open_price) /($last30day1->open_price-$last30day1->stop_loss) , 0))}} : 1 </td>
                </tr>
                
                </tbody>
                
            </table>
            <p style="margin-top: 0px;font-size: 30px;">
                <b>Total Profit: {{ $hightpipsValue }} Pips</b></p>
            <?php } ?>
            @endforeach
        </div>
         
    </div>
    
    <div class="fs-bnr-btn23">
        <h2 style="text-align:center;margin-top: 70px;font-size: 40px;margin-bottom: -25px;font-weight: bold;"> Don't Miss Out Anymore. Join us for FREE Today. </h2>
        <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Get My Gold Forex Signals for Free Now</a>
        <br /><p style="text-align:center; color:#FFF">Free for first 50 Customers Only</p>
    </div>
</section>
<!--End Second banner-->
 
 
 
<!--first banner-->
<section>   
<div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="col-md-6">
        
          <h2> Listen to a Customer with Many Years Experience in XAUUSD Forex Trading
           </h2>
           
           <h4>Experience
           
             d Forex Traders like Howard think it is important to follow our XAUUSD Forex Signals. <br /><br />Do you think you should also be using our Gold Trading Signals to improve your Profits?
           </h4>
           
          
      </div>
      <div class="col-md-6">
        <div class="card" style="background: transparent; ">
          <div class="card-body">  <iframe width="560" height="315" src="https://www.youtube.com/embed/JV_Wmsygmpw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
        </div>
      </div>
    </div>
  </div>
  
  </section>
  
  
  <!--first banner-->
<section class="mysection bg-image bottom-padding-md typo-light" data-stellar-background-ratio="0.5" width="100%" data-background="{{ asset('/images/newgreen.jpg') }}">   
<div class="overlay-dark" style="z-index: -1;"></div>
<div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="col-md-6">
        
            <h1> Discover Big Profits
            <br />
          	With Reliable <br />XAUUSD Forecast and Technical Analysis</h1>
            <h2>From Traders <br />with 20 Years Experience</h2>
          
      </div>
      <div class="col-md-6">
        <div class="card" style="background: transparent; ">
          <div class="card-body">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/X1Va1hWnf6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="fs-bnr-btn23">
        <h2 style="text-align:center;margin-top: 70px;font-size: 40px;margin-bottom: -25px;font-weight: bold;"> Do you want to see ALL our Trade History? </h2>
        <br />
        <p> Go head we show everything. Our XAUUSD Forecast is Accurate and Profitable. <br /> We Help our clients make big profits. Click the button below to see all our Historical Trades</p>
        
        <a class="choose-plan-click2" href="{{ route('forex-signal') }}" target="__blank">Go to XAUUSD Forecast HISTORY</a>
    </div>
  
  </section>


                
                <div class="content-outer">
                    <div class="outer-container">
                        <div class="outer-row">
                            <div class="left-wrapper">
                                <section class="hero-section" style="background:url(../cdn.statically.io/img/learn2.trade/f%3dauto%2cq%3d10/wp-content/uploads/2019/10/banner-img2.jpg)0 0 no-repeat;">
                                    <div class="content">
                                        <div class="home-left-form">
                                            <div class="home-banner-form banner-form">
                                                <h3>
                                                    Is it Worth Paying To Copy All our Trades - For You to Become a Profitable Trader?
                                                </h3>
                                            </div>
                                            <ul class="telegrame_list">
                                                <li>Real Time Alert when we Trade</li>
                                                <li>Full Trade Details, Price, Target, Stop Loss</li>
                                                <li>Trading Signals on Telegram</li>
                                                <li>Copy us directly using MT4 platform</li>
                                                <!-- <li>Real-time alerts, all via Telegram!</li> -->
                                            </ul>
                                            <a class="telegram_btn" href="{{ route('go-vip') }}" target="__blank">Get My XAUUSD Forex Signals for FREE Now</a>
                                            <br /><p style="text-align:center; color:#FFF">Free for first 50 Customers Only</p>
                                        </div>
                                        <div class="notifications-right">
                                            <div class="notifications-top notifications">
                                                <div class="notifications-img"><img src="{{ asset('uploads/imgs/2020/04/notifications.png')}}" alt=""></div>
                                                <h3>notifications </h3>
                                                <p>Immediate alerts to your email</p>
                                            </div>
                                            <div class="notifications-top leading">
                                                <div class="notifications-img"><img src="{{ asset('uploads/imgs/2020/04/MarketLeading.png')}}" alt=""></div>
                                                <h3>Market Leading</h3>
                                                <p>Between 1-3 Accurate, Profitable Signals Per Day!</p>
                                            </div>
                                            <img src="{{ asset('uploads/imgs/2020/04/Insert-Artwork.png')}}" alt="">
                                            <div class="notifications-top experts">
                                                <div class="notifications-img"><img src="{{ asset('uploads/imgs/2020/04/Bitcoin.png')}}" alt=""></div>
                                                <h3>Forex Experts</h3>
                                                <p>Daily Technical Analysis and Trading Tips</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                              
                                
                               
                                <section class="adbox-section3">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="adbox-section2-inner">
                                                <div class="forexnews forexnews-home">
                                                    <p>&nbsp;</p>
                                                    <h2>&nbsp;</h2>
                                                    <p>
                                                      <center></center>
                                                    </p>
                                                    <p>
                                                        <center></center>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="right-wrapper">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="sidebar">
                                            <div class="trade-again-outer">
                                                
                                                <div class="trade-again-inner">
                                                    <div class="step-outer">
                                                        <div class="step-left-img"><img src="{{asset('uploads/imgs/step-1.png')}}" alt=""></div>
                                                        <div class="step-right">
                                                            <span>Step 1</span>
                                                            <h5>Signal Notification</h5>
                                                            <p>Real-time signal notifications whenever a signal is opened, closes or Updated</p>
                                                        </div>
                                                    </div>
                                                    <div class="step-outer">
                                                        <div class="step-left-img"><img src="{{asset('uploads/imgs/step-2.png')}}" alt=""></div>
                                                        <div class="step-right">
                                                            <span>Step 2</span>
                                                            <h5>Get Alerts</h5>
                                                            <p>Immediate alerts to your email and mobile phone.</p>
                                                        </div>
                                                    </div>
                                                    <div class="step-outer">
                                                        <div class="step-left-img"><img src="{{asset('uploads/imgs/step-3.png')}}" alt=""></div>
                                                        <div class="step-right">
                                                            <span>Step 3</span>
                                                            <h5>Entry Price Levels</h5>
                                                            <p>Entry price level for every signal Just choose one of our Top Brokers in the list above to get all this free.</p>
                                                        </div>
                                                    </div>
                                                    <div class="premium-inn"> <a href="{{ route('go-vip') }}" target="__blank" class="see-more">Go Premium</a></div>
                                                </div>
                                            </div>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal" id="modal">
                             <div class="close" id="close">&times;</div>
                             <img id="modal-image" class="modal-content">
                             <div class="caption"></div>
                         </div>
@endsection