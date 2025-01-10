<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-8 bg-gray-100">
    @if (session('status'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-md border border-green-400">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-6">
        <a href="{{ url('product/'.'create') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">
            Crear Producto
        </a>
    </div>

    <h1 class="mb-6 text-2xl font-bold">Lista de Productos</h1>

    @if($products->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg border border-gray-200 shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">ID</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Nombre</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Precio</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Cantidad</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Imagen</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Ver</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Editar</th>
                        <th class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700 border-b">{{ $product->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 border-b">{{ $product->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 border-b">${{ $product->price }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 border-b">{{ $product->stock }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700 border-b">{{ $product->image }}</td>
                            <td class="px-6 py-4 border-b">
                                <a href="{{ route('product.show', $product->id) }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-600">
                                    Ver
                                </a>
                            </td>
                            <td class="px-6 py-4 border-b">
                                <a href="{{ url('product/' . $product->id . '/edit') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">
                                    Editar
                                </a>
                            </td>
                            <td class="px-6 py-4 border-b">
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-600">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="mt-4 text-gray-600">No hay productos disponibles.</p>
    @endif
</body>
</html>
