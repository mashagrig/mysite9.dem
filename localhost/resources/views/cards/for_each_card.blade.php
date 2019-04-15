
<?php

$arr = array();

$arr = [
    [
        'file' => 'images/img_1.jpg',
        'price' => 'от 120 000 руб.',
        'title' => 'Годовой абонемент',
        'text' => 'На 3 занятия в неделю по любой программе',
        'link' => 'cards_year',
    ],
    [
        'file' => 'images/img_2.jpg',
        'price' => 'от 60 000 руб.',
        'title' => '6 месяцев',
        'text' => 'На 3 занятия в неделю по любой программе',
        'link' => 'cards_six_month',
    ],
    [
        'file' => 'images/img_3.jpg',
        'price' => 'от 30 000 руб.',
        'title' => '3 месяца',
        'text' => 'На 3 занятия в неделю по любой программе',
        'link' => 'cards_three_month',
    ],
    [
        'file' => 'images/img_4.jpg',
        'price' => 'от 10 000 руб.',
        'title' => '1 месяц',
        'text' => 'На 3 занятия в неделю по любой программе',
        'link' => 'cards_one_month',
    ],
    [
        'file' => 'images/img_5.jpg',
        'price' => 'от 50 000 руб.',
        'title' => 'Персональная карта',
        'text' => 'Индивидуальный подбор количества занятий и программ',
        'link' => 'cards_personal',
    ],
    [
        'file' => 'images/img_6.jpg',
        'price' => 'от 40 000 руб.',
        'title' => 'Детские карты',
        'text' => 'Индивидуальный подбор количества занятий и программ',
        'link' => 'cards_child',
    ],

];

?>


@include('cards.each_card', [
'arr'=>$arr,
])

