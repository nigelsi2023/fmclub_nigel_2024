<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
	<!-- Header -->
    	@include('financepro.includes.head')
    <!-- Header End -->
    @yield('style')
</head>

<body>


    <!-- Header -->

    @include('financepro.includes.header_content')
            
    <!-- Header End -->


    <!-- Main Content -->
    	@yield('content')
    <!-- Main Content End -->
	
	<!-- Footer -->
	@include('financepro.includes.footer')

    <!-- Footer End -->




</body>

</html>