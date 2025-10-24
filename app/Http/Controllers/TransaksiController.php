<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index',compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksis = Transaksi::all();
        $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.create',compact('transaksis','barangs','pembelis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaksis          = new Transaksi;
        $transaksis->tanggal_transaksi   = $request->tanggal_transaksi;
        $transaksis->jumlah   = $request->jumlah;
        $transaksis->total_harga   = $request->total_harga;
        $transaksis->id_barang   = $request->id_barang;
        $transaksis->id_pembeli   = $request->id_pembeli;
        $request->validate(
            [
                'tanggal_transaksi'   => 'required',
                'jumlah'    =>  'required',
                'total_harga'    =>  'required',
                'id_barang'    =>  'required',
                'id_pembeli'    =>  'required',
            ],
            [
                'tanggal_transaksi.required'    => 'Tanggal Transaksi Tidak Boleh Kosong!',
                'jumlah.required'    => 'Jumlah Tidak Boleh Kosong!',
                'total_harga.required'    => 'Total Harga Tidak Boleh Kosong!',
                'id_barang.required'    => 'ID Tidak Boleh Kosong!',
                'id_pembeli.required'    => 'ID Tidak Boleh Kosong!',
            ]
            );
        $transaksis->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksis = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksis   =   Transaksi::findOrFail($id);
        $barangs  =   Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.edit',compact('transaksis','barangs','pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksis          = Transaksi::findOrFail($id);
        $transaksis->tanggal_transaksi   = $request->tanggal_transaksi;
        $transaksis->jumlah   = $request->jumlah;
        $transaksis->total_harga   = $request->total_harga;
        $transaksis->id_barang   = $request->id_barang;
        $transaksis->id_pembeli   = $request->id_pembeli;
        $request->validate(
            [
                'tanggal_transaksi'   => 'required',
                'jumlah'    =>  'required',
                'total_harga'    =>  'required',
                'id_barang'    =>  'required',
                'id_pembeli'    =>  'required',
            ],
            [
                'tanggal_transaksi.required'    => 'Tanggal Transaksi Tidak Boleh Kosong!',
                'jumlah.required'    => 'Jumlah Tidak Boleh Kosong!',
                'total_harga.required'    => 'Total Harga Tidak Boleh Kosong!',
                'id_barang.required'    => 'ID Tidak Boleh Kosong!',
                'id_pembeli.required'    => 'ID Tidak Boleh Kosong!',
            ]
            );
        $transaksis->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksis = Transaksi::findOrFail($id);
        $transaksis->delete();
        return redirect()->route('transaksi.index')->with('success','Data Berhasil Dihapus');
    }
}
