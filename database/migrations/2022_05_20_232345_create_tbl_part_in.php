<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPartIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_part_in', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_part');
            
            $table->string('nama_part');
            $table->integer('qty_in');
            $table->integer('pr');
            $table->integer('po');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_part_in');
    }
}
