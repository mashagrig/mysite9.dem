<?php

use Faker\Generator as Faker;

$factory->define(App\Subscription::class, function (Faker $faker) {
    return [
       'title' => $faker->realText(10),
       'count_month' => $m = rand(1,12),
       'price' => $m * 30000,
    ];
});
