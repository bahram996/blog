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
            @include('layouts._includes.nav.nav-main')
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
                                @if(auth()->user()->isAdministrator())
                                    <a class="navbar-item" href="{{ route('manage') }}">
                                        <i class="fa fa-cogs m-r-10"></i> Managment Dashboard
                                    </a>
                                @endif
                                <hr class="navbar-divider">
                                <a class="navbar-item is-active" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-in-alt"></i> Layout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
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
