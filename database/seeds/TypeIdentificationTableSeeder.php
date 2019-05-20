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
            array('enable' => '1',  'icon' => '', 'name_es' => 'Cédula', 'name_en' => 'Identification card', 'name_pt' => 'Horário', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pasaporte', 'name_en' => 'Passport', 'name_pt' => 'Passaporte', 'color' => ''),
        );
		DB::table('type_identifications')->insert($type);
    }
}
