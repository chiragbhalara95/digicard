<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUserConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_configure', function (Blueprint $table) {
            $table->enum('isFeedbackOnWhatsapp', ['1', '2'])->default('2')->comment('1 for Yes,2 for No')->after('isShowfeedback');
            $table->string('whatsappMsg', 255)->comment('Got reference from your Digital vCard. Want to know more about your products and services.')->after('aboutLabel');
            $table->string('defaultCountry', 5)->default('+91')->after('whatsappMsg');
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
            $table->dropColumn(['isFeedbackOnWhatsapp', 'whatsappMsg', 'defaultCountry']);
        });
    }
}
