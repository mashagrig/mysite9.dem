<?php

use Illuminate\Database\Seeder;

class EqipmentGymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //======================



        factory(\App\EquipmentGym::class, 1)->create()->each(function ($eq_gym) {

//            factory(\App\Equipment::class, 1)->create()->each(function ($eq) use ($eq_gym) {
//                $eq->gyms()->save($eq_gym)->make();
//            });

            factory(\App\Gym::class, 1)->create()->each(function ($gym) use ($eq_gym) {



                    factory(\App\Equipment::class, 1)->create()->each(function ($eq) use ($gym, $eq_gym) {

                  //   $eq->gyms()->save($eq_gym);

                    });


//                factory(App\Foo::class, 5)->create()->each(function($foo) {
//                    $foo->bars()->save(factory(App\Bar::class)->make());
//                });

            //    $gym->equipments()->save($eq_gym);
              //  $gym->equipments()->save($eq_gym)->make();
                // $gym->trainingshedules()->save($shedule);
            });
        });

        //======================
    }
}
