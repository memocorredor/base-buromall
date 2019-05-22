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
			array('enable' => '1', 'icon' => 'fas fa-theater-masks', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-theater-masks', 'name_es' => 'Teatro', 'name_en' => 'Theater', 'name_pt' => 'Teatro', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-theater-masks', 'name_es' => 'Cine', 'name_en' => 'Movie theater', 'name_pt' => 'Cinema', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-theater-masks', 'name_es' => 'Congreso', 'name_en' => 'Congress', 'name_pt' => 'Congresso', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-theater-masks', 'name_es' => 'Conferencia', 'name_en' => 'Conference', 'name_pt' => 'Conferência', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('type_events')->insert($type);
    }
}
