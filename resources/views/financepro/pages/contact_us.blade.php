@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', 'Contact Financial Markets Club')
@section('meta_desc', 'Get in touch with us if you have any questions or need help')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')

<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Contact Us</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /*PAGE HEADING SECTION -->
            <!-- ADDRESS SECTION -->
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <!-- SECTION TITLE -->
                            <div class="contact-title bottom-margin-md">
                            
                            <script type="text/javascript">
								var url_string = window.location.href
								var url = new URL(url_string);
								var Ref = url.searchParams.get("Ref");

								// var Ref = Ref.substr(1).slice(0, -1)
								console.log(Ref);
								
								if (Ref == '{KeyWord}') {
									var Ref = 'XAUUSD Forex Signals';
								}
								else if(Ref != '{KeyWord}'){
									var Ref = Ref;
								}
								 if(Ref == 'morning_digest_pdf'){
									var Ref = 'and Tell us <br />What else can we include in our Morning Digest Report for you?';
								}
								if(typeof(Ref) == 'undefined' || Ref === null)
   							{
									var Ref = 'Want to ask something about Forex Signals?';
								}

								
							</script>
                            
                    <h3>
                    <label style="color: #0099FF">Contact us Today</label>
                    
                     <script type="text/javascript"> document.write(Ref)</script>
                    
                    </h3>        
                                

                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        
                                        <button type="button" aria-hidden="true" class="close"
                                            onclick="this.parentElement.style.display='none'">×</button>
                                            <span>{{ $error }}</span>
                                    </div>
                                    @endforeach
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close"
                                        onclick="this.parentElement.style.display='none'">×</button>
                                        <span>{{ session('success') }}</span>
                                        @php Session::forget('success'); @endphp
                                    </div>
                                @endif

                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s with the release of Letraset and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
                            </div>
                            <div class="contact-form bottom-padding-sm">
                                <!-- Form Begins -->
                                <form method="post" action="{{ route('contact') }}" class="bv-form">
                                    @csrf
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 1 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <input name="name" class="input-name form-control" placeholder="Full Name" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- Field 2 -->
                                            <div class="col-md-6 input-email form-group has-feedback{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <input name="phone" class="input-phone form-control" placeholder="Phone Number" data-bv-field="contact_phone" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="phone"></i>
												
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="inline-form">
                                        <div class="row">
                                            <!-- Field 3 -->
                                            <div class="col-md-6 input-text form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input name="email" class="input-email form-control" placeholder="Email" data-bv-field="contact_email" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- Field 4 -->
                                            <div class="col-md-6 input-email form-group has-feedback">

                                            	<select name="howyou" class="input-subject form-control{{ $errors->has('howyou') ? ' has-error' : '' }}" style="height: 60px;">

													<option>How you heard about this website...</option>

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
                                        </div>
                                    </div>
                                    <div class="textarea-message form-group has-feedback{{ $errors->has('subject') ? ' has-error' : '' }}">
                                    	<input name="subject" class="input-subject form-control" placeholder="Subject" data-bv-field="contact_name" type="text"><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_name"></i>
                                    	@if ($errors->has('subject'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class=" textarea-message form-group has-feedback{{ $errors->has('message') ? ' has-error' : '' }}">
                                        <textarea name="message" class="textarea-message form-control" placeholder="Message *" rows="4" data-bv-field="contact_message"></textarea><i style="display: none;" class="form-control-feedback bv-no-label" data-bv-icon-for="contact_message" data-original-title="" title=""></i>
                                        @if ($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <style type="text/css">
                                        .left-15{
                                            margin-left: -15px;
                                        }
                                    </style>
                                    <div class="left-15">
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                            
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
                                            <!-- Button -->
                                            <button class="btn btn-md btn-theme btn-square btn-hv-dark btn-hv-dark" type="submit">SEND NOW</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form Ends -->
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-4 col-sm-8 address">
                            <div class="col-md-12 col-sm-12 top-padding-sm ">
                                <img alt="contact-img" class="col-md-12 img-responsive" src="images/content/bg/office-500x320.jpg" width="500" height="320">
                            </div>
                            <div class="col-md-12 col-sm-12 padding-sm bottom-padding-sm">
                                <h5 class="feature-title">Our Address</h5>
                                <p class="event"> 1234, Time Square,</p>
                                <p class="event">New York, ,</p>
                                <p class="event"> United States -10001.</p>
                                <p class="event">info@youremail.com</p>
                                <p class="event"> +17 234 242 343</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- ADDRESS SECTION -->

            <!--MAP-->
            
            <!--<div style="height: 350px;" class="map-canvas" data-zoom="12" data-lat="-35.2835" data-lng="149.128" data-title="Autin" data-type="roadmap" data-hue="" data-content="Company Name&lt;br&gt; Contact: +012 (345) 6789&lt;br&gt; info@youremail.com"></div>-->


            <!-- MAP SECTION -->
        </div>
@endsection
