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
        factory(\App\Trainingshedule::class, 1)->make()->each(function ($shedule) {
//-----------------
            factory(\App\Trainingtime::class, 1)->create()->each(function ($time) use ($shedule) {
                $time->trainingshedules()->save($shedule);
            });
//-----------------
            \App\User::select("id")->where('name', 'like', "%guest%")->inRandomOrder()->first()->trainingshedules()->save($shedule);
//-----------------
            factory(\App\Section::class, 1)->create()->each(function ($section) use ($shedule) {
                $section->trainingshedules()->save($shedule);
            });

//----------------
            factory(\App\EquipmentGym::class, 1)->create()->each(function ($eq_gym) use ($shedule) {

             $gym = factory(\App\Gym::class, 1)->create()->each(function ($gym) use ($shedule) {
                 $gym->trainingshedules()->save($shedule);
             });
                $gym->toArray();
                var_dump($gym[0]['id']);
             $eq = factory(\App\Equipment::class, 1)->create()->toArray();
                var_dump($eq[0]['id']);
                DB::table('equipment_gym')->update([
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
