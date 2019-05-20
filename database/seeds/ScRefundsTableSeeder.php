<?php

use Illuminate\Database\Seeder;

class ScRefundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_refunds')->delete();
        
        DB::table('sc_refunds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '',
                'title_es' => 'Nuestras Políticas de Reembolso',
                'text_es' => '<p><span style="line-height: 1.53846;">Descripción: El reembolso es la solicitud de un cliente por recibir el monto que ha pagado por un artículo.
Motivos de Reembolso</span><br></p><p>•	El producto adquirido se encuentra fuera de inventario y no es posible entregar otro de características similares y de igual o mayor precio.
</p><p>•	El tiempo de entrega excede de los 30 días hábiles desde la fecha de compra  sin que el cliente reciba el producto.
</p><p>•	El producto fue extraviado por la mensajería.
</p><p>•	Se ha cobrado un monto incorrecto al cliente, el reembolso aplica por la diferencia.
</p><p>•	Debido a los diferentes escenarios que pueden haber en las compras en línea, todos aquellos casos no contemplados en estas políticas se revisarán y procesaran por <span style="font-weight: bold;">Buromall.com</span>&nbsp;individualmente.
Requisitos
Para solicitar un reembolso, se te pedirá la siguiente información, la cual puedes hacer llegar por Correo Electrónico, chat o Telefónicamente:
</p><p><span style="font-weight: bold;">1. - </span>Número de pedido con el que compraste tu producto. (Se encuentra en la opción MI CUENTA).</p><p><span style="font-weight: bold;">
2. - </span>Descripción del artículo y/o pedido.
</p><p><span style="font-weight: bold;">3. - </span>Motivo por el cual se solicita el reembolso.
</p><p><span style="font-weight: bold;">4. - </span>Forma de pago con la que se adquirió la compra.</p><p><span style="font-weight: bold;">
5. - </span>En caso de que sea necesario el envío del producto, las condiciones del  mismo deberán ser evaluadas por parte de <span style="font-weight: bold;">Buromall.com</span>&nbsp;.antes de proceder a un posible reembolso.
</p><p><span style="font-weight: bold;">6. - </span>Confirmada la recepción de solicitud de reembolso se procederá al proceso de revisión del mismo, la recepción de solicitud no implica la autorización del reembolso.
</p><p><span style="font-weight: bold;">7. - </span>Las solicitudes de reembolso se analizarán y se dará avisó al cliente tanto en casos de proceder como en casos de no procedencia de los reembolsos y los motivos.
</p><p><span style="font-weight: bold;">8. - </span>Los gastos de envío para la devolución del producto correrán por cuenta del cliente, si lo desea podemos enviar una guía para que se programe la recolección del producto y el costo del envío se descontará del rembolso.
Tiempos
Los tiempos estimados para el procesamiento de un Reembolso una vez autorizado el mismo son:
</p><p>•	Si el cliente no recibe la mercancía por razones imputables a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;o algún Comercios Afiliado, al momento de la entrega, el reembolso,&nbsp;<b>Buromall.com</b> no procederá con  cobro de la mercancía.
</p><p>•	Si el cliente devuelva la mercancía sin recibirla, por razones no imputables a&nbsp;<span style="font-weight: bold;">Buromall.com</span>, se descontará el costo de envío.
</p><p>•	En caso de pago con tarjeta de crédito Visa o Masterd Card, se hará el reembolso dentro de los 15 días hábiles de realizada la transacción.
</p><p>•	En caso de que se compruebe de que el cliente no haya podido utilizar el bien desde un inicio, encontrándose el mismo y sus empaques en buen estado se procederá al reemplazo por otro bien exactamente al adquirido por el comprador, de no ser posible el reemplazo,&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;procederá a la devolución de las sumas pagadas.
Excepciones
Las siguientes excepciones aplican para los reembolsos.
</p><p>•	El producto adquirido no funciona correctamente y ha sido reportado dentro de los primeros 15 días de recepción del mismo, el cliente y&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;se comprometen a esperar por la revisión del artículo y la reparación del mismo, solo en caso de que no sea posible repararlo se podrá cambiar el producto por otro nuevo. 
</p>',
                'description_es' => 'Conoce los Políticas de Reembolso de Buromall',
                'keywords_es' => 'políticas de reembolso, políticas, reembolso, Buromall',
                'title_en' => 'Our Refund Policy',
                'text_en' => 'Política de Reembolso
Descripción
El reembolso es la solicitud de un cliente por recibir el monto que ha pagado por un artículo.
Motivos de Reembolso
•	El producto adquirido se encuentra fuera de inventario y no es posible entregar otro de características similares y de igual o mayor precio.
•	El tiempo de entrega excede de los 30 días hábiles desde la fecha de compra  sin que el cliente reciba el producto.
•	El producto fue extraviado por la mensajería.
•	Se ha cobrado un monto incorrecto al cliente, el reembolso aplica por la diferencia.
•	Debido a los diferentes escenarios que pueden haber en las compras en línea, todos aquellos casos no contemplados en estas políticas se revisarán y procesaran por PASEOMALL.COM individualmente.
Requisitos
Para solicitar un reembolso, se te pedirá la siguiente información, la cual puedes hacer llegar por Correo Electrónico, chat o Telefónicamente:
1.	Número de pedido con el que compraste tu producto. (Se encuentra en la opción MI CUENTA).
2.	Descripción del artículo y/o pedido.
3.	Motivo por el cual se solicita el reembolso.
4.	Forma de pago con la que se adquirió la compra.
5.	En caso de que sea necesario el envío del producto, las condiciones del  mismo deberán ser evaluadas por parte de PASEOMALL.COM antes de proceder a un posible reembolso.
6.	Confirmada la recepción de solicitud de reembolso se procederá al proceso de revisión del mismo, la recepción de solicitud no implica la autorización del reembolso.
7.	Las solicitudes de reembolso se analizarán y se dará avisó al cliente tanto en casos de proceder como en casos de no procedencia de los reembolsos y los motivos.
8.	Los gastos de envío para la devolución del producto correrán por cuenta del cliente, si lo desea podemos enviar una guía para que se programe la recolección del producto y el costo del envío se descontará del rembolso.
Tiempos
Los tiempos estimados para el procesamiento de un Reembolso una vez autorizado el mismo son:
•	Si el cliente no recibe la mercancía por razones imputables a PASEOMALL.COM o algún Comercios Afiliado, al momento de la entrega, el reembolso, PASEOMALL.COM, no procederá con  cobro de la mercancía.
•	Si el cliente devuelva la mercancía sin recibirla, por razones no imputables a PASEOMALL.COM, se descontará el costo de envío.
•	En caso de pago con tarjeta de crédito Visa o Masterd Card, se hará el reembolso dentro de los 15 días hábiles de realizada la transacción.
•	En caso de que se compruebe de que el cliente no haya podido utilizar el bien desde un inicio, encontrándose el mismo y sus empaques en buen estado se procederá al reemplazo por otro bien exactamente al adquirido por el comprador, de no ser posible el reemplazo, PASEOMALL.COM procederá a la devolución de las sumas pagadas.
Excepciones
Las siguientes excepciones aplican para los reembolsos.
•	El producto adquirido no funciona correctamente y ha sido reportado dentro de los primeros 15 días de recepción del mismo, el cliente y PASEOMALL.COM se comprometen a esperar por la revisión del artículo y la reparación del mismo, solo en caso de que no sea posible repararlo se podrá cambiar el producto por otro nuevo. 
',
                'description_en' => 'Know the Refund Policy of Buromall',
                'keywords_en' => 'refund policy, refund, policy, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'politicas_reenvolso.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}