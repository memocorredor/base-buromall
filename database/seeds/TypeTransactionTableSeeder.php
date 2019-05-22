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
			array('enable' => '1', 'icon' => 'fas fa-exchange-alt', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-exchange-alt', 'name_es' => 'Compro', 'name_en' => 'I buy', 'name_pt' => 'Comprar', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-exchange-alt', 'name_es' => 'Vendo', 'name_en' => 'I sell', 'name_pt' => 'Eu vendo', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-exchange-alt', 'name_es' => 'Permuta', 'name_en' => 'Barter', 'name_pt' => 'Swap', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_transactions')->insert($type);
    }
}
