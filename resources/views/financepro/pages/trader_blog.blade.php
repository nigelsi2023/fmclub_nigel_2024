@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', "Stock Market Analysis by Professional Traders")
@section('meta_desc', "Read and watch the latest analysis on forex, stock market and commodities from our experienced Traders")
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals, forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')
<!--mac-->
@section('this_meta_tag')
<title>Test</title>
@endsection

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
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400">Trader Blog</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>Trader Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            
                <div class="fs-container-fluid nopadd">
                    <div class="row">
                        <div class="col-md-12"><img src="https://financialmarkets.club/images/new111.jpg" class="img-responsive" style="width: 100%;"></div> 
                    </div>
                </div>
           
            
            
            <!-- /*PAGE HEADING SECTION -->
            <!-- SIDEBAR SECTION -->
            <section class="sidebar-wrapper right-sidebar">
                <div class="container">
                        <div class="col-md-9 top-margin-lg bottom-margin-md">
                        	@foreach($blogs as $blog)
                            <div class="post border-bottom-style-1 bottom-margin-sm bottom-padding-sm">
                                <div class="post-title bottom-line bottom-margin-vsm">
                                    <!-- POST TITLE -->
                                    <h4 class="font-weight-lbold text-capitalize"><a class="text-color-hover" href="{{ route('fulltraderpost', $blog->page_url) }}">{{ $blog->name }}</a></h4>
                                </div>
                                <!-- META -->
                                <ul class="meta-list">
                                    <li><i class="fa fa-user text-color ileft"></i> @if($blog->user->role == 'admin') Admin @else {{ $blog->user->name }} @endif</li>
                                    <li><i class="fa fa-tags text-color ileft"></i> {{ $blog->trader_category['name'] }}</li>
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
                                   
                                    <li><i class="fa fa-share-alt text-color ileft"></i></li>
                                    @if(Auth::check())
                                        <li>
                                            <ul class="zozo-social-share-icons share-box typo-darks no-left-padding">

                                                <li class="facebook">
                                                    <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ route('fulltraderpost', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" data-title="facebook" title="facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>

                                                <li class="twitter">
                                                    <a onclick="window.open('https://twitter.com/intent/tweet?text={{ route('fulltraderpost', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"  title="twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                    
                                                <li class="linkedin">
                                                    <a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url={{ route('fulltraderpost', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                                <div class="row">
                                    <!-- <div class="col-md-6"> -->
                                        <!-- IMAGE -->
                                        <div class="post-image">
                                            @if (empty($blog->image))
                                                <iframe width="100%" height="400"
                                                    src="{{ $blog->videoLink }}">
                                                </iframe> 
                                            @else
                                            <a href="{{ route('fulltraderpost', $blog->page_url) }}">
                                                <img class="img-responsive" src="{{ asset('uploads/traders/'.$blog->image) }}" width="1300" height="800" alt="" />
                                            </a>
                                            @endif
                                            <div class="post-date-wrap">
                                                <h6 class="post-date">{{ date("M", strtotime($blog->created_at)) }}<span>{{ date("d", strtotime($blog->created_at)) }}</span></h6>
                                            </div>
                                        </div>
                                    <!-- </div>
                                    <div class="col-md-4"> -->
                                         @if (strlen(strip_tags($blog->detail)) > 200)

                                            <p>{!! str_limit(strip_tags($blog->detail), 350) !!}</p>
                                        @else
                                            <p>{!! $blog->detail !!}</p>
                                        @endif
                                        <a href="{{ route('fulltraderpost', $blog->page_url) }}" class="btn typo-light btn-hv-dark theme-bg">Read More</a>
                                    <!-- </div> -->
                                </div>
                            </div>
                            @endforeach

                            {!! $blogs->links() !!}

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
                                
                                <div class="recent-block col-md-12 top-margin-lg">
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
            </section>

        </div>
@endsection