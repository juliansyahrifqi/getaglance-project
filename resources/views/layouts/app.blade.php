<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{-- Meta --}}
        @stack('prepend-meta')
        @stack('addon-meta')

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Gothic+A1:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Swiper JS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

        

        <title>@yield('title')</title>

        {{-- Style --}}
        @stack('prepend-style')
        <!-- Custom Style -->
        <link rel="stylesheet" href="style/style.css">
        @stack('addon-style')
    </head>

    <div class="d-flex flex-column min-vh-100">
        {{-- Navbar --}}
        @include('includes.navbar')

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('includes.footer')

        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </div>    
</html>
