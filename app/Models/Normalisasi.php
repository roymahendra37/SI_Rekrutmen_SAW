<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_normalisasi';
    
    protected $fillable = [
        'id_alternatif',
        'id_pelamar',
        'normalisasi_kriteria1',
        'normalisasi_kriteria2',
        'normalisasi_kriteria3',
        'normalisasi_kriteria4',
    ];
    
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }

    public function hasil()
    {
        return $this->hasOne(Hasil::class);
    }
}
