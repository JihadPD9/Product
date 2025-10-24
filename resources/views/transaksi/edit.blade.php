@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Edit Data Transaksi</div></center>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksis->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi" value="{{ $transaksis->tanggal_transaksi }}">
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $transaksis->jumlah }}">
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="text" class="form-control" name="total_harga" value="{{ $transaksis->total_harga }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select class="form-control" name="id_barang"  id="">
                                @foreach ($barangs as $data)
                                    <option value="{{ $data->id }}"{{ $data->id == $transaksis->id_barang ? 'selected' : '' }}>{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <select class="form-control" name="id_pembeli"  id="">
                                @foreach ($pembelis as $data)
                                    <option value="{{ $data->id }}"{{ $data->id == $transaksis->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
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
