<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBroucherColumnToCompanyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_info', function (Blueprint $table) {
            $table->string('broucher_file')->nullable()->after('company_website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_info', function (Blueprint $table) {
            $table->dropColumn('broucher_file');
        });
    }
}
