<?php

use Faker\Generator as Faker;

$factory->define(App\Equipment::class, function (Faker $faker) {
    return [
         'title' => $faker->text(10),
         'count_all' => $faker->numberBetween(10, 200),
    ];
});
