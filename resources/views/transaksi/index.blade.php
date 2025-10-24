@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Data Transaksi</div></center>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">ID Barang</th>
                                <th scope="col">ID Pembeli</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($transaksis as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->tanggal_transaksi}}</td>
                                <td>{{ $data->jumlah}}</td>
                                <td>{{ $data->total_harga }}</td>
                                <td>{{ $data->barang->nama_barang }}</td>
                                <td>{{ $data->pembeli->nama_pembeli }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('transaksi.edit',$data->id) }}" class="btn btn-success ms-1">Edit</a>
                                    <a href="{{ route('transaksi.show',$data->id) }}" class="btn btn-warning  ms-1">Show</a>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ms-1" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
