@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Edit User</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama', $user->nama) }}"
                >
                @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Kota --}}
            <div class="mb-3">
                <label class="form-label">Kota</label>
                <input
                    type="text"
                    name="kota"
                    class="form-control"
                    value="{{ old('kota', $user->kota) }}"
                >
                @error('kota')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- No HP --}}
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input
                    type="text"
                    name="no_hp"
                    class="form-control"
                    value="{{ old('no_hp', $user->no_hp) }}"
                    placeholder="Contoh: 081234567890"
                >
                @error('no_hp')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
