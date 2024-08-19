<style>
    .newsletter-section {
	background-color: #119dbf;
	color: #FFFFFF;
    }
    .newsletter-section *{
        color: #FFFFFF;
    }
    .newsletter-section .alert-success{
        border-color: #ceffba;
        background-color: #ceffba;
    }
    .newsletter-section .alert-success span{
        color: #000000;
        font-weight: bold;
    }
    .newsletter-section .alert-success button{
        color: red;
        font-weight: bold;
        background-color: transparent;
        border: 0px solid;
        font-size: 40px;
    }
    span.error{
        color: #A94442;
        background-color: #FFFFFF;
    }
    .has-error{
        border-color: #A94442 !important;
        border-radius: 0px !important;
    }
    span.help-block{
        color: #A94442;
    }
</style>

{{-- Subscribers (Newsletter) Starts --}}
<section class="newsletter-section" id="newsletterSection">
    <div class="container">
        {{-- @if(request()->hasCookie('discount50percent'))
            <div class="fs-premium-plan-price">$37<p style="font-size:10px"> /month</p></div>
        @else
            <div class="fs-premium-plan-price">${{$package->p_cost}}<p style="font-size:10px"> /month</p></div>
        @endif --}}
        {{-- @if(session('scroll_to')) --}}
        @if(request()->hasCookie('discount50percent'))
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success">
                        {{-- <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button> --}}

                        <h4>
                            <b class="text-black">Congratulations!</b>
                        </h4>
                        <h6 class="text-black">You have just unlocked a <b class="text-dark">50% Discount</b> on all our packages. This offer will expire in 5 days.</h6>
                        <a href="{{ route('go-vip') }}" target="_blank" class="btn btn-success text-black text-uppercase">
                            <b class="text-black">View all packages</b>
                        </a>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-bold">
                        <b class="text-capitalize">Weekly Trading Lessons by Email</b>
                    </h3>
                    <p class="text-capitalize">Do you want to Learn to Trade like a Pro? Every Week we will share some Trading Tips to help you Succeed.</p>
                    <p>Just enter your Name and Email, and click Subscribe! </p>
                </div>

                <div class="col-md-4">
                    {{-- <form action="#" method="post"> --}}
                    <form class="input-group form-flat form-theme padding-top-10 bv-form" style="width: 100%;" name="subscribe-form" method="post" action="{{ route('subscribe.create') }}" >
                        @csrf
                        <input type="hidden" name="discount" value="true">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Enter Your Name" value="{{ old('name') }}" required/>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <br />
                        
                        <div class="form-group">
                            <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Enter Your Email" value="{{ old('email') }}" required/>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <br />
                        
                        <span class="">
                            <button class="btn btn-default btn-block" type="submit" style="background-color: #24cae2; color: #ffffff; border: 1px solid #24cae2; border-radius: 0px; float: right;">
                                Subscribe For Weekly Tips
                        </button>
                        </span>                    
                    </form>
                </div>
            </div>
        @endif
    </div>
</section>
{{-- Subscribers (Newsletter) Ends --}}





