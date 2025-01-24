@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Información')

@section('content')
    <div class="flex justify-center items-center w-full">
        <div
            class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 max-w-4xl dark:bg-boxdark dark:text-white">
            <div class="w-full md:w-1/3 overflow-hidden">
                <img src="https://aguacatec.es/wp-content/uploads/2023/10/e5a978b8-6772-4c85-a50e-15581af7d483.png"
                    alt="Imagen de {{ $product->name }}"
                    class="object-cover w-full h-64 md:h-full rounded-t-lg md:rounded-l-lg md:rounded-tr-none transition-transform duration-300 hover:scale-105">
            </div>
            <div class="w-full md:w-2/3 p-6 text-center md:text-left">
                <h2 class="mb-4 text-2xl font-bold">{{ $product->name }}</h2>
                <p class="mb-6 text-base leading-relaxed"><strong>Código de barras:
                    </strong>{{ $product->barcode }}</p>
                <p class="mb-6 text-base leading-relaxed"><strong>Precio de venta:
                    </strong>${{ number_format($product->sell_price, 2) }}</p>
                <p class="mb-6 text-base leading-relaxed"><strong>Precio de compra:
                    </strong>${{ number_format($product->buy_cost, 2) }}</p>
                <p class="mb-6 text-base leading-relaxed">
                    <strong>Disponibles:</strong> {{ $product->stock }}
                </p>
                <p class="mb-6 text-bas leading-relaxed">
                    <strong>Descripción: </strong> {{ $product->description }}
                </p>
                <p class="mb-6 text-bas">
                    <strong>Última modificación:</strong> {{ $product->updated_at }}
                </p>
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center font-medium text-black dark:text-white hover:text-gray-400 transition-colors duration-300">
                     <svg class="w-8 h-8 inline-block mr-2 text-black dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                          viewBox="0 0 24 24">
                         <g data-name="arrow-back">
                             <path
                                 d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z">
                             </path>
                         </g>
                     </svg>
                 </a>
            </div>
        </div>
    </div>
@endsection