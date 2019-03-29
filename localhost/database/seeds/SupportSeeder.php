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

            //create comment!!!!!!!!
            //-2- add traningshedule_id -> Singup (создается сиидером)
            \App\Guest::select("id")->inRandomOrder()->first()->supports()->save($support);

            //create comment!!!!!!!!
            //-2- add traningshedule_id -> Singup (создается сиидером)
            \App\User::select("id")->inRandomOrder()->first()->supports()->save($support);

        });
    }
}
