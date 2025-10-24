@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Add Data Telepon</div></center>
                <div class="card-body">
                    <form action="{{ route('telepon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" placeholder="Nomor">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <select class="form-control" name="id_pengguna" id="">
                                @foreach ($penggunas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
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
