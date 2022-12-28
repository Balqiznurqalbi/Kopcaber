<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama', 'nik', 'jk','tmp_lahir','tgl_lahir','status','agama','pekerjaan','alamat','kota','no_telp','tgl_daftar','aktif','npa',
        'no_akun','bank','email',
    ];
}
