@vite(['resources/css/app.css', 'resources/js/app.js'])

<form id="search" action="{{route('product.search')}}">
    @csrf
    <input name="name" id="name" type="text">
    <input type="submit" value="Buscar">
</form>
<div id="products"></div>
