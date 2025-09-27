<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPopulasiUnitProduksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_populasi_unit_produksi', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_unit');
            $table->string('no_lambung');
            $table->string('merk_unit');
            $table->string('vin_unit');
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
        Schema::dropIfExists('tbl_populasi_unit_produksi');
    }
}
