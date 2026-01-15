@extends('layouts.app')

@section('title','Data Supplier')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white d-flex justify-content-between">
        <h5 class="mb-0">Data Supplier</h5>
        <a href="{{ route('supplier.create') }}" class="btn btn-light btn-sm">
            + Tambah Supplier
        </a>
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success text-white">
                {{ session('success') }}
            </div>
        @endif

        {{-- Search bar --}}
        <form action="{{ route('supplier.index') }}" method="GET" class="d-flex mb-3 align-items-center gap-2">
            <input type="text" name="search"
                   class="form-control"
                   placeholder="Cari Nama Supplier..."
                   value="{{ request('search') }}">
            <button type="submit" class="btn btn-success" style="min-width: 80px;">Cari</button>
            <a href="{{ route('supplier.index') }}" class="btn btn-secondary" style="min-width: 80px;">Reset</a>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>CP</th>
                        <th width="200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td>{{ $data->firstItem() + $loop->index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kota }}</td>
                        <td>{{ $item->cp }}</td>
                        <td>
                            <a href="{{ route('supplier.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('supplier.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Data tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="d-flex justify-content-end mt-2">
                {{ $data->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
