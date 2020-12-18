<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTraddesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('traddes', function (Blueprint $table) {
         $table->renameColumn('sell_id', 'host_user_id');
         $table->renameColumn('buy_id', 'target_user_id');
         $table->bigInteger('offer_id');
         $table->bigInteger('exchange_id')->nullable();
         $table->dropColumn('amount');
         $table->dropColumn('item_description');
         $table->dropColumn('title');
         $table->dropColumn('product_id');
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
