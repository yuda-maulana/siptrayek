<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'Level';
    protected $fillable = [
        'role'
    ];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
