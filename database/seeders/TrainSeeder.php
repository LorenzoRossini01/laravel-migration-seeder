<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // $file=fopen(__DIR__."/../csv/train.csv","r");

        // $first_line=true;
        // while (!feof($file)) {
        //     if(!$first_line){

        //     $train_data= fgetcsv( $file);
        for($i=0;$i<=10;$i++){
            $train = new Train;
            $train->azienda = $faker->company();
            $train->stazione_di_partenza=$faker->address();
            $train->stazione_di_arrivo=$faker->address();
            $train->orario_di_partenza=$faker->date().' '.$faker->time();
            $train->orario_di_arrivo=$faker->date().' '.$faker->time();
            $train_code='';
            $train->codice_treno=$train_code;
            for($i=0;$i<=5;$i++){
                $train_code.=$faker->randomLetter();
            };
            $train->numero_carrozze=$faker->numberBetween(1,50);
            $train->in_orario=$faker->boolean();
            $train->minuti_di_ritardo= $faker->numberBetween(1,59);
            $train->cancellato=$faker->boolean();
            $train->save();
        }
        }
        // $first_line=false;
        }

    