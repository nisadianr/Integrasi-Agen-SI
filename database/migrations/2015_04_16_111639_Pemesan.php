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
        Schema::create('Penumpang',function(Blueprint $table){
            $table->string('No_Pesanan',10);
            $table->string('Nama_Pemesan',30);
            $table->string('No_HP',20);
            $table->boolean('Status');
            $table->string('Keterangan',140);
            $table->integer('No_Kursi');
            $table->string('Tujuan'10);
            $table->string('No_Trayek',10);
            $table->string('No_Bus',10);

            $table->primary('No_Pesanan');
            $table->foreign('No_Trayek')->reference('No_Trayek')->on('Trayek');
            $table->foreign('No_Bus')->reference('No_Bus')->on('Bus');
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
        Schema::drop('Penumpang');
    }
}
