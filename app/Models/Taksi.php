<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taksi extends Model
{
    use HasFactory;
    protected $table = 'Taksi';
    protected $fillable = [
        'urut',
        'no_uji',
        'no_kend',
        'pemilik',
        'perusahaan',
        'alamat',
        'rangka',
        'mesin',
        'orang',
        'barang',
        'merk',
        'tahun',
        'jenis_kendaraan',
        'no_sk',
        'tgl_sk',
        'akhir_sk',
        'no_kp',
        'tgl_kp',
        'akhir_kp',
        'terbit',
        'catatan',
        'retri',
        'periode',
        'administrasi',
        'pimpinan',
        'no_bend',
        'ket',
    ];
    protected $primaryKey = 'id';
}
