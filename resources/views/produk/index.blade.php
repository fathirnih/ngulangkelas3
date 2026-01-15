@extends('layouts.app')

@section('title', 'Data Produk')

@section('content')

@if (session('success'))
    <div class="alert alert-success text-white">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-header bg-gradient-success text-white d-flex justify-content-between">
        <h5 class="mb-0">Data Produk</h5>
        <a href="{{ route('produk.create') }}" class="btn btn-light btn-sm">
            + Tambah Produk
        </a>
    </div>

    <div class="card-body px-0 pb-2">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center">
                            No
                        </th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">
                            Nama Barang
                        </th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">
                            Harga
                        </th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder">
                            Deskripsi
                        </th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center">
                            Jumlah
                        </th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr>
                            <td>{{ $data->firstItem() + $loop->index }}</td>

                            <td>{{ $item->nama_barang }}</td>

                            <td>
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </td>

                            <td>
                                {{ $item->deskripsi ?? '-' }}
                            </td>

                            <td class="text-center">
                                {{ $item->jumlah }}
                            </td>
                            <td>
    @if($item->image)
        <img src="{{ asset('images/produk/'.$item->image) }}"
             width="60"
             class="rounded">
    @else
        -
    @endif
</td>


                            <td class="text-center">
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">
                                    Detail
                                </a>
                                <form action="{{ route('produk.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                Data tidak tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-2 me-2">
    {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>

@endsection
