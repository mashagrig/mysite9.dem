@extends('layouts.app')

@section('content')


    @include('sliders.slider_top', [
'bg_1'=>'hero_b1_1.jpg',
'top_slider_h1_1'=>'Подтверждение e-mai',
'top_slider_test_1'=>'Больше возможностей для каждого гостя клуба'
])
    <p><br /></p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтверждение Вашего Email-адреса') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новая ссылка для подтверждения была отправлена на Ваш Email-адрес.') }}
                        </div>
                    @endif

                    {{ __('Для получения приватного доступа подтвердите Ваш Email-адрес, перейдя по ссылке в отправленном Вам письме.') }}
                    {{ __('Если Вы не получили email') }}, <a href="{{ route('verification.resend') }}">{{ __('кликните сюда для повторной отправки письма подтверждения') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
