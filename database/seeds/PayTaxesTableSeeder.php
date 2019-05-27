<?php

use Illuminate\Database\Seeder;

class PayTaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('pay_taxes')->delete();

        DB::table('pay_taxes')->insert(array(
            0 =>
            array(
                'enable' => 1,
                'default_f' => 0,
                'country_id' => 47,
                'departaments_id' => 1,
                'name' => 'IVA',
                'text_es' => 'Impuesto sobre las ventas',
                'text_en' => 'Impuesto sobre las ventas',
                'text_pt' => 'Impuesto sobre las ventas',
                'tax' => '19.00',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            )
        ));
    }
}
