<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $data_kriteria = Kriteria::all();
        return view('kriteria', compact('data_kriteria'), ['title' => 'Data Kriteria']);
    }

    public function edit(string $id)
    {
        $data = Kriteria::where('id_kriteria', $id)->firstorfail();
        return view('kriteria-edit',compact('data'), ['title' => 'Data Kriteria']);
    }

    public function update(Request $request, string $id)
    {
        $kriteria = Kriteria::where('id_kriteria', $id)->firstOrFail();
        $kriteria->update($request->all());

        return redirect()->route('kriteria.index');
    }

}
