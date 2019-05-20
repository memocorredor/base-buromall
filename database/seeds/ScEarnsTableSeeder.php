<?php

use Illuminate\Database\Seeder;

class ScEarnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_earns')->delete();
        
        DB::table('sc_earns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '#fff',
                'title_es' => 'How to win with us?',
                'text_es' => '<p style="text-align: justify; ">No solo comprando, refiriendo en en <span style="font-weight: 700;">Buromall.com</span> </p>',
                'description_es' => 'Como puedes ganar dinero en Buromall haciendo compras o refiriendo personas.',
                'keywords_es' => 'Buromall, plataforma, monederos, administración, servicios, ventas, monederos virtuales, recargas, compras online, transferencias, transferir, pagos servicios, condominios, clasificados, canales de pagos',
                'title_en' => ' Know more About Us',
                'text_en' => '<p style="line-height: 20px; text-align: justify;"><span style="font-weight: bold;">Buromall.com</span> is an easily accessible portal where payments become a simple operation through their devices from any location.</p><p style="line-height: 20px; text-align: justify;">Our users will find in <b>Buromall.com</b> a comfortable alternative which may extend the regular ways of payments on an easy and safe mode.</p><p style="line-height: 20px; text-align: justify;">No credit cards will be needed on our platform, we work with virtual wallets which allows you to buy online, transfer to other wallets, pay your services, condos and many others.</p>',
                'description_en' => 'Buromall an easy payment platform to enjoy a universe of possibilities of payments and transfers from any spot through the comfort of your devices.',
                'keywords_en' => ' Buromall, platform, wallets, purses, administration, services, sales, virtual purses, recharges, online purchases, transfers, transfer, payments services, condominiums, classifieds',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'gana_nosotros.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}