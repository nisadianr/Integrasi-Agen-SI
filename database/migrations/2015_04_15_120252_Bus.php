<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Bus',function(Blueprint $table){
            $table->string('No_Bus',10);
            $table->string('Jenis',20);
            $table->integer('Jumlah_Kursi');
            $table->boolean('Status');

            $table->primary('No_Bus');
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
        Schema::drop('Bus');
    }
}
