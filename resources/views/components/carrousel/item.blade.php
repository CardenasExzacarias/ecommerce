<div class="min-w-full grid grid-cols-2 gap-4">
    <div class="col">
        <img class="w-full h-80 rounded-md" alt="producto" src="{{ $product->image }}">
    </div>
    <div class="col flex flex-col justify-between">
        <div>
            <a href="http://127.0.0.1:8000/product/1">
                <p><b>Código:</b> {{ $product->barcode }}</p>
            </a>
            <p class="py-2"><b>Nombre:</b> {{ $product->name }}</p>
            <p class="py-2"><b>Venta:</b> ${{ $product->sell_price }}</p>
            <p class="py-2"><b>Costo:</b> ${{ $product->buy_cost }}</p>
            <p class="py-2"><b>Ganacia:</b> ${{ $product->sell_price - $product->buy_cost }}</p>
            <p class="py-2"><b>Unidades vendidas:</b> {{ $product->total_quantity }}</p>
        </div>
    </div>
</div>
