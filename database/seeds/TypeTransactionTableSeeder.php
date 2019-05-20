<?php

use Illuminate\Database\Seeder;

class TypeTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_transactions')->delete();
		$type = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Compro', 'name_en' => 'I buy', 'name_pt' => 'Comprar', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Vendo', 'name_en' => 'I sell', 'name_pt' => 'Eu vendo', 'color' => '')
        );
		DB::table('type_transactions')->insert($type);
    }
}
