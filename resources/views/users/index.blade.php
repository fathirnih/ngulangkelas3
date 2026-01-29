@extends('layouts.app')

@section('title', 'Data Users')

@section('content')
<div class="card mb-4">
    <div class="card-header bg-gradient-success text-white d-flex justify-content-between">
        <h5 class="mb-0">Data Users</h5>
        <a href="{{ route('users.create') }}" class="btn btn-light btn-sm">
            + Tambah User
        </a>
    </div>

    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success text-white mb-3">
                {{ session('success') }}
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger text-white mb-3">
                {{ session('delete') }}
            </div>
        @endif

        {{-- Search bar --}}
        <form action="{{ route('users.index') }}" method="GET" class="d-flex mb-3 align-items-center gap-2">
            <input type="text" name="search" class="form-control" placeholder="Cari Nama User..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-success" style="min-width: 80px;">Cari</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary" style="min-width: 80px;">Reset</a>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>No HP</th>
                        <th class="text-center" width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $item)
                    <tr>
                        <td class="text-center">{{ $data->firstItem() + $loop->index }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kota }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td class="text-center">
                            <a href="{{ route('users.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="d-inline">
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
