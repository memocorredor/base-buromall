<?php

use Illuminate\Database\Seeder;

class ScCategorieFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_categorie_faqs')->delete();
        
        DB::table('sc_categorie_faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Barumall.com',
                'name_en' => 'Barumall.com',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Tiendas',
                'name_en' => 'Stores',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Productos',
                'name_en' => 'Products',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Compras',
                'name_en' => 'Buy',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Envios',
                'name_en' => 'Shipping',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Garantias',
                'name_en' => 'Warranties',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Devoluciones',
                'name_en' => 'Returns',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Publicidad',
                'name_en' => 'Advertising',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Recargas',
                'name_en' => 'Recargas',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Pagos',
                'name_en' => 'Payments',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Clasificados',
                'name_en' => 'Classifieds',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'enable' => 1,
                'icon' => '',
                'name_es' => 'Eventos',
                'name_en' => 'Events',
                'name_pt' => '',
                'color' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}