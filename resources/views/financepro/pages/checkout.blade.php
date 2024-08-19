<!DOCTYPE html>

<html>

    <head>



    @include('financepro.includes.headNew')

    

    <!--<link rel='stylesheet' id='wp-amc-public-css-css'href="{{asset('uploads/css/wp-amc-public.css')}}" media='all' />     -->



    <!--<link rel='stylesheet' id='wpos-swiper-style-css'href="{{asset('uploads/css/swiper.min.css')}}" media='all' />-->



    <!--<link rel='stylesheet' id='finixio-in-content-provider-plugin-styles-css'href="{{asset('uploads/css/in-content-provider-styles.css')}}" media='all' />-->



    <script src="{{asset('uploads/js/jquery/jquery.min.js')}}" id='jquery-core-js'></script>



    <!-- <script id='tapfiliate-js-js' data-type="lazy" data-src="https://script.tapfiliate.com/tapfiliate.js"></script> -->

    

    <!--<link rel='stylesheet' id='bootstrap-css'href='https://learn2.trade/wp-content/themes/twentytwenty-child/bootstrap/css/bootstrap.css' media='all' />-->

    <link rel='stylesheet' id='bootstrap-grid-css'href='https://learn2.trade/wp-content/themes/twentytwenty-child/bootstrap/css/bootstrap-grid.css' media='all' />

    <link rel='stylesheet' id='bootstrap-reboot-css'href='https://learn2.trade/wp-content/themes/twentytwenty-child/bootstrap/css/bootstrap-reboot.css' media='all' />

    <!--<link rel='stylesheet' id='twentytwenty-style-css'href='https://learn2.trade/wp-content/themes/twentytwenty-child/style.css' media='all' />-->

    <link rel='stylesheet' id='woocommerce-general-css'href='//learn2.trade/wp-content/plugins/woocommerce/assets/css/twenty-twenty.css' media='all' />



    <link rel='stylesheet' id='l2t-front-css-css'href='https://learn2.trade/wp-content/plugins/learn2trade-telegram-bot/public/css/style.css' media='all' />

    

    <link href="{{asset('uploads/css/forex-signal-new.css')}}" rel="stylesheet">



</head>