<!-- FOOTER SECTION -->
        <footer id="footer" class="footer darks-bg typo-light">
            <div class="footer-top" style="padding-top: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- LOGO -->
                            <img src="{{ asset('images/logo.ft.png') }}" alt="logo" width="235" height="20">
                            <br>
                            <p>At Financial Markets Club we help regular people learn to invest in the stock market by showing you real life trades and how we invest ourselves.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-widgets">
                            <!-- QUICK LINKS -->
                            <h5 class="widget-title text-uppercase">Quick Links</h5>
                            <ul class="arrow-list menu clearfix">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('learning-center') }}">Learning Center</a></li>
                                <li><a href="{{ route('stock_chart') }}">Stock Charts</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('cookie.policy') }}">Cookie Policy</a></li>
                                <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-widgets">
                            <!-- ADDRESS -->
                            <h5 class="widget-title text-uppercase">Our Office</h5>
                            <address>
                                <div class="feature-box style-3">
                                    <div class="icon-wrapper">
                                        <!-- ICON -->
                                        <i class="fa fa-phone typo-darks fa-lg"></i>
                                    </div>  
                                    <div class="inner-wrapper">
                                        <!--  PHONE NUMBER -->
                                        <p class="feature-description">+44 754 3944 236</p>
                                    </div>  
                                </div>
                                <div class="feature-box style-3">
                                    <div class="icon-wrapper">
                                        <!-- ICON -->
                                        <i class="fa fa-envelope typo-darks fa-lg"></i>
                                    </div>  
                                    <div class="inner-wrapper">
                                        <!-- EMAIL -->
                                        <p class="feature-description"><a class="active" href="mailto:info@financialmarkets.club">info@financialmarkets.club</a></p>
                                    </div>  
                                </div>
                                </address>
                        </div>
                        <div class="col-md-3 col-sm-6  footer-widgets">
                            <!-- NEWSLETTER -->
                            <h5 class="widget-title text-uppercase">Email Newsletter</h5>
                            <p>Get subscriber only insights & news delivered by Financial Markets Club</p>
                            <p class="form-message1" style="display: none;"></p>

                            @if(session('success_message'))
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close"
                                onclick="this.parentElement.style.display='none'">×</button>
                                <span>{{ session('success_message') }}</span>
                            </div>
                            @endif

                            <form class="input-group form-flat form-theme padding-top-10 bv-form" name="subscribe-form" method="post" action="{{ route('subscribe.create') }}" >
                                @csrf
                                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                <style type="text/css">
                                    span.error{
                                        color: #A94442;
                                        background-color: #FFFFFF;
                                    }
                                    .has-error{
                                        border-color: #A94442 !important;
                                        border-radius: 0px !important;
                                    }
                                    span.help-block{
                                        color: #A94442;
                                    }
                                </style>
                                <div class="form-group has-feedback">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <input class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Enter Your Name" value="{{ old('name') }}" name="name" type="text">
                                </div>
                                
                                <br>
                                
                                <div class="form-group has-feedback">
                                    <input class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Enter Your Email" value="{{ old('email') }}" name="email" type="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <br>

                                <span class="">
                                    <button class="btn btn-default btn-block" type="submit" style="background-color: #24CAE2;color: #FFFFFF;border: 1px solid #24CAE2;border-radius: 0px; float: right;">
                                        Subscribe For Newslatter
                                    </button>
                                </span>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-md-12">
                        <br />
                        <p>Risk Warning:The information on the this website is intended for educational purposes and is not to be construed as investment advice. 
                        Trading financial instruments on the stock marketcarries a high level of risk to your capital and you should only trade with money you can afford to lose. Trading stocks, Forex and CFDs may not be suitable for all investors, so please ensure that you fully understand the risks involved and seek independent advice if necessary. Please read and ensure you fully understand our Risk Disclosure.
                        </p>
                        <p>
Before trading, you should carefully consider your investment objectives, experience, and risk appetite. Only trade with money you are prepared to lose. Like any investment, there is a possibility that you could sustain losses of some or all of your investment whilst trading. You should seek independent advice before trading if you have any doubts. Past performance in the markets is not a reliable indicator of future performance.
					</p>
					<p>
By signing up as a member you acknowledge that we are not providing financial advice and that you are making the decision on the trades you place in the markets. We have no knowledge of the level of money you are trading with or the level of risk you are taking with each trade.
					<p>
