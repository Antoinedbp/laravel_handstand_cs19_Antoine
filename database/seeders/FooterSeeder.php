<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            "logo" => "logo.png",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. Ut",
            "mail" => "username@gmail.com",
            "tel" => "(+660 256 24857)",
            "adress" => "Your Address Here",
            "titre_1" => "Recent Tweets",
            "tweet_1" => "@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!",
            "site_1" => "https://twitter.com/login",
            "tweet_2" => "@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!",
            "site_2" => "https://twitter.com/login",
            "btn"  => "submit",
            "copyright"  => "Copyright &copy; 2017. All Rights Reserved.",
            "map_id" => 1
        ]);
    }
}
