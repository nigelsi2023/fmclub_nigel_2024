

    <meta name="viewport" content="width=device-width, min-width=320, initial-scale=1.0" />

    <meta charset="utf-8">

    <!-- Latest IE rendering engine & Chrome Frame Meta Tags -->

    <!--[if IE]>

        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>

        <![endif]-->

    <!-- TITLE-->

    

    <!--mac-->

    <title>

        @yield('meta_title')

    </title>

        

        

        <meta name="description" content="@yield('meta_desc')">

        

        

        <meta name="keywords" content="@yield('meta_kewy')">

    

    <!--mac-->

    



    <link rel="icon" type="text/icon" href="{{ asset('icon.png') }}">

    



    <!-- GOOGLE FONTS

            ================================================== -->

    <link rel='stylesheet' id='google-fonts-zozo_options-css' href="{{ asset('financepro/fonts.googleapis.com/css5f51.css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CLora%3A400%2C700%2C400italic%2C700italic') }}" type='text/css' media='all' />





        <!-- <link rel='stylesheet' id='sp-ea-font-awesome-css'href='https://learn2.trade/wp-content/plugins/easy-accordion-free/public/assets/css/font-awesome.min.css' media='all' /> -->

 

        <!-- <link rel='stylesheet' id='omsc-shortcodes-tablet-css'href='https://learn2.trade/wp-content/plugins/olevmedia-shortcodes/assets/css/shortcodes-tablet.css' media='screen and (min-width: 768px) and (max-width: 959px)' /> -->

<!--  -->

        <!-- <link rel='stylesheet' id='parent-style-css'href='https://learn2.trade/wp-content/themes/twentytwenty/style.css' media='all' /> -->

        <!-- <link rel='stylesheet' id='bootstrap-css'href='https://learn2.trade/wp-content/themes/twentytwenty-child/bootstrap/css/bootstrap.css' media='all' /> -->

        <link rel='stylesheet' id='twentytwenty-style-css'href="{{asset('uploads/css/style.css') }}" media='all' />







    <!-- CSS BEGINS 

            ================================================== -->

    <!-- Select 2 -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    

    <!-- ELEMENTS BASE CSS -->

    <link href="{{ asset('financepro/css/elements.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- THEME BASE CSS -->



    @if(Request::is('/'))

        <link href="{{ asset('financepro/css/style2.css') }}" rel="stylesheet" type="text/css" />

    @else 

        <link href="{{ asset('financepro/css/style.css') }}" rel="stylesheet" type="text/css" />

    @endif

    <!-- COLOR SCHEME -->

    <link href="{{ asset('financepro/css/colors/color1.css') }}" id="changeable-colors" rel="stylesheet" />

    <!-- Font Awesome -->

    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    

    

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168703263-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-168703263-1');

</script>


<!--adsense code-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8844859089842671"
     crossorigin="anonymous"></script>



<!--/*UET tag for bing */-->

<script> (function(w,d,t,r,u) { var f,n,i; w[u]=w[u]||[],f=function() { var o={ti:"15339170"}; o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") }, n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function() { var s=this.readyState; s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null) }, i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i) }) (window,document,"script","//bat.bing.com/bat.js","uetq"); </script>





@if (url()->current() == 'http://financialmarkets.club/signup-complete')

<!--/* conversion goal tracking */-->

<script>window.uetq = window.uetq || [];window.uetq.push('event', 'signup', {});</script>

@endif





<!--gtag-->

<script> (function(w,d,t,r,u) { var f,n,i; w[u]=w[u]||[],f=function() { var o={ti:"5217115"}; o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") }, n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function() { var s=this.readyState; s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null) }, i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i) }) (window,document,"script","//bat.bing.com/bat.js","uetq"); </script>

<!--gtag-->



    <!-- Data Tables -->

    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">





    <!-- Summer Note -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">





    <!-- Js Social -->

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />

    <!-- CSS ENDS ================================================== -->

    

    <!--custom link-->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8844859089842671" crossorigin="anonymous"></script>    



    @php

        if (isset($_GET['ref'])) {

            // Get the current URL

            $current_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            // Remove the query string from the URL

            $url_parts = parse_url($current_url);

            

            // Get Page URL

            $pageUrl = $url_parts['scheme'] . '://' . $url_parts['host'] . $url_parts['path'];

            // Get the affiliate ID

            $affiliateId = $_GET['ref'];

            // Get the visitor's IP address

            $visitorIp = $_SERVER['REMOTE_ADDR'];



            // dd($affiliateId, $pageUrl, $visitorIp);

            

            \DB::table('referrals')->insert([

                'page_url' => $pageUrl,

                'affiliator_id' => $affiliateId,

                'visitor_ip' => $visitorIp,

            ]);

            // Redirect the user to the URL without the query string

            header("Location: $pageUrl");

        }        

    @endphp