<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>

    @include('includes.head')

</head>

<body>


    <!-- Header -->

    @include('includes.header')

        @if(Request::is('/'))
            @include('includes.slider')
        @endif
            
    <!-- Header -->


    <!-- Main Content -->



            @yield('content')






    <footer id="footer" class="footer darks-bg typo-light">

        @include('includes.footer')

    <!-- </footer> -->




</body>

</html>