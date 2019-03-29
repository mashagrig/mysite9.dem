<?php

use Faker\Generator as Faker;

$factory->define(App\Trainingshedule::class, function (Faker $faker) {
    return [
        'date_training' => $faker->date()
    ];
});
