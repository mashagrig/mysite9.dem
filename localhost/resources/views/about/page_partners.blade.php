@extends('layouts.app')

@section('content')

    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Партнеры клуба Sport',
    'top_slider_test_1'=>'Наша команда всегда открыта к сотрудничеству',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Партнеры клуба Sport',
    'top_slider_test_2'=>'Мы сильны вместе',
    ])

    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Партнеры...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
