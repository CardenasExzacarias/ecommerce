<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-8 bg-gray-100">
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    <div class="p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-xl font-bold">Lista de productos</h2>
        <div class="flex items-center mb-3">
            <form action="{{ route('product.index') }}" method="GET">
                <div class="flex items-center mb-4">
                    <input type="text" name="name" placeholder="Buscar..." value="{{ request()->query('name') }}"
                        class="px-4 py-2 w-1/3 rounded-md border border-gray-300" />
                    <input type="submit" value="Buscar Producto"
                        class="px-4 py-2 ml-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-600" />
                </div>
                <div class="flex items-center mb-4">
                    <a href="{{ route('product.create') }}"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">
                        Crear Producto
                    </a>
                </div>
            </form>
        </div>

        <x-table.table :elements="$products" prefix="product" id="id" />

        <div class="flex justify-between items-center mt-4">
            <p class="text-gray-600">
                Mostrando {{ $products->firstItem() }} a {{ $products->lastItem() }} de {{ $products->total() }} productos
            </p>
            <div class="flex items-center space-x-1">
                {{ $products->appends(['name' => request()->query('name')])->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</body>
</html>
