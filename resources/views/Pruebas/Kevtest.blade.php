<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto de Muestra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">

    <div class="flex bg-white rounded-lg shadow-md">
        <!-- Imagen del producto -->
        <div class="w-1/3">
            <img
                src="https://picsum.photos/400/800"
                alt="Producto de Muestra"
                class="object-cover w-full h-full rounded-l-lg">
        </div>

        <!-- Detalles del producto -->
        <div class="flex flex-col justify-center items-center p-6 w-2/3 text-center">
            <h2 class="mb-2 text-3xl font-bold text-gray-800">$9.95</h2>
            <p class="mb-4 text-lg font-semibold text-gray-600">PRODUCTO DE MUESTRA</p>
            <p class="mb-6 text-sm text-gray-500">
                Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.
            </p>
            <button
                class="px-6 py-2 font-bold text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                AGREGAR AL CARRITO
            </button>
        </div>
    </div>

</body>
</html>
