<?php

use Illuminate\Database\Seeder;

class UserItemMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('user_item_media')->delete();
        
        DB::table('user_item_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'user_id' => 1,
                'product_id' => 0,
                'cupon_id' => 0,
                'event_id' => 0,
                'classified_id' => 0,
                'news_id' => 1,
                'post_id' => 0,
                'order' => '1',
                'iframe' => 0,
                'url' => 'upload/news/3/67751558461402.jpg',
                'alt_img' => '',
                'description' => '',
                'created_at' => '2019-05-21 12:56:42',
                'updated_at' => '2019-05-21 12:56:42',
            ),
        ));
        
        
    }
}