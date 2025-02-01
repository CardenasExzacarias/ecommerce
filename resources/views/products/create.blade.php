@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Información')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="p-6 m-4 w-full bg-white rounded-lg shadow-md dark:bg-boxdark dark:text-white">
        <h2 class="text-xl font-bold text-gray-700 dark:text-white">Crear Nuevo Producto</h2>
        <div class="my-4">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4 dark:bg-boxdark">
                @csrf
                <x-form.input type="text" name="name" :required="true" label="Nombre del producto"
                    placeholder="Escribe el nombre del producto" />
                <x-form.input type="text" name="barcode" :required="true" label="Código de barras"
                    placeholder="Escribe el código de barras" />
                <x-form.input type="number" name="sell_price" :required="true" label="Precio de venta"
                    placeholder="Escribe el precio del producto" />
                <x-form.input type="number" name="buy_cost" :required="true" label="Costo de compra"
                    placeholder="Escribe el costo de compra del producto" />
                <x-form.input type="number" name="stock" :required="true" label="Cantidad en inventario"
                    placeholder="Escribe la cantidad en inventario" />
                <x-form.input type="file" name="image" :required="true" label="Imágen del producto" />
                <x-form.textarea type="text" name="description" :required="true" label="Descripción del producto" />
                <div class="flex justify-end space-x-4">
                    <button type="submit"
                        class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600">
                        Guardar Producto
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
