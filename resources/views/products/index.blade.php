@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Productos')

@section('content')

    @if (session('status'))
    <div id="statusMessage"
        class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg border border-red-300">
        {{ session('status') }}
    </div>
    @endif

    <!--
        <div class="flex items-center mb-">
            <a href="{{ route('product.create') }}"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">
                Crear Producto
            </a>
        </div>
     -->

    <div class="w-full m-4 p-6 bg-white rounded-lg shadow-md dark:bg-boxdark dark:text-white ">
        <x-table.table :elements="$products" prefix="product" id="Codigo de barras" />

        <div class="flex justify-between items-center mt-4">
            <p class="text-gray-600 dark:text-white">
                Mostrando {{ $products->firstItem() }} a {{ $products->lastItem() }} de {{ $products->total() }}
                productos </p>
            <div class="flex items-center space-x-1">
                {{ $products->appends(['name' => request()->query('name')])->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
