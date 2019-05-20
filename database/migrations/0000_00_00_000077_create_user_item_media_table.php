<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserItemMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_item_media', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('product_id')->unsigned()->default('0');
            $table->integer('cupon_id')->unsigned()->default('0');
            $table->integer('event_id')->unsigned()->default('0');
            $table->integer('classified_id')->unsigned()->default('0');
            $table->integer('news_id')->unsigned()->default('0');
            $table->integer('post_id')->unsigned()->default('0');
            $table->string('order', 10)->nullable()->default('');
            $table->integer('iframe')->unsigned()->default('0');
            $table->text('url')->nullable();
            $table->string('alt_img', 150)->nullable()->default('');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::table('user_item_media', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('product_id')->references('id')->on('user_store_products');
            // $table->foreign('cupon_id')->references('id')->on('user_store_cupons');
            // $table->foreign('event_id')->references('id')->on('user_store_events');
            // $table->foreign('classified_id')->references('id')->on('user_classifieds');
            // $table->foreign('news_id')->references('id')->on('user_news');
            // $table->foreign('post_id')->references('id')->on('user_walls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_item_media');
    }
}
