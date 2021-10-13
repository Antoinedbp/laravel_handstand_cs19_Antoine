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
                "logo1" => "fa fa-facebook",
                "logo2" => "fa fa-twitter",
                "logo3" => "fa fa-dribbble",
                "logo4" => "fa fa-pinterest"
            ],
            [
                "img" => "img/trainer/trainer2.jpg",
                "nom" => "John laisa do",
                "logo1" => "fa fa-facebook",
                "logo2" => "fa fa-twitter",
                "logo3" => "fa fa-dribbble",
                "logo4" => "fa fa-pinterest"
            ],
            [
                "img" => "img/trainer/trainer3.jpg",
                "nom" => "John laisa do",
                "logo1" => "fa fa-facebook",
                "logo2" => "fa fa-twitter",
                "logo3" => "fa fa-dribbble",
                "logo4" => "fa fa-pinterest"
            ]
        ]);
    }
}
