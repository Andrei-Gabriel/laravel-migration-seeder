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
        $newHoliday->tourist_package_name = $faker->sentence();
        $newHoliday->from = $faker->county();
        $newHoliday->country_of_destination = $faker->countryISOAlpha3();
        $newHoliday->price = $faker->randomFloat(2, 80, 999);
        $newHoliday->start_date = $faker->dateTimeThisYear('+2 months');
        $newHoliday->duration = $faker->numberBetween(3, 14);
        $newHoliday->description = $faker->paragraph();
        $newHoliday->save();
    }
}
