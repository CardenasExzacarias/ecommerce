@vite(['resources/js/sidebar.js'])

<aside id="sidebar" class="h-screen bg-white dark:bg-boxdark dark:text-white">
    <div id="logo-container" class="flex flex-col items-center px-4 py-1">
        <img id="logo" src="https://picsum.photos/400/800" alt="Logo de la tienda" class="w-24 h-24 rounded-full">
    </div>
    <div id="title-container" class="flex flex-col items-center px-4 py-1">
        <h1 class="text-xl font-bold text-black dark:text-white tracking-wide">{{ $title }}</h1>
    </div>
    <div class="flex flex-col p-4 space-y-4">
        @foreach ($dropdowns as $dropdown)
            @php
                $title = $dropdown['title'];
                $options = array_map(function ($option) {
                    return $option;
                }, $dropdown['options']);
            @endphp
            <x-bars.side.dropdown :title="$title" :options="$options" />
        @endforeach
    </div>
</aside>
