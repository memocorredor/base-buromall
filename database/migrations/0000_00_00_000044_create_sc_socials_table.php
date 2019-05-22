<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sc_socials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('web_id')->unsigned()->default('0');
            $table->integer('country_id')->unsigned()->default('0');
            $table->string('name_color', 50)->nullable()->default('');
            $table->string('title_es', 60)->nullable()->default('');
            $table->text('text_es')->nullable();
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->string('title_en', 60)->nullable()->default('');
            $table->text('text_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->string('title_pt', 60)->nullable()->default('');
            $table->text('text_pt')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->text('url_img')->nullable();
            $table->timestamps();
        });

        Schema::table('sc_socials', function ($table) {
            $table->foreign('web_id')->references('id')->on('web_sites');
            $table->foreign('country_id')->references('id')->on('locale_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sc_socials');
    }
}
