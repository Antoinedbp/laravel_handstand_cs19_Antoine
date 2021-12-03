<?php

namespace Database\Seeders;

use App\Models\ClasseTag;
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
            PricingSeeder::class,
            UserSeeder::class,
            NavbarSeeder::class,
            TitreSeeder::class,
            SliderSeeder::class,
            AboutSeeder::class,
            BoutonSeeder::class,
            TrainerSeeder::class,
            ScheduleSeeder::class,
            ClasseSeeder::class,
            ClasseTagSeeder::class,
            ClasseUserSeeder::class,
            GallerySeeder::class,
            EventSeeder::class,
            ClientSeeder::class,
            NewsletterSeeder::class,
            MapSeeder::class,
            FooterSeeder::class,
        ]);
        
        
    }
}
