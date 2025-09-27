<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblColOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_col_order_detail', function (Blueprint $table) {
            $table->id();
            $table->string('col_id');
            $table->string('pn_id');
            $table->integer('qty');
            $table->string('ket');
            $table->date('tgl_terima');
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
        Schema::dropIfExists('tbl_col_order_detail');
    }
}
