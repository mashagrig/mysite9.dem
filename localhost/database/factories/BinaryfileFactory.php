<?php

use Faker\Generator as Faker;

$factory->define(App\Binaryfile::class, function (Faker $faker) {
    return [
         'title' => $faker->title,
         'file_src' => $faker->file('/home/masha/Изображения/'),
    ];
});
