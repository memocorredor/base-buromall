<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ac_orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('status_order_id')->unsigned()->default('0');
            $table->integer('type_payment_id')->unsigned()->default('0');
            $table->integer('no_order_id')->unsigned()->default('0');
            $table->integer('no_cart_id')->unsigned()->default('0');
            $table->integer('no_bill_id')->unsigned()->default('0');
            $table->integer('no_request_id')->unsigned()->default('0');
            $table->integer('status_payment_id')->unsigned()->default('0');
            $table->integer('status_refund_id')->unsigned()->default('0');
            $table->integer('status_shipping_id')->unsigned()->default('0');
            $table->string('name', 150)->nullable()->default('');
            $table->string('lastname', 150)->nullable()->default('');
            $table->integer('type_identification_id')->unsigned()->default('0');
            $table->string('identification', 60)->nullable()->default('');
            $table->string('exped_identification', 10)->nullable()->default('');
            $table->string('email', 150)->nullable()->default('');
            $table->string('areacode', 60)->nullable()->default('');
            $table->string('phone', 60)->nullable()->default('');
            $table->string('mobile', 60)->nullable()->default('');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('state_id')->unsigned()->default('0');
            $table->integer('city_id')->unsigned()->default('0');
            $table->text('address')->nullable();
            $table->string('zipcode', 60)->nullable()->default('');
            $table->string('latitude', 100)->nullable()->default('');
            $table->string('longitude', 100)->nullable()->default('');
            $table->string('name_credit', 100)->nullable()->default('');
            $table->string('number_credit', 60)->nullable()->default('');
            $table->string('cvv_credit', 10)->nullable()->default('');
            $table->string('exp_credit', 10)->nullable()->default('');
            $table->string('nu_autorization', 100)->nullable()->default('');
            $table->string('nu_recibo', 100)->nullable()->default('');
            $table->integer('pay_errors_id')->unsigned()->default('0');
            $table->integer('pay_errors_avs_id')->unsigned()->default('0');
            $table->integer('pay_errors_cvv_id')->unsigned()->default('0');
            $table->string('currency', 10)->nullable()->default('');
            $table->string('trm', 60)->nullable()->default('');
            $table->string('wallet_saldo_debit', 100)->nullable()->default('');
            $table->string('wallet_saldo_credit', 100)->nullable()->default('');
            $table->string('wallet_total', 100)->nullable()->default('');
            $table->string('cart_stotal', 100)->nullable()->default('');
            $table->string('cart_tax', 100)->nullable()->default('');
            $table->string('cart_shipping', 100)->nullable()->default('');
            $table->string('cart_total', 100)->nullable()->default('');
            $table->text('info_user')->nullable();
            $table->text('tx_payment')->nullable();
            $table->text('token');
            $table->timestamps();
        });

        Schema::table('ac_orders', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_order_id')->references('id')->on('status_orders');
            $table->foreign('type_payment_id')->references('id')->on('type_payments');
            $table->foreign('no_order_id')->references('id')->on('ac_no_orders');
            $table->foreign('no_bill_id')->references('id')->on('ac_no_bills');
            $table->foreign('no_request_id')->references('id')->on('ac_no_requests');
            $table->foreign('status_payment_id')->references('id')->on('status_payments');
            $table->foreign('status_refund_id')->references('id')->on('status_refunds');
            $table->foreign('status_shipping_id')->references('id')->on('status_shippings');
            $table->foreign('type_identification_id')->references('id')->on('type_identifications');
            $table->foreign('country_id')->references('id')->on('locale_countries');
            $table->foreign('state_id')->references('id')->on('locale_states');
            $table->foreign('city_id')->references('id')->on('locale_cities');
            $table->foreign('pay_errors_id')->references('id')->on('pay_errors');
            $table->foreign('pay_errors_avs_id')->references('id')->on('pay_error_avs');
            $table->foreign('pay_errors_cvv_id')->references('id')->on('pay_error_cvvs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ac_orders');
    }
}
