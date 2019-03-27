<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

//$factory = app(Factory::class);

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'title' => 'title',
        'description' => 'description'
    ];
});
