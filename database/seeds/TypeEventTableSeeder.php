<?php

use Illuminate\Database\Seeder;

class TypeEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_events')->delete();
		$type = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1', 'icon' => '', 'name_es' => 'Teatro', 'name_en' => 'Theater', 'name_pt' => 'Teatro', 'color' => ''),
            array('enable' => '1', 'icon' => '', 'name_es' => 'Cine', 'name_en' => 'Movie theater', 'name_pt' => 'Cinema', 'color' => ''),
            array('enable' => '1', 'icon' => '', 'name_es' => 'Congreso', 'name_en' => 'Congress', 'name_pt' => 'Congresso', 'color' => ''),
            array('enable' => '1', 'icon' => '', 'name_es' => 'Conferencia', 'name_en' => 'Conference', 'name_pt' => 'Conferência', 'color' => '')
        );
		DB::table('type_events')->insert($type);
    }
}
