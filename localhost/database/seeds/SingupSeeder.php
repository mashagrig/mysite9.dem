<?php

use Illuminate\Database\Seeder;

class SingupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //create singup
        factory(\App\Singup::class, 2)->make()->each(function ($singup) {

            //create user
            factory(\App\Guest::class, 1)->create()->each(function ($guest) use ($singup) {
                //add user_id
                \App\User::select("id")->where('name', 'like', "%guest%")->inRandomOrder()->first()->guests()->save($guest);

                //create subscription
                factory(\App\Subscription::class, 1)->create()->each(function ($subscr) use ($guest) {
                //add singup_id


                    $date2 = new DateTime($guest->first_date_subscription);
                    $count_month = $subscr['count_month'];
                    $last_date = date_modify($date2, "+{$count_month} month")->format('Y-m-d');
                    $guest->update([
                        'last_date_subscription' => $last_date,
                    ]);

                    $subscr->guests()->save($guest);
                });


                //create comment

                //add singup_id
                $guest->singups()->save($singup);

            });
            //add traningshedule

            \App\Trainingshedule::select("id")->inRandomOrder()->first()->singups()->save($singup);

        });




    }
}
