<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            IconSeeder::class,
            CategorieSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            NavbarSeeder::class,
            TitreSeeder::class,
            SliderSeeder::class,
            AboutSeeder::class,
            BoutonSeeder::class,
            ClasseSeeder::class,
            TrainerSeeder::class,
            GallerySeeder::class,
            EventSeeder::class,
            PricingSeeder::class,
            ClientSeeder::class,
            NewsletterSeeder::class,
            FooterSeeder::class,
        ]);
        
        
    }
}
