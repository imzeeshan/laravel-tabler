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

             <footer class="footer footer-transparent d-print-none">
                 <div class="container-xl">
                     <div class="row text-center align-items-center flex-row-reverse">
                         <div class="col-lg-auto ms-lg-auto">

                         </div>
                         <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                             <ul class="list-inline list-inline-dots mb-0">
                                 <li class="list-inline-item">
                                     Copyright &copy; {{date('Y')}}
                                     <a href="." class="link-secondary">Tabler</a>.
                                     All rights reserved.
                                 </li>

                             </ul>
                         </div>
                     </div>
                 </div>
             </footer>

        </div>
    </body>
</html>
