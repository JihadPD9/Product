<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = Kelas::all();
        return view('kelas.index',compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelass          = new Kelas;
        $kelass->nama_kelas   = $request->nama_kelas;
        $request->validate(
            [
                'nama_kelas'   => 'required|string|max:255',
            ],
            [
                'nama_kelas.required'    => 'Nama Kelas Tidak Boleh Kosong!',
            ]
            );
        $kelass->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelass          = Kelas::findOrFail($id);
        $kelass->nama_kelas   = $request->nama_kelas;
        $request->validate(
            [
                'nama_kelas'   => 'required|string|max:255',
            ],
            [
                'nama_kelas.required'    => 'Nama Kelas Tidak Boleh Kosong!',
            ]
            );
        $kelass->save();
        
        session()->flash('success','Data Berhasil diubah');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        $kelass->delete();
        return redirect()->route('kelas.index')->with('success','Data Berhasil Dihapus');
    }
}
