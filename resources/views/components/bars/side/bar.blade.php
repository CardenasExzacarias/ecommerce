@vite(['resources/js/sidebar.js'])

<aside id="sidebar"
    class="absolute left-0 top-0 z-9999 flex h-screen flex-col overflow-y-hidden ease-linear bg-white rounded-lg shadow-md dark:bg-boxdark dark:text-white lg:static">
    <div class="flex flex-col items-center px-4 py-5 border-b border-strokedark">
        <img src="https://picsum.photos/400/800" alt="Logo de la tienda" class="w-24 h-24 mb-3 rounded-full">
        <h1 class="text-xl font-bold text-black dark:text-white tracking-wide">TIENDA</h1>
    </div>

    <div class="flex flex-col p-4 space-y-4">
        <div class="relative dropdown-container">
            <button
                class="dropdown-button flex items-center justify-between w-full px-4 py-2 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <span>Productos</span>
                <svg class="dropdown-arrow w-4 h-4 transform transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div class="ml-4 mt-1 space-y-2 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <a href="{{ route('product.index') }}"
                    class="block px-4 py-2 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    Tabla de productos
                </a>
                <a href="{{ route('product.create') }}"
                    class="block px-4 py-2 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    Crear producto
                </a>
            </div>
        </div>

        <div class="relative dropdown-container">
            <button
                class="dropdown-button flex items-center justify-between w-full px-4 py-2 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <span>Tickets</span>
                <svg class="dropdown-arrow w-4 h-4 transform transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div class="ml-4 mt-1 space-y-2 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <a href="{{ route('ticket.index') }}"
                    class="block px-4 py-2 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    Tabla de tickets
                </a>
                <a href="{{ route('ticket.create') }}"
                    class="block px-4 py-2 text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    Crear ticket
                </a>
            </div>
        </div>

        <div class="mt-auto border-strokedark">
            <a href="{{ route('configuration.index') }}"
                class="flex items-center justify-between w-full px-4 py-2 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                Configuración
            </a>
        </div>

    </div>
</aside>