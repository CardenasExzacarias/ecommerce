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
                @csrf
                <div class="flex items-center mb-4">
                    <input type="text" name="name" placeholder="Buscar..." value="{{ request()->query('name') }}"
                        class="px-4 py-2 w-1/3 rounded-md border border-gray-300" />
                    <input type="hidden" name="index" value="true" />
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

        <table class="w-full border border-gray-300 border-collapse table-auto">
            <thead class="text-gray-700 bg-orange-100">
                <tr>
                    <th class="px-4 py-2 text-center border border-gray-300">Imagen</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Codigo de barras</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Nombre</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Precio</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Cantidad</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Ultima modificación</th>
                    <th class="px-4 py-2 text-center border border-gray-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">
                            <img src="{{ $product->image }}" alt="Imagen del producto"
                                class="object-cover mx-auto w-16 h-16 rounded-md">
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">{{ $product->id }}</td>
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">{{ $product->name }}</td>
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">${{ $product->price }}</td>
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">{{ $product->stock }}</td>
                        <td class="px-6 py-4 text-sm text-center text-gray-700 border-b">{{ $product->updated_at }}</td>
                        <td class="px-6 py-4 text-center border-b">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="text-green-500 hover:text-green-700">
                                    @svg('eva-eye', 'w-8 h-8 inline-block')
                                </a>
                                <a href="{{ url('product/' . $product->id . '/edit') }}"
                                    class="text-blue-500 hover:text-blue-700">
                                    @svg('eva-edit', 'w-8 h-8 inline-block')
                                </a>
                                <form
                                    action="{{ route('product.destroy', ['product' => $product->id, 'page' => $products->currentPage()]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        @svg('eva-trash', 'w-8 h-8 inline-block')
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-between items-center mt-4">
            <p class="text-gray-600">Mostrando {{ $products->firstItem() }} a {{ $products->lastItem() }} de
                {{ $products->total() }} productos</p>
            <div class="flex items-center space-x-1">
                {{ $products->appends(['name' => request()->query('name')])->links() }}
            </div>
        </div>

    </div>
</body>

</html>
