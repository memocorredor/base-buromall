<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCgDepartamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_departaments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->string('icon', 30)->nullable()->default('');
            $table->string('url_name_es', 60)->nullable()->default('');
            $table->string('name_es', 60)->nullable()->default('');
            $table->string('title_es', 60)->nullable()->default('');
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->string('url_name_en', 60)->nullable()->default('');
            $table->string('name_en', 60)->nullable()->default('');
            $table->string('title_en', 60)->nullable()->default('');
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->string('url_name_pt', 60)->nullable()->default('');
            $table->string('name_pt', 60)->nullable()->default('');
            $table->string('title_pt', 60)->nullable()->default('');
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->text('url_img')->nullable();
            $table->string('color', 60)->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cg_departaments');
    }
}