This website uses cookies in order to provide you with the best experience. By visiting our website with your browser set to allow cookies, or by accepting our Cookie Policy notification you consent to our Privacy Policy, which details our Cookie Policy.
					</p>
                        
                        </div>
                     </div>
                </div>
            </div>
            
            <div class="footer-bottom footer-top-border">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                &copy; Copyright <?php echo date('Y');?>
                                 <script type="text/javascript">
                                //     document.write(new Date().getFullYear());
                                 </script>  
                                All Rights Reserved.
                                <!-- <ul class="footer-bottom-links text-uppercase">
                                    <li><a href="http://catchpixel.com/" target="_blank">Crafted By CatchPixel</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="footer-social-icons">
                                <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook text-darkest social-facebook-hvcolor"></i></a></li>
                                <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter text-darkest social-twitter-hvcolor"></i></a></li>
                                <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin text-darkest social-linkedin-hvcolor"></i></a></li>
                                <li class="pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest text-darkest social-pinterest-hvcolor"></i></a></li>
                                <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus text-darkest social-google-plus-hvcolor"></i></a></li>
                                <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube text-darkest social-youtube-hvcolor"></i></a></li>
                                <li class="dribbble"><a href="#" target="_blank"><i class="fa fa-dribbble text-darkest social-dribbble-hvcolor"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<div id="cookieNotice" class="light display-right cookie-consent" style="display: none;">
    <div id="closeIcon" style="display: none;">
    </div>
    <div class="content-wrap">
        <div class="msg-wrap">
            <p style="margin-bottom: 4px; text-align:center"><!--"DISCLAIMER: The Trade Ideas / Signals expresses my personal opinion only and where I expect markets to go. Nobody can predict the stock market for sure. Trading financial markets involves risk, and is not suitable for all Investors/ Traders . I am not responsible for any losses incurred due to your trading or anything else. The specific trades that I discuss are trades that I choose to do on my own account, sometimes I make profit sometimes I make losses. Any trades you decide to take are your own."-->
            This website uses cookies to improve the user experience. To learn more about our cookie policy or withdraw from it, please check  our  <a href="cookie_policy">cookie policy</a>
            </p>
            <div class="btn-wrap" style="text-align: center;" >
                <button class="btn-primary allow-button" onclick="acceptCookieConsent();">Accept</button>
            </div>
            
        </div>
    </div>
</div>

<ul class="social-media-sharing-icons" style="position: fixed; right: 15px; bottom: 180px; list-style: none; z-index: 999;">
    <span style="color: #00000012; position: absolute; transform: rotate(-90deg); top: 48px; left: -85px; font-size: 40px; font-weight: bold;">SHARE</span>
    <li style="margin-bottom: 20px;">
        <a href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}" style="width: 30px; height: 30px; padding: 12.5px; background: #0a2351;" target="_blank" title="Share on Facebook">
            <i class="fa fa-facebook"></i>
        </a>
    </li>
    <li style="margin-bottom: 20px;">
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" style="width: 30px; height: 30px; padding: 10px; background: #0f72b5;" target="_blank" title="Share on Twitter">
            <i class="fa fa-twitter"></i>
        </a>
    </li>
    <li style="margin-bottom: 20px;">
        <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(Request::fullUrl()) }}" style="width: 30px; height: 30px; padding: 10.5px; background: #064471;" target="_blank" title="Share on Linkedin">
            <i class="fa fa-linkedin"></i>
        </a>
    </li>
</ul>

<div class="whatsappbox" style="position: fixed;right: 2px;z-index:190;bottom:140px;">
	<a href="https://wa.me/+447543944236" target="_blank">
		<img src="{{url('/images/whatsap.png')}}" class="img-responsive" style="width: 60px;">
	</a>
</div>            
  
        
<div class="whatsappbox" style="position: fixed;right: 8px;z-index:190;bottom: 85px;">
	<a href="https://twitter.com/nasirFXTrader" target="_blank">
		<img src="{{url('/images/twtr.png')}}" class="img-responsive" style="width: 47px;">
	</a>
</div>            
  
        
<div class="whatsappbox" style="position: fixed;right: -4px;z-index:190;bottom: 15px;">
	<a href="https://t.me/NasirForexTrader" target="_blank">
		<img src="{{url('/images/telegram-logo.png')}}" class="img-responsive" style="width: 69px;">
	</a>
</div>            
        </footer>
        <!-- MODAL BOX Small END -->
        <a href="#" id="back-to-top" title="Back to top"></a>


        <!-- FOOTER SECTION -->
    </div>
    <!-- /. PAGE WRAPPER -->


    <script>
        @if(session()->has('scroll_to'))
            document.querySelector("{{ session('scroll_to') }}").scrollIntoView({behavior: 'smooth'})
        @endif
    </script>



    <!-- <script type="text/javascript" src="{{ asset('financepro/js/jquery.js') }}"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/bootstrap.min.js') }}"></script>
    @if(!Request::is('/'))
    <script src="public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="public/vendor/datatables/dataTables.bootstrap4.js"></script>
    @endif
    <script type="text/javascript">

