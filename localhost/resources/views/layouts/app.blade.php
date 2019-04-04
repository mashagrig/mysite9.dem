<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
{{--<body>--}}
<body style="background-image: url('{{ asset("images/bg.jpg") }}');">
    {{--<div id="app">--}}

        <div class="site-wrap">

        @include('layouts.nav')

        <main class="py-4">
            @include('layouts.content')
            {{--@yield('content')--}}
        </main>

        </div>
    {{--</div>--}}
    @include('layouts.footer')
</body>
</html>

