<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        $data_pelamar = Pelamar::all();
        return view('pelamar', compact('data_pelamar'), ['title' => 'Data Pelamar']);
    }

    public function dashboard()
    {
        $total = Pelamar::count('id_pelamar');
        return view('dashboard', compact('total'), ['title' => 'Dashboard']);
    }

    public function create()
    {
        return view('pelamar-entry', ['title' => 'Data Pelamar']);
    }

    public function store(Request $request)
    {
        Pelamar::create($request->all());
        return redirect()->route('pelamar.index');
    }

    public function edit(string $id)
    {
        $data = Pelamar::where('id_pelamar', $id)->firstOrFail();
        return view('pelamar-edit', compact('data'), ['title' => 'Data Pelamar']);
    }

    public function update(Request $request, string $id)
    {
        $pelamar = Pelamar::where('id_pelamar', $id)->firstOrFail();
        $pelamar->update($request->all());

        return redirect()->route('pelamar.index');
    }

    public function destroy(string $id)
    {
        $pelamar = Pelamar::findOrFail($id);
        $pelamar->delete();
        return redirect()->route('pelamar.index');
    }

    public function cetakPdf(){
        $mpdf = new \Mpdf\Mpdf();
        $data_pelamar = Pelamar::get();
        $mpdf->WriteHTML(view('cetak.cetak-pelamar', compact('data_pelamar')));
        // $mpdf->Output();
        $mpdf->Output('data-pelamar.pdf','D');

    }
}
