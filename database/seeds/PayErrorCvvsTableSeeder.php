<?php

use Illuminate\Database\Seeder;

class PayErrorCvvsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pay_error_cvvs')->delete();

        \DB::table('pay_error_cvvs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'icon' => NULL,
                'error' => 'ECVV0',
                'name_es' => 'Sin Errores',
                'name_en' => 'Sin Errores',
                'name_pt' => 'Sin Errores',
                'color' => '#34F56B',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));


    }
}
