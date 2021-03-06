<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('agent',function(Blueprint $table)
        {
            $table->string('username');
            $table->string('lokasi');
            $table->string('password',20);
            $table->string('No_Telp',20);

            $table->primary('username');
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
        Schema::drop('agent');
    }
}
