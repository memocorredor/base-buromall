<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayErrorCvvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_error_cvvs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->string('icon', 30)->nullable()->default('');
            $table->string('error', 10)->nullable()->default('');
            $table->string('name_es', 150)->nullable()->default('');
            $table->string('name_en', 150)->nullable()->default('');
            $table->string('name_pt', 150)->nullable()->default('');
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
        Schema::dropIfExists('pay_error_cvvs');
    }
}
