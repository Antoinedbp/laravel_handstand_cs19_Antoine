<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classe_user')->insert([
            [
                "classe_id" => 1,
                "user_id" => 10
            ],
            [
                "classe_id" => 1,
                "user_id" => 12
            ],
            [
                "classe_id" => 1,
                "user_id" => 14
            ],
            [
                "classe_id" => 1,
                "user_id" => 15
            ],
            [
                "classe_id" => 3,
                "user_id" => 1
            ],
        ]);
    }
}
