<?php

use Illuminate\Database\Seeder;

class StatusShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_shippings')->delete();
		$status = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'En espera de pago', 'name_en' => 'Waiting for payment', 'name_pt' => 'À espera de pagamento', 'color' => '#f80505'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Preparando el envío', 'name_en' => 'Preparing the shipment', 'name_pt' => 'Preparando o envio', 'color' => '#f80505'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Entregado a carrier', 'name_en' => 'Delivered to carrier', 'name_pt' => 'Entregue para transportadora', 'color' => '#babf20'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Comprador recoge', 'name_en' => 'Buyer picks up', 'name_pt' => 'Comprador pega', 'color' => '#20BF7E'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'En Ruta', 'name_en' => 'On Route', 'name_pt' => 'Na rota', 'color' => '#20BF7E'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Entregado a cliente', 'name_en' => 'Delivered to client', 'name_pt' => 'Entregue ao cliente', 'color' => '#0559f6')
        );
		DB::table('status_shippings')->insert($status);
    }
}
