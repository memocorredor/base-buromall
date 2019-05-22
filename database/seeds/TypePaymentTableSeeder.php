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
			array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Tarjeta y/o Monedero', 'name_en' => 'Card and / or Wallet', 'name_pt' => 'Cartão e / ou Carteira', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Tarjeta de crédito', 'name_en' => 'Credit card', 'name_pt' => 'Cartão de crédito', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Monedero', 'name_en' => 'Wallet', 'name_pt' => 'Carteira', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Transferencia', 'name_en' => 'Transfer', 'name_pt' => 'Transferir', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Contra entrega', 'name_en' => 'Upon delivery', 'name_pt' => 'Contra-entrega', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-hand-holding-usd', 'name_es' => 'Cheque', 'name_en' => 'Check', 'name_pt' => 'Cheque', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_payments')->insert($type);
    }
}
