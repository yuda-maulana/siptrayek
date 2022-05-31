<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prinsip extends Model
{
    use HasFactory;
    protected $table = 'Prinsip';
    protected $fillable = [
        'tanggal',
        'terbit',
        'urut',
        'no_rekom',
        'tgl_rekom',
        'pemilik',
        'perusahaan',
        'alamat',
        'mohon',
        'jenis',
        'retri',
        'catatan',
        'trayek',
        'merk',
        'tahun',
        'orang',
        'no_mohon',
        'tgl_mohon',
        'no_bend'
    ];
    protected $primaryKey = 'id';
}
