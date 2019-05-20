<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sc_faqs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->string('icon', 30)->nullable()->default('');
            $table->integer('categories_faq_id')->unsigned()->default('0');
            $table->string('title_es', 150)->nullable()->default('');
            $table->text('text_es')->nullable();
            $table->string('title_en', 150)->nullable()->default('');
            $table->text('text_en')->nullable();
            $table->string('title_pt', 150)->nullable()->default('');
            $table->text('text_pt')->nullable();
            $table->timestamps();
        });

        Schema::table('sc_faqs', function ($table) {
            $table->foreign('categories_faq_id')->references('id')->on('sc_categorie_faqs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sc_faqs');
    }
}
