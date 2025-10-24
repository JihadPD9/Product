<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murids = Murid::all();
        return view('murid.index',compact('murids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('murid.create',compact('kelass'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $murids                         = new Murid;
        $murids->nama_lengkap           = $request->NamaLengkap;
        $murids->jenis_kelamin          = $request->JenisKelamin;
        $murids->tanggal_lahir          = $request->TanggalLahir;
        $murids->tempat_lahir           = $request->TempatLahir;
        $murids->agama                  = $request->Agama;
        $murids->alamat                 = $request->Alamat;
        $murids->email                  = $request->Email;
        $murids->id_kelas             = $request->id_kelas;
        $request->validate(
            [
                'NamaLengkap'             => 'required',
                'JenisKelamin'            => 'required',
                'TanggalLahir'            => 'required',
                'TempatLahir'             => 'required',
                'Agama'                   => 'required',
                'Alamat'                  => 'required',
                'Email'                   => 'required',
                'id_kelas'                => 'required',
            ],
            [
                'NamaLengkap.required'    => 'Nama Wajib Di isi',
                'JenisKelamin.required'   => 'Jenis Kelamin Wajib Di isi',
                'TanggalLahir.required'   => 'Tanggal Lahir Wajib Di isi',
                'TempatLahir.required'    => 'Tempat Lahir Wajib Di isi',
                'Agama.required'          => 'Agama Wajib Di isi',
                'Alamat.required'         => 'Alamat Wajib Di isi',
                'Email.required'          => 'Email Wajib Di isi',
                'id_kelas.required'       => 'Nama Kelas Wajib Di Isi',
            ]
            );
        $murids->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murids = Murid::findOrFail($id);
        $kelass = Kelas::all();
        return view('murid.show', compact('murids','kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murids   =   Murid::findOrFail($id);
        $kelass  =   Kelas::all();
        return view('murid.edit',compact('murids','kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $murids          =  Murid::findOrFail($id);
        $murids->nama_lengkap           = $request->NamaLengkap;
        $murids->jenis_kelamin          = $request->JenisKelamin;
        $murids->tanggal_lahir          = $request->TanggalLahir;
        $murids->tempat_lahir           = $request->TempatLahir;
        $murids->agama                  = $request->Agama;
        $murids->alamat                 = $request->Alamat;
        $murids->email                  = $request->Email;
        $murids->id_kelas             = $request->id_kelas;
        $request->validate(
            [
                'NamaLengkap'             => 'required',
                'JenisKelamin'            => 'required',
                'TanggalLahir'            => 'required',
                'TempatLahir'             => 'required',
                'Agama'                   => 'required',
                'Alamat'                  => 'required',
                'Email'                   => 'required',
                'id_kelas'                => 'required',
            ],
            [
                'NamaLengkap.required'    => 'Nama Wajib Di isi',
                'JenisKelamin.required'   => 'Jenis Kelamin Wajib Di isi',
                'TanggalLahir.required'   => 'Tanggal Lahir Wajib Di isi',
                'TempatLahir.required'    => 'Tempat Lahir Wajib Di isi',
                'Agama.required'          => 'Agama Wajib Di isi',
                'Alamat.required'         => 'Alamat Wajib Di isi',
                'Email.required'          => 'Email Wajib Di isi',
                'id_kelas.required'       => 'Nama Kelas Wajib Di Isi',
            ]
            );
        $murids->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murids = Murid::findOrFail($id);
        $murids->delete();
        return redirect()->route('murid.index')->with('success','Data Berhasil Dihapus');
    }
}
