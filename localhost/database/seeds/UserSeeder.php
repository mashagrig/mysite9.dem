<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 'user_admin', 1)->make()->each(function ($u) {

            factory(\App\Role::class, 'admin', 1)->create()->each(function ($ur) use ($u) {
                $ur->users()->save($u);
            });
            factory(\App\Personalinfo::class, 1)->create()->each(function ($up) use ($u) {
                $up->users()->save($u);
            });
        });

        factory(\App\User::class, 'user_guest', 1)->make()->each(function ($u) {

            factory(\App\Role::class, 'guest', 1)->create()->each(function ($ur) use ($u) {
                $ur->users()->save($u);
            });
            factory(\App\Personalinfo::class, 1)->create()->each(function ($up) use ($u) {
                $up->users()->save($u);
            });
        });

        factory(\App\User::class, 'user_trainer', 1)->make()->each(function ($u) {

            factory(\App\Role::class, 'trainer', 1)->create()->each(function ($ur) use ($u) {
                $ur->users()->save($u);
            });
            factory(\App\Personalinfo::class, 1)->create()->each(function ($up) use ($u) {
                $up->users()->save($u);
            });
        });

        factory(\App\User::class, 'user_support', 1)->make()->each(function ($u) {

            factory(\App\Role::class, 'support', 1)->create()->each(function ($ur) use ($u) {
                $ur->users()->save($u);
            });
            factory(\App\Personalinfo::class, 1)->create()->each(function ($up) use ($u) {
                $up->users()->save($u);
            });
        });

        factory(\App\User::class, 'user_content', 1)->make()->each(function ($u) {

            factory(\App\Role::class, 'content', 1)->create()->each(function ($ur) use ($u) {
                $ur->users()->save($u);
            });
            factory(\App\Personalinfo::class, 1)->create()->each(function ($up) use ($u) {
                $up->users()->save($u);
            });
        });

//        factory(\App\User::class, 'user_admin', 1)->create();
//        factory(\App\User::class, 'user_guest', 1)->create();
//        factory(\App\User::class, 'user_trainer', 1)->create();
//        factory(\App\User::class, 'user_support', 1)->create();
//        factory(\App\User::class, 'user_content', 1)->create();
    }
}
