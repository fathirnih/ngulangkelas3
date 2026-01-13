@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h5 class="mb-0">Tambah Produk Baru</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf

<div class="mb-3">
    <label class="form-label">Nama Barang</label>
    <input type="text"
           name="nama_barang"
           class="form-control @error('nama_barang') is-invalid @enderror"
           value="{{ old('nama_barang') }}">

    @error('nama_barang')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>


            <div class="mb-3">
    <label class="form-label">Jumlah Barang</label>
    <input type="teks"
           name="jumlah"
           class="form-control @error('jumlah') is-invalid @enderror"
           value="{{ old('jumlah') }}">

    @error('jumlah')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button type="submit" class="btn bg-gradient-success">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
