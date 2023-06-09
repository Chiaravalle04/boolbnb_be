<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/svg+xml" href="https://www.digital.ink/wp-content/uploads/airbnb_logo_detail.jpg" />

        <title>BoolBnB</title>

        <!-- Fontawesome 6 cdn -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
         <!-- google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&family=Quicksand&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">

        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
        <script src="https://js.braintreegateway.com/web/dropin/1.36.1/js/dropin.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body>
        <div id="app">

            <header class="header_dashboard_container">

                <div class="link_home">

                    <a href="http://localhost:5174/">
                        Torna alla home
                    </a>

                </div>

                <div class="link_logout">

                    <a class="link_hover txt_deco_none link_color" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>

            </header>

            <main class="main_dashboard_container">

                <div class="user_details">

                    <h2>{{ $user->name }} {{ $user->surname }}</h2>

                    <h6>{{ $user->email }}</h6>

                    <h6>{{ $user->birth_date }}</h6>

                </div>

                <nav class="nav_bar_dashboard">

                    <ul class="ul_bar_dashboard">
                        <li>
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'link_color_bold' : '' }}" href="{{route('admin.dashboard')}}">
                                <i class="fa-solid fa-signal fa-lg fa-fw"></i> Statistiche
                            </a>
                        </li>
                        <li>
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.apartments.index' ? 'link_color_bold' : '' }}" href="{{route('admin.apartments.index')}}">
                                <i class="fa-solid fa-building-user fa-lg fa-fw"></i> I tuoi Appartamenti
                            </a>
                        </li>
                        <li>
                            <a class="nav-link {{ Route::currentRouteName() == 'admin.messages.index' ? 'link_color_bold' : '' }}" href="{{route('admin.messages.index')}}">
                                <i class="fa-solid fa-comments fa-lg fa-fw"></i> Messaggi
                            </a>
                        </li>
                    </ul>

                    <hr>

                </nav>

                @yield('content')

            </main>

        </div>
    </body>

</html>
