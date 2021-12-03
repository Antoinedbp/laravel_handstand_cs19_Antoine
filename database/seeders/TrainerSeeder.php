<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            [
                "img" => "img/trainer/trainer1.jpg",
                "nom" => "John laisa do",
                "role_id" => 3,
                "prioritaire" => false
            ],
            [
                "img" => "img/trainer/trainer2.jpg",
                "nom" => "John laisa do",
                "role_id" => 2,
                "prioritaire" => true
            ],
            [
                "img" => "img/trainer/trainer3.jpg",
                "nom" => "John laisa do",
                "role_id" => 3,
                "prioritaire" => false
            ]
        ]);
    }
}
