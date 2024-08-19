@extends('layouts.financepro_content')

@section('content')
	<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400">Forum</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>Forum</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /*PAGE HEADING SECTION -->
            <!-- SIDEBAR SECTION -->
            <section class="sidebar-wrapper right-sidebar bottom-margin-lg">
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
                        
                        <div class="col-md-9 top-margin-lg">
                            
                            <div class="col-md-12">
                                @foreach($blogs as $blog)
                            <div class="post border-bottom-style-1 bottom-margin-sm bottom-padding-sm">
                                <div class="post-title bottom-line bottom-margin-vsm">
                                    <!-- POST TITLE -->
                                    <h4 class="font-weight-lbold text-capitalize"><a class="text-color-hover" href="{{ route('forum.view', $blog->page_url) }}">{{ $blog->name }}</a></h4>
                                </div>
                                <!-- META -->
                                <ul class="meta-list">
                                    <li><i class="fa fa-user text-color ileft"></i> @if($blog->user->role == 'admin') Admin @else {{ $blog->user->name }} @endif</li>
                                    <li><i class="fa fa-tags text-color ileft"></i> <a href="{{ route('forum.category', $blog->forum_category->slug) }}">{{ $blog->forum_category->name }}</a></li>
                                    <li><i class="fa fa-comment text-color ileft"></i> 
                                        @php 
                                            $comments = DB::table('forum_comments')->where('commentable_id', $blog->id)->get()->count();
                                        @endphp

                                        @if($comments > 1)
                                            {{ $comments }} Comments
                                        @else
                                            {{ $comments }} Comment
                                        @endif
                                    </li>
                                    <li><i class="fa fa-clock-o text-color ileft"></i>{{ $blog->created_at->diffForHumans() }}</li>
                                    <li><i class="fa fa-share-alt text-color ileft"></i></li>
                                    @if(Auth::check())
                                        <li>
                                            <ul class="zozo-social-share-icons share-box typo-darks no-left-padding">
                                                
                                                <li class="facebook">
                                                    <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ route('forum.view', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" data-title="facebook" title="facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>

                                                <li class="twitter">
                                                    <a onclick="window.open('https://twitter.com/intent/tweet?text={{ route('forum.view', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"  title="twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                    
                                                <li class="linkedin">
                                                    <a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url={{ route('forum.view', $blog->page_url) }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                                <div class="row" style="margin-left: 10px;">
                                    <!-- <div class="col-md-6"> -->
                                        <!-- IMAGE -->
                                        <!-- <div class="post-image">
                                            <img class="img-responsive" src="{{ asset('uploads/forums/'.$blog->image) }}" width="1300" height="800" alt="" />
                                            <div class="post-date-wrap">
                                                <h6 class="post-date">{{ date("M", strtotime($blog->created_at)) }}<span>{{ date("d", strtotime($blog->created_at)) }}</span></h6>
                                            </div>
                                        </div> -->
                                    <!-- </div>
                                    <div class="col-md-4"> -->
                                         @if (strlen(strip_tags($blog->detail)) > 200)

                                            <p>{{ str_limit(strip_tags($blog->detail), 200) }}</p>
                                        @else
                                            <p>{{ $blog->detail }}</p>
                                        @endif
                                        <!-- <a href="{{ route('forum.view', $blog->id) }}" class="btn typo-light btn-hv-dark theme-bg">Read More</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            @endforeach

                            {!! $blogs->links() !!}
                            </div>
                            <!-- <div class="col-md-2">
                                <div class="pull-right">
                                    <a href="{{ route('forum.create') }}" class="col-sm-12 btn btn-theme btn-hv-dark btn-hv-dark btn-icon-right"> Ask Now</a>
                                </div>
                            </div> -->
                        </div>

                        <!-- SIDEBAR -->

                        <div class="col-md-3 sidebar top-margin-md">
                            <div class="border-rounded col-md-12 theme-bg  bottom-margin-sm section-title forumsidebarblock">
                                <h2 class="widget-title no-bottom-padding typo-light text-uppercase">Do you have any question?</h2>
                                <a href="{{ route('forum.create') }}" class="btn btn-hv-dark btn-hv-dark btn-icon-right dark-bg text-white bottom-margin-sm"> Ask Now</a>
                                <p class="no-bottom-padding typo-light">Our job is to help professionals to achieve their financial goals whilst having adequate protection along the way. Feel free to ask any kind of question you have.</p>
                            </div>

                            <div class="row">
                                
                                <div class="recent-block col-md-12">
                                    <h5 class="legend col-md-12">Recent Post</h5>
                                    <!-- ITEM-->
                                    <div class="clearfix col-md-12">
                                        <ul class="typo-lights list-unstyled text-capitalize">
                                            @foreach($desc_blogs as $blog)
                                            <li class="border-bottom-style-2 bottom-margin-vsm">
                                                <a href="{{ route('forum.view', $blog->page_url) }}">{{ $blog->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>

                                <div class="recent-block col-md-12">
                                    <h5 class="legend col-md-12">Categories</h5>
                                    <!-- ITEM-->
                                    <div class="clearfix col-md-12">
                                        <ul class="typo-lights list-unstyled text-capitalize">
                                            @foreach($categories as $category)
                                            <li class="border-bottom-style-2 bottom-margin-vsm">
                                                <a href="{{ route('forum.category', $category->slug) }}">{{ $category->name }}</a>
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