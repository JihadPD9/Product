<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;


class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('pengguna.index',compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penggunas          = new Pengguna;
        $penggunas->nama   = $request->nama;
        $request->validate(
            [
                'nama'   => 'required|string|max:255',
            ],
            [
                'nama.required'    => 'Nama Tidak Boleh Kosong!',
            ]
            );
        $penggunas->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('penggunas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('penggunas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penggunas          = Pengguna::findOrFail($id);
        $penggunas->nama   = $request->nama;
        $request->validate(
            [
                'nama'   => 'required|string|max:255',
            ],
            [
                'nama.required'    => 'Nama Tidak Boleh Kosong!',
            ]
            );
        $penggunas->save();
        
        session()->flash('success','Data Berhasil diubah');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        $penggunas->delete();
        return redirect()->route('pengguna.index')->with('success','Data Berhasil Dihapus');
    }
}
