<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
	<!-- Header -->
    	@include('financepro.includes.head')
    <!-- Header End -->


</head>

<body>


    <!-- Header -->

    @include('financepro.includes.header_content')

        @if(Request::is('/'))
            @include('financepro.includes.slider')
        @endif
            
    <!-- Header End -->


    <!-- Main Content -->
    	@yield('content')
    <!-- Main Content End -->
	
	<!-- Footer -->
	@include('financepro.includes.footer')

    <!-- Footer End -->




</body>

</html>