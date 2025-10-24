@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Add Data Pembeli</div></center>
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli">
                            @error('nama_pembeli')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Laki-Laki">
                                <label class="form-check-label" for="">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Perempuan">
                                <label class="form-check-label" for="">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                            @error('telepon')
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
