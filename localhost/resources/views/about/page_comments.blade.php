@extends('layouts.app')

@section('content')

    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Отзывы о клубе Sport',
    'top_slider_test_1'=>'Честно прямо в глаза',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Ваши отзывы пишут нашу историю',
    'top_slider_test_2'=>'Мы стараемся для Вашего здоровья',
    ])

    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Комменты...</p>
                </div>
            </div>
        </div>
    </div>
@endsection