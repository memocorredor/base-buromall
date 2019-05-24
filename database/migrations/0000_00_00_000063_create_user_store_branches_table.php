<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStoreBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_store_branches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id')->unsigned();
            $table->integer('enable')->unsigned()->default('0');
            $table->integer('user_id')->unsigned()->default('0');
            $table->integer('store_id')->unsigned()->default('0');
            $table->string('name', 60)->nullable()->default('');
            $table->text('description_es')->nullable();
            $table->text('keywords_es')->nullable();
            $table->text('description_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('keywords_pt')->nullable();
            $table->string('email', 100)->nullable()->default('');
            $table->string('zipcode', 20)->nullable()->default('');
            $table->integer('country_id')->unsigned()->default('0');
            $table->integer('state_id')->unsigned()->default('0');
            $table->integer('city_id')->unsigned()->default('0');
            $table->text('address')->nullable();
            $table->string('areacode', 20)->nullable()->default('');
            $table->string('phone', 20)->nullable()->default('');
            $table->string('mobile', 20)->nullable()->default('');
            $table->string('latitude', 30)->nullable()->default('');
            $table->string('longitude', 30)->nullable()->default('');
            $table->string('lun_a', 20)->nullable()->default('');
            $table->string('lun_c', 20)->nullable()->default('');
            $table->string('mar_a', 20)->nullable()->default('');
            $table->string('mar_c', 20)->nullable()->default('');
            $table->string('mier_a', 20)->nullable()->default('');
            $table->string('mier_c', 20)->nullable()->default('');
            $table->string('jue_a', 20)->nullable()->default('');
            $table->string('jue_c', 20)->nullable()->default('');
            $table->string('vier_a', 20)->nullable()->default('');
            $table->string('vier_c', 20)->nullable()->default('');
            $table->string('sab_a', 20)->nullable()->default('');
            $table->string('sab_c', 20)->nullable()->default('');
            $table->string('dom_a', 20)->nullable()->default('');
            $table->string('dom_c', 20)->nullable()->default('');
            $table->timestamps();
        });

        Schema::table('user_store_branches', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('store_id')->references('id')->on('user_stores');
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
        Schema::dropIfExists('user_store_branches');
    }
}
