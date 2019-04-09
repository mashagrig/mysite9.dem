
@extends('layouts.app')

@section('content')
    @include('sliders.slider_top', [
'bg_1'=>'hero_b1_1.jpg',
'top_slider_h1_1'=>'Фитнес клуб Sport',
'top_slider_test_1'=>'Лучшие тренеры Москвы',
'bg_2'=>'hero_bg_2.jpg',
'top_slider_h1_2'=>'Эффективные тренировки',
'top_slider_test_2'=>'Мы ценим Ваше время',
])
                @include('sliders.slider_programs')
                @include('about.about')
                @include('trainers.trainer1')
                @include('icon_blocks.home_blocks')
                @include('sliders.slider_trainers')
@endsection
