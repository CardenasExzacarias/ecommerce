@vite(['resources/css/app.css', 'resources/js/tickets/index/index.js'])

@extends('layout')

@section('search', route('ticket.index'))

@section('title', 'Venta')

@php
    $titles = array_keys(get_object_vars($sales[0]));
    $barcode = $titles[1];
    $quantity = $titles[6];
@endphp

@section('content')
    <div class="w-full m-4">
        <div class="p-6 bg-white h-full dark:bg-boxdark rounded-lg shadow-md overflow-y-scroll">
            <div class="mb-4 flex flex-row items-center">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center font-medium text-white hover:text-gray-400 transition-colors duration-300">
                    <svg class="w-8 h-8 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <g data-name="arrow-back">
                            <path
                                d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z">
                            </path>
                        </g>
                    </svg>
                </a>
                <p><b>Folio:</b> {{ $ticket->folio }}</p>
            </div>
            <table class="w-full">
                <x-table.head :titles="$titles" />
                <tbody>
                    @foreach ($sales as $sale)
                        <x-table.body.tr>
                            <x-table.body.img :src="$sale->Imagen" :alt="$sale->Nombre" />
                            <x-table.body.text :text="$sale->$barcode" />
                            <x-table.body.text :text="$sale->Nombre" />
                            <x-table.body.text :text="$sale->Precio" />
                            <x-table.body.text :text="$sale->Costo" />
                            <x-table.body.text :text="$sale->Ganancia" />
                            <x-table.body.text :text="$sale->$quantity" />
                        </x-table.body.tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 flex flex-row-reverse">
                <p><b>Fecha y Hora de la venta:</b> {{ $ticket->created_at }}</p>
            </div>
        </div>
    </div>
@endsection
