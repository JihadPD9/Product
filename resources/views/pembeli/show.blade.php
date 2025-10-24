@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Pembeli</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembelis->nama_pembeli }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pembelis->jenis_kelamin }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $pembelis->telepon }}" Disabled>
                        </div>
                        <a href="{{ route('pembeli.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
