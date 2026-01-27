<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>FORM 2</h2>

<label>Hasil Form 1:</label>
<input type="text" name="form1" value="{{ $form1 ?? '' }}" readonly><br><br>

<form action="{{ route('storeForm2') }}" method="POST">
    @csrf
    <input type="text" name="name" required>
    <button>Next</button>
</form>

</body>
</html>