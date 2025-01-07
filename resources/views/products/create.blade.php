<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @session('status')
        <div class="status">
            {{ $value }}
        </div>
    @endsession
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <input style="background-color: #e05" type="text" name="name" id="name" value="{{ old('name') }}" />
        @error('name')
            <li>{{ $message }}</li>
        @enderror
        <input style="background-color: #e50" type="text" name="price" id="price"
            value="{{ old('price') }}" />
        @error('price')
            <li>{{ $message }}</li>
        @enderror
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
