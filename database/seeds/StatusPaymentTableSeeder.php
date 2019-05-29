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
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago en curso', 'name_en' => 'Payment in progress', 'name_pt' => 'Pagamento em andamento', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago aceptado', 'name_en' => 'Payment accepted', 'name_pt' => 'Pagamento aceite', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago rechazado', 'name_en' => 'Payment declined', 'name_pt' => 'Pagamento recusado', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago pendiente', 'name_en' => 'Pending payment', 'name_pt' => 'Pagamento pendente', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago fallido', 'name_en' => 'Failed payment', 'name_pt' => 'Pagamento falhado', 'color' => '#fb9304', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago cancelado', 'name_en' => 'Payment canceled', 'name_pt' => 'Pagamento cancelado', 'color' => '#f5059a', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Solicitud de reembolso', 'name_en' => 'Payment refunded customer', 'name_pt' => 'Pagamento reembolsado pelo cliente', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago reembolsado cliente', 'name_en' => 'Payment refunded customer', 'name_pt' => 'Pagamento reembolsado pelo cliente', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago reembolsado a la tarjeta', 'name_en' => 'Payment reimbursed to the card', 'name_pt' => 'Pagamento reembolsado ao cartão', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00'),
            array('enable' => '1', 'icon' => 'fas fa-cash-register', 'name_es' => 'Pago reembolsado al monedero', 'name_en' => 'Payment reimbursed to the wallet', 'name_pt' => 'Pagamento reembolsado à carteira', 'color' => '#20bf7e', 'created_at' => '2019-01-01 12:00:00', 'updated_at' => '2019-01-01 12:00:00')
        );
		DB::table('status_payments')->insert($status);
    }
}
