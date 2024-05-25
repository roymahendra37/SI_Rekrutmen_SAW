<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'keterangan',
        'bobot',
    ];
}
