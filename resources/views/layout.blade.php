@php
    $dropdowns = [
        [
            'title' => 'Productos',
            'options' => [
                ['route' => route('product.index'), 'name' => 'Todos los productos'],
                ['route' => route('product.create'), 'name' => 'Registrar producto'],
            ],
        ],
        [
            'title' => 'Ventas',
            'options' => [
                ['route' => route('ticket.index'), 'name' => 'Todas las ventas'],
                ['route' => route('ticket.create'), 'name' => 'Realizar venta'],
            ],
        ],
        [
            'title' => 'Configuración',
            'options' => [['route' => route('edit'), 'name' => 'Editar usuario']],
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/layout.js'])
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="bg-gray-100 dark:bg-boxdark-2 text-black dark:text-white h-full" id="container">
    <div class="flex">
        <div class="w-2/12">
            <x-bars.side.bar title="Tienda" :dropdowns="$dropdowns" />
        </div>
        <div class="w-10/12">
            <x-bars.top.bar />
            <div class="flex" id="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
