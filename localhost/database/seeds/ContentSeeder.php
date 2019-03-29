<?php

use Illuminate\Database\Seeder;
use App\User;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Content::class, 5)->make()->each(function ($content) {

            factory(\App\Binaryfile::class, 1)->create()->each(function ($binary) use ($content) {
                $binary->contents()->save($content);
            });
            User::select("id")->where('name', 'like', "%content%")->inRandomOrder()->first()->contents()->save($content);

        });
    }
}
