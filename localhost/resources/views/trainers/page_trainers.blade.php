

@extends('layouts.app')

@section('content')


    @include('sliders.slider_top', [
    'bg_1'=>'hero_bg_3.jpg',
    'top_slider_h1_1'=>'Тренеры',
    'top_slider_test_1'=>'Лучшая тренерская команда Москвы'
    ])


    @include('sliders.slider_trainers')
    @include('trainers.trainer1')



    {{--<p><br /></p>--}}
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card card-body text-left orange">--}}
                    {{--<p>Тренеры...</p>--}}

                    {{--<p>{{ $trainers_roles_id }}</p>--}}
                    {{--@foreach($trainers_info as $trainers)--}}
                        {{--<h5>{{ $trainers->personalinfos_name }}</h5>--}}
                        {{--<p>{{ $trainers->roles_title }}</p>--}}
                        {{--<p>{{ $trainers->users_email }}</p>--}}
                        {{--<p>{{ $trainers->users_id }}</p>--}}
                        {{--<p>{{ $trainers->users_name }}</p>--}}
                        {{--<p>{{ $trainers->binaryfiles_file_src }}</p>--}}
                        {{--<p>{{ $trainers->personalinfos_info }}</p>--}}
                    {{--@endforeach--}}
                    {{--<pre>{{ print_r($trainers_info) }}</pre>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
