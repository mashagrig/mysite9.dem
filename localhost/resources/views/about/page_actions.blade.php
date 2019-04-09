@extends('layouts.app')

@section('content')

    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Акции клуба Sport',
    'top_slider_test_1'=>'Лояльные программы и система скидок для каждого',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Скидки до 50%',
    'top_slider_test_2'=>'Спорт доступен всем',
    ])

    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Акции -50% на все услуги до 20 мая!</p>
                    <p>Действительно для всех гостей нашего клуба.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
