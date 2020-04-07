<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar has-shadow is-transparent" style="margin-bottom: 15px">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('images/amazingtoys.jpg') }}" alt="">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item m-l-15" href="">
                        Learn
                    </a>
                    <a class="navbar-item" href="">
                        Discuss
                    </a>
                    <a class="navbar-item" href="">
                        Share
                    </a>
                </div>

                <div class="navbar-end">
                    @guest()
                        <a class="navbar-item" href="{{ route('login') }}">
                            Login
                        </a>
                        <a class="navbar-item" href="{{ route('register') }}">
                            Register
                        </a>
                    @else
                        <div class="navbar-item">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link" href="">
                                    Hey {{ Auth::user()->name }}{{--Hey {{ Auth::user()->name }}--}}
                                </a>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="">
                                        <i class="fa fa-user m-r-10"></i> Profile
                                    </a>
                                    <a class="navbar-item" href="">
                                        <i class="fa fa-bell m-r-10"></i> Notification
                                    </a>
                                    <a class="navbar-item" href="">
                                        <i class="fa fa-cogs m-r-10"></i> Settings
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item is-active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-in-alt"></i> Layout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>

        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