<body>

    

    <header>

        @include('financepro.includes.header_contentNew')

    </header>



   

    <div class="site-content-contain">

        <div class="site-content">

            <div class="banner_top" style="background: url('{{ asset('uploads/imgs/Forex-Signals-1.jpg')}}');">

                <h1>Your Order</h1>

            </div>            

        </div>

        

    	@if(session('message'))

    	<div class="alert alert-success" style="font-size: 12px;text-align:center;">

    		<button type="button" aria-hidden="true" class="close"

    		onclick="this.parentElement.style.display='none'">×</button>

    		<span>{{ session('message') }}</span>

    	</div>

	    @endif

	    

        <div id="content" class="site-content" style="width:80%; margin:0 auto;">



            <div class="container" style="width:80%;">

          <div class="text-center">

            

            <!--<h2>Checkout form</h2>-->

            <!--<p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>-->

          </div>



        <div class="row">

            <div class="col-md-4 order-md-2 mb-4">

              <h4 class="d-flex justify-content-between align-items-center mb-3">

                <span class="text-muted">Your cart</span>

                <!--<span class="badge badge-secondary badge-pill">3</span>-->

              </h4>

              <ul class="list-group mb-3">

                <li class="list-group-item d-flex justify-content-between lh-condensed">

                  <div>

                    <h6 class="my-0">{{$package->p_name}}</h6>
                  </div>

                  @php
                    $packagePrice = (float)$package->p_cost;

                    if (request()->hasCookie('discount50percent') && $package->id == 3) {
                      $packagePrice = 59;
                    } elseif (request()->hasCookie('discount50percent') && $package->id == 2) {
                      $packagePrice = 37;
                    } else {
                      $packagePrice;
                    }
                    
                    if($package->id == 3){
                        $total = $packagePrice * 12;
                        $total = '$'.ceil($total);
                    } elseif ($package->id == 4){
                        $total = $packagePrice * 3;
                        $total = '$'.ceil($total);
                    } else {
                        $total = '$'.$packagePrice;
                    }
                  @endphp

                  <span style="font-size:14px;" class="text-muted">
                    <strong>{{ $total }}</strong>
                  </span>

                </li>

                <li class="list-group-item d-flex justify-content-between">

                  <span style="font-size:16px;">Total (USD)</span>

                  <strong style="font-size:14px;">{{ $total }}</strong>

                </li>

              </ul>

        

              <!--<form class="card p-2">-->

              <!--  <div class="input-group">-->

              <!--    <input type="text" class="form-control" placeholder="Promo code">-->

              <!--    <div class="input-group-append">-->

              <!--      <button type="submit" class="btn btn-secondary">Redeem</button>-->

              <!--    </div>-->

              <!--  </div>-->

              <!--</form>-->

            </div>

                

                

            <style>

                /* Absolute Center Spinner */

                .loading {

                  position: fixed;

                  z-index: 999;

                  height: 2em;

                  width: 2em;

                  overflow: show;

                  margin: auto;

                  top: 0;

                  left: 0;

                  bottom: 0;

                  right: 0;

                }

                

                /* Transparent Overlay */

                .loading:before {

                  content: '';

                  display: block;

                  position: fixed;

                  top: 0;

                  left: 0;

                  width: 100%;

                  height: 100%;

                    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

                

                  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));

                }

                

                /* :not(:required) hides these rules from IE9 and below */

                .loading:not(:required) {

                  /* hide "loading..." text */

                  font: 0/0 a;

                  color: transparent;

                  text-shadow: none;

                  background-color: transparent;

                  border: 0;

                }

                

                .loading:not(:required):after {

                  content: '';

                  display: block;

                  font-size: 10px;

                  width: 1em;

                  height: 1em;

                  margin-top: -0.5em;

                  -webkit-animation: spinner 150ms infinite linear;

                  -moz-animation: spinner 150ms infinite linear;

                  -ms-animation: spinner 150ms infinite linear;

                  -o-animation: spinner 150ms infinite linear;

                  animation: spinner 150ms infinite linear;

                  border-radius: 0.5em;

                  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;

                box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;

                }

                

                /* Animation */

                

                @-webkit-keyframes spinner {

                  0% {

                    -webkit-transform: rotate(0deg);

                    -moz-transform: rotate(0deg);

                    -ms-transform: rotate(0deg);

                    -o-transform: rotate(0deg);

                    transform: rotate(0deg);

                  }

                  100% {

                    -webkit-transform: rotate(360deg);

                    -moz-transform: rotate(360deg);

                    -ms-transform: rotate(360deg);

                    -o-transform: rotate(360deg);

                    transform: rotate(360deg);

                  }

                }

                @-moz-keyframes spinner {

                  0% {

                    -webkit-transform: rotate(0deg);

                    -moz-transform: rotate(0deg);

                    -ms-transform: rotate(0deg);

                    -o-transform: rotate(0deg);

                    transform: rotate(0deg);

                  }

                  100% {

                    -webkit-transform: rotate(360deg);

                    -moz-transform: rotate(360deg);

                    -ms-transform: rotate(360deg);

                    -o-transform: rotate(360deg);

                    transform: rotate(360deg);

                  }

                }

                @-o-keyframes spinner {

                  0% {

                    -webkit-transform: rotate(0deg);

                    -moz-transform: rotate(0deg);

                    -ms-transform: rotate(0deg);

                    -o-transform: rotate(0deg);

                    transform: rotate(0deg);

                  }

                  100% {

                    -webkit-transform: rotate(360deg);

                    -moz-transform: rotate(360deg);

                    -ms-transform: rotate(360deg);

                    -o-transform: rotate(360deg);

                    transform: rotate(360deg);

                  }

                }

                @keyframes spinner {

                  0% {

                    -webkit-transform: rotate(0deg);

                    -moz-transform: rotate(0deg);

                    -ms-transform: rotate(0deg);

                    -o-transform: rotate(0deg);

                    transform: rotate(0deg);

                  }

                  100% {

                    -webkit-transform: rotate(360deg);

                    -moz-transform: rotate(360deg);

                    -ms-transform: rotate(360deg);

                    -o-transform: rotate(360deg);

                    transform: rotate(360deg);

                  }

                }   

                #displayNone { 

                    display: none;

                }

                label, input.form-control {
                    font-size: 16px;
                }

            </style>

            <div class="loading" id="displayNone">Loading&#8230;</div>

            

            <div class="col-md-8 order-md-1">

                <h2 class="mb-3">You're Almost there.. just 2 more minutes...</h2>

                {{-- <form  class="needs-validation" action="{{ url('/checkout/store') }}{{ url('/pay') }}" method="post" enctype="multipart/form-data"> --}}

                <form id="contactForm" class="needs-validation" action="JavaScript:Void(0);" method="post" enctype="multipart/form-data">

                    @csrf

                    <input type="hidden" name="package_id" value="{{$package->id}}" /> 

                    <?php

                      if($package->p_cost == '0.78'){

                          $total = (float)$package->p_cost * 365;

                          $total = ceil($total);

                        

                          

                      } elseif ($package->p_cost == '1.00'){

                          // $total = (float)$package->p_cost * 365;

                          // $total = '$'.ceil($total).'/year';

                          $total = (float)$package->p_cost * 30;

                          $total = ceil($total);

                         

                      } else {

                          $total = $package->p_cost;

                        

                      } 

                    ?>

                    <input type="hidden" name="amount" value="<?= $total;?>" />

                    

                    @if(isset($_COOKIE['Ref']))

                    <input type="hidden" name="reference" value="<?= $_COOKIE['Ref'];?>" />

                    @endif

                    

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="firstName" >First name*</label>

                            <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>

                            <div class="invalid-feedback">

                              <!--Valid first name is required.-->

                            </div>

                          </div>

                        <div class="col-md-6 mb-3">

                            <label for="lastName" class="labelFont">Last name*</label>

                            <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>

                            <div class="invalid-feedback">

                              <!--Valid last name is required.-->

                            </div>

                          </div>



                        

                        <div class="col-md-6 mb-3">

                          <label for="email" class="labelFont">Email*</label>

                          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>

                          <!--<div class="invalid-feedback">-->

                          <!--  Please enter a valid email address for shipping updates.-->

                          <!--</div>-->

                        </div>

                        <div class="col-md-6 mb-3">

                          <label for="moblie" class="labelFont">Mobile*</label>

                          <input type="number" class="form-control" name="mobile" id="mobile" placeholder="123456">

                          <!--<div class="invalid-feedback">-->

                          <!--  Please enter a valid Mobile number for shipping updates.-->

                          <!--</div>-->

                        </div>

                

                        <div class="col-md-7 mb-3">

                          <label for="address" class="labelFont">Telegram ID*</label>

                          <input type="text" class="form-control" name="address" id="address" placeholder="@yourid" required>

                          <div class="invalid-feedback">

                            <!--Please enter your shipping address.-->

                          </div>

                        </div>   

                      <div class="col-md-5 mb-3">

                        <label for="country" class="labelFont">Country*</label>

                        <!--<input type="text" class="form-control" name="country" placeholder="Please Enter Country Name" required />-->

                        <select name="country" id="countryDropDown" class="form-control country-drop-down" required>

                            <option value="" style="font-size: 12px !important;">-Select-</option>

                            @if($countries)

                                @foreach($countries as $country)

                                    <option value="{{$country->nicename}}" class="form-control">{{$country->name}}</option>

                                @endforeach

                            @endif

                        </select>

                        <!--<div class="invalid-feedback">-->

                        <!--  Please select a valid country.-->

                        <!--</div>-->

                      </div>    

                    

                    </div>

    



                    <hr class="mb-4">

                    

                      <div class="form-check" style="font-size: 14px;">

                        <input class="form-check-input" type="checkbox" name="terms" value="1" id="Ccheckxbox">

                        I Agree not to Misuse or Share the Trade Signals and Agree to only use for my own purpose. I understand this is not Investment Advice. Furthermore I shall not claim any analysis provided to be mine.

                      </div>                    

                 

                   <!--<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>-->

                    <button style=" text-transform: capitalize;" class="btn btn-primary btn-lg btn-block" type="submit" id="send_form">Complete Sign Up</button>



              

                </form>

            </div>

          </div>

        </div>

        </div>

    </div>

    

    

