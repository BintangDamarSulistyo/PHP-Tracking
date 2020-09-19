<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('no_dokumen');
            $table->string('dari');
            $table->string('ke');
            $table->text('perihal');
            $table->integer('nominal');
            $table->date('tanggal');
            $table->string('no_surat');
            $table->string('verifikasi');
            $table->text('keterangan');
            $table->string('kelengkapan');
            $table->string('persetujuan_asman');
            $table->string('persetujuan_man');
            $table->string('status_pembayaran');
            $table->string('jenis_pembayaran');
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
        Schema::dropIfExists('tracking');
    }
}
