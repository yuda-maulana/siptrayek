<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    protected $table = 'Target';
    protected $fillable = [
        'kode_rek',
        'nama_rek',
        'target1',
        'target2',
        'target3',
        'tahun'
    ];
    protected $primaryKey = 'id';
    public function bukubesar()
    {
        return $this->hasMany(Bukubesar::class);
    }
}
