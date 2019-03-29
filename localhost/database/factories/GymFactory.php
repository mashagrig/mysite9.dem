<?php

use Faker\Generator as Faker;

$factory->define(App\Gym::class, function (Faker $faker) {
    return [
        'title' => rand(100, 108),
    ];
});
