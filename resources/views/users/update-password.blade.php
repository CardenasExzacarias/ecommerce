@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Configuración')

@section('content')
    <div class="h-full w-full flex justify-center items-center">
        <x-form.form title="Editar usuario" :action="route('user.update')" method="PATCH">
            <x-form.title>
                Actualizar contraseña
            </x-form.title>
            <x-form.input label="Nueva contraseña" type="password" name="password" placeholder="Introduce nueva contraseña" />
            <x-form.input label="Confirmar contraseña" type="password" name="password"
                placeholder="Confirmar nueva contraseña" />
        </x-form.form>
    </div>
@endsection
