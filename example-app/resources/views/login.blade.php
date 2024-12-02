<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #274b74, #380c5f, #060007);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .logo {
            width: 200px;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #380c5f;
        }

        label {
            display: block;
            margin-bottom: 12px;
            font-size: 14px;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
        }

        button {
            width: 106%;
            padding: 12px;
            background-color: #380c5f;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #274b74;
        }

        p {
            margin-top: 20px;
        }

        p a {
            text-decoration: none;
            color: #380c5f;
        }

        p a:hover {
            text-decoration: underline;
        }

        .success{
            color: green;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .failed{
            color: red;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .error{
            font-size: 10px;
            color: red;
            text-align: left;
            margin: 0;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('storage/image/logo1.png') }}" alt="Logo" class="logo">
       
        <form id="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            @if (session('success'))
                <div class="success">{{session('success') }}</div>
            @endif
            @error ('failed')
                <div class="failed">{{ $message }}</div>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password')
                <p class="error">{{$message}}</p>
            @enderror

            <button type="submit">Log In</button>

            <p>Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
