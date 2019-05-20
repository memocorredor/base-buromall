<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_invitations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('status')->unsigned()->default('0');
            $table->string('date_acept', 100)->nullable()->default('');
            $table->integer('user_invite_id')->unsigned()->default('0');
            $table->string('name', 70)->nullable()->default('');
            $table->string('lastname', 70)->nullable()->default('');
            $table->string('email', 140)->nullable()->default('');
            $table->text('token')->nullable();
            $table->timestamps();
        });

        Schema::table('user_invitations', function ($table) {
            $table->foreign('user_invite_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_invitations');
    }
}
