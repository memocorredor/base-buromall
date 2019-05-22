<?php

use Illuminate\Database\Seeder;

class TypeIdentificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_identifications')->delete();
		$type = array(
            array('enable' => '1', 'icon' => 'fas fa-search-location', 'name_es' => 'Cédula', 'name_en' => 'Identification card', 'name_pt' => 'Horário', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-search-location', 'name_es' => 'Pasaporte', 'name_en' => 'Passport', 'name_pt' => 'Passaporte', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
        );
		DB::table('type_identifications')->insert($type);
    }
}
