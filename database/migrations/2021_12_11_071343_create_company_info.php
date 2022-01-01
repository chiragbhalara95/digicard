<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company_name', 255)->nullable();
            $table->string('company_logo', 255)->nullable();
            $table->string('company_profession', 255)->nullable();
            $table->string('country_code', 10)->nullable();
            $table->string('company_mobile', 20)->nullable();
            $table->string('country_landline', 20)->nullable();
            $table->text('company_info')->nullable();
            $table->text('company_address')->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->string('company_website', 255)->nullable();
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
        Schema::dropIfExists('company_info');
    }
}
