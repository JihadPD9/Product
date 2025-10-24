@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Add Kelas</div></center>
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" placeholder="Nama">
                            @error('nama_kelas')
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
