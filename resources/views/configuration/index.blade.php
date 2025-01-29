@vite(['resources/js/products/statusTime.js'])

@extends('layout')

@section('search', route('product.index'))

@section('title', 'Configuración')

@section('content')
    <div class="h-full w-full flex justify-center items-center">
        <x-form.login title="Registrar nuevo usuario" :action="route('login.attempt')" method="POST">

        </x-form.login>
    </div>
@endsection
