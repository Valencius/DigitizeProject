<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digitize</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css"> {{-- css home --}}
    <link rel="stylesheet" href="{{ asset('css/createPeserta.css') }}">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="{{ asset('css/email.css') }}">
    
    {{-- tambahin disini buat css lainnya --}}
    {{-- boleh liat home.css sama variables.scss dulu soalnya ada brp yg gw set default--}}

    <!-- Favicon - buat icon di tab menu -->
    <link rel="icon" href="{{ asset('asset/logo-black.svg') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('asset/logo.png')}}" width="175px" height="48px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/#competition-heading">Competition</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/#timeline-p">Timeline</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" id="login-btn" class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="register-btn" class="btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

    <div class="footer">
        <div class="content1">
            <div class="content2">
                <div class="content3">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('asset/logo.png')}}" width="175px" height="48px">
                    </a>
                    <a href="/#competition-heading" class="btn" id="letsvote">Let's Vote</a>
                </div>
                <div class="content4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/" id="active">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/#competition-heading" id="competition">Competition</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/#timeline-p" id="timeline">Timeline</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p>Copyright Digitize. All Rights Reserved</p>
        </div>
    </div>
</body>
</html>
