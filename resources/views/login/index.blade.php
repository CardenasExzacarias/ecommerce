@extends('login.layout')

@section('title', 'Inicio de sesión')

{{-- style="width: 1000px !important;" --}}

@section('content')
    <div
        class="md:w-100 sm:w-80 p-4 rounded-md border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="p-4">
            <h2 class="text-center mb-9 text-2xl font-bold text-black dark:text-white">
                Iniciar sesión
            </h2>
            <form action="{{route('login.attempt')}}" method="POST">
                @csrf
                <div class="my-4">
                    <label class="block font-medium text-black dark:text-white">Correo Electrónico</label>
                    <div class="my-4">
                        <input name="email" type="email" placeholder="Ingresa tu correo"
                            class="w-full rounded-lg border border-stroke bg-transparent p-4 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    </div>
                </div>
                <div class="my-4">
                    <label class="font-medium text-black dark:text-white">Contraseña</label>
                    <div class="my-4">
                        <input name="password" type="password" placeholder="Ingresa tu contraseña"
                            class="w-full rounded-lg border border-stroke bg-transparent p-4 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    </div>
                </div>
                <div class="my-4">
                    <button class="w-full cursor-pointer rounded-lg border bg-primary p-4 font-medium text-white transition hover:bg-opacity-90">
                        Continuar
                    </button>
                </div>
            </form>
            <div class="text-end">
                <a class="text-sm hover:text-primary" href="{{route('login.identify')}}">Olvidé mi contraseña</a>
            </div>
        </div>
    </div>
@endsection
