<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    @vite(['resources/css/app.css', 'resources/js/products/statusTime.js'])
</head>
<body class="p-8 bg-gray-100">
    <div class="p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-xl font-bold text-gray-700">Editar Producto</h2>

        <form action="{{ route('product.update',$product->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nombre del Producto</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    required
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Escribe el nombre del producto"
                />
            </div>

            <div>
                <label for="sell_price" class="block mb-2 text-sm font-medium text-gray-700">Precio de venta</label>
                <input
                    type="number"
                    id="sell_price"
                    name="sell_price"
                    value="{{ old('sell_price', $product->sell_price) }}"
                    required
                    min="0"
                    step="0.01"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Escribe el precio del producto"
                />
            </div>

            <div>
                <label for="buy_cost" class="block mb-2 text-sm font-medium text-gray-700">Precio de compra</label>
                <input
                    type="number"
                    id="buy_cost"
                    name="buy_cost"
                    value="{{ old('buy_cost', $product->buy_cost) }}"
                    required
                    min="0"
                    step="0.01"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Escribe el precio del producto"
                />
            </div>

            <div>
                <label for="stock" class="block mb-2 text-sm font-medium text-gray-700">Cantidad en Stock</label>
                <input
                    type="number"
                    id="stock"
                    name="stock"
                    value="{{ old('stock', $product->stock) }}"
                    required
                    min="0"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Escribe la cantidad disponible"
                />
            </div>

            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Descripción</label>
                <input
                    type="text"
                    id="description"
                    name="description"
                    value="{{ old('description', $product->description) }}"
                    required
                    min="0"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Escribe la descripción del producto"
                />
            </div>

            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-700">Imagen del Producto</label>
                <input
                    type="text"
                    id="image"
                    name="image"
                    value="{{ old('image', $product->image) }}"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                />
            </div>

            @if (session('status'))
                <div
                    id="statusMessage"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg border border-green-300">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex justify-end space-x-4">
                <a href="{{ route('product.index') }}" class="px-4 py-2 font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
                    Cancelar
                </a>
                <button type="submit" class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>

</body>
</html>
