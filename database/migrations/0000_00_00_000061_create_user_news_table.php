<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_news', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('departaments_id')->unsigned()->default('0');
            $table->integer('categories_id')->unsigned()->default('0');
            $table->integer('categories_sub_id')->unsigned()->default('0');
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
            $table->text('token')->nullable();
            $table->timestamps();
        });

        Schema::table('user_news', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('departaments_id')->references('id')->on('cg_departaments');
            $table->foreign('categories_id')->references('id')->on('cg_categories');
            $table->foreign('categories_sub_id')->references('id')->on('cg_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_news');
    }
}
