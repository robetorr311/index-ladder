<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tradde_id');
            $table->bigInteger('offer');
            $table->bigInteger('exchange');
            $table->bigInteger('user_id');
            $table->bigInteger('time_exchange');
            $table->bigInteger('time_offer');
            $table->date('starting_at');
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
      Schema::dropIfExists('agreements');
    }
}
