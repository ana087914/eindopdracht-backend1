<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menukaart</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: white;
            background: #1f1f1f;
        }

        .menu-page {
            min-height: 100vh;
            background-image: linear-gradient(rgba(20, 0, 20, 0.35), rgba(20, 0, 20, 0.35)), url('{{ asset('images/sushi1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 30px 80px;
        }

        .navbar {
            display: flex;
            justify-content: center;
            gap: 38px;
            padding-top: 12px;
            font-size: 14px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .menu-title {
            text-align: center;
            font-size: 72px;
            font-weight: 300;
            margin-top: 55px;
            margin-bottom: 70px;
        }

        .menu-grid {
            width: 92%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 42px 70px;
        }

        .menu-item {
            display: grid;
            grid-template-columns: 110px 1fr;
            gap: 22px;
            align-items: start;
        }

        .menu-item-image {
            width: 110px;
            height: 110px;
            background: rgba(255, 255, 255, 0.92);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .menu-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-item-content h3 {
            font-size: 31px;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .menu-item-content p {
            font-size: 19px;
            line-height: 1.45;
            color: #f2eaf0;
            max-width: 320px;
        }

        .price {
            margin-top: 10px;
            font-size: 24px;
            color: #ffd25c;
        }

        .bottom-space {
            height: 260px;
        }

        @media (max-width: 900px) {
            .navbar {
                flex-wrap: wrap;
                gap: 18px;
            }

            .menu-title {
                font-size: 46px;
            }

            .menu-grid {
                grid-template-columns: 1fr;
                width: 95%;
            }
        }
    </style>
</head>
<body>
    <div class="menu-page">
        <div class="container">
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('menu') }}">Menu</a>
                <a href="#">Over Ons</a>
                <a href="#">Openingstijden</a>
                <a href="{{ route('contact') }}">Contact</a>
            </nav>

            <h1 class="menu-title">Menukaart</h1>

            <section class="menu-grid">
                @forelse($dishes as $dish)
                    <div class="menu-item">
                        <div class="menu-item-image">
                           <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}">
                        </div>

                        <div class="menu-item-content">
                            <h3>{{ $dish->name }}</h3>
                            <p>{{ $dish->description }}</p>
                            <div class="price">€ {{ number_format($dish->price, 2, ',', '.') }}</div>
                        </div>
                    </div>
                @empty
                    <p>Er zijn nog geen gerechten toegevoegd.</p>
                @endforelse
            </section>

            <div class="bottom-space"></div>
        </div>
    </div>
</body>
</html>