////////START COOKIE
// Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 30);
    document.getElementById("cookieNotice").style.display = "none";
}

///////END COOKIE



let cookie_consent = getCookie("user_cookie_consent");
if(cookie_consent != ""){
    document.getElementById("cookieNotice").style.display = "none";
}else{
    document.getElementById("cookieNotice").style.display = "block";
}
<?php   if(!Request::is('/')){?>
      var t = $('#sttable').DataTable({
        language: {
          paginate: {
            previous: "‹",
            next: "›",
          }
        },
        searching: false, 
        paging: true, 
        info: false, 
        bLengthChange: false, 
        ordering:  false
      });

      var t2 = $('#dataTable').DataTable({
        language: {
          paginate: {
            previous: "‹",
            next: "›",
          }
        },
        searching: false, 
        paging: true, 
        info: false, 
        bLengthChange: false, 
        ordering:  false
      });



      $('#dTable3').DataTable({
        language: {
          paginate: {
            previous: "‹",
            next: "›",
          }
        },
        searching: false, 
        paging: true, 
        info: false, 
        bLengthChange: false, 
        ordering:  false
      });
<?php } ?>

      /* Act on the event */

    /*jQuery(document).ready(function($) {
        $.ajax({
          url: 'http://127.0.0.1:8000/live-data',
          type: 'GET',
          dataType: 'json',
          success: function (result) {
            $.each( result, function( key, value ) {

              t.row.add([
                value.name,
                value.symbol,
                value.current_price,
                value.price_change_amount,
                value.price_change_percent
              ]).draw( false );
            });
          }
        });
      });*/


    // commented for testing forex singal page
    //   window.setInterval(function(){
    //     $.ajax({
    //       url: 'http://anthony.myprivatelandlord.com/public/live-product2-data',
    //       type: 'GET',
    //       dataType: 'json',
    //       success: function (result) {
    //         $.each( result, function( key, value ) {
    //           var temp = t.row(key).data();

    //           var str = value.price_change_percent;
    //           var str2 = str.replace(/[^0-9.%-]/g, "");


    //           if(value.status=='down'){
    //             temp[2] = '<i class="fa fa-arrow-down" style="color: #B00"></i> '+value.current_price;
    //             temp[3] = '<p style="color: #B00">'+value.price_change_amount+'</p>';
    //             temp[4] =  '<p style="color: #B00">'+str2+'</p>'; 
    //           }else if(value.status=='up'){
    //             temp[2] = '<i class="fa fa-arrow-up" style="color: #071"></i> '+value.current_price;
    //             temp[3] = '<p style="color: #071">'+value.price_change_amount+'</p>';
    //             temp[4] = '<p style="color: #071">'+str2+'</p>'; 
    //           }else{
    //             temp[2] = value.current_price;
    //             temp[3] = value.price_change_amount;
    //             temp[4] = str2;
    //         }
    //          // temp[2] = value.current_price;
          
    //           t.row(key).data(temp).draw(false);
    //         });
    //       }
    //     });
    //   }, 5000);

      // 20 Minute is Miliseconds 1200000

      //pagination nearest active a data vale dt-idx


    // commented for testing forex-singal page
    //   window.setInterval(function(){
    //     $.ajax({
    //       url: 'http://anthony.myprivatelandlord.com/public/live-product-data',
    //       type: 'GET',
    //       dataType: 'json',
    //       success: function (result) {
    //         $.each( result, function( key, value ) {
    //           var temp = t2.row(key).data();

    //           var str = value.price_change_percent;
    //           var str2 = str.replace(/[^0-9.%-]/g, "");

    //           if(value.status=='down'){
    //             temp[1] = value.symbol;
    //             temp[2] = '<i class="fa fa-arrow-down" style="color: #B00"></i> '+value.current_price;
    //             temp[3] = '<p style="color: #B00">'+value.price_change_amount+'</p>';
    //             temp[4] =  '<p style="color: #B00">'+str2+'</p>'; 
    //           }else if(value.status=='up'){
    //           temp[1] = value.symbol;
    //           temp[2] = '<i class="fa fa-arrow-up" style="color: #071"></i> '+value.current_price;
    //           temp[3] = '<p style="color: #071">'+value.price_change_amount+'</p>';
    //           temp[4] = '<p style="color: #071">'+str2+'</p>'; 
    //           }else{
    //           temp[1] = value.symbol;
    //           temp[2] = value.current_price;
    //           temp[3] = value.price_change_amount;
    //           temp[4] = str2;              
    //         }
    //          // temp[2] = value.current_price;
          
    //           t2.row(key).data(temp).draw(false);
    //         });
    //       }
    //     });
    //   }, 5000);
      
      // 20 Minute is Miliseconds 1200000
    </script>

    

    <script type="text/javascript" src="{{ asset('public/financepro/js/bootstrapValidator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/jquery.mmenu.min.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/count-to.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/google.map.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/financepro/js/custom.js') }}"></script>
    @if(!Request::is('/'))
    <script type="text/javascript" src="{{ asset('public/vendor/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/tinymce/init-tinymce.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @endif
    <!-- Data Tables -->
    




    

    <!-- Select2 -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js" integrity="sha256-d/edyIFneUo3SvmaFnf96hRcVBcyaOy96iMkPez1kaU=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.country-drop-down').select2();
        });
    </script>

    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })    
    </script>

    <!-- Summer Note -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
              height: 300,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote

            });
        });
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

    <script>
        $(".share").jsSocials({
          showLabel: false,
          showCount: false,
          shares: ["facebook", "twitter", "linkedin"]
        });
    </script>    
    
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        
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
<script>

