<?php

use Illuminate\Database\Seeder;

class StatusPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_payments')->delete();
		$status = array(
			array('enable' => '1', 'icon' => '', 'name_es' => 'N/A', 'name_en' => 'N/A', 'name_pt' => 'N/A', 'color' => ''),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago pendiente', 'name_en' => 'Pending payment', 'name_pt' => 'Pagamento pendente', 'color' => '#fb9304'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Payment error', 'name_en' => 'Error en el pago', 'name_pt' => 'Erro no pagamento', 'color' => '#fb0202'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago realizado', 'name_en' => 'Payment made', 'name_pt' => 'Pagamento realizado', 'color' => '#5cb85c'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago cancelado', 'name_en' => 'Payment canceled', 'name_pt' => 'Pagamento cancelado', 'color' => '#f5059a'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago reembolsado cliente', 'name_en' => 'Payment refunded customer', 'name_pt' => 'Pagamento reembolsado pelo cliente', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago reembolsado a la tarjeta', 'name_en' => 'Payment reimbursed to the card', 'name_pt' => 'Pagamento reembolsado ao cartão', 'color' => '#20bf7e'),
            array('enable' => '1',  'icon' => '', 'name_es' => 'Pago reembolsado al monedero', 'name_en' => 'Payment reimbursed to the wallet', 'name_pt' => 'Pagamento reembolsado à carteira', 'color' => '#20bf7e')
        );
		DB::table('status_payments')->insert($status);
    }
}
