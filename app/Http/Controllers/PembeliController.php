<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('pembeli.index',compact('pembelis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembelis                       = new Pembeli;
        $pembelis->nama_pembeli         = $request->nama_pembeli;
        $pembelis->jenis_kelamin        = $request->jenis_kelamin;
        $pembelis->telepon              = $request->telepon;
        $request->validate(
            [
                'nama_pembeli'          => 'required|string|max:255',
                'jenis_kelamin'         =>  'required',
                'telepon'               =>  'required|string',
            ],
            [
                'nama_pembeli.required'      => 'Nama Pembeli Tidak Boleh Kosong!',
                'jenis_kelamin.required'     => 'Jenis Kelamin Tidak Boleh Kosong',
                'telepon.required'           => 'Telepon Tidak Boleh Kosong',
            ]
            );
        $pembelis->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembelis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembelis                       = Pembeli::findOrFail($id);
        $pembelis->nama_pembeli         = $request->nama_pembeli;
        $pembelis->jenis_kelamin        = $request->jenis_kelamin;
        $pembelis->telepon              = $request->telepon;
        $request->validate(
            [
                'nama_pembeli'          => 'required|string|max:255',
                'jenis_kelamin'         =>  'required',
                'telepon'               =>  'required|string',
            ],
            [
                'nama_pembeli.required'      => 'Nama Pembeli Tidak Boleh Kosong!',
                'jenis_kelamin.required'     => 'Jenis Kelamin Tidak Boleh Kosong',
                'telepon.required'           => 'Telepon Tidak Boleh Kosong',
            ]
            );
        $pembelis->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('pembeli.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        $pembelis->delete();
        return redirect()->route('pembeli.index')->with('success','Data Berhasil Dihapus');
    }
}
