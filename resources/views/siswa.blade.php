<!DOCTYPE html>
<html>
<head>
    <title>CRUD Siswa</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h2>Tambah Siswa</h2>

<form action="/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="kelas" placeholder="Kelas" required>
    <button type="submit">Simpan</button>
</form>

<br><br>

<h2>Data Siswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    @foreach ($siswas as $siswa)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>
            <a href="/edit/{{ $siswa->id }}">Edit</a> |
            <a href="/delete/{{ $siswa->id }}" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
