<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProductBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product_bids', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->string('date_created', 100)->nullable()->default('');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('product_id')->unsigned()->default('0');
            $table->string('price_base', 20)->nullable()->default('');
            $table->string('price_now', 20)->nullable()->default('');
            $table->string('bids', 20)->nullable()->default('');
        });

        Schema::table('user_product_bids', function ($table) {
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
        Schema::dropIfExists('user_product_bids');
    }
}
