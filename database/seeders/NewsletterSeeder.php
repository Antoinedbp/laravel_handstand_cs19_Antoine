<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert([
            [
                "titre" => "subscribe now for latest update!",
                "input" => "Enter Your E-mail ID",
                "btn" => "submit"
            ]
        ]);
    }
}
