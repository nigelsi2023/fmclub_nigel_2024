@extends('layouts.financepro_content')
<!--mac-->
@section('meta_title', 'Why use our Forex Signal service')
@section('meta_desc', 'Here are some frequently asked questions to help you decide to join us.')
@section('meta_kewy', 'forex trading strategies, forex trading for beginners, forex trading signals, forex signals,
forex trading tips, free forex signals, learn forex trading, trading signals, best forex signals, forex day trading')

@section('css_links')
<style>
    .accordion {
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .accordion-item {
        border-top: 1px solid #ccc;
    }
    .accordion-header {
        background: #f7f7f7;
        padding: 10px 15px;
        cursor: pointer;
        font-weight: bold;
    }
    .accordion-content {
        display: none;
        padding: 10px 15px;
        background: #fff;
    }
    .accordion-content.active {
        display: block;
    }
    </style>
@endsection
<!--mac-->
@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <!-- TITLE-->
                <h2 class="text-uppercase">Share Market FAQs</h2>
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
                                <input name="search" id="search" class="input-name form-control"
                                    value="@if(!empty($searchTerm)){{ $searchTerm }}@endif" type="text">
                                <span class="input-group-btn">
                                    <button name="faq_search" id="faq_search" class="btn btn-group-lg btn-md btn-theme btn-square btn-hv-dark" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    @if(!empty($faqs))
                        <div class="accordion" id="faqAccordion">
                            @foreach($faqs as $key => $faq)
                                <div class="accordion-item">
                                    <div class="accordion-header" data-index="{{ $key }}">
                                        {{ $key+1 }}. {{ $faq->question }}
                                    </div>
                                    <div class="accordion-content {{ $key == 0 ? 'active' : '' }}">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            @endforeach
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
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headers = document.querySelectorAll('#faqAccordion .accordion-header');

            headers.forEach(function(header) {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const isActive = content.classList.contains('active');

                    const allContents = document.querySelectorAll('#faqAccordion .accordion-content');
                    allContents.forEach(function(c) {
                        c.classList.remove('active');
                    });

                    if (!isActive) {
                        content.classList.add('active');
                    }
                });
            });
        });
    </script>
@endsection