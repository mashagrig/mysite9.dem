<?php

use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * create subscription
     * create comment
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Guest::class, 1)->create()->each(function ($guest) {

            //add user_id -> Guest
            \App\User::select("id")->where('name', 'like', "%guest%")->inRandomOrder()->first()->guests()->save($guest);

            //create subscription!!!!!!!!!!!
            factory(\App\Subscription::class, 1)->create()->each(function ($subscr) use ($guest) {

                //add $last_date -> Guest
                $date = new DateTime(date('Y-m-d'));
                $r=rand(1,12);
                $date = date_modify($date, "+{$r} month");

                $last_date = clone ($date);
                //$date2 = new DateTime($guest->first_date_subscription);

                $count_month = $subscr['count_month'];
                $last_date = date_modify($last_date, "+{$count_month} month")->format('Y-m-d');
                $guest->update([
                    'first_date_subscription' => $date,
                    'last_date_subscription' => $last_date,
                ]);
                //add subscr_id -> Guest
                $subscr->guests()->save($guest);
            });


            //create comment!!!!!!!!
            factory(\App\Comment::class, 1)->create()->each(function ($comment) use ($guest)  {
                $guest->comments()->save($comment);
            });
        });
    }
}
