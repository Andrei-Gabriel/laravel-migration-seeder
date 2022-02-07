<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newHoliday = new Holiday();
        $newHoliday->tourist_package_name =
        $newHoliday->from =
        $newHoliday->destination =
        $newHoliday->price =
        $newHoliday->duration =
        $newHoliday->save();
    }
}