<div id="freePopup" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">

                    &times;</button>

                <h4 class="modal-title">

                   

                </h4>

            </div>

            <div class="modal-body" style="text-align: center;">

                 <h4>Congratulations!</h4>

                <h4>Thanks for Joining.</h4><br /> <br />

                <div id="paypal-button-container-P-5GL80080KU639143HMQA7DSY"></div>

            </div>

            <div class="modal-footer">

                <input type="button" id="btnClosePopup" value="Cancel" class="btn btn-danger" />

            </div>

        </div>

    </div>

</div>

    

    

<div id="monthlyPopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" style="text-align: center;">
                 <h4>Congratulations!</h4>
                <h4>Thanks for Joining. Please complete payment now.</h4><br /> <br />
                <div id="paypal-button-container-P-8BC77639H0209725EMQA7BGA"></div>
            </div>
            <div class="modal-footer">
                <input type="button" id="btnClosePopup" value="Cancel" class="btn btn-danger" />
            </div>
        </div>
    </div>
</div>



<div id="yearlyPopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" style="text-align: center;">
                <h4>Congratulations!</h4>
                <h4>Thanks for Joining. Please complete payment now.</h4><br /> <br />
                <div id="paypal-button-container-P-9KG699309A6068123MQA7CKQ"></div>
            </div>
            <div class="modal-footer">
                <input type="button" id="btnClosePopup2" value="Cancel" class="btn btn-danger" />
            </div>
        </div>
    </div>
