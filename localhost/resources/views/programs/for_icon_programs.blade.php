
<?php

$arr = array();

$arr = [
    [
        'icon' => 'flaticon-gym-5',
        'title' => 'Утренние программы',
        'text' => 'Занятия на разогрев или занятия на кардио-тренажерах',
        'link' => 'morning_programs',
    ],
    [
        'icon' => 'flaticon-gym-3',
        'title' => 'Боди билдинг',
        'text' => 'Тяжелые силовые тренировки со свободными весами',
        'link' => 'body_building',
    ],
    [
        'icon' => 'flaticon-stretching-exercises',
        'title' => 'Стретчинг',
        'text' => 'Похудеть и сесть на шпагат возможно в любом возрасте',
        'link' => 'stretching',
    ],
    [
        'icon' => 'flaticon-gym-7',
        'title' => 'Фитнес',
        'text' => 'Акцент на эффективную функциональную подготовку',
        'link' => 'fitness',
    ],
    [
        'icon' => 'flaticon-religion',
        'title' => 'Йога',
        'text' => 'Искомый эффект в виде физического и духовного совершенствования',
        'link' => 'yoga',
    ],
    [
        'icon' => 'flaticon-fast',
        'title' => 'Детсткие программы',
        'text' => 'При участии родителей или под руководством опытного инструктора',
        'link' => 'child_programs',
    ],

];


?>


@include('icon_blocks.icon_blocks_programs', [
'icon_blocks_id'=>'programs',
'title_page'=>'Программы нашего клуба',
'arr'=>$arr,
])

