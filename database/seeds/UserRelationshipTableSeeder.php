<?php

use Illuminate\Database\Seeder;

class UserRelationshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_relationships')->delete();
		$relation = array(
            array('enable' => '1',  'icon' => '', 'name_es' => 'Soltero', 'name_en' => 'Single', 'name_pt' => 'Solteiro', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Es Complicado', 'name_en' => 'It´s complicated', 'name_pt' => 'É complicado', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Unión Libre', 'name_en' => 'Free Union', 'name_pt' => 'União livre', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Separado', 'name_en' => 'Separated', 'name_pt' => 'Separado', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Casado', 'name_en' => 'Married', 'name_pt' => 'Casado', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
        );
		DB::table('user_relationships')->insert($relation);
    }
}
