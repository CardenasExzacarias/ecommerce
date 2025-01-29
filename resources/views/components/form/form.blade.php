<div
    class="md:w-100 sm:w-80 p-4 rounded-md border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
    <div class="p-4">
        <form action="{{ $action }}" method="{{ $method == 'GET' ? $method : 'POST' }}">
            {{ $slot }}
            <x-form.submit>
                Continuar
            </x-form.submit>
            @csrf
            @if ($method != 'GET' || $method != 'POST')
                @method($method)
            @endif
        </form>
    </div>
</div>
