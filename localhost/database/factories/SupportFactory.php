<?php

use Faker\Generator as Faker;

$factory->define(App\Support::class, function (Faker $faker) {
    return [
        'question' => $faker->text(255),
        'answer' => $faker->text(255),
    ];
});
