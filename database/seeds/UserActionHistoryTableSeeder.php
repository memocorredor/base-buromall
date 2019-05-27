<?php

use Illuminate\Database\Seeder;

class UserActionHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_action_histories')->delete();
		$action = array(
            array('enable' => '1',  'icon' => '', 'name_es' => '', 'name_en' => '', 'name_pt' => '', 'color' => '', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
        );
		DB::table('user_action_histories')->insert($action);
    }
}
