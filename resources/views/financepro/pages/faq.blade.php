@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', 'Why use our Forex Signal service')
@section('meta_desc', 'Here are some frequently asked questions to help you decide to join us.')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')
	<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Share Market FAQs</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Faq</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE HEADING SECTION -->

            <div class="container">
            	<div class="row">
            	    <div class="col-md-9 bottom-margin-md">
                		<div class="col-md-12">
                			<section class="top-padding-sm bottom-padding-sm">
                                <h4 class="section-title member-details font-weight-lbold bottom-line">Share Market FAQs</h4>
    
                                @if(session('errorMsg'))
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close"
                                    onclick="this.parentElement.style.display='none'">×</button>
                                    <span>{{ session('errorMsg') }}</span>
                                </div>
                                @endif
    
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">
                                            <button type="button" aria-hidden="true" class="close"
                                            onclick="this.parentElement.style.display='none'">×</button>
                                            <span>{{ $error }}</span>
                                        </div>
                                    @endforeach
                                @endif
    
                                <div class="faq_search">
                                    <form class="bv-form" method="post" action="{{ route('faq_search') }}">
                                        @csrf
                                        <div class="input-group input-group-lg">
                                            <input name="search" id="search" class="input-name form-control" value="@if(!empty($searchTerm)){{ $searchTerm }}@endif" type="text">
                                            <span class="input-group-btn">
                                              <button name="faq_search" id="faq_search" class="btn btn-group-lg btn-md btn-theme btn-square btn-hv-dark" type="submit">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
    
                                @if(!empty($faqs))
                                    <div  aria-expanded="true" role="tablist" id="accordion-8" class="panel-group accordion-plus accordion-flat accordion-content-light">
                                        @foreach($faqs as $key => $faq)
                                            @if($key == 0)
                                        <!-- ACCORDION 1-->
                                        <div class="panel panel-default panel-border">
                                            <!-- ACCORDION HEADING-->
                                            <div id="headingOne-19" role="tab" class="panel-heading">
                                                <h4 class="panel-title"> 
                                                	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-8" href="#collapseOne" aria-expanded="true">{{ $key+1 }}. {{ $faq->question }}</a>
                                                </h4>
                                            </div>
                                            <!--/. ACCORDION HEADING-->
                                            <!-- ACCORDION CONTENT-->
                                            <div id="collapseOne" class="panel-collapse collapse in" style="" aria-expanded="true">
    
    							              <div class="panel-body">
    											<p>{!! $faq->answer !!}</p>
    							              </div>
    
    							            </div>
                                            <!-- /. ACCORDION CONTENT-->
                                        </div>
                                        <!-- /. ACCORDION 1-->
                                        @else
                                        <!-- ACCORDION 2-->
                                        <div class="panel panel-default panel-border">
                                            <!-- ACCORDION HEADING-->
                                            <div id="headingTwo-20" role="tab" class="panel-heading">
                                                <h4 class="panel-title"> <a aria-controls="collapseTwo-20" aria-expanded="false" href="#collapseTwo-{{ $key }}" data-parent="#accordion-8" data-toggle="collapse" class="collapsed">  
                                                    {{ $key+1 }}. {{ $faq->question }}</a> </h4>
                                            </div>
                                            <!--/. ACCORDION HEADING-->
                                            <!-- ACCORDION CONTENT-->
                                            <div aria-labelledby="headingTwo-20" role="tabpanel" class="panel-collapse collapse" id="collapseTwo-{{ $key }}" aria-expanded="false">
                                                <div class="panel-body parallax-desc">
                                                    <p>{!! $faq->answer !!}</p>
                                                </div>
                                            </div>
                                            <!-- /.ACCORDION CONTENT-->
                                        </div>
                                        <!-- /. ACCORDION 2-->
                                        @endif
                                        @endforeach
                                    </div>
                                    <div aria-multiselectable="true" role="tablist" id="accordion-7" class="panel-group accordion-plus accordion-flat accordion-content-dark accordion-title-dark accordion-bordered">
                                    </div>
                                    @endif
                                    @if(!empty($no))
                                    <div class="text-center">
                                        <h3>No data found</h3>
                                    </div>
                                    @endif
                                </section>
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
                            <div class="recent-block col-md-12 top-margin-lg">
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

            <!-- <script>
$('#faq_search').click(function(event) {
  $val = $('#search').val();
  if($val != ""){
    $( "#accordion-8" ).html( "<tr><td colspan='11' class='text-center'><h3>Loading...</h3></td></tr>" );
    $.ajax({
      url: "faq-search",
      method: "POST",
      data: { type : 'faqSearch', data : $val },
      dataType: "html"
    }).done(function( data ) {
      $( "#accordion-8" ).html( data );
    });
  }

});
</script> -->

@endsection