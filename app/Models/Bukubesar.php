<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukubesar extends Model
{
    use HasFactory;
    protected $table = 'Bukubesar';
    protected $fillable = [
        'tahun',
        'kode_rek',
        'nama_rek',
        'tgl_terima',
        'jml_terima',
        'tgl_setor',
        'no_setor',
        'jm_tg_i',
        'jm_tg_l',
        'jm_stg_i',
        'jm_bl_i',
        'jm_bl_l',
        'jm_sbl_i',
        'target_id',
    ];
    protected $primaryKey = 'id';
    public function target()
    {
        return $this->belongsTo(Target::class);
    }
}
