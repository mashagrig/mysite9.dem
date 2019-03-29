<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Binaryfile::class, function (Faker $faker) {
    return [
         'title' => Str::random(10),
         'file_src' => $faker->file('/home/masha/Изображения/'),
    ];
});
