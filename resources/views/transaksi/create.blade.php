@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Add Data Transaksi</div></center>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi">
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="text" class="form-control" name="jumlah">
                        </div>
                        <div class="mb-3">
                            <label>Total Harga</label>
                            <input type="text" class="form-control" name="total_harga">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select class="form-control" name="id_barang" id="">
                                    <option value="" selected hidden>Pilih Barang</option>
                                @foreach ($barangs as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <select class="form-control" name="id_pembeli" id="">
                                    <option value="" selected hidden>Pilih Pembeli</option>
                                @foreach ($pembelis as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
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
