<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPopulasiAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_populasi_asset', function (Blueprint $table) {
            $table->id();
            $table->string('no_asset');
            $table->string('no_itsm');
            $table->string('no_col');
            $table->string('no_pr');
            $table->string('no_po');
            $table->string('jenis_barang');
            $table->string('pengajuan_an');
            $table->string('merk_barang');
            $table->string('tipe_barang');
            $table->string('sn_barang');
            $table->date('tgl_reg_asset');
            $table->string('user');
            $table->string('dept');
            $table->string('lokasi_aktual');
            $table->string('status_asset');
            $table->string('lokasi_site');
            $table->string('ket');
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
        Schema::dropIfExists('tbl_populasi_asset');
    }
}
