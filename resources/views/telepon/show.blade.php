@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Telepon</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="nama" value="{{ $telepons->nomor }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Pengguna</label>
                            <input type="text" class="form-control" name="nama" value="{{ $telepons->pengguna->nama }}" Disabled>
                        </div>
                        <a href="{{ route('telepon.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
