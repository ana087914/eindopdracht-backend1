<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial;
            padding: 40px;
        }

        input, textarea {
            width: 400px;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 15px;
        }

        .success {
            background: green;
            padding: 10px;
            margin-bottom: 20px;
        }

        a {
            color: pink;
        }
    </style>
</head>
<body>

    <h1>Contact Us</h1>

    <a href="{{ route('home') }}">Home</a>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <div>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div>
            <textarea name="message" placeholder="Message"></textarea>
        </div>

        <button type="submit">Send</button>
    </form>

</body>
</html>