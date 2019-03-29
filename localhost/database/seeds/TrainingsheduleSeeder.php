<?php

use Illuminate\Database\Seeder;

class TrainingsheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * create Trainingtime
     * create EquipmentGym
     * create Gym
     * create Equipment
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Trainingshedule::class, 1)->make()->each(function ($shedule) {
//-----------------create Trainingtime
            factory(\App\Trainingtime::class, 1)->create()->each(function ($time) use ($shedule) {
                $time->trainingshedules()->save($shedule);
            });
//-----------------add User
            \App\User::select("id")->where('name', 'like', "%guest%")->inRandomOrder()->first()->trainingshedules()->save($shedule);

//-----------------add Section
            \App\Section::select("id")->inRandomOrder()->first()->trainingshedules()->save($shedule);

//----------------create EquipmentGym
            factory(\App\EquipmentGym::class, 1)->create()->each(function ($eq_gym) use ($shedule) {

                //create Gym
             $gym = factory(\App\Gym::class, 1)->create()->each(function ($gym) use ($shedule) {
                 $gym->trainingshedules()->save($shedule);
             });
                //create Equipment
                $gym->toArray();
             $eq = factory(\App\Equipment::class, 1)->create()->toArray();
                $eq_gym->update([
                    'gym_id' => $gym[0]['id'],
                    'equipment_id' => $eq[0]['id']
                ]);
            });
//-----------------
//            //======================
            //Работает только на заполнение промежуточной таблицы!
//            //======================
//            factory(\App\Gym::class, 1)->create()->each(function ($gym) {
//                $gym->equipments()->saveMany(factory(App\Equipment::class, 1)->make()
//                );
//            });
//-----------------
        });
    }
}
