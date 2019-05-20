<?php

use Illuminate\Database\Seeder;

class TypeShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_shippings')->delete();
		$type = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Comprador Recoge', 'name_en' => 'Buyer Collect', 'name_pt' => 'Comprador coletar', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Envío por avión', 'name_en' => 'Shipping by plane', 'name_pt' => 'Envio por avião', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Envío por barco', 'name_en' => 'Shipping by sea', 'name_pt' => 'Envio por navio', 'color' => '')
        );
		DB::table('type_shippings')->insert($type);
    }
}
