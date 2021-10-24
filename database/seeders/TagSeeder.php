<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'nom' => "Football"
            ],
            [
                'nom' => "Plein air"
            ],
            [
                'nom' => "Intérieur"
            ],
            [
                'nom' => "Cours collectifs"
            ],
            [
                'nom' => "Cours en duos"
            ],
            [
                'nom' => "Cours seul"
            ],
            [
                'nom' => "Cardio"
            ],
            [
                'nom' => "Musculation"
            ],
            [
                'nom' => "Méditation"
            ],
        ]);
    }
}
