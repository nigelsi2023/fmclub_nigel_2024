@extends('layouts.financepro2')


@section('content')

@include('financepro.includes.header_contentNew')

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

            .account-buton-find-out-more a {
                color: #fff;
                font-size: 2rem;
                word-spacing: 3px;
            }

            .earn-sub-title {

                font-size: 4rem !important;
                color: #fff;
                text-transform: capitalize;
                width: 69%;
                line-height: 1.3;
            }

            .earn-title {
                font-weight: bold;
                font-size: 66px !important;
                line-height: 120.4%;
                text-transform: capitalize;
                color: #FFFFFF;
                font-family: 'Rubik', sans-serif;
                padding-right: 0%;
                margin-bottom: 10px;
            }

            .banner-left-top h1 {
                padding-right: 0%;
            }

            .account-buton-find-out-more {
                background: #ff7139;
                width: 400px;
                text-align: center;
                padding: 2rem 2rem 1.3rem 2rem;
                text-transform: capitalize;
                border-radius: .5rem;
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }

            .account-buton-find-out-more a {
                font-size: 3rem;
            }

            .quick-sign-up {
                font-weight: bold;
                font-size: 56px;
                line-height: 120.4%;
                text-transform: capitalize;
                color: #FFFFFF;
                font-family: 'Rubik', sans-serif;
                padding-right: 23%;
                margin-bottom: 10px;
                margin-top: 5px;
            }

            .sign-up-submit-btn {
                width: 80px;
                height: 60px;
            }

            .sign-up-submit-btn i {
                font-size: 30px;
            }

            .feature-description a {
                background: none !important;
            }

            .has-feedback input {
                margin-top: 20px;
                width: 360px !important;
                height: 55px;
            }

            .banner-left-top {
                padding-top: 0px;
            }


            body {
                margin: 0 !important;
                padding: 0 !important;
                box-sizing: border-box;
                /* background: #F8FAFC; */
                position: relative;
                font-family: Hind !important;

            }

            ul {
                list-style: none;
            }

            .affiliate-box {
                text-align: center;
                border-top: 1rem solid #0aa2c7;
                border-radius: .5rem;
                padding: 2rem;
                /* background: white; */
                transition: .5s ease;
                background: #F8FAFC;
            }

            .affiliate-box .title {
                text-transform: capitalize;
                margin: auto;
                font-weight: bold;
                font-size: 46px;
                line-height: 120.4%;
            }

            .affiliate-box span {
                color: #0aa2c7;
            }

            .affiliate-box .sub-title {
                font-size: 1.8rem !important;
                letter-spacing: 1px;
                color: #7789A3;
                padding-block: 1.5rem;
                font-family: Hind !important;
            }

            .affiliate-box .number {
                font-size: 7rem;
                font-weight: bold;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: Hind !important;
            }

            .affiliate-box .number span {
                font-size: 4rem;
            }

            .affiliate-box .text {
                color: #22222D;
                font-size: 2rem;
            }

            .affiliate-box .signup {
                padding-block: 2rem;
            }

            .affiliate-box .signup a {
                background: #0aa2c7;
                padding: 1.3rem 4rem 1.3rem 4rem;
                border-radius: 50px;
                text-decoration: none;
                color: white;
                font-size: 1.8rem;
                line-height: 1;
                text-transform: capitalize;
                font-weight: bolder;
            }

            .affiliate-box .login {
                text-decoration: none;
                font-size: 2rem;
                text-transform: capitalize;
                color: #1E2630;
            }

            .affiliate-box .login span {
                font-weight: bold;
            }

            .section-text .title {
                text-align: center;
                font-weight: bold;
                text-decoration: cadetblue;
                font-weight: bold;
                font-size: 46px;
                line-height: 120.4%;
                text-transform: capitalize;
                ;
            }

            .section-text .text {
                text-align: center;
                text-transform: capitalize;
                font-size: 2rem;
            }

            .content-box {
                text-align: center;
            }

            .content-box .inner {
                padding: 2rem;
            }

            .content-box .inner .title {
                text-transform: capitalize;
                font-size: 2.5rem;
                font-weight: bold;
            }

            .content-box .inner .text {
                font-size: 2rem;
                max-width: 237px;
                margin: auto;
            }

            .content-box img {
                width: 200px;
                margin: auto;
            }

            .content-list {
                text-transform: capitalize;
            }

            .content-list .inner {
                max-width: 70%;
                margin: auto;
            }

            .content-list .title {
                font-size: 3rem !important;
                font-weight: bolder;
                float: left;
                width: 100%;
                margin: 10px 0 15px;
                font-weight: bold;
                font-size: 18px;
                line-height: 121.7%;
                letter-spacing: 0.04em;
                color: #222;
            }

            .content-list .text {
                max-width: 400px;
                margin-bottom: 5px;
                font-weight: normal;
                font-size: 18px;
                line-height: 190%;
                color: #292929;
                font-family: 'Rubik', sans-serif;
                float: left;
                width: 100%;

            }

            .section-devider {
                text-align: center;

            }

            .section-devider .sub-title {
                text-transform: uppercase;
                color: black;
                font-weight: bold;
                font-size: 3rem;
                padding-block: 2rem;
            }

            .section-devider .title {
                text-align: center;
                font-weight: bold;
                text-decoration: cadetblue;
                font-weight: bold;
                font-size: 46px;
                line-height: 120.4%;
                color: #fff;
                text-transform: capitalize;
            }

            .section-devider .text {
                font-size: 2rem;
                text-transform: capitalize;
                color: white;
            }

            .join-btn-box {
                background: #f6bd00;
                max-width: 580px;
                margin: 50px auto;
                padding: 1.5rem;
                border-radius: .5rem;
            }

            .join-btn-box a {
                font-size: 3rem;
                text-transform: capitalize;
                font-weight: bold;
                color: white;
                font-family: sans-serifw;
            }

            .icon-box {
                border: 2px solid rgb(255, 255, 255);
                max-width: 110px;
                height: 110px;
                margin: auto;
                padding: 2rem;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
            }

            .icon-box i {
                font-size: 2.4rem;
                color: white;
            }

            .faq-detail h1 {
                font-size: 3rem;
                font-weight: bold;
            }

            .faq-detail h6 {
                text-transform: capitalize;
                font-size: 1.1rem;
            }

            .faq-detail h6 span {
                margin-left: .6rem;
            }

            .accordion-button:focus {
                outline: none !important;
                box-shadow: none !important;
            }

            /* Style the button that is used to open and close the collapsible content */

            .collapsible {
                background-color: #fff;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 2rem;
                text-transform: capitalize;
                font-weight: bold;
                font-family: 'Rubik', sans-serif;
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */

            .active,
            .collapsible:hover {
                background-color: #ccc;
            }

            /* Style the collapsible content. Note: hidden by default */

            .content {
                padding: 5px 18px;
                max-height: 0px;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                font-size: 1.1rem;
                text-transform: capitalize;
                line-height: 1.5;
                text-align: left;
            }

            .single-faq p {
                font-size: 2rem;
            }

            .collapsible:after {
                content: '+';
                /* Unicode character for "plus" sign (+) */
                font-size: 13px;
                color: white;
                float: right;
                margin-left: 5px;
            }

            .collapsible {
                position: relative;
                transition: .5s ease;
            }

            .collapsible::after {
                color: #222;
                font-size: 2rem;
                position: absolute;
                right: 10px;
                top: 10px;
            }

            .active:after {
                content: "-";
                /* Unicode character for "minus" sign (-) */
            }

            /* popup */

            body {
                position: relative;
            }

            /*popup*/

            .popup-box .title {
                text-transform: capitalize;
                font-weight: bold;
                font-size: 50px;
                line-height: 1.2;
                color: #000079;
                font-family: 'Rubik', sans-serif;
                max-width: 410px;
                text-align: left;
            }

            .popup-box .input-text {
                text-align: left;
                text-transform: capitalize;
                font-size: 2rem;
                font-family: 'Rubik', sans-serif;
                color: #222;
                font-weight: bold;
                line-height: 1.5;
            }

            .popup-box .input-text input {
                margin-left: 10px;
            }

            .affiliate-btn {
                width: fit-content;
                background: #05047E;
                color: #fff;
                text-transform: capitalize;
                font-size: 2rem;
                font-weight: bold;
                font-family: 'Rubik', sans-serif;
                border: none;
                padding: .7rem 2.2rem .7rem 2.2rem;
                border-radius: .2rem;
            }

            .affiliate-btn i {
                margin-left: 10px;
            }


            .popup-list li .inner {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #222;
                padding: 2rem;
                padding-block: 2rem;
                margin-top: 20px;
            }

            .popup-list li .number {
                font-size: 4rem;
                font-weight: bolder;
                font-style: italic;
                color: #05047E;
                text-transform: capitalize;

            }

            .popup-list .number span {
                font-size: 1.6rem;
                font-family: 'Rubik', sans-serif;
                text-transform: capitalize;
                font-style: normal;
                margin-left: 15px;
            }

            .popup-list .text {
                text-transform: capitalize;
                font-size: 1.7rem;
                font-family: 'Rubik', sans-serif;
                font-weight: bold;
                color: #222;
            }

            .popup-flex-box {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 75px auto;
                padding-block: 2.5rem;
            }

            .popup-box .input-text input {
                width: 230px;
                height: 30px;
                border: none;
                background: #282927;
                border-radius: .1rem;
                color: #fff;
                font-size: 1.1rem;
                font-weight: bold;
                font-family: sans-serif;
                padding: .2rem .6rem .2rem .6rem;
            }

            ::placeholder {
                color: #fff;
                font-size: 1.8rem;

            }

            #close {
                position: absolute;
                right: 10px;
                top: 10px;
                font-size: 25px;
                border: none;
                padding: .7rem 1rem .7rem 1rem;
            }

            .py-5-custom {
                padding-block: 6rem;
            }

            .faq-detail {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-wrap: wrap;
            }

            .faq-detail h6 {
                text-transform: capitalize;
                font-size: 2rem;
            }

            .faq-detail h1 {
                font-size: 6rem;
                font-weight: bold;
            }


            .icon-box i {
                font-size: 4rem;
                color: white !important;
            }

            .popup {
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 346px auto;
                top: 0px;
                left: 0;
                right: 0;
                bottom: 0;
                transition: .5s ease;
                z-index: 111;
                background: none;
            }

            .popup-row {
                background: white;
                padding: 3rem;

                top: -64px;
                left: 0;
                right: 0;
                bottom: 0;
                transition: .5s ease;

            }

            .slideDown {
                animation-name: slideDown;
                -webkit-animation-name: slideDown;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-timing-function: ease;
                -webkit-animation-timing-function: ease;
                visibility: visible !important;
            }

            @keyframes slideDown {
                0% {
                    transform: translateY(-100%);
                }

                50% {
                    transform: translateY(8%);
                }

                65% {
                    transform: translateY(-4%);
                }

                80% {
                    transform: translateY(4%);
                }

                95% {
                    transform: translateY(-2%);
                }

                100% {
                    transform: translateY(0%);
                }
            }

            @-webkit-keyframes slideDown {
                0% {
                    -webkit-transform: translateY(-100%);
                }

                50% {
                    -webkit-transform: translateY(8%);
                }

                65% {
                    -webkit-transform: translateY(-4%);
                }

                80% {
                    -webkit-transform: translateY(4%);
                }

                95% {
                    -webkit-transform: translateY(-2%);
                }

                100% {
                    -webkit-transform: translateY(0%);
                }
            }

            .vertical-center {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
            }
        </style>





        <section class="top-banner" style="position: relative; overflow: hidden; background-color: #33333340;">
            <img src="{{asset('uploads/imgs/2020/04/banner-img-1.jpg')}}" alt="No Image Found" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <div class="container">
                <div class="row">
                    <div class="banner-left-top">
                        <h1 class="earn-title">Earn $100 on your Referrals <br /></h1>
                        <h6 class="earn-sub-title">Join over 100+ affiliate marketers today</h6>

                        <div class="account-buton-find-out-more"><a class="sg-popup-id-21056"
                                href="{{ route('affiliate.registration') }}" target="__blank">Start Getting Paid</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--sammy content-->


        <main class="">
            <section>
                <div class="container py-5-custom">
                    <div class="section-text">
                        <h1 class="title">create a new income stream in 3 easy steps</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="content-box">
                                <div class="inner">
                                    <img src="{{asset('images/affiliateimage/affiliate1.png')}}" alt="">
                                    <h5 class="title">Sign Up</h5>
                                    <p class="text">Create an affiliate Account, it's Easy and Free</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="content-box">
                                <div class="inner">
                                    <img src="{{asset('images/affiliateimage/affiliate2.png')}}" alt="">
                                    <h5 class="title">Start Referring</h5>
                                    <p class="text">Receive a unique link you can Share anywhere</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="content-box">
                                <div class="inner">
                                    <img src="{{asset('images/affiliateimage/affiliate3.png')}}" alt="">
                                    <h5 class="title">Get Paid</h5>
                                    <p class="text">Earn $100 payment for every customer that signs up for a paid
                                        package.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section style="background: #f2fffa;">
                <div class="container">
                    <div class="section-text">
                        <h1 class="title">
                            The Affiliate Marketer's toolkit:
                            <br>
                            Everything you need to succeed
                        </h1>
                        <p class="text">Yout referral account comes with everything you need to efficiently spread the
                            word and grow your income.</p>
                    </div>
                    <div class="row" style="padding-block: 6rem;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="image-box">
                                <div class="inner">
                                    <img src="{{ asset('images/affiliateimage/advance_toolkit.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mt-2 mt-md-0">
                            <div class="content-list">
                                <div class="inner">
                                    <h2 class="title">Articles and ads</h2>
                                    <p class="text">Easy-to-repost, persuasie content accessible from your referral
                                        account.</p>
                                </div>
                            </div>
                            <div class="content-list mt-2">
                                <div class="inner">
                                    <h2 class="title">Visitor and sales stats</h2>
                                    <p class="text">See how many people are visiting your referral link and how much
                                        money you make per visitor.</p>
                                </div>
                            </div>
                            <div class="content-list mt-2">
                                <div class="inner">
                                    <h2 class="title">Email sale notice</h2>
                                    <p class="text">Share your referral link anywhere and know the instant you've made a
                                        sale.</p>
                                </div>
                            </div>
                            <div class="content-list mt-2">
                                <div class="inner">
                                    <h2 class="title">Customer referral newsletter</h2>
                                    <p class="text">Get tips on how to succeed, plus resources to share with your
                                        visitors that explain AWeber's services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section style="background: #0aa2c7;">
                <div class="section-devider">
                    {{-- <div class="icon-box py-3">
                        <i class="fa fa-bell-o"></i>
                    </div> --}}
                    <h1 class="title py-2">Are you Ready to Become an Affiliate?</h1>
                    <p class="text">With our 30 day money back guarantee, our customer have absolutely no reason not to
                        try us. It's a win win for everyone.</p>
                    <div class="join-btn-box mt-5">
                        <a href="{{ route('affiliate.registration') }}" class="join-btn">Start Getting Paid</a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<script>
    document.querySelector("#close").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    });
</script>
@endsection