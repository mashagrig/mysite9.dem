<div id="comments" class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Отзывы гостей нашего клуба</h2>
            </div>
        </div>
        <div class="row mb-5">


            @foreach($guests as $guest)


            <div  class="col-md-6 col-lg-4 mb-5 mb-lg-0">

                <div class="media-with-text mb-5">
                    <div class="mb-4">
                            <img src="{{ asset("{$guest->binaryfiles_file_src}") }}" alt="" class="img-fluid">
                    </div>
                    <span class="mb-3 d-block post-date">{{$guest->comments_updated_at}} &bullet; By <h2>{{$guest->users_name}}</h2></span>
                    <p>{{$guest->comments_text}}</p>
                </div>
            </div>


            @endforeach



        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
