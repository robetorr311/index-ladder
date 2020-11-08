<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ident_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('name');
            $table->string('type');
            $table->string('size');
            $table->bigInteger('user_id');
            $table->string('ident_type');
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
        Schema::dropIfExists('ident_images');
    }
}
