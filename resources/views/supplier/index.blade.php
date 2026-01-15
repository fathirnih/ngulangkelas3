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
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->cp }}</td>
                    <td>
                        <a href="{{ route('supplier.show', $item->id) }}" class="btn btn-info btn-sm">
                            Detail
                        </a>
                        <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('supplier.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
