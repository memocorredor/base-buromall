<?php

use Illuminate\Database\Seeder;

class UserStoreBranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('user_store_branches')->delete();

        DB::table('user_store_branches')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'user_id' => 1,
                'store_id' => 1,
                'name' => 'Calle 52',
                'description_es' => 'Sucursal de Buromall en la calle 52',
                'keywords_es' => 'sucursal,de,buromall,en,la,calle,52',
                'description_en' => 'Sucursal de Buromall en la calle 52',
                'keywords_en' => 'sucursal,de,buromall,en,la,calle,52',
                'description_pt' => 'Sucursal de Buromall en la calle 52',
                'keywords_pt' => 'sucursal,de,buromall,en,la,calle,52',
                'email' => 'calle52@buromall.com',
                'zipcode' => '113411',
                'country_id' => 47,
                'state_id' => 779,
                'city_id' => 12688,
                'address' => '<p>CAlle 52 con 7</p>',
                'areacode' => '57',
                'phone' => '3653456',
                'mobile' => '34563546',
                'latitude' => '',
                'longitude' => '',
                'lun_a' => '',
                'lun_c' => '',
                'mar_a' => '',
                'mar_c' => '',
                'mier_a' => '',
                'mier_c' => '',
                'jue_a' => '',
                'jue_c' => '',
                'vier_a' => '',
                'vier_c' => '',
                'sab_a' => '',
                'sab_c' => '',
                'dom_a' => '',
                'dom_c' => '',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));


    }
}
