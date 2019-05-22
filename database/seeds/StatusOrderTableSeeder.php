<?php

use Illuminate\Database\Seeder;

class StatusOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_orders')->delete();
        $status = array(
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Ninguno', 'name_en' => 'None', 'name_pt' => 'Nenhum', 'color' => '#34F56B', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden iniciadas', 'name_en' => 'Started order', 'name_pt' => 'Pedido iniciado', 'color' => '#fb0202', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden en proceso de pago', 'name_en' => 'Order in payment process', 'name_pt' => 'Ordem no processo de pagamento', 'color' => '#f5059a', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden Pagada', 'name_en' => 'Paid order', 'name_pt' => 'Ordem paga', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden con factura', 'name_en' => 'Order with invoice', 'name_pt' => 'Ordem com fatura', 'color' => '#5cb85c', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pagada con monedero', 'name_en' => 'Order paid with wallet', 'name_pt' => 'Encomenda paga com bolsa', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
        DB::table('status_orders')->insert($status);
    }
}