//-----------------
$('#send_form').click(function(e){
   e.preventDefault();
    
   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var email = $('#email').val();
   var mobile = $('#mobile').val();
   var address = $('#address').val();
   var countryDropDown = $('#countryDropDown').val();
   
   var Ccheckbox = $('#Ccheckxbox').is(':checked',false);
   
   if(fname == '' || lname == '' || email == '' || mobile == '' || address == '' || countryDropDown == ''|| Ccheckbox == ''){
       alert('Please enter all the required fileds.')
   } else {
   
       /*Ajax Request Header setup*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     
        $('#send_form').html('Submitting..');
        document.getElementById("displayNone").style.display = "inline";
       
        /* Submit form data using ajax*/
        $.ajax({
            url: "{{ url('/pay')}}",
            method: 'post',
            data: $('#contactForm').serialize(),
            success: function(response){
                
                if(response.status == true)
                {
                    //------------------------   
                    // alert(response.data.package_id);
                    if(response.data.package_id == '1'){
                        $("#freePopup").modal("show");
                        $('#send_form').html('Submit Again');
                        document.getElementById("displayNone").style.display = "none";
                    } else if(response.data.package_id == '2'){
                        $("#monthlyPopup").modal("show");
                        $('#send_form').html('Submit Again');
                        document.getElementById("displayNone").style.display = "none";
                    } else if (response.data.package_id == '3'){
                        $("#yearlyPopup").modal("show");
                        $('#send_form').html('Submit Again');
                        document.getElementById("displayNone").style.display = "none";
                    } else if (response.data.package_id == '4'){
                        $("#quarterlyPopup").modal("show");
                        $('#send_form').html('Submit Again');
                        document.getElementById("displayNone").style.display = "none";
                    }  else {
                        window.location.href = "{{ route('signup_complete')}}";
                    }
                    //--------------------------                    
                } else {
                     $("#errorPopUp").modal("show");
                    $('#send_form').html('Submit Again');
                }

            }
        });       
   }

});

    

    $("#btnClosePopup").click(function () {
        $("#MyPopup").modal("hide");
    });
    $("#btnClosePopup2").click(function () {
        $("#MyPopup2").modal("hide");
    });
//-----------------


</script>

    
    @yield('scripts')