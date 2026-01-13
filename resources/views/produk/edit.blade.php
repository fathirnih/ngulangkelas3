@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h5 class="mb-0">Edit Produk (ID: {{ $produk->id }})</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nama Barang --}}
            <div class="input-group input-group-static mb-3">
                <label>Nama Barang</label>
                <input type="text"
                       name="nama_barang"
                       class="form-control @error('nama_barang') is-invalid @enderror"
                       value="{{ old('nama_barang', $produk->nama_barang) }}">
            </div>
            @error('nama_barang')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            {{-- Jumlah Barang --}}
            <div class="input-group input-group-static mb-3">
                <label>Jumlah Barang</label>
                <input type="teks"
                       name="jumlah"
                       class="form-control @error('jumlah') is-invalid @enderror"
                       value="{{ old('jumlah', $produk->jumlah) }}">
            </div>
            @error('jumlah')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button type="submit" class="btn bg-gradient-success">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
