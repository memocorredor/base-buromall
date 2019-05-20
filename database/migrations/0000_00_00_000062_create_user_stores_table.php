<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->string('time_zone', 30)->nullable()->default('');
            $table->string('url_name', 60)->nullable()->default('');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('type_store_id')->unsigned()->default('0');
            $table->text('image')->nullable();
            $table->text('profile_background')->nullable();
            $table->string('profile_background_position', 10)->nullable()->default('');
            $table->string('name', 150)->nullable()->default('');
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->string('email', 100)->default('');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('state_id')->unsigned()->default('0');
            $table->integer('city_id')->unsigned()->default('0');
            $table->string('zipcode', 20)->nullable()->default('');
            $table->text('address')->nullable();
            $table->string('areacode', 20)->nullable()->default('');
            $table->string('phone', 20)->nullable()->default('');
            $table->string('mobile', 20)->nullable()->default('');
            $table->string('porcent_pay', 20)->nullable()->default('');
            $table->string('cent_pay', 20)->nullable()->default('');
            $table->string('no_company', 100)->nullable()->default('');
            $table->string('merchant', 100)->nullable()->default('');
            $table->string('name_bank', 100)->nullable()->default('');
            $table->string('name_acount', 100)->nullable()->default('');
            $table->string('no_acount', 100)->nullable()->default('');
            $table->string('iban', 100)->nullable()->default('');
            $table->string('swift', 100)->nullable()->default('');
            $table->string('facebook', 150)->nullable()->default('');
            $table->integer('facebook_enable')->unsigned()->default('0');
            $table->string('twitter', 150)->nullable()->default('');
            $table->integer('twitter_enable')->unsigned()->default('0');
            $table->string('instagram', 150)->nullable()->default('');
            $table->integer('instagram_enable')->unsigned()->default('0');
            $table->string('pinterest', 150)->nullable()->default('');
            $table->integer('pinterest_enable')->unsigned()->default('0');
            $table->string('youtube', 150)->nullable()->default('');
            $table->integer('youtube_enable')->unsigned()->default('0');
            $table->string('linkedin', 150)->nullable()->default('');
            $table->integer('linkedin_enable')->unsigned()->default('0');
            $table->string('skype', 150)->nullable()->default('');
            $table->integer('skype_enable')->unsigned()->default('0');
            $table->timestamps();
        });

        Schema::table('user_stores', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_store_id')->references('id')->on('type_stores');
            $table->foreign('country_id')->references('id')->on('locale_countries');
            $table->foreign('state_id')->references('id')->on('locale_states');
            $table->foreign('city_id')->references('id')->on('locale_cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_stores');
    }
}
