<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStoreProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_store_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('store_id')->unsigned()->default('0');
            $table->integer('branch_id')->unsigned()->default('0');
            $table->integer('status_product_id')->unsigned()->default('0');
            $table->integer('departaments_id')->unsigned()->default('0');
            $table->integer('categories_id')->unsigned()->default('0');
            $table->integer('categories_sub_id')->unsigned()->default('0');
            $table->integer('brand_id')->unsigned()->default('0');
            $table->string('no_ref', 100)->nullable()->default('');
            $table->string('no_ean', 100)->nullable()->default('');
            $table->string('url_title_es', 150)->nullable()->default('');
            $table->string('title_es', 60)->nullable()->default('');
            $table->text('text_es')->nullable();
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->string('url_title_en', 150)->nullable()->default('');
            $table->string('title_en', 60)->nullable()->default('');
            $table->text('text_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->string('url_title_pt', 150)->nullable()->default('');
            $table->string('title_pt', 60)->nullable()->default('');
            $table->text('text_pt')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->integer('type_auction_id')->unsigned()->default('0');
            $table->integer('type_transaction_id')->unsigned()->default('0');
            $table->integer('tax_id')->unsigned()->default('0');
            $table->text('p_size')->nullable();
            $table->text('p_color')->nullable();
            $table->string('price_incrise', 20)->nullable()->default('');
            $table->string('price', 20)->nullable()->default('');
            $table->string('descount', 20)->nullable()->default('');
            $table->string('quantity', 20)->nullable()->default('');
            $table->string('price_ini', 20)->nullable()->default('');
            $table->string('price_reserve', 20)->nullable()->default('');
            $table->string('increase_bid', 20)->nullable()->default('');
            $table->string('min_biders', 20)->nullable()->default('');
            $table->integer('private_auction')->unsigned()->default('0');
            $table->integer('buyitnow')->unsigned()->default('0');
            $table->integer('enable_deals')->unsigned()->default('0');
            $table->integer('automatic_re_enter')->unsigned()->default('0');
            $table->integer('type_shipping_id')->unsigned()->default('0');
            $table->string('prod_weight', 20)->nullable()->default('');
            $table->string('prod_long', 20)->nullable()->default('');
            $table->string('prod_width', 20)->nullable()->default('');
            $table->string('prod_high', 20)->nullable()->default('');
            $table->string('insurance', 20)->nullable()->default('');
            $table->string('shipping_price', 30)->nullable()->default('');
            $table->text('shipping_description_es')->nullable();
            $table->text('shipping_description_en')->nullable();
            $table->text('shipping_description_pt')->nullable();
            $table->text('url_web_show')->nullable();
            $table->integer('accept_returns')->unsigned()->default('0');
            $table->text('token')->nullable();
            $table->timestamps();
        });

        Schema::table('user_store_products', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('locale_countries');
            $table->foreign('store_id')->references('id')->on('user_stores');
            $table->foreign('branch_id')->references('id')->on('user_store_branches');
            $table->foreign('status_product_id')->references('id')->on('status_products');
            $table->foreign('brand_id')->references('id')->on('cg_brands');
            $table->foreign('departaments_id')->references('id')->on('cg_departaments');
            $table->foreign('categories_id')->references('id')->on('cg_categories');
            $table->foreign('categories_sub_id')->references('id')->on('cg_sub_categories');
            $table->foreign('type_auction_id')->references('id')->on('type_auctions');
            $table->foreign('type_transaction_id')->references('id')->on('type_transactions');
            $table->foreign('tax_id')->references('id')->on('pay_taxes');
            $table->foreign('type_shipping_id')->references('id')->on('type_shippings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_store_products');
    }
}
