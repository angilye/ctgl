<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=device-dpi">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" type="image/png" href="favicon.ico" />

        <title>C.T.G.L. | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/app.css"/>


    </head>

    <body  style="background-color: #7FB1DF" >

        <header class="header">
            <img src="{{asset('img/headerCtgl.png')}}" alt="Header CTGL" class="logo">
        </header>

        <div class="container backPlan" style="background-attachment: fixed">

            <div class="row justify-content-around HeaderTitle">
                <a href="{{ route("home_path") }}"><img src="{{asset('img/left-arrow.png')}}" alt="left arrow for backPage" ></a>
                <h1 class="h3" >@yield('SousTitre')</h1>
                <img src="{{asset('img/menu.png')}}" alt="Menu Hamburger">
            </div>

            @yield('content')

        </div>

    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    @include('flashy::message')

</html>
