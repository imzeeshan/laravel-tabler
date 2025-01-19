<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
                'resources/dist/css/tabler.min.css',
                'resources/dist/css/tabler-flags.min.css',
                'resources/dist/css/tabler-social.min.css',
                'resources/dist/css/tabler-payments.min.css',
                'resources/dist/css/tabler-vendors.min.css',
                'resources/dist/js/jquery-3.7.1.min.js',
                'resources/dist/js/tabler.min.js'
        ])

    </head>
    <body>
         <div class="page">
            @include('layouts.navigation')

            <!-- Page Content -->
            @yield('content')

            @include('layouts.footer')

        </div>
    </body>
</html>
