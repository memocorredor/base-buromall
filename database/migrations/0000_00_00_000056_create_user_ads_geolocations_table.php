<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdsGeolocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ads_geolocations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('departaments_id')->unsigned()->default('0');
            $table->integer('categories_id')->unsigned()->default('0');
            $table->integer('categories_sub_id')->unsigned()->default('0');
            $table->string('date_campain_end', 100)->nullable()->default('');
            $table->string('name', 150)->nullable()->default('');
            $table->text('text_es')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_pt')->nullable();
            $table->text('url_destine')->nullable();
            $table->string('latitude', 30)->nullable()->default('');
            $table->string('longitude', 30)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('user_ads_geolocations', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_ads_geolocations');
    }
}
