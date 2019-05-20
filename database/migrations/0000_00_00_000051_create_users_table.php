<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('status_users_id')->unsigned()->default('0');
            $table->integer('plan_id')->unsigned()->default('0');
            $table->integer('user_invite_id')->unsigned()->default('0');
            $table->integer('gender_id')->unsigned()->default('0');
            $table->integer('relationship_id')->unsigned()->default('0');
            $table->string('date_req', 100)->nullable()->default('');
            $table->integer('con_newsletter')->unsigned()->default('0');
            $table->text('image')->nullable();
            $table->text('profile_background')->nullable();
            $table->string('profile_background_position', 10)->nullable()->default('');
            $table->string('name', 70)->nullable()->default('');
            $table->string('lastname', 70)->nullable()->default('');
            $table->string('birthdate', 100)->nullable()->default('');
            $table->text('description_es')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_pr')->nullable();
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('state_id')->unsigned()->default('0');
            $table->integer('city_id')->unsigned()->default('0');
            $table->string('zipcode', 20)->nullable()->default('');
            $table->text('address')->nullable();
            $table->string('email')->unique()->nullable()->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('areacode', 10)->nullable()->default('');
            $table->string('phone', 20)->nullable()->default('');
            $table->string('mobile', 20)->nullable()->default('');
            $table->string('facebook', 150)->nullable()->default('');
            $table->integer('facebook_enable')->unsigned()->default('0');
            $table->text('facebook_id_user')->nullable();
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
            $table->string('username', 20)->nullable()->default('');
            $table->text('password')->nullable();
            $table->rememberToken();
            $table->text('token')->nullable();
            $table->text('req_token')->nullable();
            $table->text('salt')->nullable();
            $table->string('ip_joined', 50)->nullable()->default('');
            $table->string('joined', 100)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('users', function ($table) {
            $table->foreign('status_users_id')->references('id')->on('status_users');
            $table->foreign('plan_id')->references('id')->on('user_plans');
            //$table->foreign('user_invite_id')->references('id')->on('users');
            $table->foreign('gender_id')->references('id')->on('user_genders');
            $table->foreign('relationship_id')->references('id')->on('user_relationships');
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
        Schema::dropIfExists('users');
    }
}
