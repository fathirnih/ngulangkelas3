@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h5 class="mb-0">Detail Produk (ID: {{ $produk->id }})</h5>
    </div>

    <div class="card-body">

        {{-- Nama Barang --}}
        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Nama Barang</div>
            <div class="col-md-8">{{ $produk->nama_barang }}</div>
        </div>

        {{-- Harga --}}
        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Harga</div>
            <div class="col-md-8">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Deskripsi</div>
            <div class="col-md-8">
                {{ $produk->deskripsi ?? '-' }}
            </div>
        </div>

        {{-- Jumlah --}}
        <div class="row mb-3">
            <div class="col-md-4 font-weight-bold">Jumlah Barang</div>
            <div class="col-md-8">{{ $produk->jumlah }}</div>
        </div>
        @if($produk->image)
    <img src="{{ asset('images/produk/'.$produk->image) }}"
         class="img-fluid mb-3"
         style="max-width:300px">
@endif


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
