<?php

use Illuminate\Database\Seeder;

class ScReturnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_returns')->delete();
        
        DB::table('sc_returns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '',
                'title_es' => 'Nuestras Políticas de Devoluciones',
                'text_es' => '<p><span style="line-height: 1.53846;">El producto deberá estar sin usar y ser devuelto con su material de empaque original. </span></p><p><span style="line-height: 1.53846;">Recibida la mercancía procederemos de inmediato al reembolso del importe pagado por la misma, utilizando el mismo medio de pago empleado para realizar la compra.</span><br></p><p>
El cliente tiene la opción de cambiar la mercancía en la tienda afiliada a&nbsp;<span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span>, donde la adquirió, sin perjuicio de que podrá requerir que&nbsp;<span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span>, proceda con tal devolución.
</p><p>
Para hacer la devolución, el cliente deberá comunicarse a&nbsp;<span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span>&nbsp;donde se le generará una guía prepagada para enviar el paquete de regreso. </p><p>Con esta guía, el cliente podrá solicitar la recolección a la compañía de mensajería. </p><p>El costo de dicho envío será absorbido por&nbsp;<span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span>&nbsp;En caso de que el producto muestre rasgos de uso o abuso no procederá la devolución y la mercancía quedará a disposición del cliente. </p><p>

El cliente cuenta con <span style="font-weight: bold;">30 días naturales</span> para devolver un producto, que se cuentan a partir de la fecha de envío.
</p>',
                'description_es' => 'Conoce las Políticas de Devoluciones de Buromall',
                'keywords_es' => 'políticas de devoluciones, politicas, devoluciones, reintegro, Buromall',
                'title_en' => 'Our Returns Policy',
                'text_en' => 'Políticas de devolución
El producto deberá estar sin usar y ser devuelto con su material de empaque original. Recibida la mercancía procederemos de inmediato al reembolso del importe pagado por la misma, utilizando el mismo medio de pago empleado para realizar la compra.

El cliente tiene la opción de cambiar la mercancía en la tienda afiliada a PASEOMALL.COM, donde la adquirió, sin perjuicio de que podrá requerir que PASEOMALL.COM, proceda con tal devolución.

Para hacer la devolución, el cliente deberá comunicarse a PASEOMALL.COM donde se le generará una guía prepagada para enviar el paquete de regreso. Con esta guía, el cliente podrá solicitar la recolección a la compañía de mensajería. El costo de dicho envío será absorbido por PASEOMALL.COM
En caso de que el producto muestre rasgos de uso o abuso no procederá la devolución y la mercancía quedará a disposición del cliente. 

El cliente cuenta con 30 días naturales para devolver un producto, que se cuentan a partir de la fecha de envío.',
                'description_en' => 'Know our Returns Policy of Buromall',
                'keywords_en' => 'return policies, policies, returns, refunds, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'politicas_devoluciones.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}