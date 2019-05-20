<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserItemCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_item_comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->text('data_user')->nullable();
            $table->integer('store_id')->unsigned()->default('0');
            $table->integer('branch_id')->unsigned()->default('0');
            $table->integer('product_id')->unsigned()->default('0');
            $table->integer('cupon_id')->unsigned()->default('0');
            $table->integer('event_id')->unsigned()->default('0');
            $table->integer('classified_id')->unsigned()->default('0');
            $table->integer('news_id')->unsigned()->default('0');
            $table->integer('post_id')->unsigned()->default('0');
            $table->integer('movie_id')->unsigned()->default('0');
            $table->integer('carrier_id')->unsigned()->default('0');
            $table->integer('comment_id')->unsigned()->default('0');
            $table->integer('comment_user_id')->unsigned()->default('0');
            $table->integer('calification')->unsigned()->default('0');
            $table->integer('like')->unsigned()->default('0');
            $table->integer('share')->unsigned()->default('0');
            $table->string('website', 140)->nullable()->default('');
            $table->string('name', 150)->nullable()->default('');
            $table->string('email', 150)->nullable()->default('');
            $table->text('comment')->nullable();
            $table->integer('link_web')->unsigned()->default('0');
            $table->timestamps();
        });

        Schema::table('user_item_comments', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('store_id')->references('id')->on('user_stores');
            // $table->foreign('branch_id')->references('id')->on('user_store_branches');
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
        Schema::dropIfExists('user_item_comments');
    }
}
