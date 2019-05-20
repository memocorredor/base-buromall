<?php

use Illuminate\Database\Seeder;

class ScCancelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_cancelations')->delete();
        
        DB::table('sc_cancelations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '',
                'title_es' => 'Nuestras Políticas de Cancelaciones',
            'text_es' => '<p><span style="line-height: 1.53846; font-weight: bold;">1. -</span><span style="line-height: 1.53846;"> Se podrá efectuar la cancelación total o parcial de una compra siempre y cuando la mercancía no haya sido cobrada o  bien dentro de las primeras 24 horas de haber sido cobrado el pedido. Si cuando recibamos tu comunicación la mercancía ya ha sido cobrada y/o enviada, es necesario realizar solicitud de reembolso. (Ver política de reembolso).</span><br></p><p><span style="font-weight: bold;">2. - </span>En caso de ya haber recibido la mercancía y el cliente desea proceder a un reembolso las cajas no deberán presentar alteración de su empaque original. Si la cancelación es por motivos personales esta llevará una <span style="font-weight: bold;">penalización del 10%</span>.
</p><p><span style="font-weight: bold;">3. - </span>Al recibir nosotros la mercancía de regreso, se verificará el estado de los productos y/o artículos, para después de su aprobación, proceder con el reembolso a la misma forma de pago descontando los gastos de envío de la devolución o la penalización en caso de aplicar.
</p><p><span style="font-weight: bold;">4. - </span>En caso de cancelaciones parciales, sólo se reembolsará el precio de la mercancía y no los gastos de envío.
</p>',
                'description_es' => 'Conoce las Politicas de Cancelaciones de Buromall',
                'keywords_es' => 'políticas de cancelaciones, políticas, cancelaciones, Buromall',
                'title_en' => 'Our Cancellation Policy',
                'text_en' => ' Políticas de Cancelación
1.- Se podrá efectuar la cancelación total o parcial de una compra siempre y cuando la mercancía no haya sido cobrada o  bien dentro de las primeras 24 horas de haber sido cobrado el pedido. Si cuando recibamos tu comunicación la mercancía ya ha sido cobrada y/o enviada, es necesario realizar solicitud de reembolso. (Ver política de reembolso).
2. En caso de ya haber recibido la mercancía y el cliente desea proceder a un reembolso las cajas no deberán presentar alteración de su empaque original. Si la cancelación es por motivos personales esta llevará una penalización del 10%.
3.-Al recibir nosotros la mercancía de regreso, se verificará el estado de los productos y/o artículos, para después de su aprobación, proceder con el reembolso a la misma forma de pago descontando los gastos de envío de la devolución o la penalización en caso de aplicar.
4.- En caso de cancelaciones parciales, sólo se reembolsará el precio de la mercancía y no los gastos de envío.
',
                'description_en' => 'Know the Policies of Cancellation of Buromall',
                'keywords_en' => 'policies of cancellation, cancellations, policies, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'politicas_cancelaciones.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}