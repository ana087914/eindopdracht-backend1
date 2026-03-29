<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <h1>Our Menu 🍣</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/menu">Menu</a> |
        <a href="/contact">Contact</a>
    </nav>

    @forelse($dishes as $dish)
        <div style="margin-bottom:20px;">
            <h3>{{ $dish->name }}</h3>
            <p>{{ $dish->description }}</p>
            <p>€{{ $dish->price }}</p>
        </div>
    @empty
        <p>No dishes found.</p>
    @endforelse
</body>
</html>