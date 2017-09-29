<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PindahKeluar extends Model
{
    protected $table = 'pindah_keluar';

    protected $fillable = [
        'no_kk', 'nik', 'nama', 'jenis_kelamin',
        'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan',
        'gol_darah', 'agama', 'status_perkawinan', 'shdk', 
        'pendidikan', 'pekerjaan', 'alamat_tujuan',
        'alamat_sekarang', 'rt', 'rw', 'kelurahan', 'status'
    ];
}
