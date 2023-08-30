<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLabelFieldToUserConfigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_configure', function (Blueprint $table) {
            $table->string('galleryLabel')->default('Gallery')->after('aboutLabel');
            $table->string('enquiryLabel')->default('Inquire Now')->after('galleryLabel');

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
            $table->dropColumn(['galleryLabel', 'enquiryLabel']);
        });
    }
}
