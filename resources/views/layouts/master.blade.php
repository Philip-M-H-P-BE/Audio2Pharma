<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Home Page')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- defer -->
    <script src="https://kit.fontawesome.com/ef00e55e0d.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/additional_stylesheet.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @section('header')
        @show
        <div class="container">
            <main class="pb-4 pt-2">
                @yield('breadcrumbs')
                @include('partials.errors')                
                @yield('content')
            </main>
        </div>
        @include('partials.modalSearchForm');
        @section('footer')
        @show
    </div>
    @section('footerScripts')
        <script src="{{ asset('js/modalWithForm.js') }}" defer></script> <!-- defer is noodzakelijk!! -->
    @show    
</body>
</html>