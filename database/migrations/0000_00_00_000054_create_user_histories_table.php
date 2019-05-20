<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_histories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->string('type', 2)->nullable()->default('');
            $table->text('session_id')->nullable();
            $table->integer('user_id')->unsigned()->default('0');
            $table->string('session_name', 100)->nullable()->default('');
            $table->string('session_name_ptocesor', 100)->nullable()->default('');
            $table->string('user_ip', 50)->nullable()->default('');
            $table->integer('action_id')->unsigned()->default('0');
            $table->integer('status_id')->unsigned()->default('0');
            $table->text('status')->nullable();
            $table->timestamps();
        });

        Schema::table('user_histories', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_id')->references('id')->on('user_action_histories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_histories');
    }
}
