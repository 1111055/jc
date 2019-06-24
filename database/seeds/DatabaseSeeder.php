<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
        SocialTableSeeder::class,
        MenuTableSeeder::class,
        SettingTableSeeder::class,
        PaginasTableSeeder::class,
        PrazoTableSeeder::class,
        BannerTableSeeder::class,
        PageBannerTableSeeder::class

       ]);
    }
}
