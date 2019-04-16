
{{--Для каждой уникальной даты из расписания создаем таблицу--}}
@foreach($max_date_select as $k =>$date)

    <span class="text-black">Расписание на {{ $date }}</span>
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

        {{--Для каждой записи (неуникальной) из расписания--}}
        @foreach($shedule_for_date as $shedule)

            {{--Для каждой уникальной даты из расписания выводим все записи для этой даты--}}
            @if((strtotime($shedule->date_training) === strtotime($date)))

        <tr>
            <td>{{ $shedule->date_training }}</td>
            <td>{{ $shedule->start_training }} - {{ $shedule->stop_training }}</td>
            <td>{{ $shedule->personalinfos_name }}</td>
            <td>{{ $shedule->section_title }}</td>
            <td>{{ $shedule->gym_id }}</td>
        </tr>

            @endif

        @endforeach




    </tbody>
</table>


    @endforeach
