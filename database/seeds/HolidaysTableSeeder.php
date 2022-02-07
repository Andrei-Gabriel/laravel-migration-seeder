<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $newHoliday = new Holiday();
            $newHoliday->tourist_package_name = $faker->sentence();
            $newHoliday->from = $faker->country();
            $newHoliday->country_of_destination = $faker->countryISOAlpha3();
            $newHoliday->price = $faker->randomFloat(2, 80, 999);
            // -----------------------------------------------------------------------
            // Una data compresa dalla prossima settimana fino ai prossimi 2 mesi
            $dateWithHours = $faker->dateTimeBetween('+1 week', '+2 month');
            // Formattato la data togliendo le ore, minuti e secondi
            $newHoliday->start_date = $dateWithHours->format('Y-m-d');
            // -----------------------------------------------------------------------
            /*****************************************************************************************************
                Dovrebbe essere giusto, ma secondo me è una formattazione troppo restrittiva da fare in MySQL:
                $daysWithoutDaySTR = $faker->numberBetween(3, 14);
                $newHoliday->duration = $daysWithoutDaySTR += ' Days'; 
            ******************************************************************************************************/
            $newHoliday->duration = $faker->numberBetween(3, 14);
            $newHoliday->description = $faker->paragraph();
            $newHoliday->save();
        }
        
    }
}
