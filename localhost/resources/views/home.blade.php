
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center orange">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <span class="orange text-uppercase">Вы успешно авторизованы</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p><br /></p>

    @include('sliders.slider_top_three', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Фитнес клуб Sport',
    'top_slider_test_1'=>'Лучшие тренеры Москвы',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Эффективные тренировки',
    'top_slider_test_2'=>'Мы ценим Ваше время',
'bg_3'=>'hero_bg_3.jpg',
'top_slider_h1_3'=>'Цели достижимы',
'top_slider_test_3'=>'Мы помогаем Вам на пути к успеху'

    ])

    @include('sliders.slider_programs')
    @include('about.about')
    @include('trainers.trainer1')
    @include('icon_blocks.home_blocks')
    @include('sliders.slider_trainers')
@endsection


