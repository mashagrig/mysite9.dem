<?php

use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Support::class, 1)->create()->each(function ($support) {
            //-2- add Guest_id
            \App\Guest::select("id")->inRandomOrder()->first()->supports()->save($support);
            //-2- add User_id
            \App\User::select("id")->inRandomOrder()->first()->supports()->save($support);
        });
    }
}
