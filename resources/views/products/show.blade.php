@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Información')

@section('content')

    <div class="flex justify-center items-center min-h-screen bg-gray-50 dark:bg-boxdark dark:text-white">
        <div
            class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 w-full max-w-4xl mx-4 dark:bg-boxdark dark:text-white">
            <div class="w-full md:w-1/3 overflow-hidden">
                <img src="https://aguacatec.es/wp-content/uploads/2023/10/e5a978b8-6772-4c85-a50e-15581af7d483.png"
                    alt="Imagen de {{ $product->name }}"
                    class="object-cover w-full h-64 md:h-full rounded-t-lg md:rounded-l-lg md:rounded-tr-none transition-transform duration-300 hover:scale-105">
            </div>
            <div class="w-full md:w-2/3 p-6 text-center md:text-left">
                <h2 class="mb-4 text-2xl font-bold text-gray-900">{{ $product->name }}</h2>
                <p class="mb-6 text-base text-gray-600 leading-relaxed"><strong>Código de barras:
                    </strong>{{ $product->barcode }}</p>
                <p class="mb-6 text-base text-gray-600 leading-relaxed"><strong>Precio de venta:
                    </strong>${{ number_format($product->sell_price, 2) }}</p>
                <p class="mb-6 text-base text-gray-600 leading-relaxed"><strong>Precio de compra:
                    </strong>${{ number_format($product->buy_cost, 2) }}</p>
                <p class="mb-6 text-base text-gray-600 leading-relaxed">
                    <strong>Disponibles:</strong> {{ $product->stock }}
                </p>
                <p class="mb-6 text-base text-gray-600 leading-relaxed">
                    <strong>Descripción: </strong> {{ $product->description }}
                </p>
                <p class="mb-6 text-base text-gray-600">
                    <strong>Última modificación:</strong> {{ $product->updated_at }}
                </p>
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-6 py-3 font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    @svg('eva-arrow-back-outline', 'w-8 h-8 inline-block mr-2')
                    Regresar
                </a>
            </div>
        </div>
    </div>
@endsection
