<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;
class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $holiday = new Holiday();
            $holiday->city =$faker->city();
            $holiday->state =$faker->country();
            $holiday->leaving_date =$faker->dateTimeBetween('now', '+1 week');
            $holiday->returning_date =$faker->dateTimeBetween('+1 week', '+2 week');
            $holiday->price =$faker->numberBetween(199, 999);
            $holiday->save();

        };
    }
}