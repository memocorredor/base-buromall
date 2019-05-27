<?php

use Illuminate\Database\Seeder;

class PayErrorAvsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pay_error_avs')->delete();
        
        \DB::table('pay_error_avs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'icon' => NULL,
                'error' => 'EAVS0',
                'name_es' => 'Sin Errores',
                'name_en' => 'Sin Errores',
                'name_pt' => 'Sin Errores',
                'color' => NULL,
                'created_at' => '2019-05-27 14:32:07',
                'updated_at' => '2019-05-27 14:32:07',
            ),
        ));
        
        
    }
}