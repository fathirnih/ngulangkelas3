@extends('layouts.app')

@section('title', 'Data Produk')

@section('content')
    @if (session('success'))
        <div class="alert alert-success text-white">
            {{ session('success') }}
        </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-danger text-white">
        {{ session('delete') }}
    </div>
@endif

    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Produk</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header bg-gradient-success text-white">
                <div class="d-flex justify-content-between">
                    <h5 class="mb-0">Data Produk</h5>
                    <a href="{{ route('produk.create') }}" class="btn btn-light btn-sm">
                        + Tambah Produk
                    </a>
                </div>
            </div>

            <div class="card-body">
                {{-- Search bar --}}
                <form action="{{ route('produk.index') }}" method="GET" class="d-flex mb-3 align-items-center gap-2">
                    <input type="text" name="search" class="form-control" placeholder="Cari Nama Barang..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-success" style="min-width: 80px;">Cari</button>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary" style="min-width: 80px;">Reset</a>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered align-items-center mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Jumlah</th>
                                <th>Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="text-center">{{ $data->firstItem() + $loop->index }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->deskripsi ?? '-' }}</td>
                                    <td class="text-center">{{ $item->jumlah }}</td>
                                    <td>
                                        @if($item->image && file_exists(public_path('images/produk/' . $item->image)))
                                            <img src="{{ asset('images/produk/' . $item->image) }}" alt="{{ $item->nama_barang }}" width="60">
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                        <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">Data tidak tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-end mt-2">
                        {{ $data->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
