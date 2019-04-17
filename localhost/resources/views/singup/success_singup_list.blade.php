@if(isset($check_shedule_id) && $check_shedule_id!=='')

    <div class="site-section  block-14 bg-light nav-direction-white">
        <div class="container">
            <div class="row  mb-5">
                <div class="col-md-12">
                    <h2 class="site-section-heading text-center">Вы успешно запсаны на занятия:</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 block-14 nav-direction-white">


                    {{--{{ print_r($_GET) }}--}}
                    {{--<br />--}}
                    {{--{{ print_r($each_check_shedule_info) }}--}}
                    {{--{{ var_dump($check_shedule_id) }}--}}

                    {{--@foreach($check_shedule_id as $k=>$singup)--}}

                        @foreach($each_check_shedule_info as $kk=>$singup)

                        @foreach($singup as $k=>$v)

                            {{--{{ print_r($singup[$k]['shedule_id']) }}--}}
                                <ul>
                            <li>id  {{ $singup[$k]['shedule_id'] }}</li>
                            <li>id  {{ $singup[$k]['date_training'] }}</li>
                            <li>id  {{ $singup[$k]['start_training'] }} - {{ $singup[$k]['stop_training'] }}</li>
                            <li>id  {{ $singup[$k]['section_title'] }}</li>
                            <li>id  {{ $singup[$k]['trainer_name'] }}</li>
                            <li>id  {{ $singup[$k]['gym_id'] }}</li>
                                </ul>
                        @endforeach

                        @endforeach

                    {{--@endforeach--}}







                </div>
            </div>
        </div>
    </div>


@endif
