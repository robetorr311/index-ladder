<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraddesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traddes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('buy_id')->nullable();
            $table->bigInteger('sell_id');
            $table->bigInteger('product_id');
            $table->double('amount', 8, 2);
            $table->bigInteger('status');
            $table->string('item_description');
            $table->string('tradde_number')->nullable();
            $table->string('title');
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
        Schema::dropIfExists('traddes');
    }
}
