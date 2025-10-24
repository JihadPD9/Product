<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telepons = Telepon::all();
        return view('telepon.index',compact('telepons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penggunas = Pengguna::all();
        return view('telepon.create',compact('penggunas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $telepons          = new Telepon;
        $telepons->nomor   = $request->nomor;
        $telepons->id_pengguna   = $request->id_pengguna;
        $request->validate(
            [
                'nomor'   => 'required|string|max:255',
            ],
            [
                'nomor.required'    => 'Nomor Tidak Boleh Kosong!',
            ]
            );
        $telepons->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepons = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telepons   =   Telepon::findOrFail($id);
        $penggunas  =   Pengguna::all();
        return view('telepon.edit',compact('telepons','penggunas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $telepons          = Telepon::findOrFail($id);
        $telepons->nomor   = $request->nomor;
        $telepons->id_pengguna   = $request->id_pengguna;
        $request->validate(
            [
                'nomor'   => 'required|string|max:255',
            ],
            [
                'nomor.required'    => 'Nomor Tidak Boleh Kosong!',
            ]
            );
        $telepons->save();
        
        session()->flash('success','Data Berhasil diubah');
        return redirect()->route('telepon.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepons = Telepon::findOrFail($id);
        $telepons->delete();
        return redirect()->route('telepon.index')->with('success','Data Berhasil Dihapus');
    }
}
