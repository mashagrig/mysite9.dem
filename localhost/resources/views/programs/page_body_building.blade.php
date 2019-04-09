@extends('layouts.app')

@section('content')

    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Боди билдинг',
    'top_slider_test_1'=>'Время для спорта должно быть всегда',
    'bg_2'=>'hero_bg_2.jpg',
    'top_slider_h1_2'=>'Боди билдинг',
    'top_slider_test_2'=>'Идивидуальный подход для эффективной тренировки',
    ])

    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Боди билдинг...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
