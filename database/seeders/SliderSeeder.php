<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                "img1" => "img/slider/slider1.jpg",
                "petitTitre" => "Welcome Our Handstand",
                "titre" => "Keep Refresh & Strong Your Body",
                "description" => "Keep Refresh & Strong Your Body",
                "img2" => "img/slider/slider2.jpg",
            ]
        ]);
    }
}
