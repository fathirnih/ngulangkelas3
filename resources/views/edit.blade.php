<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Siswa</h2>

<form action="/update/{{ $siswa->id }}" method="POST">
    @csrf

    <label>Nama</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}" required>
    <br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas" value="{{ $siswa->kelas }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>

<br>

<a href="/">
    <button>Kembali</button>
</a>

</body>
</html>
