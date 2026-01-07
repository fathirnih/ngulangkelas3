@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
<div class="card">
    <div class="card-header bg-gradient-warning text-white">
        <h6 class="mb-0">Edit Siswa</h6>
    </div>

    <div class="card-body">
        <form action="/update/{{ $siswa->id }}" method="POST">
            @csrf

            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
            </div>

            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
            </div>

            <button class="btn btn-warning">Update</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
