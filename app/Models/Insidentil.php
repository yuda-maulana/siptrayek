<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insidentil extends Model
{
    use HasFactory;
    protected $table = 'Insidentil';
    protected $fillable = [
        'urut',
        'no_uji',
        'no_kend',
        'pemilik',
        'perusahaan',
        'alamat',
        'merk',
        'tahun',
        'habis_uji',
        'terbit',
        'catatan',
        'retri',
        'leges',
        'maksud',
        'tujuan',
        'tgl_awal_perjalanan',
        'tgl_akhir_perjalanan',
        'tanggal',
        'no_bend'
    ];
    protected $primaryKey = 'id';
}
