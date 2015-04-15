<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoKursiMemesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('NoKursi_Memesan',function(Blueprint $table){
            $table->string('No_Bus',10);
            $table->string('No_Trayek',10);
            $table->string('No_Pesanan',10);
            $table->integer('No_Kursi',2);

            $table->foreign('No_Trayek')->references('No_Trayek')->on('Trayek');
            $table->foreign('No_Bus')->references('No_Bus')->on('Bus');
            $table->foreign('No_Pesanan')->references('No_Pesanan')->on('Pemesan');
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
        Schema::drop('NoKursi_Memesan');
    }
}
