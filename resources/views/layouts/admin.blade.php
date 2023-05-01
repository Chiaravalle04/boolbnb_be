<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fontawesome 6 cdn -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
                        <i class="link_color fa-solid fa-arrow-left-long"></i>
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

            {{-- <header class="navbar navbar-dark sticky-top flex-md-nowrap p-2 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 mx-4 px-3" href="/"><i class="link_color fa-solid fa-arrow-left"></i></a> --}}
                {{-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
                {{-- <div class="navbar-nav">
                    <div class="nav-item text-nowrap mx-4">
                        <a class="link_color" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div> --}}
            {{-- </header> --}}

            {{-- <div class="container-fluid vh-100">
                <div class="row h-100"> --}}
                    {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
                                        <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                    </a>
                                </li>
                                
                                {{-- appartamenti --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.apartments.index' ? 'bg-secondary' : '' }}" href="{{route('admin.apartments.index')}}">
                                        <i class="fa-solid fa-house fa-lg fa-fw"></i> Appartamenti
                                    </a>
                                </li> --}}

                                {{-- <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.services.index' ? 'bg-secondary' : '' }}" href="{{route('admin.services.index')}}">
                                        <i class="fa-regular fa-square-check fa-lg fa-fw"></i> Services
                                    </a>
                                </li> --}}

                                {{-- messaggi --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.messages.index' ? 'bg-secondary' : '' }}" href="{{route('admin.messages.index')}}">
                                        <i class="fa-regular fa-image fa-lg fa-fw"></i> Messaggi
                                    </a>
                                </li> --}}

                                {{-- sponsorizzazioni --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.sponsorships.index' ? 'bg-secondary' : '' }}" href="{{route('admin.sponsorships.index')}}">
                                        <i class="fa-solid fa-award fa-lg fa-fw"></i> Sponsorships
                                    </a>
                                </li> --}}
                            {{-- </ul> --}}


                        {{-- </div> --}}
                    {{-- </nav> --}}

                    {{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        @yield('content')
                    </main>
                </div>
            </div> --}}

        </div>
    </body>

</html>
