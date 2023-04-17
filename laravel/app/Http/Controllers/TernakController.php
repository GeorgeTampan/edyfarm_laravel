<?php

namespace App\Http\Controllers;
use App\Models\Ternak;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    public function create()
    {
        return view('ternak.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'ras' => 'required|min:3|max:50',
            'nama' => 'required|min:3|max:50',
            'umur' => 'required',
            'berat' => 'required',
            'jeniskelamin' => 'required',
            'status' => 'required',
            ]);

            $ternak = new Ternak();
            $ternak->ras = $validateData['ras'];
            $ternak->nama = $validateData['nama'];
            $ternak->umur = $validateData['umur'];
            $ternak->berat = $validateData['berat'];
            $ternak->jeniskelamin = $validateData['jeniskelamin'];
            $ternak->status = $validateData['status'];
            $ternak->save();
            $request->session()->flash('pesan','Penambahan data berhasil');
            return redirect()->route('ternak.index');
    }

    public function index()
    {
        $ternaks = Ternak::all();
        return view('ternak.index',['ternak' => $ternaks]);
    }

    public function edit($ternak_id)
    {
        $result = Ternak::findOrFail($ternak_id);
        return view('ternak.edit',['ternak' => $result]);
    }

    public function update(Request $request, Ternak $ternak)
    {
        $validateData = $request->validate([
            'ras' => 'required|min:3|max:50',
            'nama' => 'required|min:3|max:50',
            'umur' => 'required',
            'berat' => 'required',
            'jeniskelamin' => 'required',
            'status' => 'required',
            ]);

            $ternak->ras = $validateData['ras'];
            $ternak->nama = $validateData['nama'];
            $ternak->umur = $validateData['umur'];
            $ternak->berat = $validateData['berat'];
            $ternak->jeniskelamin = $validateData['jeniskelamin'];
            $ternak->status = $validateData['status'];
            $ternak->save();
            $request->session()->flash('pesan','Perubahan data berhasil');
            return redirect()->route('ternak.index',['ternak' => $ternak->id]);
    }

    public function destroy(Request $request, Ternak $ternak)
    {
        $ternak->delete();
        $request->session()->flash('pesan','Hapus data berhasil');
        return redirect()->route('ternak.index');
    }

}
