<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserConfigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_configure', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('isShowNoOfVisit', ['1', '2'])->default('2')->comment('1 for Yes,2 for No');
            $table->enum('isShowEnquiry', ['1', '2'])->default('2')->comment('1 for Yes,2 for No');
            $table->enum('isShowfeedback', ['1', '2'])->default('2')->comment('1 for Yes,2 for No');
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
        Schema::dropIfExists('user_configure');
    }
}
