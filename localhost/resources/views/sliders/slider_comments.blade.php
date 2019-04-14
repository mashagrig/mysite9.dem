

<div id="{{ $slider_id }}" class="site-section  block-14 bg-light nav-direction-white">
    <div class="container">
        <div class="row  mb-5">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">{{ $title_page }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-14 nav-direction-white">

                <div class="nonloop-block-14 owl-carousel">


                    @foreach($guests as $guest)


                        <div class="p-5">
                            <div class="block-testimony">

                                    <div class="person row  align-items-end">
                                          <div class="col-md-auto">
                                        <img src="{{ asset("{$guest->binaryfiles_file_src}") }}" alt="Image"
                                             class="img-fluid rounded-circle" style="width: 70px!important;">
                                          </div>

                                        <div class="col-md-auto text-left">
                                              <span class=" post-date">{{$guest->comments_updated_at}} <h2> {{$guest->users_name}}</h2></span>
                                        </div>
                                    </div>



                                <div class="row">
                                  <div class="col">

                                        <blockquote>&ldquo;{{ $guest->comments_text }}&rdquo;
                                        </blockquote>
                                    </div>
                                 </div>

                             </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
