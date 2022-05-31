<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Pemilik extends Model
{
    use HasFactory;
    protected $table = 'Pemilik';
    protected $fillable = [
        'lintrayek_id',
        'urut',
        'no_uji',
        'no_kend',
        'pemilik',
        'perusahaan',
        'alamat',
        'no_rangka',
        'mesin',
        'seat',
        'barang',
        'merk',
        'tahun',
        'jeniskend_id',
        'hbs_uji',
        'no_sk',
        'tgl_sk',
        'akhir_sk',
        'no_kp',
        'tgl_kp',
        'akhir_kp',
        'terbit',
        'catatan',
        'ret_sk',
        'ret_kp',
        'denda_periode',
        'denda_admin',
        'pimpinan',
        'no_bend',
        'ket',
        'ket1',
    ];
    protected $primaryKey = 'id';

    public function lintrayek()
    {
        return $this->belongsTo(Lintrayek::class);
    }
    public function jeniskend()
    {
        return $this->belongsTo(Jeniskend::class);
    }
}
