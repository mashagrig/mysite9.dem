
{{--<div class="site-mobile-menu">--}}
    {{--<div class="site-mobile-menu-header">--}}
        {{--<div class="site-mobile-menu-close mt-3">--}}
            {{--<span class="icon-close2 js-menu-toggle"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="site-mobile-menu-body"></div>--}}
{{--</div> <!-- .site-mobile-menu -->--}}




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

                {{--------------about---------------}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>О нас<span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('photo') }}">{{ __('Фото галерея') }}</a>
                        <a class="dropdown-item" href="{{ route('actions') }}">{{ __('Акции') }}</a>
                        <a class="dropdown-item" href="{{ route('news') }}">{{ __('Новости') }}</a>
                        <a class="dropdown-item" href="{{ route('partners') }}">{{ __('Пратнеры') }}</a>
                        <a class="dropdown-item" href="{{ route('comments') }}">{{ __('Отзывы') }}</a>
                    </div>
                </li>
                {{--<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">{{ __('О клубе') }}</a></li> --}}
                {{--------------clubs---------------}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Клубы<span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('clubs_kuskaya') }}">{{ __('Курская') }}</a>
                        <a class="dropdown-item" href="{{ route('clubs_paveletskaya') }}">{{ __('Павелецкая') }}</a>
                        <a class="dropdown-item" href="{{ route('clubs_tverskaya') }}">{{ __('Тверская') }}</a>
                        <a class="dropdown-item" href="{{ route('clubs_kievskaya') }}">{{ __('Киевская') }}</a>
                    </div>
                </li>
                {{--<li class="nav-item"><a class="nav-link" href="{{ route('clubs') }}">{{ __('Клубы') }}</a></li>--}}
                {{--------------programs---------------}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Программы<span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('morning_programs') }}">{{ __('Утренние программы') }}</a>
                        <a class="dropdown-item" href="{{ route('body_building') }}">{{ __('Боди билдинг') }}</a>
                        <a class="dropdown-item" href="{{ route('stretching') }}">{{ __('Стретчинг') }}</a>
                        <a class="dropdown-item" href="{{ route('fitness') }}">{{ __('Фитнес') }}</a>
                        <a class="dropdown-item" href="{{ route('yoga') }}">{{ __('Йога') }}</a>
                        <a class="dropdown-item" href="{{ route('pilates') }}">{{ __('Пилатес') }}</a>
                        <a class="dropdown-item" href="{{ route('child_programs') }}">{{ __('Детские программы') }}</a>
                    </div>
                </li>
                {{--------------cards---------------}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Карты<span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('cards_year') }}">{{ __('Год') }}</a>
                        <a class="dropdown-item" href="{{ route('cards_six_month') }}">{{ __('6 месяцев') }}</a>
                        <a class="dropdown-item" href="{{ route('cards_three_month') }}">{{ __('3 месяца') }}</a>
                        <a class="dropdown-item" href="{{ route('cards_one_month') }}">{{ __('1 месяц') }}</a>
                        <a class="dropdown-item" href="{{ route('cards_personal') }}">{{ __('Персональные') }}</a>
                    </div>
                </li>
                {{--------------trainers---------------}}
                <li class="nav-item"><a class="nav-link" href="{{ route('trainers') }}">{{ __('Тренеры') }}</a></li>

                {{--------------shedule---------------}}
                <li class="nav-item"><a class="nav-link" href="{{ route('shedule') }}">{{ __('Расписание') }}</a></li>
                {{--------------contacts---------------}}
                <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">{{ __('Контакты') }}</a></li>

            </ul>




            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
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
                                {{ __('Выход') }}
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
