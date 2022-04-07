<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    public $fillable = [
        'id_pegawai',
        'nama',
        'jenis_kelamin',
        'no_hp',
        'alamat'
    ];
}
