<?php

use Illuminate\Database\Seeder;

class ScObjectivesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_objectives')->delete();

        DB::table('sc_objectives')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '#fff',
                'title_es' => 'Nuestros Objetivos',
                'text_es' => '<p style="text-align: justify; ">En <span style="font-weight: bold;">Buromall.com</span> con el apoyo de nuestros aliados buscamos:</p><p style="text-align: justify; ">Generar una plataforma de negocio divertida y dinámica donde nuestros clientes puedan socializar, generar comercios, negocios, ofertas y servicios en un solo espacio que brinde respuestas rápidas y fiables a cada necesidad.</p><p style="text-align: justify; ">Generar conjuntamente con nuestros aliados comerciales, sistemas de pagos integrales de manera fácil y segura a través de nuestras plataformas.</p><p style="text-align: justify; "><br></p>',
                'description_es' => 'Generar sistemas de pagos integrales de manera fácil y segura a través de nuestras plataformas comerciales.',
                'keywords_es' => 'pagos integrales, comercios, pagos',
                'title_en' => 'Our Objectives',
                'text_en' => '<p style="line-height: 20px; text-align: justify;">With the support of our allies <b>Buromall</b> looks for:</p><p style="line-height: 20px; text-align: justify;">Generate a fun and dynamic business platform where our clients can socialize, generate businesses, offers and services in a single space that provides quick and reliable answers to every need.</p><p style="line-height: 20px; text-align: justify;">Generate together with our commercial allies, integrated payment systems easily and safely through our platforms.</p>',
                'description_en' => 'Generate dynamic business platforms where we integrate easy & safety payments methods were clients can shop, sell, transfer and even auction.',
                'keywords_en' => 'our objectives, generate, dynamic business, generate business, sell, buy, transfer, shop auction',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'objetivos.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
