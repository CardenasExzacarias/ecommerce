@vite(['resources/css/app.css'])

@extends('layout')

@section('title', 'Ventas')

@section('content')
    <div class="p-6 bg-white rounded-lg shadow-md">
        @session('status')
            <div class="status">
                {{ $value }}
            </div>
        @endsession
        <x-table.table :elements="$tickets" prefix="ticket" id="Folio" />
        <div class="flex justify-between items-center mt-4">
            <p class="text-gray-600">Mostrando {{ $tickets->firstItem() }} a {{ $tickets->lastItem() }} de
                {{ $tickets->total() }} Ventas</p>
            <div class="flex items-center space-x-1">
                {{ $tickets->appends(['name' => request()->query('name')])->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection
