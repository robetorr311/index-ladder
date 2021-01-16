<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToQualifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qualifies', function (Blueprint $table) {
           $table->bigInteger('fairness');
           $table->bigInteger('description');
           $table->bigInteger('value');
           $table->bigInteger('satisfied');
           $table->bigInteger('honesty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qualifies', function (Blueprint $table) {
            //
        });
    }
}
