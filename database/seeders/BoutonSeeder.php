<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoutonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boutons')->insert([
            [
                "btn_slider" => "read more",
                "btn_about" => "read more",
                "btn_classes" => "view all classes"
            ]
        ]);
    }
}
