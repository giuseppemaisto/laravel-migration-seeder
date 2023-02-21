<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 10; $i++ ){
            $newTrain = new Train();
            $newTrain->Azienda = $faker->text(40);
            $newTrain->stazione_di_partenza = $faker->text(40);
            $newTrain->stazione_di_arrivo = $faker->text(40);
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numerify('');
            $newTrain->num_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
