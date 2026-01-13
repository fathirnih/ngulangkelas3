@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h5 class="mb-0">Detail Produk (ID: {{ $produk->id }})</h5>
    </div>

    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Nama Barang</div>
            <div class="col-md-8">{{ $produk->nama_barang }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Jumlah Barang</div>
            <div class="col-md-8">{{ $produk->jumlah }}</div>
        </div>

        <div class="mt-4">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                Kembali
            </a>
            <a href="{{ route('produk.edit', $produk->id) }}" class="btn bg-gradient-success">
                Edit
            </a>
        </div>
    </div>
</div>

@endsection
