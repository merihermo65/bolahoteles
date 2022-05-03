<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @guest
                
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home')}}" role="button">{{ __('Inici') }}</a></li> 
                
                        <li class="nav-item dropdown">
                            <a id="reservartaula" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{_('Reservar taula') }}        
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="hola">
                                <!--CAL EDITAR LES RUTES I CREAR RUTES NOVES QUE COMPLEIXIN LA FUNCIÓ QUE TOCA-->
                                        <a class="dropdown-item" href="{{ route('reservaDinar') }}">{{ __('Dinar') }}</a>
                                        <a class="dropdown-item" href="{{ route('reservaSopar') }}">{{ __('Sopar') }}</a>
                            </div> 
                        </li>
                        <li class="nav-item dropdown">
                            <a id="hola" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{_('Restaurant') }}        
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="hola">
                                <!--CAL EDITAR LES RUTES I CREAR RUTES NOVES QUE COMPLEIXIN LA FUNCIÓ QUE TOCA-->
                                        <a class="dropdown-item" href="{{ route('menu') }}">{{ __('Menu del dia') }}</a>
                                        <a class="dropdown-item" href="{{ route('carta') }}">{{ __('Carta') }}</a>
                            </div> 
                        </li>
                    </ul>
                @endguest

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        @if(Auth::user()->image)
                                    <img src="{{ route('avatar', ['filename'=>Auth::user()->image])}}" class="avatar" height="30px" width="35px" style="border-radius: 50%;">
                                @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                                
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('edit') }}">
                                        {{ __('Editar Perfil') }}
                                    </a>

                                    <!--FALTA HACER QUE SEA FUNCIONAL DE MOMENTO TE REDIRIGE A HOME-->
                                   @if(Auth::user()->role == 'admin')
                                        <a class="dropdown-item" href="{{ route('edit-role') }}">
                                            {{ __('Modificar roles') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('imgnova') }}">
                                            {{ __('Penjar event') }}
                                            </a>
                                    @endif

                                    @if(Auth::user()->role == 'chef')
                                        <a class="dropdown-item" href="{{ route('plat') }}">
                                            {{ __('Crear plato') }}
                                        </a>
                                    @endif 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
