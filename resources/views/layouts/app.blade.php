<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="shortcut icon" src="{{ asset('img/laravel.png') }}" type="image/x-icon"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraveL8') }}</title>

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
        <nav class="navbar navbar-expand-md  shadow-sm" style="background: rgb(60, 19, 132)">
            <div class="container">
                <a class="navbar-brand text-danger font-weight-bold" href="{{ url('/') }}">
                    {{ config('app.name', 'LaraveL8') }}
                </a>
                <a class="navbar-brand text-danger font-weight-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/laravel.png') }}" alt="laravel" width="30px" height="30px" class="mr-2">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5 mr-auto">
                        @auth
                            <li class="ml-2 nav-item">
                                <a href="{{ route('home') }}" class="nav-link active" style="color: rgb(216, 215, 215)">
                                    Home
                                </a>
                            </li>
                            <li class="ml-2 nav-item">
                                <a href="" class="nav-link" style="color: rgb(216, 215, 215)">
                                    My Apps
                                </a>
                            </li>
                            <li class="ml-2 nav-item">
                                <a href="" class="nav-link" style="color: rgb(216, 215, 215)">
                                    My Works
                                </a>
                            </li>
                            <li class="ml-2 nav-item">
                                <a href="" class="nav-link" style="color: rgb(216, 215, 215)">
                                    Prodects
                                </a>
                            </li>
                            <li class="ml-2 nav-item">
                                <a href="" class="nav-link" style="color: rgb(216, 215, 215)">
                                    Pages
                                </a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <img src="{{ Auth::user()->avatar }}" alt=""
                                    style="border-radius:50%; width:39px; height:39px; float:left; margin-right:10px;">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: rgb(0, 255, 51)">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        {{ __('profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
