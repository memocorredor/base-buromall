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
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden iniciadas', 'name_en' => 'Started order', 'name_pt' => 'Pedido iniciado', 'color' => '#fb0202', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pagada', 'name_en' => 'Paid order', 'name_pt' => 'Ordem paga', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pago pendiente', 'name_en' => 'Order payment pending', 'name_pt' => 'Pedido pendente de pagamento', 'color' => '#f5059a', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pago rechazado', 'name_en' => 'Order rejected payment', 'name_pt' => 'Pedido de pagamento rejeitado', 'color' => '#f5059a', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pago fallido', 'name_en' => 'Order failed payment', 'name_pt' => 'Pedido de pagamento falhou', 'color' => '#f5059a', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pagada con monedero', 'name_en' => 'Order paid with wallet', 'name_pt' => 'Pedido paga com bolsa', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-tasks', 'name_es' => 'Orden pagada contra entrega', 'name_en' => 'Order payment against delivery', 'name_pt' => 'Pedido pagamento contra entrega', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
        DB::table('status_orders')->insert($status);
    }
}
