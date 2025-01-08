@session('status')
    <div class="status">
        {{ $value }}
    </div>
@endsession

@foreach ($sales as $sale)
    <div class="container">
        <a href="{{ route('sale.show', $sale) }}">Ver venta: {{ $sale->id }}</a>
        <form action="{{ route('sale.destroy', $sale) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar">
        </form>
    </div>
@endforeach
