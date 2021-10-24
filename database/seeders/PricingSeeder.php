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
                "nom" => "silver",
                "titre" => "silver package",
                "prix" => "$30",
                "mois" => "month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
            [
                "nom" => "gold",
                "titre" => "gold package",
                "prix" => "$50",
                "mois" => "month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
            [
                "nom" => "platinium",
                "titre" => "platinum package",
                "prix" => "$70",
                "mois" => "month",
                "description1" => "Free T-Shirt & swags",
                "description2" => "Free of all message treatments",
                "description3" => "Access Clup Facilites",
                "description4" => "Out Door activites",
                "btn" => "get started"
            ],
        ]);
    }
}
