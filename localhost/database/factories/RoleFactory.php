<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

//$factory = app(Factory::class);



$factory->defineAs(App\Role::class, 'admin', function (Faker $faker) {
    return [
        'title' => 'admin',
        'description' => $faker->text(100)
    ];
});
$factory->defineAs(App\Role::class, 'guest', function (Faker $faker) {
    return [
        'title' => 'guest',
        'description' => $faker->text(100)
    ];
});
$factory->defineAs(App\Role::class, 'trainer', function (Faker $faker) {
    return [
        'title' => 'trainer',
        'description' => $faker->text(100)
    ];
});
$factory->defineAs(App\Role::class, 'support', function (Faker $faker) {
    return [
        'title' => 'support',
        'description' => $faker->text(100)
    ];
});
$factory->defineAs(App\Role::class, 'content', function (Faker $faker) {
    return [
        'title' => 'content',
        'description' => $faker->text(100)
    ];
});
