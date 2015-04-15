<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trayek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Trayek',function(Blueprint $table)
        {
            $table->string('No_Trayek',10);
            $table->string('Tujuan',20);
            $table->string('Asal',20);
            $table->time('Jam');

            $table->primary('No_Trayek');

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
        Schema::drop('Trayek');
    }
}
