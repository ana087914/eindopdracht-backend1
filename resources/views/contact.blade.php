@extends('layouts.app')

@section('content')

<style>
    .contact-page {
        min-height: 100vh;
        background-image: linear-gradient(rgba(20, 0, 20, 0.5), rgba(20, 0, 20, 0.5)), url('{{ asset('images/sushi1.jpg') }}');
        background-size: cover;
        background-position: center;
        padding-top: 120px;
        color: white;
        text-align: center;
    }

    .contact-box {
        background: rgba(255,255,255,0.2);
        width: 400px;
        max-width: 90%;
        margin: auto;
        padding: 30px;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
    }

    button {
        padding: 10px 15px;
        cursor: pointer;
    }

    .success {
        background: green;
        padding: 10px;
        margin-bottom: 15px;
    }
</style>

<div class="contact-page">

    <h1>Contact</h1>

    <div class="contact-box">

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message" placeholder="Message"></textarea>

            <button type="submit">Send</button>
        </form>

    </div>

</div>

@endsection