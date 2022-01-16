<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('head_image', 255)->nullable();
            $table->string('mul_image', 255)->nullable();
            $table->string('links', 255)->nullable();
            $table->string('doc_url', 255)->nullable();
            $table->float('mrp_price', 8, 2);
            $table->float('special_price', 8, 2);
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
        Schema::dropIfExists('gallery');
    }
}
