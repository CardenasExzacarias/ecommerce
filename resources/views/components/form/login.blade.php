<x-form.form action="{{ $action }}" method="{{ $method }}">
    <x-form.title>
        {{ $title }}
    </x-form.title>
    <x-form.input label="Correo Electrónico" name="email" type="email" placeholder="Ingrese su correo electrónico"
        :value="isset($email) ? $email : ''" />
    <x-form.input label="Contraseña" name="password" :value="isset($password) ? $password : ''" type="password"
        placeholder="Ingrese su contraseña" />
    {{ $slot }}
</x-form.form>
