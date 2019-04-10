@extends('layouts.app')

@section('content')


    @include('sliders.slider_top', [
    'bg_1'=>'hero_b1_1.jpg',
    'top_slider_h1_1'=>'Йога',
    'top_slider_test_1'=>'Идивидуальный подход для эффективной тренировки'
    ])
    <p><br /></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-body text-center orange">
                    <p>Йога...</p>
                </div>
            </div>
        </div>
    </div>
@endsection
