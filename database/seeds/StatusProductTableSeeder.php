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
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'En Venta', 'name_en' => 'On Sale', 'name_pt' => 'À venda', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Vendido', 'name_en' => 'Sold', 'name_pt' => 'Vendido', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Agotado', 'name_en' => 'Exhausted', 'name_pt' => 'Fora de estoque', 'color' => '#20bf7e')
        );
		DB::table('status_products')->insert($status);
    }
}
