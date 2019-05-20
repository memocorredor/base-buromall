<?php

use Illuminate\Database\Seeder;

class TypeStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_stores')->delete();
		$type = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Tienda', 'name_en' => 'Store', 'name_pt' => 'Loja', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Desde Casa', 'name_en' => 'From home', 'name_pt' => 'A partir de casa', 'color' => '')
        );
		DB::table('type_stores')->insert($type);
    }
}
