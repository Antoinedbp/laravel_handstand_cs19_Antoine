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
                "logo_hover" => "zmdi zmdi-zoom-in",
                "titre" => "yoga for climbers",
                "logo_coach" => "zmdi zmdi-face",
                "coach" => "Sathi Bhuiyan",
                "logo_time" => "zmdi zmdi-alarm",
                "time" => "10.00Am-05:00Pm"
            ],
            [
                "img" => "img/class/2.jpg",
                "logo_hover" => "zmdi zmdi-zoom-in",
                "titre" => "yoga for climbers",
                "logo_coach" => "zmdi zmdi-face",
                "coach" => "Sathi Bhuiyan",
                "logo_time" => "zmdi zmdi-alarm",
                "time" => "10.00Am-05:00Pm"
            ],
            [
                "img" => "img/class/3.jpg",
                "logo_hover" => "zmdi zmdi-zoom-in",
                "titre" => "yoga for climbers",
                "logo_coach" => "zmdi zmdi-face",
                "coach" => "Sathi Bhuiyan",
                "logo_time" => "zmdi zmdi-alarm",
                "time" => "10.00Am-05:00Pm"
            ],
        ]);
    }
}
