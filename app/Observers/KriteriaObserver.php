<?php

namespace App\Observers;

use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Models\Hasil;

class KriteriaObserver
{
    public function updated(Kriteria $kriteria){
        // dd('Method updated in KriteriaObserver is called.');
        $normalisasiList = Normalisasi::all();

        $id_k1 = 1;
        $id_k2 = 2;
        $id_k3 = 3;
        $id_k4 = 4;
        $bobotk1 = Kriteria::where('id_kriteria', $id_k1)->value('bobot');
        $bobotk2 = Kriteria::where('id_kriteria', $id_k2)->value('bobot');
        $bobotk3 = Kriteria::where('id_kriteria', $id_k3)->value('bobot');
        $bobotk4 = Kriteria::where('id_kriteria', $id_k4)->value('bobot');

        foreach ($normalisasiList as $normalisasi) {
            $hasil = Hasil::where('id_normalisasi', $normalisasi->id_normalisasi)->first();
            if ($hasil) {
                $hasil->update([
                    'hasil_kriteria1' => $normalisasi->normalisasi_kriteria1 * $bobotk1,
                    'hasil_kriteria2' => $normalisasi->normalisasi_kriteria2 * $bobotk2,
                    'hasil_kriteria3' => $normalisasi->normalisasi_kriteria3 * $bobotk3,
                    'hasil_kriteria4' => $normalisasi->normalisasi_kriteria4 * $bobotk4,
                    'total' => ($normalisasi->normalisasi_kriteria1 * $bobotk1) + 
                                ($normalisasi->normalisasi_kriteria2 * $bobotk2) + 
                                ($normalisasi->normalisasi_kriteria3 * $bobotk3) + 
                                ($normalisasi->normalisasi_kriteria4 * $bobotk4)
                ]);
            }
        }
    }
        
}