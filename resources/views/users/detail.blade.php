@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Detail User</h5>
    </div>

    <div class="card-body">
        <table class="table">
            <tr>
                <th width="150">Nama</th>
                <td>{{ $user->nama }}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>{{ $user->kota }}</td>
            </tr>
        </table>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
