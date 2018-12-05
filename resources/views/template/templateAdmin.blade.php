<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />

    <title>C.T.G.L. | @yield('title') </title>

    <!-- Meta pour csrf VJS-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>

    <!-- Ckeditor 5 -->
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

</head>

<body  style="background-color: #7FB1DF" >

<header class="header">
    <img src="{{asset('img/headerCtgl.png')}}" alt="Header CTGL" class="logo">
</header>

<div class="fluid-container backPlan" style="margin-right: 15px; margin-left: 50px; margin-top: 37px;" id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 0px 5px;">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <a class="navbar-brand" href="#">@yield('titreNavbar',"Panel d'administration")</a>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('home_path')}}">Voir site</a>
                </li>
                {{--<li class="nav-item active">--}}
                    {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

            </ul>

            <div class="dropleft ml-auto">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fas fa-envelope" style="color: grey;"></i> Messagerie <span class="badge badge-pill badge-danger">5</span></a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                        <i class="fas fa-power-off" style="color: grey;"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="leftMenu">
        <div class="hamburger active">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="leftMenuList">
            <li>
                <a href="#" class="dropdown">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span>Gestion Pages  <i class="fas fa-sort-down" color="white"></i></span>
                </a>
                <ul class="dropdownlist">
                    <li>
                        <a href="{{route('showUpdateAcceuil')}}">
                            <span>Acceuil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('showUpdatePage', ['idPage' => '1'])}}">
                            <span>Présentation CTGL</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('showUpdatePage', ['idPage' => '2'])}}">
                            <span>Les activitées</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('showUpdatePage', ['idPage' => '3'])}}">
                            <span>Evenement</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('showUpdatePage', ['idPage' => '4'])}}">
                            <span>Devenir membre</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('showUpdatePage', ['idPage' => '5'])}}">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-images" aria-hidden="true"></i>
                    <span>Gestion Images</span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <span>Gestion Inscrits  <i class="fas fa-sort-down" color="white"></i></span>
                </a>
                <ul class="dropdownlist">
                    <li>
                        <a href="#">
                            <span>OBOOKING</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>ORDSERVC</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>Gestion Contacts  <i class="fas fa-sort-down" color="white"></i></span>
                </a>
                <ul class="dropdownlist">
                    <li>
                        <a href="#" class="dropdown">
                            <span>PHDMDREP</span>
                        </a>
                        <ul class="dropdownlist">
                            <li>
                                <a href="#">
                                    <span>MEDREP1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>MEDREP2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown">
                            <span>PHDFINRE</span>
                        </a>
                        <ul class="dropdownlist">
                            <li>
                                <a href="#">
                                    <span>FINREP1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    @yield('content')

</div>

</body>

<script src="{{ asset('js/app.js') }}"></script>
@include('flashy::message')

<script>

    @yield('script')

    document.querySelector(".hamburger").onclick = function () {
        var element = document.querySelector(".leftMenu");
        element.classList.toggle("openMenu");

        var hamburger = document.querySelector(".hamburger");
        hamburger.classList.toggle("open");

        var body = document.querySelector("#formCkeditor");
        body.classList.toggle("menuHamburgerOpen");

        var closeAccordion = document.getElementsByClassName('dropdown');
        var i = 0;
        for (i = 0; i < closeAccordion.length; i++) {
            closeAccordion[i].classList.remove('active');
        }

    }

    var dropdown = document.getElementsByClassName('dropdown');
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].onclick = function () {
            this.classList.toggle('active');


        }

    }




</script>

</html>
