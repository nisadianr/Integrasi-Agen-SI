<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pemesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Pemesan',function(Blueprint $table){
            $table->string('No_Pesanan',10);
            $table->string('Nama_Pemesan',30);
            $table->string('No_HP',20);
            $table->boolean('Status');
            $table->string('Keterangan',140);

            $table->primary('No_Pesanan');
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
        Schema::drop('Pemesan');
    }
}
