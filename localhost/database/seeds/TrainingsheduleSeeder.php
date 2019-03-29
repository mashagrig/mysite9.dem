<?php

use Illuminate\Database\Seeder;

class TrainingsheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Trainingshedule::class, 2)->make()->each(function ($shedule) {

            factory(\App\Trainingtime::class, 1)->create()->each(function ($time) use ($shedule) {
                $time->trainingshedules()->save($shedule);
            });

            \App\User::select("id")->where('name', 'like', "%guest%")->inRandomOrder()->first()->trainingshedules()->save($shedule);

            factory(\App\Section::class, 1)->create()->each(function ($section) use ($shedule) {
                $section->trainingshedules()->save($shedule);
            });


            //======================



            factory(\App\EquipmentGym::class, 1)->create()->each(function ($eq_gym) use ($shedule) {



                factory(\App\Equipment::class, 1)->create()->each(function ($eq) use ($eq_gym, $shedule) {
                   $eq->gyms()->save($eq_gym);
                });



                factory(\App\Gym::class, 1)->create()->each(function ($gym) use ($eq_gym, $shedule) {
                    $gym->equipments()->save($eq_gym);

                 //   $gym->trainingshedules()->save($shedule);
                });



            });


        });
    }
}
