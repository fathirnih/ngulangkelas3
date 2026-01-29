<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Produk</h2>
    <h2><a href="{{ route('register') }}">Register</a></h2>
    <h2><a href="{{ route('form1') }}">TEST</a></h2>

    <label>Form 1:</label>
    <input type="text" value="{{ $form1 ?? '' }}" readonly><br><br>

    <label>Form 2:</label>
    <input type="text" value="{{ $form2 ?? '' }}" readonly><br><br>

    <label>Form 3:</label>
    <input type="text" value="{{ $form3 ?? '' }}" readonly><br><br>

    <a href="{{ route('reset') }}">🔄 Reset Semua Form</a>


<table border="1" cellpadding="8">
    <tr>
        <th>Produk</th>
        <th>Jumlah</th>
    </tr>

    @foreach ($data as $d)
    <tr>
        <td>{{ $d['produk'] }}</td>
        <td>{{ $d['jumlah'] }}</td>
    </tr>
    @endforeach
</table>

<br>
<a href="{{ route('form') }}">CREATE</a>

</body>
</html>