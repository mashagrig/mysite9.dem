
<?php $count = 1; ?>
{{--описание каждой программы--}}
@foreach($arr as $k=>$v)
    <?php

    $file = $arr[$k]['file'];
    $title = $arr[$k]['title'];
    $text = $arr[$k]['text'];
    $link = $arr[$k]['link'];
    ?>

    @if($count%2 === 0)

<div id="{{ $link }}" class="site-section">
    <div class="container"><p><br /></p>
        <div class="row">
            <div class="col-lg-6">
                <p class="mb-5"><img src="{{ asset("{$file}") }}" alt="Image" class="img-fluid"></p>
            </div>
            <div class="col-lg-5 ml-auto">
                <h2 class="site-section-heading mb-3">{{ $title }}</h2>
                <p class="mb-4">{{ $text }}</p>
                <p><a href="{{ route('contacts') }}" class="btn btn-outline-primary py-2 px-4">Записаться</a></p>
            </div>
        </div>
    </div>
</div>
    @endif

    @if($count%2 !== 0)

        <div id="{{ $link }}" class="site-section">
            <div class="container"><p><br /></p>
                <div class="row">

                    <div class="col-lg-5 ml-auto">
                        <h2 class="site-section-heading mb-3">{{ $title }}</h2>
                        <p class="mb-4">{{ $text }}</p>
                        <p><a href="{{ route('contacts') }}" class="btn btn-outline-primary py-2 px-4">Записаться</a></p>
                    </div>
                    <div class="col-lg-6">
                        <p class="mb-5"><img src="{{ asset("{$file}") }}" alt="Image" class="img-fluid"></p>
                    </div>

                </div>
            </div>
        </div>
    @endif

    <?php $count ++; ?>

@endforeach

