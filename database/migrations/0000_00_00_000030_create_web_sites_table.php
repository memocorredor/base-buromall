<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_sites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->text('image')->nullable();
            $table->string('title_es', 70)->nullable()->default('');
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->string('title_en', 70)->nullable()->default('');
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->string('title_pt', 70)->nullable()->default('');
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->string('email', 100)->nullable()->default('');
            $table->string('zipcode', 20)->nullable()->default('');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('state_id')->unsigned()->default('0');
            $table->integer('city_id')->unsigned()->default('0');
            $table->text('address')->nullable();
            $table->string('areacode', 20)->nullable()->default('');
            $table->string('phone', 20)->nullable()->default('');
            $table->string('mobile', 20)->nullable()->default('');
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
            $table->string('android', 150)->nullable()->default('');
            $table->integer('android_enable')->unsigned()->default('0');
            $table->string('itunes', 150)->nullable()->default('');
            $table->integer('itunes_enable')->unsigned()->default('0');
            $table->string('windows', 150)->nullable()->default('');
            $table->integer('windows_enable')->unsigned()->default('0');
            $table->string('author', 150)->nullable()->default('');
            $table->string('copyright', 150)->nullable()->default('');
            $table->string('time_zone', 30)->nullable()->default('');
            $table->string('google_analitic', 40)->nullable()->default('');
            $table->string('name_page', 140)->nullable()->default('');
            $table->string('url_web', 100)->nullable()->default('');
            $table->string('no_ruc', 100)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('web_sites', function ($table) {
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
        Schema::dropIfExists('web_sites');
    }
}
