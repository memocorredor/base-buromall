<?php

use Illuminate\Database\Seeder;

class StatusRefundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_refunds')->delete();
		$status = array(
			array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Ninguno', 'name_en' => 'None', 'name_pt' => 'Nenhum', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Sin Devoluciones', 'name_en' => 'No Returns', 'name_pt' => 'Sem devoluções', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Aviso de Devolución', 'name_en' => 'Return Notice', 'name_pt' => 'Aviso de devolução', 'color' => '#f60808', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Revisión del producto', 'name_en' => 'Product review', 'name_pt' => 'Revisão do produto', 'color' => '#bf20b2', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Cambio', 'name_en' => 'Change', 'name_pt' => 'Alterar', 'color' => '#20BF7E', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-clipboard-check', 'name_es' => 'Reembolso', 'name_en' => 'Refund', 'name_pt' => 'Reembolso', 'color' => '#61eab2', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('status_refunds')->insert($status);
    }
}
