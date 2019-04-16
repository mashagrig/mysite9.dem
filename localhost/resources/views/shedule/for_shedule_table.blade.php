<div id="shedule" class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="site-section-heading text-center">Расписание занятий</h2>
            </div>
        </div>

        <div class="row">
            <form method='POST' action="{{ action('shedule\SheduleController@store') }}" class="row">
                {{--<input name="_token" type="hidden" value="{{ csrf_token() }}">--}}
                {{ csrf_field() }}



                <div class="col-md-auto toolbar-form bg-white  mb-3">
                    <div class="tolbar-select">
                        <label class="mr-sm-2" for="period">Показать расписание на период:</label><br/>
                        <select id="period" name="period">
                            <option  value="" hidden></option>
                            <option value="today"  @if($period_select === "today")  selected @endif>Сегодня</option>
                            <option value="week"  @if($period_select === "week")  selected @endif>На неделю</option>
                            <option value="month"  @if($period_select === "month")  selected @endif>На месяц</option>

                            {{--<option value="week" @if($program_select === "week")  selected @endif>На неделю</option>--}}
                            {{--<option value="week" {{ old('period') === "week" ? 'selected' : '' }}>На неделю</option>--}}
                            {{--<option value="day">Точная дата</option>--}}


                        </select>
                    </div>
                </div>

                <div class="col-md-auto toolbar-form bg-white  mb-3">
                    <div class="tolbar-select">
                        <label class="mr-sm-2" for="programs">Выберете программу:</label><br/>
                        <select id="programs" name="programs">
                            <option value="" hidden></option>
                            <option value="" @if($program_select === "")  selected @endif>Все программы</option>
                            <option value="morning_programs" @if($program_select === "morning_programs")  selected @endif>Утренние программы</option>
                            <option value="body_building" @if($program_select === "body_building")  selected @endif>Боди билдинг</option>
                            <option value="stretching" @if($program_select === "stretching")  selected @endif>Стретчинг</option>
                            <option value="fitness" @if($program_select === "fitness")  selected @endif>Фитнес</option>
                            <option value="yoga" @if($program_select === "yoga")  selected @endif>Йога</option>
                            <option value="child_programs" @if($program_select === "child_programs")  selected @endif>Детсткие программы</option>
                        </select>
                    </div>

                </div>


                <div class="col-md-auto toolbar-form bg-white  mb-3">
                    <div class="tolbar-select">
                        <label class="mr-sm-2" for="trainers">Выберете тренера:</label><br/>
                        <select id="trainers" name="trainers">
                            <option value="" hidden></option>

                            @if(isset($shedule_for_date) && $shedule_for_date!=='')

                                <?php
                                $shedule_for_date_u =  $shedule_for_date->unique('trainer_id')
                                ?>


                                @foreach($shedule_for_date_u as $shedule)
                                <option value="{{ $shedule->trainer_id }}">
                                    {{ $shedule->trainer_name }}
                                </option>

                                @endforeach
                            @endif

                            {{--<option value="{{ $shedule->trainer_id }}"--}}
                            {{--@if($trainers_select === "{$shedule->trainer_id }")  selected @endif>--}}
                            {{--{{ $shedule->trainer_name }}--}}
                            {{--</option>--}}


                            {{--@if(isset($all_programs_trainers_id))--}}
                                {{--@foreach($all_programs_trainers_id as $trainer_name=>$trainer_id)--}}
                                {{--<option value="{{ $trainer_id }}">{{ $trainer_name }}</option>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}
                            {{--@if(isset($all_body_building_trainers_id))--}}

                                {{--@foreach($all_body_building_trainers_id as $trainer_name=>$trainer_id)--}}
                                    {{--<option value="{{ $trainer_id }}">{{ $trainer_name }}</option>--}}
                                {{--@endforeach--}}
                            {{--@endif--}}

                        </select>
                    </div>
                </div>


            <div class="col align-items-end">
                <div class=" bg-white  mb-3 align-items-end">
                    <br/>
                    <input type="submit" class="btn btn-primary rounded text-white px-4" value="Показать">
                </div>
            </div>
            </form>
        </div>
        <div class="row">
            @include('shedule.shedule_table')
        </div>
    </div> {{-- container--}}
</div>
</div>
