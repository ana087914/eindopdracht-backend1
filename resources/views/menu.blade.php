@extends('layouts.app')

@section('content')

<style>
    .menu-page {
        min-height: 100vh;
        background-image: linear-gradient(rgba(20, 0, 20, 0.35), rgba(20, 0, 20, 0.35)), url('{{ asset('images/sushi1.jpg') }}');
        background-size: cover;
        background-position: center;
        padding-top: 120px;
        color: white;
    }

    .menu-title {
        text-align: center;
        font-size: 70px;
        margin-bottom: 60px;
        font-weight: 300;
    }

    .menu-grid {
        width: 90%;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .menu-item {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .menu-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        background: white;
    }

    .menu-item-content h3 {
        font-size: 28px;
        margin-bottom: 5px;
    }

    .menu-item-content p {
        font-size: 16px;
        opacity: 0.9;
    }

    .price {
        margin-top: 8px;
        color: gold;
        font-size: 20px;
    }

    @media (max-width: 900px) {
        .menu-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="menu-page">

    <h1 class="menu-title">Menukaart</h1>

    <div class="menu-grid">
        @forelse($dishes as $dish)
            <div class="menu-item">
                <img src="{{ asset('images/' . $dish->image) }}" alt="{{ $dish->name }}">

                <div class="menu-item-content">
                    <h3>{{ $dish->name }}</h3>
                    <p>{{ $dish->description }}</p>
                    <div class="price">€ {{ number_format($dish->price, 2, ',', '.') }}</div>
                </div>
            </div>
        @empty
            <p>Geen gerechten gevonden.</p>
        @endforelse
    </div>

</div>

@endsection