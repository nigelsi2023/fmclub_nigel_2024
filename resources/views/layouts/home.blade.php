<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<body>




    <!-- Header -->

        @include('includes.header')


        @include('includes.slider')

        </div>
    </div>



    <div id="main" class="container">



            @yield('content')



    </div>



    <footer id="footer" class="footer darks-bg typo-light">

        @include('includes.footer')

    <!-- </footer> -->




</body>

</html>