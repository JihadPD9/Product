@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Edit Data Murid</div></center>
                <div class="card-body">
                    <form action="{{ route('murid.update', $murids->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" value="{{ $murids->nama_lengkap }}">
                             @error('NamaLengkap')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Laki-Laki" {{ $murids->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}>
                                @error('JenisKelamin')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                                <label class="form-check-label" for="">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="JenisKelamin" id="" value="Perempuan" {{ $murids->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                @error('JenisKelamin')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                                <label class="form-check-label" for="">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" value="{{ $murids->tanggal_lahir }}">
                                @error('TanggalLahir')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="TempatLahir" placeholder="Tempat Lahir" value="{{ $murids->tempat_lahir }}">
                                @error('TempatLahir')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <select name="Agama" id="" class="form-control" value="{{ $murids->agama }}">
                                <option value="Islam" {{ $murids->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $murids->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Budha" {{ $murids->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Hindu" {{ $murids->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            </select>
                                @error('Agama')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="Alamat" id="" class="form-control">{{ $murids->alamat }}</textarea>
                                @error('Alamat')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ $murids->email }}">
                                @error('Email')
                                <small style="color:red;">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <select class="form-control" name="id_kelas"  id="">
                                @foreach ($kelass as $data)
                                    <option value="{{ $data->id }}"{{ $data->id == $murids->id_kelas ? 'selected' : '' }}>{{ $data->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
