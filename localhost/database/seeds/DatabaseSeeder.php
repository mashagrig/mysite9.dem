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

        $this->call(ContentSeeder::class); //create Binaryfile
        $this->call(SectionSeeder::class); //create Section
        $this->call(UserSeeder::class); // create Role, Personalinfo
        $this->call(GuestSeeder::class); //create subscription, comment
        $this->call(TrainingsheduleSeeder::class);  //create Trainingtime, Section, EquipmentGym,Gym,Equipment
        $this->call(SingupSeeder::class);
        $this->call(SupportSeeder::class);

     //  $this->call(RoleSeeder::class);

        App\User::reguard();
    }
}
//composer dump-autoload
//php  -d memory_limit=500M artisan db:seed --class=RoleSeeder
//php artisan db:seed --class=RoleSeeder
