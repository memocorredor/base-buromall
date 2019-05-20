<?php

use Illuminate\Database\Seeder;

class TypePaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_payments')->delete();
		$type = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Tarjeta y/o Monedero', 'name_en' => 'Card and / or Wallet', 'name_pt' => 'Cartão e / ou Carteira', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Tarjeta de crédito', 'name_en' => 'Credit card', 'name_pt' => 'Cartão de crédito', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Monedero', 'name_en' => 'Wallet', 'name_pt' => 'Carteira', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Transferencia', 'name_en' => 'Transfer', 'name_pt' => 'Transferir', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Contra entrega', 'name_en' => 'Upon delivery', 'name_pt' => 'Contra-entrega', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Cheque', 'name_en' => 'Check', 'name_pt' => 'Cheque', 'color' => '')
        );
		DB::table('type_payments')->insert($type);
    }
}
