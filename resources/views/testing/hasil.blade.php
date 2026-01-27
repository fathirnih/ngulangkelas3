<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL</title>
</head>
<body>
    <h2>Produk Berhasil Disimpan</h2>

<p><b>Produk:</b> {{ $produk }}</p>
<p><b>Jumlah:</b> {{ $jumlah }}</p>

<a href="{{ route('index') }}">TABLE</a> |
<a href="{{ route('form') }}">CREATE AGAIN</a>

</body>
</html>