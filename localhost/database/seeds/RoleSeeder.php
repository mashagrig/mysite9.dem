<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class, 2)->create();
//            ->each(function ($u) {
//            $u->users()->save(factory(App\User::class)->make());
//        });

    }
}
