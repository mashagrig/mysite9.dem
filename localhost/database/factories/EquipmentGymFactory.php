<?php

use Faker\Generator as Faker;

$factory->define(App\EquipmentGym::class, function (Faker $faker) {
    return [
        'count_equipment' => $faker->numberBetween(10, 200),
    ];
});
