<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klsusaha extends Model
{
    use HasFactory;
    protected $table = 'Klsusaha';
    protected $fillable = [
        'no_uji',
        'no_kend',
        'pemilik',
        'jbb',
        'orang',
        'x_kelas',
        'n_ret',
        'x_katagori',
        'terbit'
    ];
    protected $primaryKey = 'id';
}
