<?php

use Illuminate\Database\Seeder;

class StatusUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_users')->delete();
		$status = array(
            array('enable' => '1',  'icon' => 'fas fa-user-shield', 'name_es' => 'No activada', 'name_en' => 'Not activated', 'name_pt' => 'Não ativado', 'color' => '#fa6e05'),
            array('enable' => '1',  'icon' => 'fas fa-user-check', 'name_es' => 'Activada', 'name_en' => 'Activated', 'name_pt' => 'Ativado', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => 'fas fa-user-clock', 'name_es' => 'En recuperación', 'name_en' => 'In recovery', 'name_pt' => 'Na recuperação', 'color' => '#f70505')
        );
		DB::table('status_users')->insert($status);
    }
}
