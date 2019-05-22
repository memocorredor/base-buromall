<?php

use Illuminate\Database\Seeder;

class ScRechargesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('sc_recharges')->delete();

        DB::table('sc_recharges')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '',
                'title_es' => 'Como recargar mi monedero',
                'text_es' => '<p>Para hacer tus recargas al monedero puedes hacerlo de la siguiente forma:</p><ul><li>Por medio de una transferencia bancaria.</li><li>Por medio de una transferencia Wester Union.</li><li>Consignación a nuestra cuenta corriente.</li></ul>',
                'description_es' => 'Conoce como puedes recargar tu monedero en Buromall para hacer tus compras',
                'keywords_es' => 'Como recargar mi monedero, Buromall, compras con monedero, monedero',
                'title_en' => 'Como recargar mi monedero',
                'text_en' => '<p>Como recargar mi monedero<br></p>',
                'description_en' => 'Como recargar mi monedero',
                'keywords_en' => 'como recargar mi monedero',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'recarga_wallet.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
