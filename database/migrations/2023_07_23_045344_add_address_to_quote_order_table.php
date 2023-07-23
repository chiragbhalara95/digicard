<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToQuoteOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quote_order', function (Blueprint $table) {
            $table->string('city', 30);
            $table->string('state', 30);
            $table->string('zipCode', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quote_order', function (Blueprint $table) {
            $table->dropColumn(['city', 'state', 'zipCode']);
        });
    }
}
