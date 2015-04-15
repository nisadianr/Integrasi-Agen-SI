<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrayekViaKota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Trayek_ViaKota',function(Blueprint $table){
            $table->string('No_Trayek',10);
            $table->string('Kota',20);

            $table->foreign('No_Trayek')->references('No_Trayek')->on('Trayek');
            $table->primary('Kota');
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
        Schema::drop('Trayek_ViaKota');
    }
}
