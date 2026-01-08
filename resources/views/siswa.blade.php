@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
<div class="card">
    <div class="card-header bg-gradient-success text-white">
        <h6 class="mb-0">Data Siswa</h6>
    </div>

    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa->id) }}"
                               class="btn btn-success btn-sm">
                             Edit
                            </a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}"
      method="POST"
      style="display:inline-block">
    @csrf
    @method('DELETE')
    <button class="btn btn-secondary btn-sm"
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
</div>
@endsection
