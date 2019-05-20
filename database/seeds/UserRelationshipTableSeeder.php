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
            array('enable' => '1',  'icon' => '', 'name_es' => 'Soltero', 'name_en' => 'Single', 'name_pt' => 'Solteiro', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Es Complicado', 'name_en' => 'It´s complicated', 'name_pt' => 'É complicado', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Unión Libre', 'name_en' => 'Free Union', 'name_pt' => 'União livre', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Separado', 'name_en' => 'Separated', 'name_pt' => 'Separado', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Casado', 'name_en' => 'Married', 'name_pt' => 'Casado', 'color' => ''),
        );
		DB::table('user_relationships')->insert($relation);
    }
}
