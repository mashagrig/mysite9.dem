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
        // factory(\App\Role::class, 2)->create();
        factory(\App\Role::class, 'admin')->create();
        factory(\App\Role::class, 'guest', 1)->create();
        factory(\App\Role::class, 'trainer', 1)->create();
        factory(\App\Role::class, 'support', 1)->create();
        factory(\App\Role::class, 'content', 1)->create()->each(function ($u) {
            $u->users()->save(factory(App\User::class)->make());
        });

    }
}




//            ->each(function ($u) {
//            $u->users()->save(factory(App\User::class)->make());
//        });



