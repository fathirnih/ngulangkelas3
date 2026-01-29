<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
   <h2>FORM 1</h2>

<form action="{{ route('storeForm1') }}" method="POST">
    @csrf
    <input type="text" name="name" required>
    <button>Next</button>
</form>

</body>
</html>