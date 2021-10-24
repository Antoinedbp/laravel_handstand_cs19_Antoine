<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Antoine",
                "email" => "antoinedebassompierre@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 1,
                // "pricing_id" => null,
            ],
            [
                "name" => "Coach Carter",
                "email" => "coachcarter@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 2,
                // "pricing_id" => null,
            ],
            [
                "name" => "Sathi Bhuiyan",
                "email" => "sathi@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            [
                "name" => "John laisa do",
                "email" => "john1@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            [
                "name" => "John laisa do",
                "email" => "john2@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            [
                "name" => "John laisa do",
                "email" => "john3@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            [
                "name" => "Josiane",
                "email" => "josiane@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            [
                "name" => "Michelin",
                "email" => "michelin@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                // "pricing_id" => null,
            ],
            
        ]);
    }
}
