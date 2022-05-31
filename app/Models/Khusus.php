<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khusus extends Model
{
    use HasFactory;
    protected $table = 'Khusus';
    protected $fillable = [
        'urut',
        'no_uji',
        'no_kend',
        'pemilik',
        'perusahaan',
        'alamat',
        'rangka',
        'mesin',
        'merk',
        'tahun',
        'jenis',
        'layanan',
        'dy_akt',
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
        'keperluan',
        'no_bend',
    ];
    protected $primaryKey = 'id';
}
