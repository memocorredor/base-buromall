<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_taxes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('default_f')->unsigned()->default('0');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('departaments_id')->unsigned()->default('0');
            $table->integer('categories_id')->unsigned()->default('0');
            $table->integer('categories_sub_id')->unsigned()->default('0');
            $table->string('name', 100)->nullable()->default('');
            $table->string('text_es', 150)->nullable()->default('');
            $table->string('text_en', 150)->nullable()->default('');
            $table->string('text_pt', 150)->nullable()->default('');
            $table->string('tax', 6)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('pay_taxes', function ($table) {
            $table->foreign('country_id')->references('id')->on('locale_countries');
            $table->foreign('departaments_id')->references('id')->on('cg_departaments');
            $table->foreign('categories_id')->references('id')->on('cg_categories');
            $table->foreign('categories_sub_id')->references('id')->on('cg_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_taxes');
    }
}
