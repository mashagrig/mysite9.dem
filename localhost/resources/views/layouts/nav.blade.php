
{{--<div class="site-mobile-menu">--}}
    {{--<div class="site-mobile-menu-header">--}}
        {{--<div class="site-mobile-menu-close mt-3">--}}
            {{--<span class="icon-close2 js-menu-toggle"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="site-mobile-menu-body"></div>--}}
{{--</div> <!-- .site-mobile-menu -->--}}




{{--<div class="site-navbar-wrap js-site-navbar bg-white">--}}

    {{--<div class="container">--}}
        {{--<div class="site-navbar bg-light">--}}
            {{--<div class="py-1">--}}
                {{--<div class="row align-items-center">--}}
                    {{--<div class="col-2">--}}
                        {{--<h2 class="mb-0 site-logo"><a href="index.html">Cross<strong>fits</strong></a></h2>--}}
                    {{--</div>--}}
                    {{--<div class="col-10">--}}
                        {{--<nav class="site-navigation text-right" role="navigation">--}}
                            {{--<div class="container">--}}
                                {{--<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>--}}

                                {{--<ul class="site-menu js-clone-nav d-none d-lg-block">--}}
                                    {{--<li class="has-children">--}}
                                        {{--<a href="program.html">Program</a>--}}
                                        {{--<ul class="dropdown arrow-top">--}}
                                            {{--<li><a href="program.html">Body Building</a></li>--}}
                                            {{--<li><a href="program.html">Morning Energy</a></li>--}}
                                            {{--<li><a href="program.html">Stretching</a></li>--}}
                                            {{--<li class="has-children">--}}
                                                {{--<a href="program.html">Sub Menus</a>--}}
                                                {{--<ul class="dropdown">--}}
                                                    {{--<li><a href="program.html">Swimming</a></li>--}}
                                                    {{--<li><a href="program.html">Boxing</a></li>--}}
                                                    {{--<li><a href="program.html">Running</a></li>--}}
                                                    {{--<li><a href="program.html">Jogging</a></li>--}}

                                                {{--</ul>--}}
                                            {{--</li>--}}

                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="trainers.html">Our Trainers</a></li>--}}
                                    {{--<li><a href="events.html">News</a></li>--}}
                                    {{--<li><a href="about.html">About</a></li>--}}
                                    {{--<li class="active"><a href="contact.html">Contact</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}






<nav class="navbar navbar-expand-md navbar-light navbar-laravel">


    <div class="container">
            <a class="navbar-brand site-logo" href="{{ url('/') }}">
                {{--{{ config('app.name', 'SPORT') }} --}}
                <strong>S</strong>port
            </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            {{--<span class="navbar-toggler-icon"></span>--}}
            <span class="icon-menu h3"></span>
        </button>




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
