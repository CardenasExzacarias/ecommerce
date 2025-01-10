@vite(['resources/css/app.css', 'resources/js/app.js'])

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


<form id="search" action="{{ route('product.search') }}">
    @csrf
    <input name="name" id="name" type="text">
    <input type="submit" value="Buscar">
</form>
<div class="flex justify-between">
    <div id="products"></div>
    <div id="cart-container">
        <form id="store" action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div id='cart'></div>
            <button>Guardar Compra</button>
        </form>
    </div>
</div>
