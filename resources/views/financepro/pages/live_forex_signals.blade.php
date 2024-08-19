@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', 'All our Latest Forex Signals for $1 per day')
@section('meta_desc', 'High accuracy rate and up to date forex signals for  for XAUUSD, XBRUSD, EURUSD, GBPUSD')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')

<?php

function to_time_ago( $time ) {
      
    // Calculate difference between current
    // time and given timestamp in seconds
    $diff = time() - $time;
    //   echo $diff; die();
    if( $diff < 1 ) { 
        return 'less than 1 second ago'; 
    }
      
    $time_rules = array ( 
                12 * 30 * 24 * 60 * 60 => 'year',
                30 * 24 * 60 * 60       => 'month',
                24 * 60 * 60           => 'day',
                60 * 60                   => 'hour',
                60                       => 'minute',
                1                       => 'second'
    );
  
    foreach( $time_rules as $secs => $str ) {
          
        $div = $diff / $secs;
  
        if( $div >= 1 ) {
              
            $t = round( $div );
              
            return $t . ' ' . $str . 
                ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}

?>

<!-- PAGE HEADING SECTION -->
        <section class="page-header minimal page-title-left light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <!-- TITLE-->
                        <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Live Forex Signals</h2>
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
                    <p style="margin-top:-18px;">Meaning we make {{(int)abs(round($total_ppip / $total_lpip,2))}}x MORE PROFIT than losses.</p>
                    
                </div>
                 
            </div>
            <div class="fs-bnr-btn2">
                <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Get My Forex Signals for $1 Now</a>
            </div>
        </section>
        <!--End First banner-->
        
        
        <!--2nd banner-->
        <!--<div class="container-fluid nopadd">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-12"><img src="https://financialmarkets.club/images/new111.jpg" class="img-responsive" style="width: 100%;"></div> -->
        <!--    </div>-->
        <!--</div>-->
        <!--End 2nd banner-->
        
        
        <style>
            .flex-nowrap {
                flex-wrap: nowrap!important;
            }
            .flex-wrap {
                flex-wrap: wrap!important;
            }
            
            .flex-row {
                flex-direction: row!important;
            }
            .d-flex {
                display: flex!important;
            }
            .signal-card .card-header {
                border-radius: 0;
                font-size: 1.5em;
                font-weight: 700;
            }
            .ms-auto {
                margin-left: auto!important;
            }
            
            
            .card-header {
                padding: 0.5rem 1rem;
                margin-bottom: 0;
                background-color: rgba(0,0,0,.03);
                border-bottom: 1px solid rgba(0,0,0,.125);
            }
            .signal-card.sell .card-header {
                background-color: #e097a2;
            }
                .signal-card {
                    border: 1px solid gray;
                    border-radius: 0;
                }
                .card {
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    min-width: 0;
                    word-wrap: break-word;
                    background-color: #fff;
                    background-clip: border-box;
                    border: 1px solid rgba(0,0,0,.125);
                    border-radius: 0.25rem;
                }
            .signal-card.sell .card-body {
                background-color: #ffb6c1;
            }
            .card-body {
                flex: 1 1 auto;
                padding: 1rem 1rem;
            }
            
                .signal-card.sell {
                    border-color: darkred;
                }
                
            .signal-card .card-body .signal-row:not(:last-of-type) {
                border-bottom: 1px dotted;
            }
            
            
            .signal-card .card-header {
                border-radius: 0;
                font-size: 1.5em;
                font-weight: 700;
            }    
                    .signal-group {
                        display: flex;
                        flex-flow: row wrap;
                    }
                    .signal-card .card-header .flag-icon svg {
                        height: 22.4px;
                        height: 1.4rem;
                        width: 32px;
                        width: 2rem;
                    }
                    img, svg {
                        vertical-align: middle;
                    }
            .signal-card .card-body .signal-row.signal-status {
                font-size: 1.6em;
                font-weight: 700;
                padding: 0.4rem 0;
                text-align: center;
            }
            .signal-card.filled .signal-color {
                color: #666;
            }
        
            .me-2 {
                margin-right: 0.5rem!important;
            }    
            @media (min-width: 768px){
                
                .signal-group .signal-card {
                    flex: 1 0 0%;
                }
            }    
            
        </style>
        
        <section >
            <div class="container" style="height:auto !important;">
                <h1 style="text-align: center; text-decoration: underline; margin:40px auto;">Free Forex Signals</h1>
                <div class="signal-group mb-1">
        
            	    @if($signalsLimited)
            	    <?php
            	        $box_color = $type = '';
            	    ?>
            	    <?php $count = 1;?>
            	    <div class="row">
        		    @foreach($signalsLimited as $signal)       
    		            <?php 
    		            if($signal->status == 1){ 
    		                $box_color = 'background-color: #00800073;';
    				        $type = 'Profit';
    				    } elseif($signal->status == 2) {
    				        $box_color = 'background-color: #ff00007a;';
    				        $type = 'Stopped';
    				    } else { 
    				        $box_color = 'background-color: #d9d6d6;';
    				        $type = 'Live';
    				    } ?>
    				    <div class="col-md-4 col-sm-12" style="margin-top:10px;">
                        <div class="card signal-card " style="<?= $box_color; ?>">
                        	<div class="card-header d-flex flex-row flex-nowrap ">
                        		<div class="d-flex flex-row flex-wrap">
                        			<div class="me-2">
                        				<!--<span class="flag-icon"><svg xmlns="http://www.w3.org/2000/svg"><use href="#flag-icons-eu"></use></svg></span>-->
                        				<!--<span class="flag-icon">-->
                        				<!--    <svg xmlns="http://www.w3.org/2000/svg"><use href="#flag-icons-us"></use></svg>-->
                        				<!--</span>-->
                        				<img src="{{ asset('public/images/signals/'.$signal->signal_img) }}" height="25px" width="50px" />
                        			</div>
                        			<div class="">
                        				<a href="javascript:void(0)" title="Free {{$signal->item_name}} Forex signal">{{$signal->item_name}}</a>
                        			</div>
                        		</div>
                        <!--		<span class="ms-auto">-->
                    				<!--<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" viewBox="0 0 32 32" stroke="darkred" stroke-width="5" fill="none">-->
                        <!--                <path d="M 2 14 l 6 -6 l 20 20"></path>-->
                        <!--                <polygon points="31,31 26,31 31,26"></polygon>-->
                        <!--            </svg>		-->
                        <!--        </span>-->
                        	</div>
                        	<div class="card-body">
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">{{$signal->item_name}} signal</div>
                        			<div class="ms-auto signal-value signal-color">
                        				<span class="timeago fw-normal small" datetime="1666346280000" timeago-id="1"><?php echo to_time_ago((strtotime($signal->created_at)) - 5); ?></span>
                        			</div>
                        		</div>
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">
                        				From 
                        			</div>
                        			<div class="ms-auto signal-value signal-color">
                        				<!--<span class="fw-normal small">UTC<script>w(tzo());</script>+06:00</span>-->
                        				<!--<script>w(hhmm(1666346280));</script>15:58-->
                        				<?php echo gmdate('d.m.Y H:i', strtotime($signal->created_at)); ?> 
                        			</div>
                        		</div>
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">
                        				Till 
                        			</div>
                        			<div class="ms-auto signal-value signal-color">
                        				<!--<span class="fw-normal small">UTC<script>w(tzo());</script>+06:00</span>-->
                        				<!--<script>w(hhmm(1666357080));</script>18:58-->
                        				<?php echo gmdate('d.m.Y H:i', strtotime($signal->signal_date)); ?> 
                        			</div>
                        		</div>
                        		<div class="signal-row signal-status signal-color">
                		            <?php echo $type; ?>
                        		</div>
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">
                        				Open Price 
                        			</div>
                        			<div class="ms-auto signal-value signal-color user-select-all">
                        				<script>f('FPFHLI');</script>{{$signal->open_price}}
                        			</div>
                        		</div>
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">
                        				Target Price
                        			</div>
                        			<div class="ms-auto signal-value signal-color user-select-all">
                        				<script>f('FPFHK');</script>{{$signal->target_price}}
                        			</div>
                        		</div>
                        		<div class="d-flex flex-row flex-wrap signal-row">
                        			<div class="signal-title">
                        				Stop Loss 
                        			</div>
                        			<div class="ms-auto signal-value signal-color user-select-all">
                        				<script>f('FPFHPN');</script>{{$signal->stop_loss}}
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        </div>
                        <?php if(($count > 2) && ($count % 3 == 0)) { ?>
                <!--</div>-->
                            
                    <div class="text-center mt-1 mb-1 col col-md-12 col-sm-12" style="height: auto !important; margin-top:10px;margin-bottom:5px;">
                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

                        <ins class="adsbygoogle" style="display: inline-block;  max-height: 300px; height: 90px;" data-ad-client="ca-pub-2085830036333308" width="100%" data-ad-slot="9499959007" data-ad-format="horizontal" data-adsbygoogle-status="done" data-ad-status="filled"><div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none;width:750px; height: 90px;  margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;" width="100%"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;height:90px;" width="100%" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" max-width="750" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2085830036333308&amp;output=html&amp;h=90&amp;slotname=9499959007&amp;adk=4232342845&amp;adf=3175363789&amp;pi=t.ma~as.9499959007&amp;w=1200&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1666713020&amp;rafmt=2&amp;format=1200x90&amp;url=https%3A%2F%2Flive-forex-signals.com%2Fen%2F&amp;fwr=0&amp;rpe=1&amp;resp_fmts=2&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTA2LjAuNTI0OS4xMTkiLFtdLGZhbHNlLG51bGwsIjY0IixbWyJDaHJvbWl1bSIsIjEwNi4wLjUyNDkuMTE5Il0sWyJHb29nbGUgQ2hyb21lIiwiMTA2LjAuNTI0OS4xMTkiXSxbIk5vdDtBPUJyYW5kIiwiOTkuMC4wLjAiXV0sZmFsc2Vd&amp;dt=1666713019895&amp;bpp=18&amp;bdt=443&amp;idt=216&amp;shv=r20221020&amp;mjsv=m202210170101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D871b6b570c787423-2239e9ae65d70077%3AT%3D1666266484%3ART%3D1666266484%3AS%3DALNI_MZho1qQZj23KCjtb-k3nIHRlVr_jw&amp;gpic=UID%3D00000b67eff9885b%3AT%3D1666266484%3ART%3D1666711266%3AS%3DALNI_MY-74Rlv0ehIhn0GWjLXFC2hMC76Q&amp;correlator=2374603075564&amp;frm=20&amp;pv=2&amp;ga_vid=224192605.1666266484&amp;ga_sid=1666713020&amp;ga_hid=942674170&amp;ga_fc=1&amp;ga_cid=1301288432.1666711265&amp;u_tz=360&amp;u_his=2&amp;u_h=1200&amp;u_w=1600&amp;u_ah=1160&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=192&amp;ady=442&amp;biw=1583&amp;bih=1016&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C44759837%2C44774648%2C42531705%2C44774652%2C31070424%2C44775017&amp;oid=2&amp;pvsid=829733050729541&amp;tmod=1625225134&amp;uas=0&amp;nvt=3&amp;eae=0&amp;fc=640&amp;brdim=1366%2C0%2C1366%2C0%2C1600%2C0%2C1600%2C1160%2C1600%2C1016&amp;vis=1&amp;rsz=%7C%7CEe%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=rSdl6jq6Je&amp;p=https%3A//live-forex-signals.com&amp;dtd=275" data-google-container-id="a!1" data-google-query-id="CO3F5uzd-_oCFYo7aAod_I8AGw" data-load-complete="true"></iframe></div></ins>    

                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                    </div>                            
                            
                <!--<div class="signal-group mb-1">-->
                        <?php } ?>
                        
                        <?php $count++; ?>
                    @endforeach
                    </div>
                    @endif
                    
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