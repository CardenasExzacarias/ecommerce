@vite(['resources/js/darkmode.js'])

<div class="py-4 px-6 w-full bg-white dark:bg-boxdark border-b border-stroke dark:border-strokedark shadow-sm" id="topbar">
    <div class="flex items-center justify-between">
        <!-- Formulario de búsqueda -->
        <form id="search" action="@yield('search')" class="flex items-center flex-row p-0 m-0 flex-grow max-w-lg">
            <button class="h-8 w-8 flex items-center justify-center text-gray-500 hover:text-primary dark:text-gray-400 dark:hover:text-primary transition-colors">
                @svg('eva-search-outline', 'w-5 h-5') <!-- Ícono de búsqueda -->
            </button>
            <input class="w-full ml-2 outline-none bg-transparent text-gray-700 placeholder-gray-500 dark:text-gray-300 dark:placeholder-gray-400 focus:ring-0" type="text" name="search" placeholder="Buscar...">
        </form>

        <!-- Botón de modo oscuro -->
        <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
            <span id="theme-icon" class="text-gray-700 dark:text-gray-300">
                <!-- Ícono de luna (modo oscuro) -->
                <span id="moon-icon" class="hidden">@svg('eva-moon', 'w-6 h-6')</span>
                <!-- Ícono de sol (modo claro) -->
                <span id="sun-icon" class="hidden">@svg('eva-sun', 'w-6 h-6')</span>
            </span>
        </button>
    </div>
</div>