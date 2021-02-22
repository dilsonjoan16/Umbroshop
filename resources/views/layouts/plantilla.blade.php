<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','UmbroShop')</title>
    <!-- hoja de estilos css -->
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
    <!-- hoja de scripts js -->
    <script type="text/javascript" src="{!! asset('js/app.js') !!}" async></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/umbro_noir.ico') }}" type="image/x-icon">
    <!-- estilos -->
    <style>

    </style>
</head>
<body>
    <div id="app" class="umbroalto d-flex flex-column justify-content-between">
            <!-- header -->
        @include('layouts.partials.header')
            <!-- sesiones-->
        @include('layouts.partials.session')
            <!-- contenido -->
            <section class="py-4">
                @yield('content')
            </section>
            <!-- footer -->
            <footer class="bg-dark text-center text-white py-3 shadow-sm">
        @include('layouts.partials.footer')
            </footer>
            <!-- script -->
    </div>
</body>
</html>