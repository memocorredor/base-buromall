<?php

use Illuminate\Database\Seeder;

class TypeAuctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_auctions')->delete();
		$type = array(
            array('enable' => '1', 'icon' => 'fas fa-gavel', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-gavel', 'name_es' => 'Subasta Dinámicas', 'name_en' => 'Dynamic Auction', 'name_pt' => 'Leilão Dinâmico', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-gavel', 'name_es' => 'Subasta por Céntimos', 'name_en' => 'Auction by Cents', 'name_pt' => 'Leilão por Cents', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_auctions')->insert($type);
    }
}
