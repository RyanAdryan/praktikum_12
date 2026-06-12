<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    //membuat method atau fungsi menampilkan daftar anggota
    public function index(){
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    // daftar / create
    public function create(){
        return view('anggota.create');
    }
    // store
    public function store(Request $request){
        $pathFoto = null;
        if ($request->hasFile('foto_profile')){
            $pathFoto = $request->file('foto_profile')->store('foto_profile', 'public');
        }

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'foto_profile' => $pathFoto
        ]);

        return redirect()->route('anggota.index')->with('success', 'Anggota Berhasil Ditambahkan');
    }
}
