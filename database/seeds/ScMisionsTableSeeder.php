<?php

use Illuminate\Database\Seeder;

class ScMisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_misions')->delete();

        DB::table('sc_misions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '#fff',
                'title_es' => 'Nuestra Misión',
                'text_es' => '<p style="text-align: justify; ">Basados en una plataforma virtual<b>&nbsp;</b>en<b>&nbsp;Buromall.com</b> ofrecemos a nuestros clientes efectuar cualquier tipo de transacción de compras en líneas, pagos de servicios, condominios, transferencias de fondos a monederos en cualquier lugar o espacio de tiempo y desde la comodidad de sus dispositivos.</p>',
                'description_es' => 'Ofrecer la posibilidad de crear transacciones on line, realizar pagos en cualquier lugar y espacio de tiempo desde la comodidad de sus dispositivos.',
                'keywords_es' => 'nuestra mision, corporación líder, pagos, servicios, interactivo, mercados emergentes, sociales',
                'title_en' => 'Our Mission',
                'text_en' => '<p style="line-height: 20px; text-align: justify;"><b>Buromall</b> seeks to become a leading corporation in the development of payment methods and services through a simple and secure platform that easily adaps to the emerging commercial and social markets. </p><p style="line-height: 20px; text-align: justify;"><br></p>',
                'description_en' => 'Offer the ability to create online transactions, develop payments methods from the comfort of your devices.',
                'keywords_en' => 'Our Mision, emerging, commercial, markets, payments, interactive, platform',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'mision.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
