<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4f46e5;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>Email</label>
        <input type="email" name="email" required autofocus>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
