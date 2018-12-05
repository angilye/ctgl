<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8" />
        {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, target-densitydpi=device-dpi">--}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Meta pour csrf VJS-->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>C.T.G.L. | Acceuil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>


    </head>

    <header class="header">

        <img src="{{asset('img/headerCtgl.png')}}" alt="Header CTGL" class="logo">

        <div id="app">

            <div>
                after
            </div>

            @guest
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenterLogin" id="btn-login">
                    Login
                </button>
            @else

                <div class="dropdown" id="btn-drop-logout">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="btn-logout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        @if(Auth::user() && Auth::user()->isMembre() || Auth::user()->isDeveloppeur())
                        <a class="dropdown-item" href="#">Profile</a>
                        @endif

                        @if(Auth::user() && Auth::user()->isPanelAdminAuthorize())
                            <a class="dropdown-item" href="{{route('panelAdmin')}}">Panneau d'aministration</a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>

                {{--<a class="btn btn-primary" href="{{ route('logout') }}" id="btn-logout"--}}
                   {{--onclick="event.preventDefault();--}}
                   {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--@csrf--}}
                {{--</form>--}}

                {{--<li class="nav-item dropdown" id="btn-login">--}}

                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                                         {{--document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</li>--}}
            @endguest

            <signin-signup-component routelogin="{{ route('login') }}" routenewaccount="{{ route('register') }}" routeforgetmdp="{{ route('password.request') }}"></signin-signup-component>

        </div>
    </header>

    <body>
        <!--slideshow-->
        <div id="slideShow">
            <ul>
                <li>
                    <a class="content" href="{{ route('presentation_path') }}">
                        <h2>{{$bandes[0]->title}}</h2>
                        <p>{{$bandes[0]->contenue}}</p>
                    </a>
                </li>
                <li>
                    <a class="content" href="{{ route('activite_path') }}">
                        <h2>{{$bandes[1]->title}}</h2>
                        <p>{{$bandes[1]->contenue}}</p>
                    </a>
                </li>
                <li>
                    <a class="content" href="{{ route('evenement_path') }}">
                        <h2>{{$bandes[2]->title}}</h2>
                        <p>{{$bandes[2]->contenue}}</p>
                        <!--lien vers calendrier d'évenement-->
                    </a>
                </li>
                <li>
                    <a class="content" href="{{ route('adherer_path') }}">
                        <h2>{{$bandes[3]->title}}</h2>
                        <p>{{$bandes[3]->contenue}}</p>
                        <!--lien vers formulaire de futur adhérant-->
                    </a>
                </li>
                <li>
                    <a class="content" href="{{ route('Contact_path') }}">
                        <h2>{{$bandes[4]->title}}</h2>
                        <p>{{$bandes[4]->contenue}}</p>
                        <!--lien vers formulaire de contacte-->
                    </a>
                </li>
            </ul>
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>

    @include('flashy::message')

    <script>

        // Function a exorter dans un fichier JS, function permettant de switcher entre l affichage de l onglet signin et new account

        $("#btn-signin").click(function() {
            $('#btn-signup').removeClass('btn-active').addClass('btn-inactive');
            $('#btn-signin').removeClass('btn-inactive').addClass('btn-active');
            $('#formLogin').css('display', 'block');
            $('#formRegister').css('display', 'none');
        });
        $("#btn-signup").click(function() {
            $('#btn-signin').removeClass('btn-active').addClass('btn-inactive');
            $('#btn-signup').removeClass('btn-inactive').addClass('btn-active');
            $('#formLogin').css('display', 'none');
            $('#formRegister').css('display', 'block');
        });

        $('btn-logout').click(function(){
            $("logout-form").submit(function(){
                alert("Submitted");
            });
        });

    </script>

</html>
