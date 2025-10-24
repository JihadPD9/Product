@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Barang</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->nama_barang }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{ $barangs->merek }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->harga }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $barangs->stok }}" Disabled>
                        </div>
                        <a href="{{ route('barang.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
