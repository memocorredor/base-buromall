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
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => '')
        );
		DB::table('type_auctions')->insert($type);
    }
}
