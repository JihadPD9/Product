@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Show Data Transaksi</div></center>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi" value="{{ $transaksis->tanggal_transaksi }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $transaksis->jumlah }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="text" class="form-control" name="total_harga" value="{{ $transaksis->total_harga }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="id_barang" value="{{ $transaksis->barang->nama_barang }}" Disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="id_pembeli" value="{{ $transaksis->pembeli->nama_pembeli }}" Disabled>
                        </div>
                        <a href="{{ route('transaksi.index') }}" type="submit" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
