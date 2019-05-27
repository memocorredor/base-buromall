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
            array('enable' => '1',  'icon' => '', 'name_es' => 'Hombre', 'name_en' => 'Man', 'name_pt' => 'Homem', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Mujer', 'name_en' => 'Woman', 'name_pt' => 'Mulher', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
        );
		DB::table('user_genders')->insert($gender);
    }
}
