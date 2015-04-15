<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perjalanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Perjalanan',function (Blueprint $table){

            $table->string('No_Trayek', 10);
            $table->string('No_Bus',10);
            $table->integer('Harga');

            $table->foreign('No_Trayek')->references('No_Trayek')->on('Trayek');
            $table->foreign('No_Bus')->references('No_Bus')->on('Bus');

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
        Schema::drop('Perjalanan');
    }
}
