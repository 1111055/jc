<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
         DB::table('menus')->insert([
            'menu' => 'Top',
            'descricao' => 'Menu do Topo de página.',
            'ordem' => '001',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Footer',
            'descricao' => 'Menu do fim de página.',
            'ordem' => '002',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Home',
            'descricao' => 'Menu da página principal.',
            'submenu' => '1',
            'ordem' => '001',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Produtos',
            'descricao' => 'Menu da Listagem de Produtos.',
            'submenu' => '1',
            'ordem' => '002',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);
        DB::table('menus')->insert([
            'menu' => 'Sobre Nós',
            'descricao' => 'Menu página sobre nós.',
            'submenu' => '1',
            'ordem' => '003',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);

        DB::table('menus')->insert([
            'menu' => 'Contactos',
            'descricao' => 'Menu página de contactos.',
            'submenu' => '1',
            'ordem' => '004',
            'link' => '#',
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now()
        ]);



      
    }
}
