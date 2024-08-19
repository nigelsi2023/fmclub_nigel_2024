<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Header -->
        @include('financepro.includes.head')
    <!-- Header End -->


</head>

<body>

    <!-- Main Content -->
        @yield('content')
    <!-- Main Content End -->
    
    <!-- Footer -->
    @include('financepro.includes.footer')

    <!-- Footer End -->
</body>

</html>

