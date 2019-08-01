<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BannerProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('bannerprodutos')->insert([
            'banner_id'  => '41',
            'produto_id' => '11',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    	DB::table('bannerprodutos')->insert([
            'banner_id'  => '41',
            'produto_id' => '21',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
    }
}
