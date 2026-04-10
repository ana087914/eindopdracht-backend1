<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dishes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
            padding: 30px;
        }

        a {
            color: #ffb6d9;
            text-decoration: none;
        }

        .top-bar {
            margin-bottom: 30px;
        }

        .dish-card {
            background: #222;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .dish-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            background: white;
            margin-bottom: 10px;
        }

        .success {
            background: #1d4d2b;
            padding: 10px;
            margin-bottom: 20px;
        }

        form {
            display: inline-block;
        }

        button {
            padding: 8px 12px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Manage Dishes</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="top-bar">
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('menu') }}">Public Menu</a> |
        <a href="{{ route('dishes.create') }}">Add New Dish</a>
    </div>

    @forelse($dishes as $dish)
        <div class="dish-card">
            @if($dish->image)
                <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}">
            @endif

            <h2>{{ $dish->name }}</h2>
            <p>{{ $dish->description }}</p>
            <p>€ {{ number_format($dish->price, 2, ',', '.') }}</p>
            <p><strong>Image:</strong> {{ $dish->image }}</p>

            <a href="{{ route('dishes.edit', $dish) }}">Edit</a>

            <form action="{{ route('dishes.destroy', $dish) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @empty
        <p>No dishes found.</p>
    @endforelse
</body>
</html>