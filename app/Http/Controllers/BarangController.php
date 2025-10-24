<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index',compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barangs                = new Barang;
        $barangs->nama_barang   = $request->nama_barang;
        $barangs->merek         = $request->merek;
        $barangs->harga         = $request->harga;
        $barangs->stok          = $request->stok;
        $request->validate(
            [
                'nama_barang'   => 'required|string|max:255',
                'merek'         =>  'required|string|max:255',
                'harga'         =>  'required|integer',
                'stok'          =>  'required|integer|max:255',
            ],
            [
                'nama_barang.required'      => 'Nama Barang Tidak Boleh Kosong!',
                'merek.required'            => 'Merek Tidak Boleh Kosong',
                'harga.required'            => 'Harga Tidak Boleh Kosong',
                'stok.required'             => 'Stok Tidak Boleh Kosong',
            ]
            );
        $barangs->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barang.edit', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barangs                = Barang::findOrFail($id);
        $barangs->nama_barang   = $request->nama_barang;
        $barangs->merek         = $request->merek;
        $barangs->harga         = $request->harga;
        $barangs->stok          = $request->stok;
        $request->validate(
            [
                'nama_barang'   => 'required|string|max:255',
                'merek'         =>  'required|string|max:255',
                'harga'         =>  'required|integer',
                'stok'          =>  'required|integer|max:255',
            ],
            [
                'nama_barang.required'      => 'Nama Barang Tidak Boleh Kosong!',
                'merek.required'            => 'Merek Tidak Boleh Kosong',
                'harga.required'            => 'Harga Tidak Boleh Kosong',
                'stok.required'             => 'Stok Tidak Boleh Kosong',
            ]
            );
        $barangs->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barang.index')->with('success','Data Berhasil Dihapus');
    }
}
