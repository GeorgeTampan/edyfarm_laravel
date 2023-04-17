<?php

namespace App\Http\Controllers;
use App\Models\Hutang;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    public function create()
    {
        return view('hutang.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'tanggal' => 'required',           
            'total' => 'required',
            'kurang' => 'required',
            ]);

            $hutang = new Hutang();
            $hutang->nama = $validateData['nama'];
            $hutang->tanggal = $validateData['tanggal'];
            $hutang->total = $validateData['total'];
            $hutang->kurang = $validateData['kurang'];
            $hutang->save();
            $request->session()->flash('pesan','Penambahan data berhasil');
            return redirect()->route('hutang.index');
    }

    public function index()
    {
        $hutangs = Hutang::all();
        return view('hutang.index',['hutang' => $hutangs]);
    }

    public function destroy(Request $request, Hutang $hutang)
    {
        $hutang->delete();
        $request->session()->flash('pesan','Sudah Lunas');
        return redirect()->route('hutang.index');
    }

}
