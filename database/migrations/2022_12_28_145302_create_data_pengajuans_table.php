<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pengajuan',225)->nullable();
            $table->string('no_anggota',225)->unique();
            $table->string('nama_anggota',225)->nullable();
            $table->string('jenis_pengajuan',225)->nullable();
            $table->string('nominal',225)->nullable();
            $table->string('lama_angsuran',225)->nullable();
            $table->string('jenis_pengajuan',225)->nullable();
            $table->string('',225)->nullable();
            // $table->date('tgl_lahir')->nullable();
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
        Schema::dropIfExists('data_pengajuans');
    }
}
