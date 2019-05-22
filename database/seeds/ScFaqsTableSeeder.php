<?php

use Illuminate\Database\Seeder;

class ScFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_faqs')->delete();

        DB::table('sc_faqs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 2,
                'title_es' => '¿Puedo crear mi propia tienda?',
                'text_es' => 'En Buromall.com puedes crear tu propia tienda y subir tus productos que quieres vender. La interfaz gráfica funciona igual que una red social. ',
                'title_en' => 'Can I create my own store?',
                'text_en' => 'In Buromall you can create your own store and upload your products that you want to sell. The graphical interface works just like a social network.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            1 =>
            array (
                'id' => 2,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 2,
                'title_es' => 'Si vendo un producto por intermedio de ustedes, ¿cómo me lo pagan?',
                'text_es' => 'Inmediatamente que se vende un producto, este valor es cargado a tu monedero y por intermedio de este se podrá hacer efectivo o cobro por medio de cheque, transferencia, consignación u otro medio!',
                'title_en' => ' If I sell a product through you, how do I get paid?',
                'text_en' => 'Immediately that a product is sold, this value is charged to your wallet and through it can be made cash or by check, transfer, consignment or other means!',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            2 =>
            array (
                'id' => 3,
                'enable' => 0,
                'icon' => '',
                'categories_faq_id' => 9,
                'title_es' => '¿Cómo hago para recargar mi monedero?',
                'text_es' => 'Esta recarga se puede hacerla de diversas maneras: 1. Por medio de un depósito directo a la cuenta Nº_____________, del Banco ____________________ 2. Con tu tarjeta de crédito y/o débito. 3. Dirigiéndose directamente a nuestras oficinas.',
                'title_en' => 'How can I recharge my virtual wallet?',
                'text_en' => 'You will have different ways to do it: 1. Through a direct deposit at our banking account Nº__________________, Bank: ___________ 2. Direct with your Credit or debit cards. 3. At our facilities.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            3 =>
            array (
                'id' => 4,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 5,
                'title_es' => '¿Como me envían lo que e comprado?',
                'text_es' => 'Buromall, cuenta con alianzas de empresas de paqueteria que prestan el servicio a las diferentes tiendas que publican productos con nosotros. dichos envíos están sujetos a nuestras políticas de envíos!',
                'title_en' => ' How do you send me what I bought?',
                'text_en' => 'Buromall, has alliances of parcel companies that provide the service to the different stores that publish products with us. Those shipments are subject to our shipping policies!',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            4 =>
            array (
                'id' => 5,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 1,
                'title_es' => '¿Cómo me registro?',
                'text_es' => '1. Haz click en el botón de "User", en la barra superior derecha. 2. Rellena los cuadro de información requerida. 3. Haz click en el botón de "Crear Mi Cuenta" 4. Tu cuenta ha sido creada y pronto recibiras un correo electrónico de confirmación de registro.',
                'title_en' => 'How do I Register?',
                'text_en' => '1. Click the "User" button in the upper right bar. 2. Fill in the required information boxes. 3. Click on the button "Create My Account" 4. Your account has been created and you will soon receive a registration e-mail confirmation.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            5 =>
            array (
                'id' => 6,
                'enable' => 0,
                'icon' => '',
                'categories_faq_id' => 1,
                'title_es' => '¿Por que debo registrarme?',
                'text_es' => 'Para realizar cualquier operación en la plataforma Buromall, es obligatorio que esté registrado correctamente. Una vez registrado, podrá gestionar: 1. Compras con pagos a través de su monedero virtual, tarjeta de crédito o débito. 2. Recarga de monedero. 3. Crea tu red social agregando amigos. 4. Transferencias entre bolsos. 5. Hacer pagos por servicios. 6. Crear tu propia tienda.',
                'title_en' => 'Why I have to Register?',
                'text_en' => 'To make any operation on the Buromall platform, it is mandatory that you are properly registered. Once you register you will be able to manage: 1. Purchases with payments through your virtual wallet, credit or debit card. 2. Purse recharges. 3. Create your social network by adding friends. 4. Transfers between purses. 5. Make payments for Services. 6. create your own Store.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            6 =>
            array (
                'id' => 7,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 1,
                'title_es' => '¿Que hago si olvide mi usuario o contraseña?',
                'text_es' => 'Si olvidaste tu contraseña sólo haz click en la línea "olvide mi contraseña" y agrega la dirección de correo con que registraste tu cuenta en Buromall y pronto te estaremos enviando una contraseña de recuperación.',
                'title_en' => 'What should I do if I forget my password?',
                'text_en' => 'If you forgot your password, just click on the "forgot my password" line and add fill the email address with which you registered your account at Buromall. We will soon send you a recovery password.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            7 =>
            array (
                'id' => 8,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 11,
                'title_es' => '¿Cómo puedo registrar mis propios servicios?',
                'text_es' => 'Para publicar tus servicios te sugerimos crees un clasificado en nuestra casilla de "Clasificados" e introduce la información en las casillas solicitadas.',
                'title_en' => 'How can I register my own services?',
                'text_en' => 'To publish your services we suggest you create a classified in our "Classifieds" box option, and fill the information in the boxes.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            8 =>
            array (
                'id' => 9,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 5,
                'title_es' => '¿Cuales son los Tiempos de Entrega?',
                'text_es' => 'Una vez recibida la confirmación de compra por el sistema de Buromall a tu correo los envíos podrán tardar: 1 Nivel Nacional - entre 2 y 5 días hábiles. 2 internacionales - entre 15 y 40 días hábiles. Recuerda que los envíos están sujetos dependiendo de las características del producto, las distancias y formas de envíos y las opciones seleccionadas por el comprador. Para mayor información por favor diríjase a nuestras políticas de envíos.',
                'title_en' => 'What are the delivery times?',
                'text_en' => 'Once received the confirmation of purchase by the system of Buromall to your mail the shipments may take: 1 National Level - between 2 and 5 business days. 2 international - between 15 and 40 business days. Remember that shipments are subject depending on the characteristics of the product, the distances and forms of shipments and the options selected by the buyer. For more information please refer to our shipping policies.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            9 =>
            array (
                'id' => 10,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 7,
                'title_es' => '¿Puedo devolver algún artículo que compre?',
                'text_es' => 'Las devoluciones de los productos están sujetas a las políticas de garantía de devoluciones de Buromall. Todos producto que se quiera devolver, deberá estar sin usar y con su material de empaque original.',
                'title_en' => 'Can I return an item?',
                'text_en' => 'Product returns are subject to Buromalls return guarantee policies. All products to be returned must be unused and with their original packaging material.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            10 =>
            array (
                'id' => 11,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 11,
                'title_es' => 'Cual es el costo de los Clasificados?',
                'text_es' => 'Los clasificados tienen un costo de 1$ por publicación Buromall no realizará el cobro de estos clasificados hasta nuevo aviso, como un bono de bienvenida a sus usuarios!',
                'title_en' => ' What will be the cost of the classifieds?',
                'text_en' => 'The classifieds have a cost of $ 1 per publication PagoS will not charge these classifieds until further notice, as a welcome bonus to its users!',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            11 =>
            array (
                'id' => 12,
                'enable' => 1,
                'icon' => '',
                'categories_faq_id' => 11,
                'title_es' => 'Tiempo de Publicación',
                'text_es' => 'Los tiempos normales de publicación son 30 días por clasificado.',
                'title_en' => 'Publication Time',
                'text_en' => 'The normal publication times are 30 days per classified.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            12 =>
            array (
                'id' => 13,
                'enable' => 0,
                'icon' => '',
                'categories_faq_id' => 8,
                'title_es' => 'Cómo hago para Publicar mis productos?',
                'text_es' => 'XXXXXXXXXX',
                'title_en' => 'How can I publish my Product?',
                'text_en' => 'XXXXX',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            13 =>
            array (
                'id' => 14,
                'enable' => 0,
                'icon' => '',
                'categories_faq_id' => 4,
                'title_es' => 'Cómo cancelo una compra?',
                'text_es' => 'XXXXXX',
                'title_en' => 'How can i cancel my purchase?',
                'text_en' => 'XXXXX',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
            14 =>
            array (
                'id' => 15,
                'enable' => 0,
                'icon' => '',
                'categories_faq_id' => 6,
                'title_es' => 'Que hago si un producto me llega dañado?',
                'text_es' => 'Por favor revise nuestras políticas de garantías y devoluciones.',
                'title_en' => 'What do I do if a product gets damaged?',
                'text_en' => 'Please review our warranty and return policies.',
                'title_pt' => NULL,
                'text_pt' => NULL,
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
