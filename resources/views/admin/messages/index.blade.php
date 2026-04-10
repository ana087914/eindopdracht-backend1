<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial;
            padding: 30px;
        }

        .message {
            background: #222;
            padding: 20px;
            margin-bottom: 20px;
        }

        a {
            color: pink;
        }
    </style>
</head>
<body>

    <h1>Messages</h1>

    <a href="{{ route('home') }}">Home</a>

    @foreach($messages as $message)
        <div class="message">
            <h3>{{ $message->name }}</h3>
            <p>{{ $message->email }}</p>
            <p>{{ $message->message }}</p>
        </div>
    @endforeach

</body>
</html>