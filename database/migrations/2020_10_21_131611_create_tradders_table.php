<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->double('amount', 8, 2);
            $table->string('payment_id');
            $table->string('status');
            $table->string('description');                                    
            $table->bigInteger('tradde_id');
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
        Schema::dropIfExists('tradders');
    }
}
