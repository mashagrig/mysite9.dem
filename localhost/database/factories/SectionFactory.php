<?php

use Faker\Generator as Faker;


$section = array('box', 'fitness', 'basketball', 'football', 'yoga');

//function gen($section){
//    foreach (range(0, count($section)-1) as $i){
//            yield $i;
//    }
//}

    $factory->define(App\Section::class, function (Faker $faker) use ($section) {

        $s = $section[rand(0, (count($section)-1))];

//foreach ( gen($section) as $g) {
//    $s = $section[$g];
//}
//        var_dump($s);
        return
            [
                'title' => $s
            ];

    });


$factory->defineAs(App\Section::class, 'box', function (Faker $faker) {
    return [
        'title' => 'box'
    ];
});
$factory->defineAs(App\Section::class, 'fitness', function (Faker $faker) {
    return [
        'title' => 'fitness'
    ];
});
$factory->defineAs(App\Section::class, 'basketball', function (Faker $faker) {
    return [
        'title' => 'basketball'
    ];
});
$factory->defineAs(App\Section::class, 'football', function (Faker $faker) {
    return [
        'title' => 'football'
    ];
});
$factory->defineAs(App\Section::class, 'yoga', function (Faker $faker) {
    return [
        'title' => 'yoga'
    ];
});

//}
//for($i=0; $i < count($section);$i++){
//
//    $s = $section[$i];
//    $select = \App\Section::where('title', 'like', "{$s}")->pluck("title")->first();
//
//
//
//    if(in_array($select, $section)){
//
//        $s = next($section);
//        if($i === count($section)-1){
//
//            reset($section);
//            $s = $section[0];
//           // var_dump($s);
//            break;
//
//        }
//       else {
//         //  $s = $section[$i+1];
//           $s = next($section);
//           //$i++;
//       }
//    }
//    var_dump($s);
//    $factory->define(App\Section::class, function (Faker $faker) use ($s) {
//        return [
//            'title' => $s
//        ];
//    });
//}
