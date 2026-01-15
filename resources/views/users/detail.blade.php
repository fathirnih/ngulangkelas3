@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Detail User</h5>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th width="150">Nama</th>
                <td>{{ $user->nama }}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>{{ $user->kota }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>{{ $user->no_hp }}</td>
            </tr>
        </table>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            Kembali
        </a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
            Edit
        </a>
    </div>
</div>
@endsection
