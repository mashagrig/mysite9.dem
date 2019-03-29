<?php

use Faker\Generator as Faker;

$factory->define(\App\Guest::class, function (Faker $faker) {
    return [
        //'first_date_subscription' => $faker->dateTimeBetween('-3 years', '+3 years')->format('Y-m-d'),
    ];
});
