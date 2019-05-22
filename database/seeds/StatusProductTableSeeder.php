<?php

use Illuminate\Database\Seeder;

class StatusProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_products')->delete();
		$status = array(
			array('enable' => '1', 'icon' => 'fas fa-heartbeat', 'name_es' => 'Ninguno', 'name_en' => 'None', 'name_pt' => 'Nenhum', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-heartbeat', 'name_es' => 'En Venta', 'name_en' => 'On Sale', 'name_pt' => 'À venda', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-heartbeat', 'name_es' => 'Vendido', 'name_en' => 'Sold', 'name_pt' => 'Vendido', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-heartbeat', 'name_es' => 'Agotado', 'name_en' => 'Exhausted', 'name_pt' => 'Fora de estoque', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('status_products')->insert($status);
    }
}
