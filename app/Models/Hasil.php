<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id_hasil';
    
    protected $fillable = [
        'id_normalisasi',
        'id_pelamar',
        'hasil_kriteria1',
        'hasil_kriteria2',
        'hasil_kriteria3',
        'hasil_kriteria4',
        'total'
    ];
    
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }

    public function normalisasi()
    {
        return $this->belongsTo(Normalisasi::class);
    }
}
