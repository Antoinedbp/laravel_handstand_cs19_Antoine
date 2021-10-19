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
                "img" => "img/slider/slider1.jpg",
                "petit_titre" => "Welcome Our Handstand",
                "titre" => "Keep Refresh & Strong Your Body",
                "description" => "Keep Refresh & Strong Your Body"
            ],
            [
                "img" => "img/slider/slider2.jpg",
                "petit_titre" => "Welcome Our Handstand",
                "titre" => "Keep Refresh & Strong Your Body",
                "description" => "Keep Refresh & Strong Your Body"
            ],
        ]);
    }
}
