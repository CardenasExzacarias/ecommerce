@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Configuración')

@section('content')
    <div class="h-full w-full flex justify-center items-center">
        <x-form.form title="Editar usuario" :action="route('user.update')" method="PATCH">
            <x-form.title>
                Actualizar usuario
            </x-form.title>
            @session('status')
                <div class="my-4" id="status">
                    @if ($value)
                        <p>Actualización realizada con éxito</p>
                    @else
                        <p>Contraseña incorrecta</p>
                    @endif
                </div>
            @endsession
            <x-form.input label="Nombre" type="text" name="name" placeholder="Introduce tu nombre" :value="Auth::user()->name" />
            <x-form.input label="Correo electrónico" type="email" name="new-email" placeholder="Introduce tu correo"
                :value="Auth::user()->email" />
            <x-form.input :hidden="true" type="email" name="email" :value="Auth::user()->email" />
            <x-form.input label="Confirmar con contraseña" type="password" name="password"
                placeholder="Introduce tu contraseña" />
        </x-form.form>
    </div>
@endsection