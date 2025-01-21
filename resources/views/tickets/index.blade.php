<script>
    const tickets = @json($tickets);
</script>

@vite(['resources/css/app.css', 'resources/js/tickets/index/index.js'])

@extends('layout')

@section('title', 'Ventas')

@section('content')
    <div class="flex flex-row">
        <div class="w-6/12 mt-4 ml-2">
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
        </div>
        <div class="w-6/12 m-4">
            <div class="p-6 w-full bg-white rounded-lg shadow-md" id="revenue">
            </div>
            <div class="mt-4 p-6 w-full bg-white rounded-lg shadow-md" id="">
                {{-- <div class="col">
                    <img class="w-full h-80 rounded-md" alt="Imagen del producto" src="https://picsum.photos/400/800">
                </div>
                <div class="col flex flex-col justify-between">
                    <div>
                        <a href="http://127.0.0.1:8000/product/1">
                            <p class="font-semibold">Wallet</p>
                        </a>
                        <p class="py-2">$816</p>
                        <p class="py-2">Keep your essentials organized and stylish with this durable leather wallet,
                            designed for both men and women.</p>
                    </div>
                    <div class="flex items-center justify-center space-x-4">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
