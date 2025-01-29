@extends('login.layout')

@section('title', 'Inicio de sesión')

@section('content')
    <x-form.login title="Iniciar sesión" :action="route('login.attempt')" method="POST" />
@endsection
