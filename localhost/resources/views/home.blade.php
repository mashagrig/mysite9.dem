
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center orange">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <span class="orange text-uppercase">Вы успешно авторизованы</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p><br /></p>

    @include('sliders.slider_home_top')
    @include('sliders.slider_programs')
    @include('about.about')
    @include('trainers.trainer1')
    @include('icon_blocks.home_blocks')
    @include('sliders.slider_trainers')
@endsection


