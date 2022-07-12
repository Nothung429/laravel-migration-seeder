<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->agency = $faker->company;
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->date_this_year();
            $newTrain->arrival_time = $faker->date_this_year();
            $newTrain->train_code = rand(1000, 10000);
            $newTrain->wagon_number = rand(1, 12);
            $newTrain->on_time = rand(0, 1);
            $newTrain->train_canceled = rand(0, 1);

            $newTrain->save();
        }        
    }
}
