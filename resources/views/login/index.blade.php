@extends('login.layout')

@section('title', 'Inicio de sesión')

@section('content')
    <x-form.login title="Iniciar sesión" :action="route('login.attempt')" method="POST">
        <div class="text-end">
            <a class="text-sm hover:text-primary" href="{{ route('login.identify') }}">Olvidé mi contraseña</a>
        </div>
    </x-form.login>
@endsection
