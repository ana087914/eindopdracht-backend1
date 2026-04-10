<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Dish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #111;
            color: white;
            padding: 30px;
        }

        input, textarea {
            width: 400px;
            max-width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 15px;
            cursor: pointer;
        }

        .error-list {
            margin-bottom: 20px;
            color: #ff9ea9;
        }

        a {
            color: #ffb6d9;
        }
    </style>
</head>
<body>
    <h1>Add New Dish</h1>

    <p><a href="{{ route('dishes.index') }}">Back to dishes</a></p>

    @if($errors->any())
        <div class="error-list">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dishes.store') }}" method="POST">
        @csrf

        <div>
            <label>Name</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label>Description</label><br>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label>Price</label><br>
            <input type="text" name="price" value="{{ old('price') }}">
        </div>

        <div>
            <label>Image filename</label><br>
            <input type="text" name="image" value="{{ old('image') }}" placeholder="ex: zalm.png">
        </div>

        <button type="submit">Save Dish</button>
    </form>
</body>
</html>