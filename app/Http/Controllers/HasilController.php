<?php

namespace App\Http\Controllers;

use App\Models\Hasil;

class HasilController extends Controller
{
    public function index(){
        $data_hasil = Hasil::with('pelamar:id_pelamar,nama')->orderBy('total', 'desc')->get();
        return view('hasil', compact('data_hasil'), ['title' => 'Data Hasil']);
    }

    public function cetakPdf(){
        $mpdf = new \Mpdf\Mpdf();
        $data_hasil = Hasil::with('pelamar:id_pelamar,nama')->orderBy('total', 'desc')->get();
        $mpdf->WriteHTML(view('cetak.cetak-hasil', compact('data_hasil')));
        // $mpdf->Output();
        $mpdf->Output('hasil-rekrutmen-karyawan.pdf','D');

    }
}
