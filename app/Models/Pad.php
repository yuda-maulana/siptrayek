<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pad extends Model
{
    use HasFactory;
    protected $table = 'Pad';
    protected $fillable = [
        'kod_rek',
        'no_rek',
        'nama_rek',
        'tanggal',
        'no_bukti',
        'grup',
        'n_grup',
        'n_sub',
        'urut',
        'uraian',
        'unit',
        'retribusi',
        'jumlah',
    ];
    protected $primaryKey = 'id';
}
