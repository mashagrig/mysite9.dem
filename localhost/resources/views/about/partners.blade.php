
<?php

$arr = array();

//for ($i = 1; $i < 7; $i++) {
//    $arr['file'][$i] = "images/img_" . $i . ".jpg";
//}

$arr = [
     [
        'file' => 'images/img_1.jpg',
        'title' => 'ГАЗПРОМ',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],
    [
        'file' => 'images/img_2.jpg',
        'title' => 'FIFA',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],
   [
        'file' => 'images/img_3.jpg',
        'title' => 'WADA',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],
   [
        'file' => 'images/img_4.jpg',
        'title' => 'СПАРТАК',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],
   [
        'file' => 'images/img_5.jpg',
        'title' => 'ЦСКА',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],
   [
        'file' => 'images/img_6.jpg',
        'title' => 'ДИНАМО',
        'text' => 'Партнер клуба',
        'link' => 'www.gazprom.ru',
        ],

];
//$arr['text'] = [
//    '1' => 'Занятия на разогрев или занятия на кардио-тренажерах',
//    '2' => 'Тяжелые силовые тренировки со свободными весами',
//    '3' => 'Похудеть и сесть на шпагат возможно в любом возрасте',
//    '4' => 'Акцент на эффективную функциональную подготовку',
//    '5' => 'Искомый эффект в виде физического и духовного совершенствования',
//    '6' => 'Лучшая тренерская команда в фитнес-клубе Sport',
//];
//$arr['link'] = [
//    '1' => 'programs',
//    '2' => 'programs',
//    '3' => 'programs',
//    '4' => 'programs',
//    '5' => 'programs',
//    '6' => 'programs',
//];

?>


@include('icon_blocks.icon_blocks_partners', [
'slider_id'=>'partners',
'title_page'=>'Партнеры нашего клуба',
'arr'=>$arr,
])

