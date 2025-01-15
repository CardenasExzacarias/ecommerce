<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="flex bg-white rounded-lg shadow-md">
        <div class="w-1/3">
            <img
                src="https://picsum.photos/400/800"
                alt="Info del producto"
                class="object-cover w-full h-full rounded-l-lg">
        </div>

        <div class="flex flex-col justify-center items-center p-6 w-2/3 text-center">
            <h2 class="mb-2 text-3xl font-bold text-gray-800">{{ $product->name }}</h2>
            <p class="mb-4 text-lg font-semibold text-gray-700"><strong>Precio de venta: </strong>${{ number_format($product->sell_price, 2) }}</p>
            <p class="mb-4 text-lg font-semibold text-gray-700"><strong>Precio de compra: </strong>${{ number_format($product->buy_cost, 2) }}</p>
            <p class="mb-2 text-sm text-gray-600">
            <strong>Disponibles:</strong> {{ $product->stock }}
            </p>
            <p class="mb-6 text-sm text-gray-700">
                <strong>Descripción: </strong> {{ $product->description }}
            </p>
            <p class="mb-6 text-sm text-gray-600">
                <strong> Ultima modificación:</strong> {{ $product->updated_at }}
            </p>
            <a href="{{ route('product.index') }}" class="px-4 py-2 font-medium text-gray-700 bg-blue-200 rounded-md hover:bg-blue-300">
                Regresar
            </a>
        </div>
    </div>
</body>
</html>
