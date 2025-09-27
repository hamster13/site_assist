<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHistoryRig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_history_rig', function (Blueprint $table) {
            $table->id();
            $table->integer('jenis_unit');
            $table->string('no_lambung');
            $table->date('tgl_action');
            $table->string('no_asset');
            $table->longtext('ket');
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
        Schema::dropIfExists('tbl_history_rig');
    }
}
