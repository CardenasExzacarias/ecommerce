@vite(['resources/css/app.css', 'resources/js/tickets/create.js'])

<body class="p-8 bg-gray-100 h-screen">
    <div class="flex flex-col h-full">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="p-4 bg-white rounded-lg shadow-md w-1/4 flex items-center">
            <form class="m-0 flex items-center" id="search" action="{{ route('product.search') }}">
                @csrf
                <input name="name" id="name" type="text">
                <button>Buscar</button>
            </form>
        </div>
        <div class="mt-4 h-full" id="products-cart-container">
            <div class="flex h-full">
                <div class="w-1/2 mr-4 overflow-y-scroll bg-white rounded-lg shadow-md" id="products"></div>
                <div class="w-1/2 ml-4 bg-white rounded-lg shadow-md" id="cart-container">
                    <form class="h-full relative" id="store" action="{{ route('ticket.store') }}" method="POST">
                        @csrf
                        <div class="overflow-y-scroll" id='cart'></div>
                        <div class="absolute bottom-0 w-full" id="store_container_submit">
                            <div class="flex justify-center w-full">
                                <button class="bg-primary text-white p-2 my-4 rounded" id="store_submit">
                                    Guardar Compra
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
