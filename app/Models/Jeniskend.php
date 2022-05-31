<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeniskend extends Model
{
    use HasFactory;
    protected $table = 'Jeniskend';
    protected $fillable = [
        'jnskend'
    ];
    protected $primaryKey = 'id';

    public function pemilik()
    {
        return $this->hasMany(Pemilik::class);
    }
}
