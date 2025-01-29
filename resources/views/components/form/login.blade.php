<div
    class="md:w-100 sm:w-80 p-4 rounded-md border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
    <div class="p-4">
        <h2 class="text-center mb-9 text-2xl font-bold text-black dark:text-white">
            {{ $title }}
        </h2>
        <form action="{{ $action }}" method="{{ $method }}">
            @csrf
            <div class="my-4">
                <x-form.input label="Correo Electrónico" name="email" type="emaiñ"
                    placeholder="Ingrese su correo electrónico" />
            </div>
            <div class="my-4">
                <x-form.input label="Contraseña" name="password" type="password" placeholder="Ingrese su contraseña" />
            </div>
            {{ $slot }}
            <div class="my-4">
                <button
                    class="w-full cursor-pointer rounded-lg bg-primary p-4 font-medium text-white transition hover:bg-opacity-90">
                    Continuar
                </button>
            </div>
        </form>
        <div class="text-end">
            <a class="text-sm hover:text-primary" href="{{ route('login.identify') }}">Olvidé mi contraseña</a>
        </div>
    </div>
</div>
