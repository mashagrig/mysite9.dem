
@if(isset($max_date_select) && $max_date_select!=='')


{{--Для каждой уникальной даты из расписания создаем таблицу--}}
@foreach($max_date_select as $k =>$date)

    <?php
  $format_date =  date_format(date_create($date), 'd-m-Y');
//    setlocale(, 'ru_RU');
 //   $date = strftime("%A %e %B %G", strtotime($date));
    ?>

    <span class="text-black">Расписание на {{ $format_date }}</span>

    {{--<span class="text-black">Расписание на {{ $date }}</span>--}}

<table class="table table-striped">
    <thead class="text-black thead-dark">
    <tr>
        <th scope="col">Дата</th>
        <th scope="col">Время</th>
        <th scope="col">Тренер</th>
        <th scope="col">Секция</th>
        <th scope="col">№ зала</th>
    </tr>
    </thead>
    <tbody>


    @if(isset($shedule_for_date) && $shedule_for_date!=='')
        {{--Для каждой записи (неуникальной) из расписания--}}
        @foreach($shedule_for_date as $shedule)

            {{--Для каждой уникальной даты из расписания выводим все записи для этой даты--}}
            @if((strtotime($shedule->date_training) === strtotime($date)))

        <tr>
            <td>{{ date_format(date_create($shedule->date_training), 'd-m-Y') }}</td>
            <td>{{ date_format(date_create($shedule->start_training), 'H:i') }} - {{ date_format(date_create($shedule->stop_training), 'H:i') }}</td>
            <td>{{ $shedule->personalinfos_name }}</td>
            <td>{{ $shedule->section_title }}</td>
            <td>{{ $shedule->gym_id }}</td>
        </tr>

            @endif


        @endforeach
    @endif



    </tbody>
</table>


    @endforeach
@endif