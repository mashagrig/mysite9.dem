@extends('layouts.app')

@section('content')


    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Абонемент на 6 месяцев',
    'top_slider_test_1'=>'Индивидуальный подход к каждому гостю нашего клуба'
    ])
    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Абонемент на 6 месяцев...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
