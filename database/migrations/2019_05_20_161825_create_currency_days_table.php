<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_days', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usd_eur', 60)->nullable()->default('');
            $table->string('usd_usd', 60)->nullable()->default('');
            $table->string('usd_cop', 60)->nullable()->default('');
            $table->string('usd_brl', 60)->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_days');
    }
}
