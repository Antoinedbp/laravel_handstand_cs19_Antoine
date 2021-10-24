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
                "img" => "img/class/1.jpg", 
                "titre" => "yoga for climbers",
                "package" => json_encode(['platinum']),
                // "trainer_id" => 1,
                "time" => "10.00Am-05:00Pm",
                "date" => date_create("2021-11-15"),
                // "categorie_id" => 1,
                "prioritaire" => true,
            ],
            [
                "img" => "img/class/2.jpg",
                "titre" => "yoga for climbers",
                "package" => json_encode(['platinum', 'gold']),
                // "trainer_id" => 1,
                "time" => "10.00Am-05:00Pm",
                "date" => date_create("2021-10-15"),
                // "categorie_id" => 2,
                "prioritaire" => true,
            ],
            [
                "img" => "img/class/3.jpg",
                "titre" => "yoga for climbers",
                "package" => json_encode(['platinum', 'gold', 'silver']),
                // "trainer_id" => 1,
                "time" => "10.00Am-05:00Pm",
                "date" => date_create("2021-10-25"),
                // "categorie_id" => 3,
                "prioritaire" => true,
            ],
        ]);
    }
}
