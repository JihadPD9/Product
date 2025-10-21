@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Add Data Biodata</div></center>
                <div class="card-body">
                    <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap">
                            @error('NamaLengkap')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Laki-Laki">
                                <label class="form-check-label" for="">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Perempuan">
                                <label class="form-check-label" for="">Perempuan</label>
                            </div>
                            @error('JenisKelamin')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir">
                            @error('TanggalLahir')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="TempatLahir" placeholder="Tempat Lahir">
                            @error('TempatLahir')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Agama" class="form-label">Agama</label>
                            <select name="Agama" id="Agama" class="form-select">
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                            @error('Agama')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="Alamat" id="" class="form-control"></textarea>
                            @error('Alamat')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="Telepon" placeholder="Telepon">
                                @error('Telepon')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email">
                            @error('Email')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="Foto" placeholder="Foto">
                            @error('Foto')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
