@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Biodata</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" value="{{ $biodatas->nama_lengkap }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="JenisKelamin" placeholder="Jenis Kelamin" value="{{ $biodatas->jenis_kelamin }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" value="{{ $biodatas->tanggal_lahir }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="TempatLahir" placeholder="Tempat Lahir" value="{{ $biodatas->tempat_lahir }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="Agama" placeholder="Agama" value="{{ $biodatas->agama }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" name="Alamat" Disabled>{{ $biodatas->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="Telepon" placeholder="Telepon" value="{{ $biodatas->telepon }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ $biodatas->email }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label for="">Foto</label>
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('/images/biodata/' . $biodatas->foto) }}" width="100" alt="">
                        </div>
                        <a href="{{ route('biodata.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