</div>  



<div id="quarterlyPopup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" style="text-align: center;">
                <h4>Congratulations!</h4>
                <h4>Thanks for Joining. Please complete payment now.</h4><br /> <br />
                <div id="paypal-button-container-P-0BM437495P985825RMQIJJTI"></div>
            </div>
            <div class="modal-footer">
                <input type="button" id="btnClosePopup2" value="Cancel" class="btn btn-danger" />
            </div>
        </div>
    </div>
</div>  



<div id="MyPopup3" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">

                    &times;</button>

                <h4 class="modal-title">

                    Error

                </h4>

            </div>

            <div class="modal-body" style="text-align: center;">

                <h4>Please enter all the required data</h4>

            </div>

            <div class="modal-footer">

                <input type="button" id="btnClosePopup2" value="Cancel" class="btn btn-danger" />

            </div>

        </div>

    </div>

</div>   



<div id="errorPopUp" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">

                    &times;</button>

                <h4 class="modal-title">

                    Error

                </h4>

            </div>

            <div class="modal-body" style="text-align: center;">

                <h4>Please Check all the required information. And Try Again!</h4>

            </div>

            <div class="modal-footer">

                <input type="button" id="btnClosePopup2" value="Cancel" class="btn btn-danger" />

            </div>

        </div>

    </div>

</div>    

    

 

    

{{-- =====================< Paypal Buttons Scripts >===================== --}}

<script src="https://www.paypal.com/sdk/js?client-id=AfROvAJ9RXt5AhSN1tR44ltp-yQAZ-ngt_Gb57rGbepv1UavdeAdTXbDbcEbOO7WiDB5kb9xWY_X4h7h&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>



{{-- For Free Plan --}}
<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'subscribe'
        },

        createSubscription: function(data, actions) {
          return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-5GL80080KU639143HMQA7DSY'
          });
        },
        onApprove: function(data, actions) {
          alert(data.subscriptionID); // You can add optional success message for the subscriber here
        }
    }).render('#paypal-button-container-P-5GL80080KU639143HMQA7DSY'); // Renders the PayPal button
</script>



{{-- For Monthly Plan --}}
<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'subscribe'
        },

        createSubscription: function(data, actions) {
          return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-8BC77639H0209725EMQA7BGA'
          });
        },
        onApprove: function(data, actions) {
          alert(data.subscriptionID); // You can add optional success message for the subscriber here
        }
    }).render('#paypal-button-container-P-8BC77639H0209725EMQA7BGA'); // Renders the PayPal button
</script>





{{-- For Yearly Plan --}}

<script>

    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'subscribe'
        },

        createSubscription: function(data, actions) {
          return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-9KG699309A6068123MQA7CKQ'
          });
        },
        onApprove: function(data, actions) {
          alert(data.subscriptionID); // You can add optional success message for the subscriber here
        }
    }).render('#paypal-button-container-P-9KG699309A6068123MQA7CKQ'); // Renders the PayPal button
</script>





{{-- For Quaterly Plan --}}

<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'subscribe'
        },

        createSubscription: function(data, actions) {
          return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-0BM437495P985825RMQIJJTI'
          });
        },

        onApprove: function(data, actions) {
          alert(data.subscriptionID); // You can add optional success message for the subscriber here
        }
    }).render('#paypal-button-container-P-0BM437495P985825RMQIJJTI'); // Renders the PayPal button
</script>





<footer>

    @include('financepro.includes.footer')

</footer>



</body>

