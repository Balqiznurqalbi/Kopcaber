<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',225)->nullable();
            $table->string('nik',225)->unique();
            $table->string('jk',225)->nullable();
            $table->string('tmp_lahir',225)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('status',30)->nullable();
            $table->string('agama',30)->nullable();
            $table->string('pekerjaan',30)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kota',255)->nullable();
            $table->string('no_telp',13)->nullable();
            $table->date('tgl_daftar')->nullable();
            $table->string('aktif',1)->nullable();
            $table->string('npa',50)->nullable();
            $table->string('file')->nullable();
            $table->string('no_akun',50)->nullable();
            $table->string('bank',50)->nullable();
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
        Schema::dropIfExists('anggotas');
    }
}
