<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengajuan extends Model
{
    use HasFactory;

    protected $table = 'data_pengajuans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_pengajuan', 'no_anggota', 'nama_anggota', 'jenis_pengajuan', 'nominal',
        'lama_angsuran', 'keterangan'
    ];
}
