<?php

use Illuminate\Database\Seeder;

class ScVisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('sc_visions')->delete();
        DB::table('sc_visions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 174,
                'name_color' => '#fff',
                'title_es' => 'Nuestra Visión',
                'text_es' => '<p style="text-align: justify; "><b>Buromall.com </b>busca convertirse en una corporación líder en el desarrollo de portales integrales de pagos y servicios afines, a través de una plataforma sencilla y segura que se ajuste a las necesidades emergentes de negociaciones comerciales y sociales.<br></p>',
                'description_es' => 'Convertirnos en una corporación líder en el desarrollo de portales integrales de pagos y servicios afines, a través de una plataforma interactiva.',
                'keywords_es' => 'Visión, plataforma, pagos, interactiva, corporación, líder, negociaciones',
                'title_en' => 'Our Vision',
                'text_en' => '<p style="line-height: 20px; text-align: justify;"><b>Buromall </b>seeks to become a leading corporation in the development of payment methods and services through a simple and secure platform that easily adapts to the emerging commercial and social markets.</p><p style="line-height: 20px; text-align: justify;"><br></p>',
                'description_en' => 'To become a leading corporation in the development of integrated payment gateways and related services through a simple and interactive platform.',
                'keywords_en' => 'Our Vision, emerging, commercial, markets, payments, interactive, platform',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'vision.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        
        
    }
}