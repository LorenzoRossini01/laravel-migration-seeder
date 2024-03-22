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
        $csv_file=fopen(__DIR__."/../csv/train.csv","r");
        
        $first_line=true;
        while ($csv_line=feof($csv_file) !==false) {
                if(!$first_line){
                    $train = new Train;
                    $train->azienda = $csv_line[0];
                    $train->stazione_di_partenza=$csv_line[1];
                    $train->stazione_di_arrivo=$csv_line[2];
                    $train->orario_di_partenza=$csv_line[3];
                    $train->orario_di_arrivo=$csv_line[4];
                    $train->codice_treno=$csv_line[5];
                    $train->numero_carrozze=$csv_line[6];
                    $train->in_orario=$csv_line[7];
                    $train->minuti_di_ritardo= $csv_line[8];
                    $train->cancellato=$csv_line[9];
                    $train->save();
                }
                $first_line=false;
    };


        for($i=0;$i<=10;$i++){
            $train = new Train;
            $train->azienda = $faker->company();
            $train->stazione_di_partenza=$faker->address();
            $train->stazione_di_arrivo=$faker->address();
            $train->orario_di_partenza=today()->toDateString().' '.$faker->time();
            $train->orario_di_arrivo=today()->toDateString().' '.$faker->time();
            $train_code='';
            $train->codice_treno=$train_code;
                for($y=0;$y<=5;$y++){
                    $train_code.=$faker->randomLetter();
                };
            $train->numero_carrozze=$faker->numberBetween(1,50);
            $train->in_orario=$faker->boolean();
            $train->minuti_di_ritardo= $faker->numberBetween(1,59);
            $train->cancellato=$faker->boolean();
            $train->save();
        }
}}

    