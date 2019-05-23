<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 0,
                'status_user_id' => 2,
                'plan_id' => 1,
                'user_invite_id' => 1,
                'gender_id' => 1,
                'relationship_id' => 1,
                'date_req' => '',
                'con_newsletter' => 1,
                'image' => '',
                'profile_background' => '',
                'profile_background_position' => '',
                'name' => 'Buromall',
                'lastname' => 'Web',
                'birthdate' => '',
                'description_es' => '',
                'description_en' => '',
                'description_pr' => '',
                'country_id' => 47,
                'state_id' => 779,
                'city_id' => 12688,
                'zipcode' => '111311',
                'address' => '',
                'email' => 'barumarketco@gmail.com',
                'email_verified_at' => '',
                'areacode' => '57',
                'phone' => '',
                'mobile' => '',
                'facebook' => '',
                'facebook_enable' => 0,
                'facebook_id_user' => '',
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
                'username' => 'buromall',
                'password' => '$2y$10$xdStx4f9aHlnX47XYn8SoOBd3.DjZY5lBkAC5YT5dNG8AmluZpWg.',
                'remember_token' => 'OUlvSF1XS6iXttkTL1u16wLxNojt2LbDWMA96A1UW5qgdk0pdMuYBJ7csqtP',
                'token' => '',
                'req_token' => '',
                'salt' => '',
                'ip_joined' => '',
                'joined' => '',
                'created_at' => '2019-01-01 12:00:00', 
                'updated_at' => '2019-01-01 12:00:00'
            ),
            1 => 
            array (
                'id' => 2,
                'enable' => 0,
                'status_user_id' => 2,
                'plan_id' => 1,
                'user_invite_id' => 1,
                'gender_id' => 1,
                'relationship_id' => 1,
                'date_req' => '',
                'con_newsletter' => 1,
                'image' => '',
                'profile_background' => '',
                'profile_background_position' => '',
                'name' => 'Guillermo',
                'lastname' => 'Corredor Soto',
                'birthdate' => '',
                'description_es' => '',
                'description_en' => '',
                'description_pr' => '',
                'country_id' => 47,
                'state_id' => 779,
                'city_id' => 12688,
                'zipcode' => '111311',
                'address' => '',
                'email' => 'guillermo.corredor@gmail.com',
                'email_verified_at' => '',
                'areacode' => '57',
                'phone' => '',
                'mobile' => '',
                'facebook' => '',
                'facebook_enable' => 0,
                'facebook_id_user' => '',
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
                'username' => 'memocorredor',
                'password' => '$2y$10$VLEkZcYXkzaUnletIjHxguwV9CgbDy2EGhaGiyHK9m.HVV1X3VLFi',
                'remember_token' => 'SRRyeCZlQ8E4DSnRh9hNhHUgCH0RxtxROkjO1h2TylfUDVAaxJD0weJcrLpV',
                'token' => '',
                'req_token' => '',
                'salt' => '',
                'ip_joined' => '',
                'joined' => '',
                'created_at' => '2019-01-01 12:00:00', 
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));
        
        
    }
}