<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            [
                "titre" => "silver package",
                "prix" => "$30/month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
            [
                "titre" => "gold package",
                "prix" => "$50/month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
            [
                "titre" => "platinum package",
                "prix" => "$70/month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
        ]);
    }
}
