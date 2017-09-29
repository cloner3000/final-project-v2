<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table = 'kartu_keluarga';

    protected $fillable = [
        'no_kk', 'nik', 'nama', 'jenis_kelamin',
        'alamat', 'rt', 'rw', 'kelurahan', 'jumlah_pengikut',
        'status'
    ];
}
