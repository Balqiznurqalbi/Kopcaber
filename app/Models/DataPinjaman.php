<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPinjaman extends Model
{
    use HasFactory;

    protected $table = 'data_pengajuans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'no_pinjaman', 'kode_pinjam', 'tanggal_pinjam', 'jenis_pengajuan', 'jatuh tempo',
        'no_anggota', 'nama_anggota', 'jumlah_angsuran', 'jumlah_dibayar', 'sisa_angsuran',
        'sisa_tagihan', 'jumlah_denda', 'total_tagihan'
    ];
}
