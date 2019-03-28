<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::unguard();

        $this->call(UserSeeder::class);


     //  $this->call(RoleSeeder::class);

        App\User::reguard();
    }
}
//composer dump-autoload
//php  -d memory_limit=500M artisan db:seed --class=RoleSeeder
//php artisan db:seed --class=RoleSeeder
