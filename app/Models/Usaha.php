<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;
    protected $table = 'Usaha';
    protected $fillable = [
        'lintasan',
        'urut',
        'no_uji',
        'no_kend',
        'pemilik',
        'alamat',
        'perusahaan',
        'kecamatan',
        'layanan',
        'domisili',
        'status',
        'rangka',
        'mesin',
        'jbb',
        'orang',
        'barang',
        'merk',
        'tahun',
        'jenis',
        'kategori',
        'no_sk',
        'tgl_sk',
        'akh_sk',
        'no_kp',
        'urut_kp',
        'tgl_kp',
        'akh_kp',
        'terbit',
        'retri',
        'per',
        'periode',
        'bulan',
        'adminis',
        'no_bend',
        'no_kartu',
    ];
    protected $primaryKey = 'id';
}
