<?php

use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();

        $newTrain->agency = 'AAAAA';
        $newTrain->departure_station = 'AAAAA';
        $newTrain->arrival_station = 'AAAAA';
        $newTrain->departure_time = 'AAAAA';
        $newTrain->arrival_time = 'AAAAA';
        $newTrain->train_code = '1234';
        $newTrain->wagon_number = '1234';

        $newTrain->save();
    }
}
