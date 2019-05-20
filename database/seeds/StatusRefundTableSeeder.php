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
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Sin Devoluciones', 'name_en' => 'No Returns', 'name_pt' => 'Sem devoluções', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Aviso de Devolución', 'name_en' => 'Return Notice', 'name_pt' => 'Aviso de devolução', 'color' => '#f60808'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Revisión del producto', 'name_en' => 'Product review', 'name_pt' => 'Revisão do produto', 'color' => '#bf20b2'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Cambio', 'name_en' => 'Change', 'name_pt' => 'Alterar', 'color' => '#20BF7E'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Reembolso', 'name_en' => 'Refund', 'name_pt' => 'Reembolso', 'color' => '#61eab2')
        );
		DB::table('status_refunds')->insert($status);
    }
}
