@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Edit Data Biodata</div></center>
                <div class="card-body">
                    <form action="{{ route('biodata.update', $biodatas->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" value="{{ $biodatas->nama_lengkap }}">
                             @error('NamaLengkap')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Laki-Laki" {{ $biodatas->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}>
                                @error('JenisKelamin')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                                <label class="form-check-label" for="">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Perempuan" {{ $biodatas->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                @error('JenisKelamin')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                                <label class="form-check-label" for="">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" value="{{ $biodatas->tanggal_lahir }}">
                                @error('TanggalLahir')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="TempatLahir" placeholder="Tempat Lahir" value="{{ $biodatas->tempat_lahir }}">
                                @error('TempatLahir')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="Agama" id="" class="form-control" value="{{ $biodatas->agama }}">
                                <option value="Islam" {{ $biodatas->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $biodatas->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Budha" {{ $biodatas->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Hindu" {{ $biodatas->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            </select>
                                @error('Agama')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="Alamat" id="" class="form-control">{{ $biodatas->alamat }}</textarea>
                                @error('Alamat')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="Telepon" placeholder="Telepon" value="{{ $biodatas->telepon }}">
                                @error('Telepon')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ $biodatas->email }}">
                                @error('Email')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('images/biodata/' . $biodatas->foto) }}" width="100" alt="">
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
