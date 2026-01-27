<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>FORM 3</h2>

<label>Hasil Form 1:</label>
<input type="text" name="form1" value="{{ $form1 ?? '' }}" readonly><br><br>

<label>Hasil Form 2:</label>
<input type="text" name="form2" value="{{ $form2 ?? '' }}" readonly><br><br>


<form action="{{ route('storeForm3') }}" method="POST">
    @csrf
    <input type="text" name="name" required>
    <button>Finish</button>
</form>

</body>
</html>