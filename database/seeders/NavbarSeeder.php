<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                "logo" => "img/logo/logo.png",
                "nom1"  => "Home",
                "nom2"  => "About Us",
                "nom3"  => "Classes",
                "nom4"  => "Gallery",
                "nom5"  => "Contact",
            ]
        ]);
    }
}
