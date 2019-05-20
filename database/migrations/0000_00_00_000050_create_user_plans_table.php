<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('highlight')->unsigned()->default('0');
            $table->string('name_es', 150)->nullable()->default('');
            $table->string('description_es', 150)->nullable()->default('');
            $table->string('name_en', 150)->nullable()->default('');
            $table->string('description_en', 150)->nullable()->default('');
            $table->string('name_pt', 150)->nullable()->default('');
            $table->string('description_pt', 150)->nullable()->default('');
            $table->integer('enable_profile')->unsigned()->default('0');
            $table->string('price', 10)->nullable()->default('');
            $table->string('nu_stores', 10)->nullable()->default('');
            $table->string('nu_branch', 10)->nullable()->default('');
            $table->string('nu_employes', 10)->nullable()->default('');
            $table->string('nu_products', 10)->nullable()->default('');
            $table->string('nu_smedia', 10)->nullable()->default('');
            $table->string('nu_geolocation', 10)->nullable()->default('');
            $table->string('nu_banners', 10)->nullable()->default('');
            $table->string('nu_auction', 10)->nullable()->default('');
            $table->string('nu_days_recu', 2)->nullable()->default('');
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
        Schema::dropIfExists('user_plans');
    }
}
