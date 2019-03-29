<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Section::class, 'box', 1)->create();
        factory(\App\Section::class, 'fitness', 1)->create();
        factory(\App\Section::class, 'basketball', 1)->create();
        factory(\App\Section::class, 'football', 1)->create();
        factory(\App\Section::class, 'yoga', 1)->create();
    }
}
