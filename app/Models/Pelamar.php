<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelamar';

    protected $fillable = [
        'nama',
        'usia',
        'pendidikan',
        'nilai_tes',
        'pengalaman',
    ];

    public function alternatif()
    {   
        return $this->hasOne(Alternatif::class, 'id_pelamar');
    }

    public function normalisasi()
    {   
        return $this->hasOne(Normalisasi::class, 'id_pelamar');
    }

    public function hasil()
    {   
        return $this->hasOne(Hasil::class, 'id_pelamar');
    }
}
