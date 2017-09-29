<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PindahDatang extends Model
{
    protected $table = 'pindah_datang';

    protected $fillable = [
        'no_kk', 'nik', 'nama', 'jenis_kelamin',
        'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan',
        'gol_darah', 'agama', 'status_perkawinan', 'shdk', 
        'pendidikan', 'pekerjaan', 'alamat_lama', 'alamat_sekarang',
        'rt', 'rw', 'kelurahan', 'status'
    ];
}
