<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Siswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    @foreach ($siswas as $siswa)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
