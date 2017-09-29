<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    protected $table = 'ktp';

    protected $fillable = [
        'nik', 'nama', 'jenis_kelamin', 'tempat_lahir',
        'tanggal_lahir', 'kewarganegaraan', 'gol_darah', 
        'agama', 'status_perkawinan', 'pendidikan', 'pekerjaan',
        'nama_ayah', 'nama_ibu', 'alamat', 'rt', 'rw', 
        'kelurahan', 'status'
    ];
}
