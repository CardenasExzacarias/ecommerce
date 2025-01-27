@vite(['resources/css/app.css', 'resources/js/tickets/create.js'])

@extends('layout')

@section('search', route('product.search'))

@section('title', 'Vender')

@section('content')
    <div class="w-1/2 m-4 mr-2 overflow-y-scroll bg-white rounded-lg shadow-md dark:bg-boxdark" id="products"></div>
    <div class="w-1/2 m-4 ml-2 bg-white rounded-lg shadow-md dark:bg-boxdark" id="cart-container">
        <form class="h-full relative" id="store" action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div class="overflow-y-scroll h-150" id='cart'></div>
            <div class="absolute bottom-0 w-full" id="store_container_submit">
                <div class="flex justify-center w-full">
                    <button class="bg-primary text-white p-2 my-4 rounded" id="store_submit">
                        Guardar Compra
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

{{-- @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif --}}
{{-- <div class="p-4 bg-white rounded-lg shadow-md w-1/4 flex items-center">
<form class="m-0 flex items-center" id="search" action="{{ route('product.search') }}">
    @csrf
    <input class="px-4 py-2 w-1/3 rounded-md border border-gray-300" name="name" id="name" type="text" placeholder="Buscar...">
    <button class="bg-primary rounded-md px-4 py-2 ml-4 font-bold text-white">Buscar</button>
</form>
</div> --}}
