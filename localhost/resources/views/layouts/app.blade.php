<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body style="background-image: url('{{ asset("images/bg.jpg") }}');">
        <div class="site-wrap">
        @include('layouts.nav')
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
        </div>
    @include('layouts.footer')
</body>
</html>

