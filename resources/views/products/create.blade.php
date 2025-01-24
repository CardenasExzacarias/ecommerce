@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Información')

@section('content')
    <div class="p-6 m-4 w-full bg-white rounded-lg shadow-md dark:bg-boxdark dark:text-white">
        <h2 class="mb-6 text-xl font-bold text-gray-700 dark:text-white">Crear Nuevo Producto</h2>

        <form action="{{ route('product.store') }}" method="POST" class="space-y-4 dark:bg-boxdark">
            @csrf

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Nombre del
                    Producto</label>
                <input type="text" id="name" name="name" required
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe el nombre del producto" />
            </div>

            <div>
                <label for="barcode" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Código de
                    barras</label>
                <input type="text" id="barcode" name="barcode" required
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe el código de barras del producto" />
            </div>

            <div>
                <label for="sell_price" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white  ">Precio de
                    venta</label>
                <input type="number" id="sell_price" name="sell_price" required min="0" pattern="\d*"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe el precio del producto" />
            </div>

            <div>
                <label for="buy_cost" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Precio de
                    compra</label>
                <input type="number" id="buy_cost" name="buy_cost" required min="0" pattern="\d*"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe el costo de adquisición del producto" />
            </div>

            <div>
                <label for="stock" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Cantidad en
                    Stock</label>
                <input type="number" id="stock" name="stock" required min="0"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe la cantidad de unidades disponibles del producto" />
            </div>

            <div>
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Descripción</label>
                <input type="text" id="description" name="description" required min="0"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white"
                    placeholder="Escribe la descripción del producto" />
            </div>

            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Imagen del
                    Producto</label>
                <input type="text" id="image" name="image"
                    class="px-4 py-2 w-full rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-boxdark dark:text-white" />
            </div>

            @if (session('status'))
                <div id="statusMessage"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg border border-green-300">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex justify-end space-x-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center font-medium text-black dark:text-white hover:text-gray-400 transition-colors duration-300">
                    <svg class="w-8 h-8 inline-block mr-2 text-black dark:text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <g data-name="arrow-back">
                            <path
                                d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z">
                            </path>
                        </g>
                    </svg>
                </a>
                <button type="submit" class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600">
                    Guardar Producto
                </button>
            </div>
        </form>
    </div>
@endsection
