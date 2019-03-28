<?php

use Illuminate\Database\Seeder;

class PersonalinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Personalinfo::class, 1)->create();
        factory(\App\Personalinfo::class, 1)->create()
            ->each(function ($u) {
                $u->users()->saveMany(factory(App\User::class, 'user_admin', 1)->make());
            });
    }
}
