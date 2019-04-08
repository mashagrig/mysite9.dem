
@extends('layouts.app')

@section('content')
                @include('sliders.slider_home_top')
                @include('sliders.slider_programs')
                @include('about.about')
                @include('trainers.trainer1')
                @include('icon_blocks.home_blocks')
                @include('sliders.slider_trainers')
@endsection
