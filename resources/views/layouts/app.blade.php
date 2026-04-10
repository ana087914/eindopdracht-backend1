<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Ambiance Sushi</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
        }

        .navbar {
            position: absolute;
            top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 30px;
            z-index: 10;
        }

        .navbar a, .navbar button {
            color: white;
            text-decoration: none;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('menu') }}">Menu</a>
        <a href="{{ route('contact') }}">Contact</a>

        @auth
            <a href="{{ route('dishes.index') }}">Admin</a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </nav>

    @yield('content')

</body>
</html>