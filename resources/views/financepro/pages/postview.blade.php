@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
    <div class="container">
        <div class="row no-margin">
            <div class="breadcrumsarea col-md-12 text-left">
                <!-- TITLE-->
                <h2 class="text-uppercase no-margin" data-animated="fadeInLeftBig" data-animation-delay="400"> {{ $blog->name }}<br />
                    <span style="font-size:20px;line-height:28px;">{{ $blog->sub_title }}</span></h2>
                <!-- BREADCRUMB-->
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="text-capitalize">{{ $blog->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /*PAGE HEADING SECTION -->

<!-- SIDEBAR SECTION -->
<section class="sidebar-wrapper right-sidebar">
    <div class="container">
        <div class="col-md-9 top-margin-sm">
            <div class="post border-bottom-style-1 bottom-margin-vsm bottom-padding-sm">
                <!-- IMAGE -->
                <div class="post-image">
                    <img class="img-responsive" src="{{ asset('uploads/blogs/'.$blog->image) }}" width="1300" height="800" alt="" />
                </div>
                
                <p>{!! $blog->detail !!}</p>

                <!-- META -->
                <ul class="meta-list">
                    <li><i class="fa flaticon-avatar  ileft"></i> @if($blog->user->role == 'admin') Admin @else {{ $blog->user->name }} @endif</li>
                    <li><i class="fa fa-calendar-o  ileft"></i> {{ date("d M y", strtotime($blog->created_at)) }}</li>
                    <li><i class="fa fa-comment-o  ileft"></i> 
                        @if($comments > 1)
                        {{ $comments }} Comments
                        @else
                        {{ $comments }} Comment
                        @endif
                    </li>
                    
                </ul>
            </div>
            <div class="tradersblogsingcatviewbtn border-bottom-style-1">
                <div class="col-md-8 no-left-padding parallax-desc">
                    <p class="h4 bottom-margin-sm"><i class="fa fa-tags ileft"> </i> {{ $blog->category['name'] }}</p>
                </div>
                <div class="col-md-4 meta-list">
                    <ul class="pull-right zozo-social-share-icons share-box ">

                        
                        <li class="facebook">
                            <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');" data-title="facebook" title="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li class="twitter">
                            <a onclick="window.open('https://twitter.com/intent/tweet?text={{ URL::current() }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');"  title="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        
                        <li class="linkedin">
                            <a onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        
                    </div>
                </div>
                <div class="col-md-12 no-left-padding bottom-padding-sm">
                    <div class="section-title-wrapper clearfix">
                        <h4>Related Posts</h4>
                    </div>
                    <div class="owl-carousel  nav-top-right nav-outer nav-square nav-mini" data-items="4" data-margin="15" data-loop="true" data-merge="true" data-nav="true" data-dots="false" data-stagepadding="0" data-mobile="1" data-tablet="1" data-desktopsmall="3" data-desktop="3" data-autoplay="true" data-delay="5000" data-navigation="true">
                        @foreach($posts as $post)
                        <div class="item">
                            <!-- IMAGE -->
                            <div class="feature-image">
                                <img class="img-responsive" width="960" height="640" src="{{ asset('uploads/blogs/'.$post->image) }}" alt="post" />
                            </div>
                            <div class="feature-text text-left">
                                <!-- TITLE -->
                                <h5 class="text-style"><a href="{{ route('fullpost', $post->page_url) }}">{{ $post->name }} </a></h5>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- COMMENTS -->
                <div class="row post-comments border-bottom-style-1">
                    <div class="col-md-12">
                        <div class="comments">
                            <ul class="comment-list">
                                <li>
                                    <h4 class="bottom-line">Comments</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- COMMENTS FORM -->
                <div class="row bottom-padding-md">
                    
                    
                    <h4>Leave a Comment</h4>

                    
                    <form method="post" action="{{ route('comment.add') }}" class="no-left-margin">
                        @csrf
                        <div class="col-md-11">

                                        <!-- @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                
                                                <button type="button" aria-hidden="true" class="close"
                                                    onclick="this.parentElement.style.display='none'">×</button>
                                                    <span>{{ $error }}</span>
                                            </div>
                                            @endforeach
                                            @endif -->

                                            <!-- Field 1 -->
                                            
                                            <div class="textarea-message form-group{{ $errors->has('comment_body') ? ' has-error' : '' }}">
                                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                <textarea rows="4" class="textarea-message form-control" name="comment_body" ></textarea>
                                                @if ($errors->has('comment_body'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('comment_body') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                                <!-- <div class="col-md-6 pull-center"> -->
                                                    {!! app('captcha')->display() !!}
                                                    @if ($errors->has('g-recaptcha-response'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                    </span>
                                                    @endif
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            {!! NoCaptcha::renderJs() !!}

                                            <div class="col-md-6"> 
                                                
                                                <!-- Button -->
                                                <button class="btn btn-dark btn-hvborder-left btn-hv-theme btn-square btn-default" type="submit">Post Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-11">
                                        @include('partials.comment_replies', ['comments' => $blog->comments, 'blog_id' => $blog->id])
                                    </div>
                                </div>
                                <!-- SIDEBAR -->
                                
                                <div class="col-md-3 sidebar no-left-padding">
                                    
                                    <div class="row">
                                        
                                        <div class="recent-block col-md-12  top-margin-sm">
                                            <h5 class="legend col-md-12">Recent Post</h5>
                                            <!-- ITEM-->
                                            <div class="clearfix col-md-12">
                                                <ul class="typo-lights list-unstyled text-capitalize">
                                                   @foreach($blogs as $blog)
                                                   <li class="border-bottom-style-2 bottom-margin-vsm">
                                                    <a href="{{ route('fullpost', $blog->page_url) }}">{{ $blog->name }}</a>
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