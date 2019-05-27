<?php

use Illuminate\Database\Seeder;

class UserPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_plans')->delete();
		$plan = array(
            array('enable' => '1',  'highlight' => '0', 'name_es' => 'Test', 'description_es' => 'Un plan para que evalues nuestros servicios.', 'name_en' => 'Test', 'description_en' => 'A plan for you to evaluate our services.', 'name_pt' => 'Test', 'description_pt' => 'Um plano para você avaliar nossos serviços.', 'enable_profile' => '0', 'price' => '0', 'nu_stores' => '1', 'nu_branch' => '1', 'nu_employes' => '0', 'nu_products' => '5', 'nu_smedia' => '0', 'nu_geolocation' => '0', 'nu_banners' => '0', 'nu_auction' => '1', 'nu_days_recu' => '10', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'highlight' => '0', 'name_es' => 'Inicio', 'description_es' => 'Un plan para que evalues nuestros servicios.', 'name_en' => 'Inicio', 'description_en' => 'A plan for you to evaluate our services.', 'name_pt' => 'Inicio', 'description_pt' => 'Um plano para você avaliar nossos serviços.', 'enable_profile' => '0', 'price' => '5', 'nu_stores' => '2', 'nu_branch' => '2', 'nu_employes' => '2', 'nu_products' => '10', 'nu_smedia' => '0', 'nu_geolocation' => '1', 'nu_banners' => '1', 'nu_auction' => '2', 'nu_days_recu' => '30', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1',  'highlight' => '0', 'name_es' => 'Intermedio', 'description_es' => 'Un plan para que evalues nuestros servicios.', 'name_en' => 'Intermedio', 'description_en' => 'A plan for you to evaluate our services.', 'name_pt' => 'Intermedio', 'description_pt' => 'Um plano para você avaliar nossos serviços.', 'enable_profile' => '0', 'price' => '12', 'nu_stores' => '4', 'nu_branch' => '6', 'nu_employes' => '4', 'nu_products' => '40', 'nu_smedia' => '1', 'nu_geolocation' => '4', 'nu_banners' => '2', 'nu_auction' => '6', 'nu_days_recu' => '30', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
        );
		DB::table('user_plans')->insert($plan);
    }
}
