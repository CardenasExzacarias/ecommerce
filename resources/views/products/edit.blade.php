<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <input style="background-color: #e05" type="text" name="name" id="name"
            value="{{ old('name', $product->name) }}" />
        @error('name')
            <li>{{ $message }}</li>
        @enderror

        <input style="background-color: #e50" type="number" name="price" id="price"
            value="{{ old('price', $product->price) }}" />
        @error('price')
            <li>{{ $message }}</li>
        @enderror

        <input style="background-color: #e75 " type="number" name="stock" id="stock"
            value="{{ old('stock', $product->stock) }}" />
        @error('stock')
            <li>{{ $message }}</li>
        @enderror

        <input style="background-color: #e90" type="text" name="image" id="image"
            value="{{ old('image', $product->image) }}" />
        @error('image')
            <li>{{ $message }}</li>
        @enderror

        <input type="submit" value="Actualizar">
    </form>
</body>

</html>
