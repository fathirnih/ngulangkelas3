<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h2>Form Produk</h2>

<form action="{{ route('hasil') }}" method="POST">
    @csrf

    <label>Produk</label><br>
    <input type="text" name="produk" required><br><br>

    <label>Jumlah</label><br>
    <input type="number" name="jumlah" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('index') }}">🔙</a>


</body>
</html>