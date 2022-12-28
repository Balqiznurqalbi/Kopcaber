<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pinjamen', function (Blueprint $table) {
            $table->id();
            $table->string('no_pinjaman',225)->nullable();
            $table->string('kode_pinjam',225)->unique();
            $table->string('tanggal_pinjam',225)->nullable();
            $table->string('jenis_pengajuan',225)->nullable();
            $table->string('jatuh_tempo',225)->nullable();
            $table->string('no_anggota',225)->nullable();
            $table->string('jumlah_angsuran',225)->nullable();
            $table->string('jumlah_dibayar',225)->nullable();
            $table->string('sisa_angsuran',225)->nullable();
            $table->string('sisa_tagihan',225)->nullable();
            $table->string('jumlah_denda',225)->nullable();
            $table->string('total_tagihan',225)->nullable();
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
        Schema::dropIfExists('data_pinjamen');
    }
}
