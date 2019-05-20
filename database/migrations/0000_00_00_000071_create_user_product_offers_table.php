<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProductOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product_offers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('status')->unsigned()->default('0');
            $table->string('date_created', 100)->nullable()->default('');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('product_id')->unsigned()->default('0');
            $table->string('type', 2)->nullable()->default('');
            $table->string('price_offer', 100)->nullable()->default('');
        });

        Schema::table('user_product_offers', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('user_store_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_product_offers');
    }
}
