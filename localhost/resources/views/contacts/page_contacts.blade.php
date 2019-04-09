@extends('layouts.app')

@section('content')

    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Контакты клуба Sport',
    'top_slider_test_1'=>'Удобное расположение в центре Москвы',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Контакты клуба Sport',
    'top_slider_test_2'=>'Бесплатные Авто и вело парковки для наших гостей',
    ])

    <p><br /></p>
    @include('contacts.contacts')

@endsection
