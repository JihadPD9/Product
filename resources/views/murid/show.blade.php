@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Murid</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" value="{{ $murids->nama_lengkap }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="JenisKelamin" placeholder="Jenis Kelamin" value="{{ $murids->jenis_kelamin }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" value="{{ $murids->tanggal_lahir }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="TempatLahir" placeholder="Tempat Lahir" value="{{ $murids->tempat_lahir }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="Agama" placeholder="Agama" value="{{ $murids->agama }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea class="form-control" name="Alamat" Disabled>{{ $murids->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email" value="{{ $murids->email }}"Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="id_kelas"  value="{{ $murids->kelas->nama_kelas }}"Disabled>
                        </div>
                        <a href="{{ route('murid.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
