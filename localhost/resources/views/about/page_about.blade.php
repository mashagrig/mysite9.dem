@extends('layouts.app')

@section('content')
    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Клуб Sport',
    'top_slider_test_1'=>'Присоединяйтесь к нашей команде',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Скидки до 50%',
    'top_slider_test_2'=>'Спорт доступен всем',
    ])
    @include('about.about')
    @include('sliders.slider_programs')
    @include('trainers.trainer1')
    @include('icon_blocks.home_blocks')
    @include('sliders.slider_trainers')
@endsection
