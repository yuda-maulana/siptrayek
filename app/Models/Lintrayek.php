<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lintrayek extends Model
{
    use HasFactory;
    protected $table = 'Lintrayek';
    protected $fillable = [
        'kode',
        'lintasan',
        'alokasi',
        'realisasi',
        'aktif',
        'nonaktif',
        'rute',
        'jenis'
    ];
    protected $primaryKey = 'id';

    public function pemilik()
    {
        return $this->hasMany(Pemilik::class);
    }
}
