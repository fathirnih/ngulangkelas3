@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h6 class="mb-0">Tambah Siswa</h6>
    </div>

    <div class="card-body">
        <form action="/store" method="POST">
            @csrf

            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="input-group input-group-outline mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
