<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('products', function (Blueprint $table) {
         $table->bigInteger('tradde_id')->nullable();
         $table->bigInteger('trade_type');
         $table->bigInteger('duration_id')->nullable();
         $table->double('amount', 8, 2)->nullable();
         $table->date('starting_at')->nullable();
         $table->bigInteger('category_id')->nullable()->change();
         
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
