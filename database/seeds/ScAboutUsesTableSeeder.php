<?php

use Illuminate\Database\Seeder;

class ScAboutUsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_about_uses')->delete();
        
        DB::table('sc_about_uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '#ffffff',
                'title_es' => 'Conoce más de Nosotros',
                'text_es' => '<p style="text-align: justify; "><b>Buromall.com</b> es un portal de fácil acceso donde realizar tus pagos se convierte en una operación sencilla, a través de sus dispositivos desde cualquier localidad.</p><p style="text-align: justify; ">Los Usuarios encontrarán en <span style="font-weight: bold;">Buromall.com, </span>una alternativa cómoda en la cual podrá ampliar sus canales de pagos, por medios seguros y fáciles.</p><p style="text-align: justify; ">En <b>Buromall.com</b> no necesitas de tarjeta de crédito, trabajamos mediante un sistema de monedero virtual recargable el cual te permitirá comprar on line, transferir a otros monederos, pagar tus servicios, condominios y mucho más. </p>',
                'description_es' => 'Buromall.com es una plataforma sencilla que permite disfrutar de un universo de posibilidades de compras, pagos y transferencias desde la comodidad de tu dispositivo.',
                'keywords_es' => 'Buromall, plataforma, monederos, administración, servicios, ventas, monederos virtuales, recargas, compras online, transferencias, transferir, pagos servicios, condominios, clasificados, canales de pagos, comodidad',
                'title_en' => ' Know more About Us',
                'text_en' => '<p style="line-height: 20px; text-align: justify;"><span style="font-weight: bold;">Buromall.com</span> is an easily accessible portal where payments become a simple operation through their devices from any location.</p><p style="line-height: 20px; text-align: justify;">Our users will find in <b>Buromall.com</b> a comfortable alternative which may extend the regular ways of payments on an easy and safe mode.</p><p style="line-height: 20px; text-align: justify;">No credit cards will be needed on our platform, we work with virtual wallets which allows you to buy online, transfer to other wallets, pay your services, condos and many others.</p>',
                'description_en' => 'Buromall an easy payment platform to enjoy a universe of possibilities of payments and transfers from any spot through the comfort of your devices.',
                'keywords_en' => ' Buromall, platform, wallets, purses, administration, services, sales, virtual purses, recharges, online purchases, transfers, transfer, payments services, condominiums, classifieds',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'nosotros.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}