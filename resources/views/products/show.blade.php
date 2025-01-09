<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $product->name }}</h2>
    <img src="{{$product->image }}" alt="{{ $product->name }}">
    <p><strong>Precio: </strong> ${{ number_format($product->price, 2) }}</p>
    <p><strong>Cantidad: </strong> {{ $product->stock }}</p>
    <p><strong>Creado el: </strong> {{ $product->created_at->format('d/m/Y') }}</p>

    <a href="{{ route('product.index') }}" class="btn">Volver a la lista de productos</a>
</body>
</html>
