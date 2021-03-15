<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkuPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku_package', function (Blueprint $table) {
            $table->increments('sku_package_id');
            $table->smallInteger('product_id');
            $table->smallInteger('package_type_id');
            $table->smallInteger('package_duration_id');
            $table->decimal('price', 8, 2);
            $table->decimal('special_price', 8, 2);
            $table->decimal('price_usd', 8, 2);
            $table->decimal('special_price_usd', 8, 2);
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
        Schema::dropIfExists('sku_package');
    }
}
