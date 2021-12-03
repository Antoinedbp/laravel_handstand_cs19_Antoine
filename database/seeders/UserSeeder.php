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
                "pricing_id" => 3,
            ],
            [
                "name" => "Coach Carter",
                "email" => "coachcarter@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 2,
                "pricing_id" => 3,
            ],
            [
                "name" => "Sathi Bhuiyan",
                "email" => "sathi@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "John laisa do",
                "email" => "john1@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "John laisa do",
                "email" => "john2@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "John laisa do",
                "email" => "john3@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "Wassim",
                "email" => "wassim@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "Michelin",
                "email" => "michelin@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 3,
                "pricing_id" => 3,
            ],
            [
                "name" => "Joseph",
                "email" => "joseph@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 1,
            ],
            [
                "name" => "Rachid",
                "email" => "rachid@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 2,
            ],
            [
                "name" => "Miguel",
                "email" => "miguel@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 1,
            ],
            [
                "name" => "Bidule",
                "email" => "bidule@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 2,
            ],
            [
                "name" => "Moray",
                "email" => "moray@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 1,
            ],
            [
                "name" => "Tom",
                "email" => "tom@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 3,
            ],
            [
                "name" => "Elias",
                "email" => "elias@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 2,
            ],
            [
                "name" => "Josiane",
                "email" => "josiane@hotmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make('testtest'),
                "role_id" => 4,
                "pricing_id" => 2,
            ],
            
        ]);
    }
}
