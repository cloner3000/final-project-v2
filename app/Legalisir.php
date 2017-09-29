<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legalisir extends Model
{
    protected $table = 'legalisir';

    protected $fillable = ['nik', 'nama', 'alamat', 'rt', 'rw', 'kelurahan', 'status'];
}
