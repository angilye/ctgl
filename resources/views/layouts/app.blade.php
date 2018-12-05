<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="header">
            <img src="{{asset('img/headerCtgl.png')}}" alt="Header CTGL" class="logo">
        </header>

        <div class="container backPlan">

            <div class="row justify-content-around HeaderTitle">
                <a href="{{ route("home_path") }}"><img src="{{asset('img/left-arrow.png')}}" alt="left arrow for backPage" ></a>
                <h1 class="h3" >@yield('SousTitre')</h1>
                <img src="{{asset('img/menu.png')}}" alt="Menu Hamburger">
            </div>

            @yield('content')

        </div>
    </div>
</body>
</html>

