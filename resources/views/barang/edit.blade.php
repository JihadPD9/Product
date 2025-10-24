@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Edit Barang</div></center>
                <div class="card-body">
                    <form action="{{ route('barang.update', $barangs->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->nama_barang }}">
                            @error('nama_barang')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{ $barangs->merek }}">
                            @error('merek')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $barangs->harga }}">
                            @error('harga')
                            <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{ $barangs->stok }}">
                            @error('stok')
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
