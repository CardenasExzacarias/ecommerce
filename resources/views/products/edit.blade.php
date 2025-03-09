@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Productos')

@section('content')
    <div class="p-6 m-4 w-full bg-white rounded-lg shadow-md dark:bg-boxdark dark:text-white">
        <h2 class="mb-6 text-xl font-bold text-gray-700 dark:text-white">Editar Producto</h2>
        <form action="{{ route('product.update', $product->barcode) }}" method="POST" enctype="multipart/form-data"
        class="space-y-4 dark:bg-boxdark">
        @csrf
        @method('PATCH')
        <x-form.input type="text" name="name" :required="true" label="Nombre del producto"
            placeholder="Escribe el nombre del producto" value="{{ old('name', $product->name) }}" />
        <x-form.input type="text" name="barcode" :required="true" label="Código de barras"
            placeholder="Escribe el código de barras" value="{{ old('barcode', $product->barcode) }}"  />
        <x-form.input type="number" name="sell_price" :required="true" label="Precio de venta"
            placeholder="Escribe el precio del producto" value="{{ old('sell_price', $product->sell_price) }}" />
        <x-form.input type="number" name="buy_cost" :required="true" label="Costo de compra"
            placeholder="Escribe el costo de compra del producto" value="{{ old('buy_cost', $product->buy_cost) }}" />
        <x-form.input type="number" name="stock" :required="true" label="Cantidad en inventario"
            placeholder="Escribe la cantidad en inventario" value="{{ old('stock', $product->stock) }}" />
        <x-form.input type="file" name="image" label="Imágen del producto"
            value="{{ old('image', $product->image) }}" />
        <x-form.textarea type="text" name="description" :required="true" label="Descripción del producto"
            value="{{ old('description', $product->description) }}" />
        <div class="flex justify-end space-x-4">
            <button type="submit"
                class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600">
                Guardar Producto
            </button>
        </div>
    </form>
    </div>
@endsection
