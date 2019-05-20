<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->default('0');
            $table->string('date_created', 100)->nullable()->default('');
            $table->text('description')->nullable();
            $table->integer('ac_order_id')->unsigned()->default('0');
            $table->integer('card_id')->unsigned()->default('0');
            $table->string('recarge', 100)->nullable()->default('');
            $table->string('transfer', 100)->nullable()->default('');
            $table->string('buy', 100)->nullable()->default('');
            $table->string('sold', 100)->nullable()->default('');
            $table->string('debit', 100)->nullable()->default('');
            $table->string('saldo_debit', 100)->nullable()->default('');
            $table->string('saldo_credit', 100)->nullable()->default('');
            $table->string('total', 100)->nullable()->default('');
            $table->text('token');
            $table->timestamps();
        });

        Schema::table('user_wallets', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ac_order_id')->references('id')->on('ac_orders');
            $table->foreign('card_id')->references('id')->on('ac_recharge_cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_wallets');
    }
}
