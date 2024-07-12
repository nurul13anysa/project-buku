<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Discipline Book</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .nav-item {
            margin-top: 5px; /* Tambahkan jarak 10px di atas setiap nav-item */
        }
        .navbar-brand {
            color: #fff !important;
            font-size: 10rem; /* Increase the font size */
            padding-left: 10px; /* Adjust the padding to move it to the left */
            margin-left: -55px; /* Align it with the sidebar */
        }
        .nav-link, .navbar-toggler-icon {
            color: #fff !important;
        }
        .sidebar {
            background-color: #343a40;
            height: 200vh;
            position: fixed;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }
        .main-content {
            margin-left: 200px;
        }
        .bg-dark {
            background-color: #343a40 !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}"> --}}
                <a class="navbar-brand ">
                    Discipline Book
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
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

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/siswa">Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/petugas">Petugas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/class_room">ClassRoom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/peraturan">Peraturan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/point">Point</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pelanggar">Pelanggar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kami">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
