<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'email' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            ]);

            $profil = new Profil();
            $profil->nama = $validateData['nama'];
            $profil->email = $validateData['email'];
            $profil->alamat = $validateData['alamat'];
            $profil->nohp = $validateData['nohp'];
            $profil->save();
            $request->session()->flash('pesan','Penambahan data berhasil');
            return redirect()->route('profil.create');

    }

}
