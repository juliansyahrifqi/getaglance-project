<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Get A Glance">
        <meta name="description" content="Get A Glance">

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
        <link rel="manifest" href="/assets/site.webmanifest">


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
        <link rel="stylesheet" href="/style/style.css">
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
