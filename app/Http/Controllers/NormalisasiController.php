<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;

class NormalisasiController extends Controller
{
    public function index(){
        $data_normalisasi = Normalisasi::with('pelamar:id_pelamar,nama')->get();
        return view('normalisasi', compact('data_normalisasi'), ['title' => 'Data Normalisasi']);
    }
}