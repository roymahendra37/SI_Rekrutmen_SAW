<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_alternatif';
    
    protected $fillable = [
        'id_pelamar',
        'alternatif_kriteria1',
        'alternatif_kriteria2',
        'alternatif_kriteria3',
        'alternatif_kriteria4',
    ];
    
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }

    public function normalisasi()
    {   
        return $this->hasOne(Normalisasi::class);
    }
}
