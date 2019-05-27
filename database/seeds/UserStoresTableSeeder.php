<?php

use Illuminate\Database\Seeder;

class UserStoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('user_stores')->delete();

        DB::table('user_stores')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'time_zone' => 'America/Bogota',
                'url_name' => 'buromall-store',
                'user_id' => 1,
                'type_store_id' => 1,
                'image' => 'imagens/stores/default-store.png',
                'profile_background' => 'imagens/stores/default-background.png',
                'profile_background_position' => '0px',
                'name' => 'Buromall Store',
                'description_es' => 'Tienda de nuestra pagina web',
                'keywords_es' => 'tienda,online,onlinestore',
                'description_en' => 'Tienda de nuestra pagina web',
                'keywords_en' => 'tienda,online,onlinestore',
                'description_pt' => 'Tienda de nuestra pagina web',
                'keywords_pt' => 'tienda,online,onlinestore',
                'email' => 'buromarketco@gmail.com',
                'country_id' => 47,
                'state_id' => 779,
                'city_id' => 12688,
                'zipcode' => '113411',
                'address' => '<p>Transversal 3 No 52B -08</p>',
                'areacode' => '57',
                'phone' => '65655656',
                'mobile' => '65655656',
                'porcent_pay' => '3.10',
                'cent_pay' => '0.50',
                'no_company' => '80505379',
                'merchant' => '',
                'name_bank' => 'Davivienda',
                'name_acount' => 'Buromall',
                'no_acount' => 'Sdfsdfsdf',
                'iban' => '',
                'swift' => '',
                'facebook' => '',
                'facebook_enable' => 0,
                'twitter' => '',
                'twitter_enable' => 0,
                'instagram' => '',
                'instagram_enable' => 0,
                'pinterest' => '',
                'pinterest_enable' => 0,
                'youtube' => '',
                'youtube_enable' => 0,
                'linkedin' => '',
                'linkedin_enable' => 0,
                'skype' => '',
                'skype_enable' => 0,
                'created_at' => '2019-05-27 07:50:28',
                'updated_at' => '2019-05-27 07:50:28',
            ),
        ));


    }
}
