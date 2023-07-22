<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEcommerceFlagToUserConfigure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_configure', function (Blueprint $table) {
            $table->enum('isEcommerceEnable', ['1', '2'])->default('2')->comment('1 for Yes,2 for No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_configure', function (Blueprint $table) {
            $table->dropColumn('isEcommerceEnable');
        });
    }
}
