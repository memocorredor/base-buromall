<?php

use Illuminate\Database\Seeder;

class UserStoreProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('user_store_products')->delete();

        \DB::table('user_store_products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'user_id' => 2,
                'country_id' => 0,
                'store_id' => 1,
                'branch_id' => 1,
                'status_product_id' => 2,
                'departaments_id' => 9,
                'categories_id' => 62,
                'categories_sub_id' => 251,
                'brand_id' => 559,
                'no_ref' => '345654623456',
                'no_ean' => '4563456',
                'url_title_es' => 'test-de-producto-audifonos-apple',
                'title_es' => 'Test de producto Audifonos Apple',
                'text_es' => '<p><span style="font-size: 14.4px;">Este es un test de productos para transaciones dentro de la plataforma</span><br></p>',
                'description_es' => 'Test de producto Audifonos Apple',
                'keywords_es' => 'test,de,producto,audifonos,apple',
                'url_title_en' => 'test-de-producto-audifonos-apple',
                'title_en' => 'Test de producto Audifonos Apple',
                'text_en' => '<p><span style="font-size: 14.4px;">Este es un test de productos para transaciones dentro de la plataforma</span><br></p>',
                'description_en' => 'Test de producto Audifonos Apple',
                'keywords_en' => 'test,de,producto,audifonos,apple',
                'url_title_pt' => 'test-de-producto-audifonos-apple',
                'title_pt' => 'Test de producto Audifonos Apple',
                'text_pt' => '<p>Este es un test de productos para transaciones dentro de la plataforma</p>',
                'description_pt' => 'Test de producto Audifonos Apple',
                'keywords_pt' => 'test,de,producto,audifonos,apple',
                'type_auction_id' => 1,
                'type_transaction_id' => 3,
                'tax_id' => 1,
                'p_size' => NULL,
                'p_color' => NULL,
                'price_incrise' => NULL,
                'price' => '198.00',
                'descount' => NULL,
                'quantity' => '2',
                'price_ini' => NULL,
                'price_reserve' => NULL,
                'increase_bid' => NULL,
                'min_biders' => NULL,
                'private_auction' => 0,
                'buyitnow' => 0,
                'enable_deals' => 0,
                'automatic_re_enter' => 1,
                'type_shipping_id' => 3,
                'prod_weight' => '1.00',
                'prod_long' => '10.00',
                'prod_width' => '10.00',
                'prod_high' => '10.00',
                'insurance' => '2.00',
                'shipping_price' => '5.00',
                'shipping_description_es' => 'Test de texto para envio de productos',
                'shipping_description_en' => 'Test de texto para envio de productos',
                'shipping_description_pt' => 'Test de texto para envio de productos',
                'url_web_show' => NULL,
                'accept_returns' => 1,
                'token' => 'vJSmWCqZ0O53PZyyVz4mO6VQrhbiol86O57R4iVn',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
