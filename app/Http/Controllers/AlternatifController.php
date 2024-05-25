<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index(){
        $max_k1 = Alternatif::max('alternatif_kriteria1');
        $max_k2 = Alternatif::max('alternatif_kriteria2');
        $max_k3 = Alternatif::max('alternatif_kriteria3');
        $min_k4 = Alternatif::min('alternatif_kriteria4');

        $data_alternatif = Alternatif::with('pelamar:id_pelamar,nama')->get();
        return view('alternatif', compact('data_alternatif'), ['title' => 'Data Alternatif'])
        ->with(['max_k1' => $max_k1, 'max_k2' => $max_k2, 'max_k3' => $max_k3, 'min_k4' => $min_k4]);
    }
}
