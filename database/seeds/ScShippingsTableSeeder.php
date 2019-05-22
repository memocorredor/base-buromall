<?php

use Illuminate\Database\Seeder;

class ScShippingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_shippings')->delete();

        DB::table('sc_shippings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '',
                'title_es' => 'Nuestras Políticas de Envios',
                'text_es' => '<p>Los pedidos se enviarán dentro de los dos días hábiles siguientes a la fecha de compra, con excepción de aquellos  que contengan artículos personalizados o con la leyenda de Producto sujeto a fabricación.
</p><p>De tal forma que:
Los pedidos recibidos hasta las <span style="font-weight: bold;">11:59 pm</span> (hora de la Ciudad de Panamá) serán enviados dentro de los dos días hábiles siguientes a la recepción de la confirmación del pago.
</p><p>Los pedidos que incluyan artículos personalizados o artículos que se identifiquen con la leyenda: Producto sujeto a fabricación, serán enviados en un lapso de <span style="font-weight: bold;">7 días hábiles</span>.
</p><p>Al finalizar la compra el cliente recibirá un correo de confirmación de pedido que incluirá el detalle de los productos comprados.
</p><p>En caso de que la compañía de mensajería no encuentre a la persona en su domicilio y se hayan realizado las notificaciones correspondientes al cliente, el paquete será devuelto a la Tienda donde adquirió el producto y la mercancía quedará a disposición del cliente por un periodo de 90 días a partir de su llegada a las instalaciones de la Tienda. </p><p>El costo de re-envío de dicha mercancía, si esta es reclamada, correrá a cargo del interesado. </p><p>Pasados los 90 días <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> no se hará responsable de la mercancía.
</p><p>En determinados momentos o fechas del año, los envíos se retrasarán debido al cese de actividades, una vez volviendo a nuestras labores cotidianas se restablecerán los envíos como se indica en nuestras políticas
Días Inhábiles para <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span></p><p> <span style="font-weight: bold;">- </span>Fiestas Patrias (3 al 5 de Noviembre)
</p><p> <span style="font-weight: bold;">-</span> Navidad (24 y 25 de Diciembre)
</p><p><span style="font-weight: bold;">-</span> Año Nuevo (31 de Diciembre y 01 de Enero)
</p><p><span style="font-weight: bold;">-</span> Día de los Mártires (9 de Enero)
</p><p><span style="font-weight: bold;">-</span> Carnavales
</p><p><span style="font-weight: bold;">-</span> Semana Santa (durante la semana de Semana Santa)
</p>',
                'description_es' => 'Conoce las Politicas de Envios de Buromall',
                'keywords_es' => 'políticas de envios, envios, politicas, Buromall',
                'title_en' => 'Our Shipping Policy',
                'text_en' => 'Políticas de envío
Los pedidos se enviarán dentro de los dos días hábiles siguientes a la fecha de compra, con excepción de aquellos  que contengan artículos personalizados o con la leyenda de Producto sujeto a fabricación.
De tal forma que:
Los pedidos recibidos hasta las 11:59 pm (hora de la Ciudad de Panamá) serán enviados dentro de los dos días hábiles siguientes a la recepción de la confirmación del pago.
Los pedidos que incluyan artículos personalizados o artículos que se identifiquen con la leyenda: Producto sujeto a fabricación, serán enviados en un lapso de 7 días hábiles.
Al finalizar la compra el cliente recibirá un correo de confirmación de pedido que incluirá el detalle de los productos comprados.
En caso de que la compañía de mensajería no encuentre a la persona en su domicilio y se hayan realizado las notificaciones correspondientes al cliente, el paquete será devuelto a la Tienda donde adquirió el producto y la mercancía quedará a disposición del cliente por un periodo de 90 días a partir de su llegada a las instalaciones de la Tienda. El costo de re-envío de dicha mercancía, si esta es reclamada, correrá a cargo del interesado. Pasados los 90 días PASEOMALL.COM no se hará responsable de la mercancía.
En determinados momentos o fechas del año, los envíos se retrasarán debido al cese de actividades, una vez volviendo a nuestras labores cotidianas se restablecerán los envíos como se indica en nuestras políticas
Días Inhábiles para PASEOMALL.COM
Fiestas Patrias (3 al 5 de Noviembre)
Navidad (24 y 25 de Diciembre)
Año Nuevo (31 de Diciembre y 01 de Enero)
Día de los Mártires (9 de Enero)
Carnavales
Semana Santa (durante la semana de Semana Santa)
',
                'description_en' => 'Know the Policies of Shipment of Buromall',
                'keywords_en' => 'Shipping policies, shipping, policies, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'politicas_envios.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
