<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pembeli' => 'required|min:3|max:50',
            'tanggal' => 'required',
            'harga' => 'required',
            'metode' => 'required',
            'total' => 'required',
            'bayar' => 'required',
            'kembali' => 'required',
            'status' => 'required',
            ]);

            $penjualan = new Penjualan();
            $penjualan->pembeli = $validateData['pembeli'];
            $penjualan->tanggal = $validateData['tanggal'];
            $penjualan->harga = $validateData['harga'];
            $penjualan->metode = $validateData['metode'];
            $penjualan->total = $validateData['total'];
            $penjualan->bayar = $validateData['bayar'];
            $penjualan->kembali = $validateData['kembali'];
            $penjualan->status = $validateData['status'];
            $penjualan->save();
            $request->session()->flash('pesan','Penambahan data berhasil');
            return redirect()->route('penjualan.index');
    }

    public function index()
    {
        $penjualans = Penjualan::all();
        return view('penjualan.index',['penjualan' => $penjualans]);
    }

}
