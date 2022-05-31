<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;

    protected $table = 'Rekomendasi';
    protected $fillable = [
        'terbit',
        'urut',
        'pemilik',
        'perusahaan',
        'alamat',
        'mohon',
        'layanan',
        'jenis',
        'jumlah',
        'retri',
        'catatan',
        'trayek',
        'sifat',
        'tanggal',
        'no_bend'
    ];
    protected $primaryKey = 'id';
}
