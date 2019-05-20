<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcRechargeCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_recharge_cards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_create_id')->unsigned()->default('0');
            $table->string('number', 150)->nullable()->default('');
            $table->string('date_recarge', 100)->nullable()->default('');
            $table->integer('store_id')->unsigned()->default('0');
            $table->integer('branch_id')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->string('email_send', 150)->nullable()->default('');
            $table->string('value_card', 6)->nullable()->default('');
            $table->integer('ac_order_id')->unsigned()->default('0');
            $table->text('token')->nullable();
            $table->timestamps();
        });

        Schema::table('ac_recharge_cards', function ($table) {
            $table->foreign('user_create_id')->references('id')->on('users');
            $table->foreign('store_id')->references('id')->on('user_stores');
            $table->foreign('branch_id')->references('id')->on('user_store_branches');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ac_order_id')->references('id')->on('ac_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_recharge_cards');
    }
}
