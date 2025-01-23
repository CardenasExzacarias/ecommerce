<script>
    const tickets = @json(
        $monthlySales->map(function ($sale) {
            unset($sale->tickets);
            return $sale;
        }));
    console.log(tickets);
</script>

@vite(['resources/css/app.css', 'resources/js/tickets/index/index.js'])

@extends('layout')

@section('search', route('ticket.index'))

@section('title', 'Ventas')

@section('content')
    <div class="flex flex-row">
        <div class="w-6/12 mt-4 ml-2">
            <div class="p-6 bg-white dark:bg-boxdark rounded-lg shadow-md">
                @session('status')
                    <div class="status">
                        {{ $value }}
                    </div>
                @endsession
                <x-table.table :edit="false" :elements="$tickets" prefix="ticket" id="Folio" />
                <div class="flex justify-between items-center mt-4">
                    <p class="text-gray-600">Mostrando {{ $tickets->firstItem() }} a {{ $tickets->lastItem() }} de
                        {{ $tickets->total() }} Ventas</p>
                    <div class="flex items-center space-x-1">
                        {{ $tickets->appends(['search' => request()->query('search')])->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="w-6/12 m-4">
            <div
                class="col-span-12 rounded-sm border border-stroke bg-white px-5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8">
                <x-charts.profit />
                <div>
                    <div id="revenue"></div>
                </div>
            </div>
            <div class="mt-4 p-6 w-full bg-white rounded-lg shadow-md">
                <div class="relative w-full overflow-hidden">
                    <div class="flex transition-transform duration-700 ease-in-out" id="carousel">
                        @foreach ($monthTop as $product)
                            <x-carrousel.item :product="$product" />
                        @endforeach
                    </div>
                    <button id="prev-slide"
                        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2">
                        &#10094;
                    </button>
                    <button id="next-slide"
                        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2">
                        &#10095;
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection