<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_currencies', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('default_f')->unsigned()->default('0');
            $table->integer('country_id')->unsigned()->default('0');
            $table->string('simbole', 6)->nullable()->default('');
            $table->string('iso', 4)->nullable()->default('');
            $table->string('name', 60)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('pay_currencies', function ($table) {
            $table->foreign('country_id')->references('id')->on('locale_countries');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_currencies');
    }
}
