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

                            {{--@foreach($equipment as $equip)--}}
                            {{--<option value="{{ $equip->id }}"--}}
                            {{--@if( in_array($equip->id, old('equipments', $arr)) )--}}
                            {{--selected--}}
                            {{--@endif--}}
                            {{-->--}}
                            {{--{{ $equip->equip_name }}--}}
                            {{--</option>--}}
                            {{--@endforeach--}}

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
                            <option value="trainer1">Петров</option>
                            <option value="trainer2">Иванов</option>
                            <option value="trainer3">Сидоров</option>
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
        {{--{{print_r($max_date_select)}}--}}
        {{--{{print_r($program_select)}}--}}
        {{--{{print_r($trainers_select)}}--}}

        {{--{{ print_r(old('programs') ) }}--}}
        {{--{{print_r($shedule_for_date)}}--}}


        {{--@foreach($shedule_for_date as $shedule)--}}
        {{--{{print_r($shedule)}}--}}
        {{--@endforeach--}}





        <div class="row">

            @include('shedule.shedule_table')

            {{--<div id="slider-range"></div>--}}

            {{--<aside class="widget shop-filter">--}}
            {{--<h3 class="sidebar-title">price</h3>--}}
            {{--<div class="info_widget">--}}
            {{--<div class="price_filter">--}}
            {{--<div id="slider-range"></div>--}}
            {{--<div class="price_slider_amount">--}}
            {{--<input type="text" id="amount" name="price"  placeholder="Add Your Price" />--}}
            {{--<input type="submit"  value="Filter"/>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</aside>--}}





            {{--<table class="table table-striped">--}}
            {{--<thead class="text-black thead-dark">--}}
            {{--<tr>--}}
            {{--<th scope="col">Дата</th>--}}
            {{--<th scope="col">Время</th>--}}
            {{--<th scope="col">Тренер</th>--}}
            {{--<th scope="col">№ зала</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--<tr>--}}
            {{--<td>01.01.2019</td>--}}
            {{--<td>12-00 / 14-00</td>--}}
            {{--<td>Иванов</td>--}}
            {{--<td>101</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>01.01.2019</td>--}}
            {{--<td>18-00 / 20-00</td>--}}
            {{--<td>120</td>--}}
            {{--<td>120</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td>01.01.2019</td>--}}
            {{--<td>22-00 / 24-00</td>--}}
            {{--<td>230</td>--}}
            {{--<td>230</td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
            {{--</table>--}}

        </div>


    </div> {{-- container--}}


</div>
</div>
