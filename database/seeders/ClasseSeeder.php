<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                "img" => "1.jpg",
                "titre" => "Yoga",
                "pricing_id" => 2,
                "trainer_id" => 1,
                "categorie_id" => 1,
                "schedule_id" => 19,
                "prioritaire" => false,
                "color"=>null,
            ],
            [
                "img" => "2.jpg",
                "titre" => "Tennis",
                "pricing_id" => 3,
                "trainer_id" => 1,
                "categorie_id" => 2,
                "schedule_id" => 46,
                "prioritaire" => false,
                "color"=>null,
            ],
            [
                "img" => "3.jpg",
                "titre" => "Football",
                "pricing_id" => 1,
                "trainer_id" => 1,
                "categorie_id" => 3,
                "schedule_id" => 84,
                "prioritaire" => true,
                "color"=>null,
            ],
        ]);
    }
}
