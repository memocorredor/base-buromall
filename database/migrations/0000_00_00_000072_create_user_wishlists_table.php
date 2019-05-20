<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wishlists', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('status')->unsigned()->default('0');
            $table->string('date_created', 100)->nullable()->default('');
            $table->integer('user_id')->unsigned()->default('0');
            $table->string('type', 2)->nullable()->default('');
            $table->integer('product_id')->unsigned()->default('0');
            $table->integer('cupon_id')->unsigned()->default('0');
            $table->integer('event_id')->unsigned()->default('0');
            $table->integer('classified_id')->unsigned()->default('0');
            $table->integer('news_id')->unsigned()->default('0');
        });

        Schema::table('user_wishlists', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('user_store_products');
            $table->foreign('cupon_id')->references('id')->on('user_store_cupons');
            $table->foreign('event_id')->references('id')->on('user_store_events');
            $table->foreign('classified_id')->references('id')->on('user_classifieds');
            $table->foreign('news_id')->references('id')->on('user_news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wishlists');
    }
}
