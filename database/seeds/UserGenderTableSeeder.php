<?php

use Illuminate\Database\Seeder;

class UserGenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_genders')->delete();
		$gender = array(
            array('enable' => '1',  'icon' => '', 'name_es' => 'Hombre', 'name_en' => 'Man', 'name_pt' => 'Homem', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Mujer', 'name_en' => 'Woman', 'name_pt' => 'Mulher', 'color' => ''),
        );
		DB::table('user_genders')->insert($gender);
    }
}
