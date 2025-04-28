@extends('layouts.financepro2')
<!--mac-->
@section('meta_title', 'Reliable Copy Trading from Corporate Traders')
@section('meta_desc', 'Follow our Expert Traders with 22 years experience, and copy the trades we are doing on Crude
Oil, forex pair XBRUSD')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading tips, SOCIAL TRADING, social
trader, ccopy trading, Copy trader, Copier trading, Copy trading platforms, Copytrader, Forex copy trading')
<!--mac-->

@section('css_links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.1.0/src/lite-yt-embed.css" />

    <!-- Preloading Images -->
    <link rel="preload" as="image" href="https://i.ytimg.com/vi/JV_Wmsygmpw/hqdefault.jpg">
    <link rel="preload" as="image" href="https://i.ytimg.com/vi/8mpqRELw18I/hqdefault.jpg">
    <!-- Preloading Images End -->
@endsection

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
            body::after {
                position: absolute;
                width: 0;
                height: 0;
                overflow: hidden;
                z-index: -1;
                content: url(../cdn.statically.io/img/learn2.trade/f%3dauto%2cq%3d10/wp-content/uploads/2019/10/banner-img2.jpg);
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
                filter: drop-shadow(2.5px 4.33px 4px rgba(0, 0, 0, 0.2));
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
                filter: drop-shadow(2.5px 4.33px 4px rgba(0, 0, 0, 0.2));
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
                    filter: drop-shadow(2.5px 4.33px 4px rgba(0, 0, 0, 0.2));
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

            .borderless {
                padding: 0px;
            }

            .borderless td,
            .borderless th {
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
                z-index: 111;
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
                h1, h2 {
                    font-size: 30px !important;
                    line-height: 1.3;
                }
                .modal-content {
                    width: 100%;
                }

                .top-banner {
                    padding-top: 150px;
                }
                .banner-left-top {
                    width: 100%;
                    padding-top: 0;
                    margin-right: 0;
                    padding: 10px;
                }
                .banner-left-top h1 {
                    font-size: 30px;
                    padding-right: 50px;
                }
                .banner-left-top h5.text-white {
                    font-size: 13px;
                    padding-right: 50px;
                }
                .banner-right-top {
                    float: none;
                    width: 100%;
                }
                .banner-right-top .broker-top h2 {
                    font-size: 20px;
                }

                .dont-miss-out-anymore h2 {
                    line-height: 1.3;
                    font-size: 30px !important;
                    margin-top: 0px !important;
                    margin-bottom: 0px !important;
                }

                .listen-to-customer {
                    padding-top: 0;
                }
                .listen-to-customer h2 {
                    font-size: 30px;
                    line-height: 1.3;
                }
                .listen-to-customer h4 {
                    font-size: 20px;
                    line-height: 1.3;
                }
                .listen-to-customer iframe {
                    width: 100%;
                }
                .do-you-want-to-see h2 {
                    font-size: 30px !important;
                    line-height: 1.3;
                    padding: 10px;
                }
                .do-you-want-to-see p {
                    font-size: 13px !important;
                }
                .outer-container .outer-row {
                    display: block;
                }
                .outer-container .left-wrapper {
                    max-width: 100% !important;
                }
                .home-banner-form h3 {
                    font-size: 20px;
                }
                .notifications-right {
                    display: none;
                }
                .adbox-section3 {
                    display: none;
                }
                .outer-container .right-wrapper {
                    flex: 0 0 26%;
                    max-width: 100%;
                    padding: 0;
                    margin-left: 0;
                    margin-top: 0;
                }
                .content-outer {
                    padding-bottom: 0px;
                }
                .choose-plan-click2 {
                    margin-bottom: 30px;
                }
            }
        </style>

        <section class="top-banner" style="position: relative; overflow: hidden; background-color: #33333340;">
            <img src="{{asset('uploads/imgs/2020/04/banner-img-1.jpg')}}" alt="No Image Found" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <div class="container">
                <div class="row">
                    <div class="banner-left-top">
                        <h1>Copy Trade, All our Corporate Trades</h1>
                        <h5 class="text-white">Imagine being able to Copy all Trades done by Pro Traders<br />
                            Become a Profitable Trader in 2025, by Copying our Trades.</h5>
                        <div class="fs-bnr-btn2">
                            <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Start Copy
                                Trading for FREE, Now</a>
                            <br />
                            <p style="text-align:center; color:#FFF">Hurry! Free for first 50 Customers Only</p>
                        </div>
                        <div class="hottopics-section">

                        </div>
                    </div>
                    <div class="banner-right-top">
                        <div class="detail-box mb25 broker-top">
                            <div class="top-broker">
                                <h2><span><i class="fa fa-star" aria-hidden="true"></i></span>Latest XBRUSD (Oil) Trades
                                    for Copying</h2>
                            </div>
                            <div class="broker-list">
                                <div class="table-borderless broker-table">
                                    @if($signals)
                                    @foreach($signals as $signal)
                                    <div class="odd-borderles">
                                        <div class="brokr-img" style="color:#fff; font-weight:bold;">
                                            {{$signal->item_name}}
                                            <?php if($signal->signal_type == 'vip'){ ?>
                                            <span class="label label-success"
                                                style="padding:5px 15px; background-color:orange;">VIP</span>
                                            <?php } else { ?>
                                            <span class="label label-danger"
                                                style="padding:5px 10px; background-color:gray;">FREE</span>
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
                                            <span>Stop Loss </span>
                                            {{$signal->stop_loss}}
                                        </div>
                                        <div class="list-gs">
                                            <span>Target</span>
                                            {{$signal->target_price}} USD
                                        </div>
                                        <div class="top-broker-list-btn">
                                            <!--<a href="{{ route('go-vip') }}">Trade Now</a>-->
                                            <?php if($signal->status == 1){ ?>
                                            <span class="label label-success"
                                                style="padding:10px 15px; background-color:green;">Profit</span>
                                            <?php } elseif($signal->status == 2) { ?>
                                            <span class="label label-danger"
                                                style="padding:10px 10px; background-color:red;">Stopped</span>
                                            <?php } else { ?>
                                            <span class="label label-danger"
                                                style="padding:10px 18px; background-color:gray;">Live</span>
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


        <!--first banner-->
        <section class="listen-to-customer">
            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-6">
                        <h2> Listen to a Customer with Many Years Experience in Forex Trading
                        </h2>

                        <h4>Experienced Forex Traders like Howard think it is important to follow Corporate Traders, and
                            Copy Trades. <br /><br />Do you want to keep experimenting with the Stock Market, or do you
                            want to actually make Profits?
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="background: transparent; ">
                            <div class="card-body">
                                <lite-youtube videoid="JV_Wmsygmpw" style="width: 100%; height: 315px;" playlabel="Play Video"></lite-youtube>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!--Second banner-->
        <section class="mysection bg-image bottom-padding-md typo-light" data-stellar-background-ratio="0.5"
            data-background="{{ asset('/images/video_background.jpg') }}">
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
                    <h2 style="text-align:left; margin-bottom:20px;font-size: 40px;font-weight: bold;"> Don't Miss a
                        XBRUSD (Crude Oil) Trade like this Again! </h2>
                    <h3>Our most recent BIG WIN Trade</h3>

                    <img src="{{ asset('images/signals/'.$last30day1->signal_img) }}" class="img-responsive newmg"
                        onclick="showme(this.src)">
                    <p>(click to enlarge)

                </div>

                <div class="col-md-4 col-xs-6">
                    @php
                    $date = \Carbon\Carbon::parse($last30day1->signal_date);
                    $formattedDate = $date->format('jS F, Y');
                    @endphp
                    <h2
                        style="text-align:left;margin-bottom: -10px;font-size: 30px;margin-top: 55px;font-weight: bold;">
                        Trade Details
                        <sup style="font-size: 16px;">({{ $formattedDate }})</sup>
                    </h2>
                    {{-- {{ dd($last30day1) }} --}}
                    <table class="table borderless">
                        <h2 style="text-align:left;margin-bottom: 0px;font-size: 20px;font-weight: bold;"> BUY
                            {{$last30day1->item_name}} </h2>
                        <tbody>
                            <tr>
                                <td style="text-align:left;font-weight: bold;font-size: 20px;">Open Price</td>
                                <td style="color: #24cae2;font-weight: bold;font-size: 20px;">
                                    {{$last30day1->open_price}}</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;font-weight: bold;font-size: 20px;">Target Price</td>
                                <td style="color: #24cae2;font-weight: bold;font-size: 20px;">
                                    {{$last30day1->target_price}}</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;font-weight: bold;font-size: 20px;">Stop Loss</td>
                                <td style="color: #24cae2;font-weight: bold;font-size: 20px;">{{$last30day1->stop_loss}}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:left;font-weight: bold;font-size: 20px;">Risk Reward</td>
                                <td style="color: #24cae2;font-weight: bold;font-size: 20px;">
                                    {{abs(round(($last30day1->target_price - $last30day1->open_price)
                                    /($last30day1->open_price-$last30day1->stop_loss) , 0))}} : 1 </td>
                            </tr>

                        </tbody>

                    </table>
                    <p style="margin-top: 0px;font-size: 30px;">
                        <b>Total Profit: {{ $hightpipsValue }} Pips</b>
                    </p>
                    <?php } ?>
                    @endforeach
                </div>

            </div>

            <div class="fs-bnr-btn23 dont-miss-out-anymore">
                <h2 style="text-align:center;margin-top: 70px;font-size: 40px;margin-bottom: -25px;font-weight: bold;">
                    Discover a New Life as a Profitable Trader in 2025. <br />Start Copy Trading our Company Trades
                    today. </h2>
                <a class="choose-plan-click2" href="{{ route('go-vip') }}" target="__blank">Start Copy Trading for FREE,
                    Now</a>
                <br />
                <p style="text-align:center; color:#FFF">Free for first 50 Customers Only</p>
            </div>
        </section>
        <!--End Second banner-->






        <div class="content-outer">
            <div class="outer-container">
                <div class="outer-row">
                    <div class="left-wrapper">
                        <!--first banner-->

                        <div class="container" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col-md-6">

                                    <h1> Discover Big Profits

                                        With Reliable <br /><br />Forex Copy Trading and Technical Analysis</h1>
                                    <h2>From Pro Traders with 22 Years Experience</h2>

                                </div>
                                <div class="col-md-6">
                                    <div class="card" style="background: transparent; ">
                                        <div class="card-body">
                                            <lite-youtube videoid="8mpqRELw18I" style="width: 100%; height: 315px;" playlabel="Play Video"></lite-youtube>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fs-bnr-btn23">
                            <h2
                                style="text-align:center;margin-top: 70px;font-size: 40px;margin-bottom: -25px;font-weight: bold;">
                                Do you want to see ALL our Trade History? </h2>
                            <br />
                            <p> Go head we show everything. Our XBRUSD Forecast is Accurate and Profitable. <br /> We
                                Help our clients make big profits. Click the button below to see all our Historical
                                Trades</p>

                            <a class="choose-plan-click2" href="{{ route('forex-signal') }}" target="__blank">Go to
                                Forex Trade HISTORY</a>
                        </div>

                        </section>




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

@section('scripts')
    <script type="module" src="https://cdn.jsdelivr.net/npm/lite-youtube-embed@0.1.0/src/lite-yt-embed.js"></script>
@endsection