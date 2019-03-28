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
        factory(\App\Content::class,  1)->make()->each(function ($u) {

        factory(\App\Binaryfile::class, 1)->create()->each(function ($ur) use ($u) {
            $ur->contents()->save($u);
        });
          //  User::all()->where('name', 'like', '%content-%')->first()->contents()->associate($u)->save($u);
            User::select("id")->where('name', 'like', "%content%")->first()->contents()->save($u);

    });
    }
}
