@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', "Expert Market Analysis for $category->name")
@section('meta_desc', "Regular up to date Analysis with short videos for you to know what is happenign in the $category->name Market")
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('content')

<style>
.nopadd {
     padding-right: 0px; 
     padding-left: 0px; 
     
}
</style>

	<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400">Trader</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>Trader Blog</li>
                                <li>Category</li>
                                <li>{{ $category->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="fs-container-fluid nopadd">
                <div class="row">
                    <div class="col-md-12">
                    
                    
{{-- Subscribers (Newsletter) Starts --}}
<section class="newsletter-section" id="newsletterSection">
    <div class="container">
        
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
                        So you Want our Daily Market Reports <br />directly to your Email?
                    </h3>
                    <p>Enter your details on the right and  click the Subscribe button - and we'll send you our reports by email every day. 
                    <br /><strong>Our reports are released 12pm Dubai Time, and 9pm Dubai Time every day.</strong> </p>
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

                    </div> 
                </div>
            </div>         
            
            <!-- /*PAGE HEADING SECTION -->
            <!-- SIDEBAR SECTION -->
            <section class="sidebar-wrapper right-sidebar">
                <div class="container">
                    
                    
                    @if(session('message'))
                        <div class="top-margin-lg">
                            <div class="alert alert-success">
                                <button type="button" aria-hidden="true" class="close"
                                    onclick="this.parentElement.style.display='none'">×</button>
                                <span>{{ session('message') }}</span>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        
                        <div class="col-md-9 top-margin-lg bottom-margin-md">
                            
                            <div class="col-md-12">
                            	@if($blogs->count() > 0)
                                @foreach($blogs as $blog)
                            <div class="post border-bottom-style-1 bottom-margin-sm bottom-padding-sm">
                                <div class="post-title bottom-line bottom-margin-vsm">
                                    <!-- POST TITLE -->
                                    <h4 class="font-weight-lbold text-capitalize"><a class="text-color-hover" href="{{ route('fulltraderpost', $blog->trader_id) }}">{{ $blog->trader_name }}</a></h4>
                                </div>
                                <!-- META -->
                                <ul class="meta-list">
                                    <li><i class="fa fa-user text-color ileft"></i> @if($blog->role == 'admin') Admin @else {{ $blog->postedby }} @endif</li>
                                    <li><a href="{{ route('trader_category',str_slug($blog->category_name)) }}"><i class="fa fa-tags text-color ileft"></i> {{ $blog->category_name }}</a></li>
                                    <li><i class="fa fa-comment text-color ileft"></i> 
                                        @php 
                                            $comments = DB::table('trader_comments')->where('commentable_id', $blog->id)->get()->count();
                                        @endphp

                                        @if($comments > 1)
                                            {{ $comments }} Comments
                                        @else
                                            {{ $comments }} Comment
                                        @endif
                                    </li>
                                    <li><i class="fa fa-clock-o text-color ileft"></i> 
                                    	{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                                    </li>
                                    <li><i class="fa fa-share-alt text-color ileft"></i></li>
                                    <li>
                                        <ul class="zozo-social-share-icons share-box typo-darks no-left-padding">
                                              <li class="facebook"><a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ route('fulltraderpost', $blog->trader_id) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" data-title="facebook" title="facebook">
                                                    <i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a onclick="window.open('https://twitter.com/intent/tweet?text={{ route('fulltraderpost', $blog->trader_id) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"  title="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li class="linkedin"><a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url={{ route('fulltraderpost', $blog->trader_id) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
                                                        <i class="fa fa-linkedin"></i></a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                                <div class="row" style="margin-left: 10px;">
                                    <div class="col-md-6">
                                        <!-- IMAGE -->
                                        <div class="post-image">
                                            @if (empty($blog->image))
                                                <iframe width="100%" height="200px"
                                                    src="{{ $blog->videoLink }}">
                                                </iframe> 
                                            @else
                                            <a href="{{ route('fulltraderpost', $blog->trader_id) }}">
                                                <img class="img-responsive" src="{{ asset('uploads/traders/'.$blog->image) }}" width="1300" height="200px" alt="" />
                                            </a>
                                            @endif
                                            
                                            <div class="post-date-wrap">
                                                <h6 class="post-date">{{ date("M", strtotime($blog->tb_created_at)) }}<span>{{ date("d", strtotime($blog->tb_created_at)) }}</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         @if (strlen(strip_tags($blog->detail)) > 200)

                                            <p>{!! str_limit(strip_tags($blog->detail), 350) !!}</p>
                                        @else
                                            <p>{!! $blog->detail !!}</p>
                                        @endif
                                        <a href="{{ route('fulltraderpost', $blog->trader_id) }}" class="btn typo-light btn-hv-dark theme-bg">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            {!! $blogs->links() !!}
                            @else
                            	<h3 class="text-center">No Post Found</h3>
                            @endif
                            </div>
                            <!-- <div class="col-md-2">
                                <div class="pull-right">
                                    <a href="{{ route('forum.create') }}" class="col-sm-12 btn btn-theme btn-hv-dark btn-hv-dark btn-icon-right"> Ask Now</a>
                                </div>
                            </div> -->
                        </div>

                        <!-- SIDEBAR -->

                        <div class="col-md-3 sidebar ">
                            
                            <div class="row">
                                
                                <div class="recent-block col-md-12 top-margin-lg">
                                    <h5 class="legend col-md-12">Categories</h5>
                                    <!-- ITEM-->
                                    <div class="clearfix col-md-12">
                                        <ul class="typo-lights list-unstyled text-capitalize">
                                            @foreach($categories as $category)
                                            <li  class="border-bottom-style-2 bottom-margin-vsm">
                                               <a href="{{ route('trader_category', $category->slug) }}">{{ $category->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
    
                                </div>
                                <div class="recent-block col-md-12 top-margin-lg">
                                    <h5 class="legend col-md-12">Recent Post</h5>
                                    <!-- ITEM-->
                                    <div class="clearfix col-md-12">
                                        <ul class="typo-lights list-unstyled text-capitalize">
                                            @foreach($desc_blogs as $blog)
                                            <li  class="border-bottom-style-2 bottom-margin-vsm">
                                                <a href="{{ route('fulltraderpost', $blog->id) }}">{{ $blog->name }}</a>
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

        </div>
@endsection