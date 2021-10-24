<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                "img" => "gal.jpg",
            ],
            [
                "img" => "gal2.jpg",
            ],
            [
                "img" => "gal3.jpg",
            ],
            [
                "img" => "gal4.jpg",
            ],
            [
                "img" => "gal5.jpg",
            ],
            [
                "img" => "gal6.jpg",
            ],
            [
                "img" => "gal7.jpg",
            ],
            [
                "img" => "gal8.jpg",
            ],
            [
                "img" => "gal9.jpg",
            ],
            [
                "img" => "gal6.jpg",
            ],
            [
                "img" => "gal6.jpg",
            ],
        ]);
    }
}
