<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
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
        $biodatas = Biodata::all();
        return view('biodata.index',compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'NamaLengkap'             => 'required',
                'JenisKelamin'            => 'required',
                'TanggalLahir'            => 'required',
                'TempatLahir'             => 'required',
                'Agama'                   => 'required',
                'Alamat'                  => 'required',
                'Telepon'                 => 'required',
                'Email'                   => 'required',
                'Foto'                    => 'required',
            ],
            [
                'NamaLengkap.required'    => 'Nama Wajib Di isi',
                'JenisKelamin.required'   => 'Jenis Kelamin Wajib Di isi',
                'TanggalLahir.required'   => 'Tanggal Lahir Wajib Di isi',
                'TempatLahir.required'    => 'Tempat Lahir Wajib Di isi',
                'Agama.required'          => 'Agama Wajib Di isi',
                'Alamat.required'         => 'Alamat Wajib Di isi',
                'Telepon.required'        => 'Telepon Wajib Di isi',
                'Email.required'          => 'Email Wajib Di isi',
                'Foto.required'           => 'Foto Wajib Di Isi',
            ]
            );
        $biodatas                         = new Biodata;
        $biodatas->nama_lengkap           = $request->NamaLengkap;
        $biodatas->jenis_kelamin          = $request->JenisKelamin;
        $biodatas->tanggal_lahir          = $request->TanggalLahir;
        $biodatas->tempat_lahir           = $request->TempatLahir;
        $biodatas->agama                  = $request->Agama;
        $biodatas->alamat                 = $request->Alamat;
        $biodatas->telepon                = $request->Telepon;
        $biodatas->email                  = $request->Email;
        if ($request->hasFile('Foto')) {
            $img    = $request->file('Foto');
            $name   = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata/', $name);
            $biodatas->foto = $name;
        }
        $biodatas->save();
        
        session()->flash('success','Data Berhasil ditambahkan');
        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'NamaLengkap'             => 'required',
                'JenisKelamin'            => 'required',
                'TanggalLahir'            => 'required',
                'TempatLahir'             => 'required',
                'Agama'                   => 'required',
                'Alamat'                  => 'required',
                'Telepon'                 => 'required',
                'Email'                   => 'required',
                'Foto'                    => 'required',
            ],
            [
                'NamaLengkap.required'    => 'Nama Wajib Di isi',
                'JenisKelamin.required'   => 'Jenis Kelamin Wajib Di isi',
                'TanggalLahir.required'   => 'Tanggal Lahir Wajib Di isi',
                'TempatLahir.required'    => 'Tempat Lahir Wajib Di isi',
                'Agama.required'          => 'Agama Wajib Di isi',
                'Alamat.required'         => 'Alamat Wajib Di isi',
                'Telepon.required'        => 'Telepon Wajib Di isi',
                'Email.required'          => 'Email Wajib Di isi',
                'Foto.required'           => 'Foto Wajib Di Isi',
            ]
            );
        $biodatas                         = Biodata::findOrFail($id);
        $biodatas->nama_lengkap           = $request->NamaLengkap;
        $biodatas->jenis_kelamin          = $request->JenisKelamin;
        $biodatas->tanggal_lahir          = $request->TanggalLahir;
        $biodatas->tempat_lahir           = $request->TempatLahir;
        $biodatas->agama                  = $request->Agama;
        $biodatas->alamat                 = $request->Alamat;
        $biodatas->telepon                = $request->Telepon;
        $biodatas->email                  = $request->Email;
        if ($request->hasFile('Foto')) {
            //Menghapus Foto yang sudah diedit
            $filePath = public_path('images/biodata/' . $biodatas->foto);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }   
            $img    = $request->file('Foto');
            $name   = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata/', $name);
            $biodatas->foto = $name;
        }
        $biodatas->save();
        
        session()->flash('success','Data Berhasil di Edit');
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = Biodata::findOrFail($id);
        //Hapus file cover jika ada
        if ($biodatas->foto) {
            $filePath = public_path('images/biodata/' . $biodatas->foto);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }
        $biodatas->delete();
        return redirect()->route('biodata.index')->with('success','Data Berhasil Dihapus');
    }
}
