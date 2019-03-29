<?php

use Illuminate\Database\Seeder;

class SingupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create singup
        factory(\App\Singup::class, 1)->make()->each(function ($singup) {

            //-1- add  Guest
            \App\Guest::select("id")->inRandomOrder()->first()->singups()->save($singup);

            //-2- add traningshedule_id -> Singup (создается сиидером)
            \App\Trainingshedule::select("id")->inRandomOrder()->first()->singups()->save($singup);
        });
    }
}
