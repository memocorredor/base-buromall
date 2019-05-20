<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('status')->unsigned()->default('0');
            $table->integer('friend_one')->unsigned()->default('0');
            $table->integer('friend_two')->unsigned()->default('0');
            $table->timestamps();
        });

        Schema::table('user_friends', function ($table) {
            $table->foreign('friend_one')->references('id')->on('users');
            $table->foreign('friend_two')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_friends');
    }
}
