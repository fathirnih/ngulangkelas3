<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Siswa</h2>

<form action="/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="kelas" placeholder="Kelas" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>

<br>

<a href="/">
    <button>Kembali</button>
</a>

</body>
</html>
