<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contacts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('store_id')->unsigned()->default('0');
            $table->string('date_read', 60)->nullable()->default('');
            $table->string('statuses', 11)->nullable()->default('');
            $table->string('name', 60)->nullable()->default('');
            $table->string('lastname', 60)->nullable()->default('');
            $table->string('email', 100)->nullable()->default('');
            $table->string('areacode', 60)->nullable()->default('');
            $table->string('phone', 60)->nullable()->default('');
            $table->string('subject', 60)->nullable()->default('');
            $table->text('message')->nullable();
            $table->text('token')->nullable();
            $table->timestamps();
        });

        Schema::table('user_contacts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('store_id')->references('id')->on('user_stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_contacts');
    }
}
