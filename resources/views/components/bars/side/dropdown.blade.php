<div class="relative dropdown-container">
    <button
        class="dropdown-button flex items-center justify-between w-full px-4 py-2 text-left rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
        <span>{{ $title }}</span>
        <svg class="dropdown-arrow w-4 h-4 transform transition-transform" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div class="ml-4 mt-1 space-y-2 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
        @foreach ($options as $option)
            <x-bars.side.option :route="$option['route']" :name="$option['name']" />
        @endforeach
    </div>
</div>
