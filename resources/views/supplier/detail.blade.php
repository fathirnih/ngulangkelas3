@extends('layouts.app')

@section('title', 'Detail Supplier')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Detail Supplier</h5>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="200">Nama Supplier</th>
                <td>{{ $supplier->nama }}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>{{ $supplier->kota }}</td>
            </tr>
            <tr>
                <th>Contact Person</th>
                <td>{{ $supplier->cp }}</td>
            </tr>
        </table>

        <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
    </div>
</div>
@endsection
