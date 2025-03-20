<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 years', 'now');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, 'now + 1 week');
            $newTrain->train_number = $faker->numberBetween(100, 9999);
            $newTrain->train_total_wagons = $faker->numberBetween(20, 50);
            $newTrain->delayed = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
