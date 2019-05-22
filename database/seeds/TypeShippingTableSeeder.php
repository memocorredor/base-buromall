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
			array('enable' => '1', 'icon' => 'fas fa-luggage-cart', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-luggage-cart', 'name_es' => 'Comprador Recoge', 'name_en' => 'Buyer Collect', 'name_pt' => 'Comprador coletar', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-luggage-cart', 'name_es' => 'Envío por avión', 'name_en' => 'Shipping by plane', 'name_pt' => 'Envio por avião', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-luggage-cart', 'name_es' => 'Envío por barco', 'name_en' => 'Shipping by sea', 'name_pt' => 'Envio por navio', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_shippings')->insert($type);
    }
}
