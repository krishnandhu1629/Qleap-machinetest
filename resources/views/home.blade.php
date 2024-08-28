<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the Project Management Tool</h1>
    @auth
        <p>Hello, {{ Auth::user()->name }}!</p>
        <p><a href="{{ route('dashboard') }}">Go to Dashboard</a></p>
    @else
        <p><a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a></p>
    @endauth
</body>
</html>
