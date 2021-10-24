<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_theme', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('product_id');
            $table->string('name', 255);
            $table->string('blade_file', 255);
            $table->string('image', 255);
            $table->enum('status', ['1', '2'])->default('1')->comment('1 for active, 2 for deactive');
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
        Schema::dropIfExists('table_theme');
    }
}
