<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_master', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('type', 20)->comment('paytm/googlepay/phonepay/bank');
            $table->string('account_no', 20);
            $table->string('bank_name', 100)->nullable();
            $table->string('ifsc_code', 100)->nullable();
            $table->string('account_holder_name', 100)->nullable();
            $table->string('account_type', 100)->nullable()->comment('saving/current');
            $table->string('qr_img', 255)->nullable();
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
        Schema::dropIfExists('payment_master');
    }
}
