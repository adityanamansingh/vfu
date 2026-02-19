<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Shared head assets: Font Awesome + small UI helpers (card-3d) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
          .hero-inner { position: relative; z-index: 10; }
          .card-3d {
            transform-style: preserve-3d;
            transition: transform .35s ease, box-shadow .35s ease;
            will-change: transform;
          }
          .card-3d:hover {
            transform: translateY(-8px) rotateX(6deg) rotateY(-4deg) translateZ(6px);
            box-shadow: 0 20px 40px rgba(15,23,42,0.12);
          }
          .icon-3d { transform: translateZ(10px); }
          @media (prefers-reduced-motion: reduce) {
            .card-3d { transition: none; transform: none !important; }
          }
        </style>

        @stack('head')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('partials.header')

            <!-- Optional per-page header removed (using site header partial) -->

            <!-- Page Content -->
            <main>
                @yield('content')

                @include('partials.cta')
                
            </main>
          
           
            @include('partials.booking-modal')
            @include('partials.footer')
        </div>
    </body>
</html>
