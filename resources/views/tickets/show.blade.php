@foreach ($sales as $sale)
    <p>Producto: {{ $sale->name }}</p>
    <p>Precio de venta: {{ $sale->sell_price }}</p>
    <p>Cantidad vendida: {{ $sale->quantity }}</p>
@endforeach

<p>Fecha y Hora de la venta: {{$ticket->created_at}}</p>
