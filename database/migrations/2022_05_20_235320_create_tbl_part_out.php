<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPartOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_part_out', function (Blueprint $table) {
            $table->id();
            $table->string('nama_part');
            $table->string('kode_part');
            $table->string('kategori_part');
            $table->integer('qty_out');
            $table->string('no_lambung');
            $table->string('no_asset');
            $table->string('pic_kerusakan');
            $table->string('ket_kerusakan');
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
        Schema::dropIfExists('tbl_part_out');
    }
}
