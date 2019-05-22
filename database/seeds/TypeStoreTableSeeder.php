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
            array('enable' => '1', 'icon' => 'fas fa-store', 'name_es' => 'Tienda', 'name_en' => 'Store', 'name_pt' => 'Loja', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-store', 'name_es' => 'Desde Casa', 'name_en' => 'From home', 'name_pt' => 'A partir de casa', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_stores')->insert($type);
    }
}
