<?php

use Illuminate\Database\Seeder;

class ScGuaranteesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_guarantees')->delete();

        DB::table('sc_guarantees')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '',
                'title_es' => 'Nuestras Políticas de Garantias',
                'text_es' => '<p><span style="line-height: 1.53846;">El proceso de garantía tiene los siguientes términos y condiciones:</span><br></p><p><span style="font-weight: bold;">1. -</span> La garantía de los productos vendidos por <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> estará escrita en su remisión o factura o bien mediante póliza del fabricante en donde establecerá el tiempo de garantía de acuerdo al producto y al proveedor.
</p><p><span style="font-weight: bold;">2. -</span> En  productos en donde no exista un centro de servicio del fabricante en la localidad del cliente , <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> podrá tramitar la garantía actuando como intermediario directamente con el proveedor o fabricante como un servicio adicional, debiendo pagar el cliente el costo  que se genere del proceso de traslados, que será definido en el momento del trámite. </p><p>En los casos en que el producto dañado no pueda ser reemplazado, reparado por el fabricante o proveedor, se encuentre agotado o haya sido descontinuado por el fabricante, se ofrecerá una alternativa de producto o en su defecto el reembolso de la suma pagada.
</p><p><span style="font-weight: bold;">3. - </span>Los defectos o desperfectos debidos al uso incorrecto o manipulación del material o los desgastes producidos por un uso anormal del mismo, anularán la garantía.
</p><p><span style="font-weight: bold;">4. - </span>Los daños en los productos causados por un desconocimiento del manejo o funciones del producto anularán la garantía.
</p><p><span style="font-weight: bold;">5. - </span>El cliente cuenta con una garantía total de tres (3) días a partir de haber recibido el producto  (reparación del producto o envío de otro nuevo) en caso que el producto presente alguna anomalía de funcionamiento. Todos los gastos de manejo y envío correrán por cuenta del cliente.
</p><p><span style="font-weight: bold;">6. - </span>Para cualquier defecto de fabricación y funcionamiento que tengan los productos comprados en <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> se establece como único responsable al fabricante de los mismos <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> actuará como un facilitador en el trámite de la garantía.
</p><p><span style="font-weight: bold;">7. - </span>La vigencia de la garantía dará inicio a partir del día de entrega y de aceptación del pedido.
</p><p><span style="font-weight: bold;">8. - </span>No podrá presentarse una reclamación por garantía, si el producto ha sido manipulado incorrectamente por personas no autorizadas por el fabricante.
</p><p><span style="font-weight: bold;">9. - </span>La garantía no será válida por causas ajenas a la operación de propio producto, tales como cambios bruscos de voltaje, utilización de accesorios inadecuados o no recomendado  por los fabricantes, derrames de líquidos, fuego, abuso en el manejo del producto, o por desgaste natural de algunos materiales en la composición del producto.
</p><p><span style="font-weight: bold;">10. - </span>No se responde por software en los equipos, des-configuraciones de ningún tipo, daños causados por virus, incompatibilidad o incumplimiento de las condiciones mínimas de uso de algún software específico.
</p><p><span style="font-weight: bold;">11. - </span>No aceptamos cambios de ningún tipo por incompatibilidad con algún software y/o hardware.
</p><p><span style="font-weight: bold;">12. - </span>El tiempo de respuesta a su garantía será de 5 días hábiles una vez recibido el producto, por el proveedor y/o <span style="font-weight: bold; text-align: justify;">Buromall</span><span style="font-weight: bold;">, S.A.</span> subsidiarias o anexas.
</p><p><span style="font-weight: bold;">13. - </span>Estas políticas no son excluyentes ni deben ser entendidas o utilizadas en contraposición a las condiciones de garantía que maneje cada proveedor.
</p>',
                'description_es' => 'Conoce las Políticas de Garantias de Buromall',
                'keywords_es' => 'Políticas de Garantias, políticas, garantias, Buromall',
                'title_en' => 'Our Policy Guarantees',
                'text_en' => 'Política de Garantía
El proceso de garantía tiene los siguientes términos y condiciones:
1.	La garantía de los productos vendidos por PASEOMALL.COM estará escrita en su remisión o factura o bien mediante póliza del fabricante en donde establecerá el tiempo de garantía de acuerdo al producto y al proveedor.
2.	En  productos en donde no exista un centro de servicio del fabricante en la localidad del cliente , PASEOMALL.COM podrá tramitar la garantía actuando como intermediario directamente con el proveedor o fabricante como un servicio adicional, debiendo pagar el cliente el costo  que se genere del proceso de traslados, que será definido en el momento del trámite. En los casos en que el producto dañado no pueda ser reemplazado, reparado por el fabricante o proveedor, se encuentre agotado o haya sido descontinuado por el fabricante, se ofrecerá una alternativa de producto o en su defecto el reembolso de la suma pagada.
3.	Los defectos o desperfectos debidos al uso incorrecto o manipulación del material o los desgastes producidos por un uso anormal del mismo, anularán la garantía.
4.	Los daños en los productos causados por un desconocimiento del manejo o funciones del producto anularán la garantía.
5.	El cliente cuenta con una garantía total de tres (3) días a partir de haber recibido el producto  (reparación del producto o envío de otro nuevo) en caso que el producto presente alguna anomalía de funcionamiento. Todos los gastos de manejo y envío correrán por cuenta del cliente.
6.	Para cualquier defecto de fabricación y funcionamiento que tengan los productos comprados en PASEOMALL.COM se establece como único responsable al fabricante de los mismos PASEOMALL.COM actuará como un facilitador en el trámite de la garantía.
7.	La vigencia de la garantía dará inicio a partir del día de entrega y de aceptación del pedido.
8.	No podrá presentarse una reclamación por garantía, si el producto ha sido manipulado incorrectamente por personas no autorizadas por el fabricante.
9.	La garantía no será válida por causas ajenas a la operación de propio producto, tales como cambios bruscos de voltaje, utilización de accesorios inadecuados o no recomendado  por los fabricantes, derrames de líquidos, fuego, abuso en el manejo del producto, o por desgaste natural de algunos materiales en la composición del producto.
10.	No se responde por software en los equipos, des-configuraciones de ningún tipo, daños causados por virus, incompatibilidad o incumplimiento de las condiciones mínimas de uso de algún software específico.
11.	No aceptamos cambios de ningún tipo por incompatibilidad con algún software y/o hardware.
12.	El tiempo de respuesta a su garantía será de 5 días hábiles una vez recibido el producto, por el proveedor y/o PASEOMALL.COM subsidiarias o anexas.
13.	Estas políticas no son excluyentes ni deben ser entendidas o utilizadas en contraposición a las condiciones de garantía que maneje cada proveedor.
',
                'description_en' => 'Know the Warranty Policies of Buromall',
                'keywords_en' => 'warranty policies, warranty, policies, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'politicas_garantias.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
