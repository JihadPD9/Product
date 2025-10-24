@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Edit Data Telepon</div></center>
                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepons->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepons->nomor }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <select class="form-control" name="id_pengguna"  id="">
                                @foreach ($penggunas as $data)
                                    <option value="{{ $data->id }}"{{ $data->id == $telepons->id_pengguna ? 'selected' : '' }}>{{ $data->nama }}</option>
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
