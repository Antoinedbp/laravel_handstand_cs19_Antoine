<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "nom" => "facebook",
                "class" => "fa fa-facebook",
                "link" => "https://www.facebook.com"
            ],
            [
                "nom" => "twitter",
                "class" => "fa fa-twitter",
                "link" => "https://twitter.com"
            ],
            [
                "nom" => "dribbble",
                "class" => "fa fa-dribbble",
                "link" => "https://www.dribbble.com"
            ],
            [
                "nom" => "pinterest",
                "class" => "fa fa-pinterest",
                "link" => "https://www.pinterest.com"
            ],
        ]);
    }
}
