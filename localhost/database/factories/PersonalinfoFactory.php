<?php

use Faker\Generator as Faker;

$factory->define(App\Personalinfo::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [

        'surname' => $faker->lastName,
        'name' => $faker->name,
        'middle_name' => $faker->firstName,
        'email' => $faker->email,
        'telephone' => $faker->phoneNumber,
        'birthdate' => $faker->date(),
        'info' => $faker->text(100),
    ];
});
